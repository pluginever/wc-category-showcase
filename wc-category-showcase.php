<?php
/**
 * Plugin Name: WooCommerce Category Showcase
 * Plugin URI:  http://pluginever.com
 * Description: The best WordPress plugin ever made!
 * Version:     0.1.0
 * Author:      PluginEver
 * Author URI:  http://pluginever.com
 * Donate link: http://pluginever.com
 * License:     GPLv2+
 * Text Domain: wc-category-showcase
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2017 PluginEver (email : support@pluginever.com)
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
if ( !defined( 'ABSPATH' ) ) exit;
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
	public $version = '1.0.0';

	/**
	 * Initializes the class
	 *
	 * Checks for an existing instance
	 * and if it does't find one, creates it.
	 *
	 * @since 1.0.0
	 *
	 * @return object Class instance
	 */
	public static function init() {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
		}

		return $instance;
	}

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

		// Define constants
		$this->define_constants();

		// Include required files
		$this->includes();

		// Initialize the action hooks
		$this->init_actions();

		// instantiate classes
		$this->instantiate();

		// Loaded action
		do_action( 'wc_category_showcase' );
	}

	/**
	 * Initialize plugin for localization
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function localization_setup() {
		$locale = apply_filters( 'plugin_locale', get_locale(), 'wc_category_showcase' );
		load_textdomain( 'wc-category-showcase', WP_LANG_DIR . '/wc-category-showcase/wc-category-showcase-' . $locale . '.mo' );
		load_plugin_textdomain( 'wc-category-showcase', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Executes during plugin activation
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function install() {


	}

	/**
	 * Executes during plugin deactivation
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function deactivate() {

	}

	/**
	 * Define constants
	 *
	 * @since 1.0.0
	 *
	 * @return void
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
	 * @since 1.0.0
	 *
	 * @return void
	 */
	private function includes( ) {
		require PLVR_WCCS_INCLUDES .'/functions.php';
		require PLVR_WCCS_INCLUDES .'/custom-cp.php';
		require PLVR_WCCS_INCLUDES .'/class-shortcode.php';

		if( is_admin() ){
		    require  PLVR_WCCS_ADMIN_PATH . '/class-admin.php';
        }
	}

	/**
	 * Init Hooks
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	private function init_actions() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_assets') );
	}

	/**
	 * Instantiate classes
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	private function instantiate() {
        new \Pluginever\WCCS\Shortcode();
	}

	/**
	 * Add all the assets required by the plugin
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function load_assets(){
		$suffix = ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ? '' : '.min';
		wp_register_style('wc-category-showcase', PLVR_WCCS_ASSETS."/css/wc-category-showcase{$suffix}.css", [], date('i'));
		wp_register_script('wc-category-showcase', PLVR_WCCS_ASSETS."/js/wc-category-showcase{$suffix}.js", ['jquery'], date('i'), true);
		wp_localize_script('wc-category-showcase', 'jsobject', ['ajaxurl' => admin_url( 'admin-ajax.php' )]);
		wp_enqueue_style('wc-category-showcase');
		wp_enqueue_script('wc-category-showcase');
	}


}

// init our class
$GLOBALS['WC_Category_Showcase'] = new WC_Category_Showcase();

/**
 * Grab the $WC_Category_Showcase object and return it
 */
function wc_category_showcase() {
	global $WC_Category_Showcase;
	return $WC_Category_Showcase;
}
