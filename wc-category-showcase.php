<?php
/**
 * Plugin Name:          Product Category Showcase for WooCommerce
 * Plugin URI:           https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 * Description:          WooCommerce extension to showcase categories in interactive slider blocks.
 * Version:              2.0.6
 * Author:               PluginEver
 * Author URI:           https://pluginever.com
 * License:              GPL v2 or later
 * License URI:          https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:          wc-category-showcase
 * Domain Path:          /i18n/languages
 * Requires Plugins:     woocommerce
 * Requires at least:    5.2
 * Tested up to:         6.6
 * Requires PHP:         7.4
 * WC requires at least: 6.0
 * WC tested up to:      9.3
 */

/**
 * Copyright (c) 2024 PluginEver (email : support@pluginever.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main initiation class
 *
 * @since 1.0.0
 */
class WC_Category_Showcase {

	/**
	 * Add-on Version
	 *
	 * @since 1.0.0
	 * @var  string
	 */
	public $version = '2.0.3';

	/**
	 * admin notices
	 *
	 * @since 1.0.0
	 *
	 * @var array
	 */
	protected $notices = array();

	/**
	 * The single instance of the class.
	 *
	 * @since 1.0.8
	 * @var WC_Category_Showcase
	 */
	protected static $instance = null;

	/**
	 * @since 1.0.0
	 *
	 * @var string
	 */
	public $plugin_name = 'WooCommerce Category Showcase';

	/**
	 * Constructor for the class
	 *
	 * Sets up all the appropriate hooks and actions
	 *
	 * @since 1.0.0
	 *

	 */
	public function __construct() {
		// Localize our plugin
		add_action( 'init', [ $this, 'localization_setup' ] );

		// on activate plugin register hook
		register_activation_hook( __FILE__, array( $this, 'install' ) );

		// on deactivate plugin register hook
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );

		add_action( 'admin_notices', array( $this, 'admin_notices' ), 15 );
		add_action( 'admin_init', array( $this, 'plugin_upgrades' ) );

		if ( $this->is_plugin_compatible() ) {
			$this->define_constants();
			$this->includes();
			$this->init_actions();
			$this->init_plugin();

			do_action( 'wc_category_showcase' );
		}

	}

	/**
	 * Plugin URL getter.
	 *
	 * @return string
	 * @since 1.0.0
	 */
	public function plugin_url() {
		return untrailingslashit( plugins_url( '/', __FILE__ ) );
	}

	/**
	 * Plugin path getter.
	 *
	 * @return string
	 * @since 1.0.0
	 */
	public function plugin_path() {
		return untrailingslashit( plugin_dir_path( __FILE__ ) );
	}

	/**
	 * Plugin base path name getter.
	 *
	 * @return string
	 * @since 1.2.0
	 */
	public function plugin_basename() {
		return plugin_basename( __FILE__ );
	}

	/**
	 * Initialize plugin for localization
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	public function localization_setup() {
		load_plugin_textdomain( 'wc-category-showcase', false, plugin_basename( dirname( __FILE__ ) ) . '/i18n/languages' );
	}

	/**
	 * Executes during plugin activation
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	function install() {
		//save install date
		if ( false == get_option( 'wccs_install_date' ) ) {
			update_option( 'wccs_install_date', current_time( 'timestamp' ) );
		}


	}

	/**
	 * Executes during plugin deactivation
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	function deactivate() {

	}

	/**
	 * Determines if the plugin compatible.
	 *
	 * @return bool
	 * @since 1.0.0
	 *
	 */
	protected function is_plugin_compatible() {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			$message = sprintf( '<strong>WooCommerce Category Showcase</strong> requires <strong>WooCommerce</strong> installed and activated. Please install %s WooCommerce. %s', '<a href="https://wordpress.org/plugins/woocommerce/" target="_blank">', '</a>' );
			$this->add_notice( 'error', $message );

			return false;
		}

		return true;
	}

	/**
	 * Adds an admin notice to be displayed.
	 *
	 * @param string $class the notice class
	 * @param string $message the notice message body
	 *
	 * @since 1.0.0
	 *
	 */
	public function add_notice( $class, $message ) {

		$notices = get_option( sanitize_key( $this->plugin_name ), [] );
		if ( is_string( $message ) && is_string( $class ) && ! wp_list_filter( $notices, array( 'message' => $message ) ) ) {

			$notices[] = array(
				'message' => $message,
				'class'   => $class
			);

			update_option( sanitize_key( $this->plugin_name ), $notices );
		}

	}

	/**
	 * Displays any admin notices added
	 *
	 * @since 1.0.0
	 * @internal
	 *
	 */
	public function admin_notices() {
		$notices = (array) array_merge( $this->notices, get_option( sanitize_key( $this->plugin_name ), [] ) );
		foreach ( $notices as $notice_key => $notice ) :
			?>
			<div class="notice notice-<?php echo sanitize_html_class( $notice['class'] ); ?>">
				<p><?php echo wp_kses( $notice['message'], array(
						'a'      => array( 'href' => array() ),
						'strong' => array()
					) ); ?></p>
			</div>
			<?php
			update_option( sanitize_key( $this->plugin_name ), [] );
		endforeach;
	}

	/**
	 * Define constants
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	private function define_constants() {
		define( 'PLVR_WCCS_VERSION', $this->version );
		define( 'PLVR_WCCS_FILE', __FILE__ );
		define( 'PLVR_WCCS_PATH', dirname( PLVR_WCCS_FILE ) );
		define( 'PLVR_WCCS_INCLUDES', PLVR_WCCS_PATH . '/includes' );
		define( 'PLVR_WCCS_ADMIN_PATH', PLVR_WCCS_PATH . '/admin' );
		define( 'PLVR_WCCS_ADMIN_ASSETS', plugins_url( 'admin/assets', PLVR_WCCS_ADMIN_PATH ) );
		define( 'PLVR_WCCS_URL', plugins_url( '', PLVR_WCCS_FILE ) );
		define( 'PLVR_WCCS_ASSETS', PLVR_WCCS_URL . '/assets' );
		define( 'PLVR_WCCS_VIEWS', PLVR_WCCS_PATH . '/views' );
		define( 'PLVR_WCCS_TEMPLATES_DIR', PLVR_WCCS_PATH . '/templates' );
	}

	/**
	 * Include required files
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	private function includes() {
		require PLVR_WCCS_INCLUDES . '/functions.php';
		require PLVR_WCCS_INCLUDES . '/custom-cp.php';
		require PLVR_WCCS_INCLUDES . '/class-shortcode.php';
		require PLVR_WCCS_INCLUDES . '/metabox/class-metabox.php';
		require PLVR_WCCS_ADMIN_PATH . '/class-admin.php';
		require PLVR_WCCS_ADMIN_PATH . '/class-metabox.php';
		require PLVR_WCCS_INCLUDES . '/class-promotion.php';
	}

	/**
	 * Do plugin upgrades
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	function plugin_upgrades() {

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		require_once dirname( __FILE__ ) . '/includes/class-upgrades.php';

		$upgrader = new WCCS_Upgrades();

		if ( $upgrader->needs_update() ) {
			$upgrader->perform_updates();
		}
	}

	/**
	 * Determines if the pro version installed.
	 *
	 * @return bool
	 * @since 1.0.0
	 *
	 */
	public static function is_pro_installed() {
		$status = false;
		if ( is_plugin_active( 'wc-category-showcase-pro/wc-category-showcase-pro.php' ) || is_plugin_active( 'woocommerce-category-showcase-pro/wc-category-showcase-pro.php' ) ) {
			$status = true;
		}

		return $status;
	}

	/**
	 * Init Hooks
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	private function init_actions() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $this, 'plugin_action_links' ) );

	}

	/**
	 * Instantiate classes
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	private function init_plugin() {
		new \Pluginever\WCCS\Shortcode();
		new \Pluginever\WCCCS\Metabox();
	}

	/**
	 * Add all the assets required by the plugin
	 *
	 * @return void
	 * @since 1.0.0
	 *
	 */
	function load_assets() {
		wp_register_style( 'wc-category-showcase', PLVR_WCCS_ASSETS . "/css/wc-category-showcase.css", [], gmdate( 'i' ) );
		wp_register_script( 'wc-category-showcase', PLVR_WCCS_ASSETS . "/js/bundle.min.js", [ 'jquery' ], gmdate( 'i' ), true );
		wp_localize_script( 'wc-category-showcase', 'jsobject', [ 'ajaxurl' => admin_url( 'admin-ajax.php' ) ] );
		wp_enqueue_style( 'wc-category-showcase' );
		wp_enqueue_script( 'wc-category-showcase' );
	}


	/**
	 * @param $links
	 *
	 * @return array
	 */
	public function plugin_action_links( $links ) {

		$doc_link     = 'https://www.pluginever.com/docs/woocommerce-category-showcase/';
		$docs_links = array(
			'documentation' => '<a target="_blank" href="' . $doc_link . '" title="' . esc_attr( __( 'View Plugin\'s Documentation', 'wc-category-showcase' ) ) . '">' . __( 'Documentation', 'wc-category-showcase' ) . '</a>',
		);

		$links = array_merge( $docs_links, $links );
		if ( ! $this->is_pro_installed() ) {
			$upgrade_links = array(
				'upgrade' => '<a target="_blank" href="https://www.pluginever.com/plugins/woocommerce-category-showcase-pro/" title="' . esc_attr( __( 'Go Pro', 'wc-category-showcase' ) ) . '" style="color:red;font-weight:bold;">' . __( 'Go Pro', 'wc-category-showcase' ) . '</a>',
			);

			$links = array_merge( $links, $upgrade_links );
		}


		return $links;
	}

	/**
	 * Throw error on object clone
	 *
	 * The whole idea of the singleton design pattern is that there is a single
	 * object therefore, we don't want the object to be cloned.
	 *
	 * @access protected
	 * @return void
	 */
	public function __clone() {
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'wc-category-showcase' ), '1.0.0' );
	}

	/**
	 * Disable unserializing of the class
	 *
	 * @access protected
	 * @return void
	 */
	public function __wakeup() {
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'wc-category-showcase' ), '1.0.0' );
	}


	/**
	 * Returns the plugin loader main instance.
	 *
	 * @return \WC_Category_Showcase
	 * @since 1.0.0
	 */
	public static function instance() {

		if ( null === self::$instance ) {

			self::$instance = new self();
		}

		return self::$instance;
	}

}

/**
 * Plugin compatibility with WooCommerce HPOS
 *
 * @since 1.0.0
 * @return void
 */
add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'cart_checkout_blocks', __FILE__, true );
		}
	}
);

/**
 * Fire of the plugin
 * since 1.0.0
 * @return object
 */
function wc_category_showcase() {
	return WC_Category_Showcase::instance();
}

wc_category_showcase();
