<?php

namespace WooCommerceCategoryShowcase;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

/**
 * Class Plugin.
 *
 * @since 1.2.1
 * @package WooCommerceCategoryShowcase
 */
final class Plugin extends \WooCommerceCategoryShowcase\ByteKit\Plugin {

	/**
	 * Plugin constructor.
	 *
	 * @param array $data The plugin data.
	 *
	 * @since 1.0.0
	 */
	protected function __construct( $data ) {
		parent::__construct( $data );
		$this->define_constants();
		$this->includes();
		$this->init_hooks();
	}

	/**
	 * Define constants.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function define_constants() {
		define( 'WCCS_VERSION', $this->get_version() );
		define( 'WCCS_FILE', $this->get_file() );
		define( 'WCCS_PATH', $this->get_dir_path() . '/' );
		define( 'WCCS_ASSETS_URL', $this->get_assets_url() );
		define( 'WCCS_TEMPLATES_URL', $this->get_dir_path() . 'templates/' );
	}

	/**
	 * Include required files.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function includes() {
		require_once __DIR__ . '/functions.php';
	}

	/**
	 * Hook into actions and filters.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function init_hooks() {
		register_activation_hook( $this->get_file(), array( Installer::class, 'install' ) );
		add_action( 'plugins_loaded', array( $this, 'on_init' ), 0 );
		add_filter( 'plugin_action_links_' . plugin_basename( $this->get_file() ), array( $this, 'plugin_action_links' ) );
		add_action( 'before_woocommerce_init', array( $this, 'on_before_woocommerce_init' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );

		// Admin notice for WooCommerce Category Showcase Pro plugin dependency.
		if ( $this->is_plugin_active( 'woocommerce-category-showcase-pro/wc-category-showcase-pro.php' ) ) {
			add_action( 'admin_notices', array( $this, 'dependency_notice' ) );
		}
	}

	/**
	 * Dependency notice.
	 * Show notice if WooCommerce Category Showcase Pro plugin is not active.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public function dependency_notice() {

		if ( ! defined( 'WCCSP_VERSION' ) ) {
			return;
		}

		// Compare the versions. WCCSP_VERSION is lower than 2.0.0.
		if ( version_compare( WCCSP_VERSION, '2.0.0', '<' ) ) {
			?>
			<div class="notice notice-error is-dismissible">
				<p>
					<?php
					echo wp_kses_post(
						sprintf(
							/* translators: %s: plugin name */
							__( 'You are currently using %s. Please update to version 2.0.0 or higher to use WooCommerce Category Showcase with WooCommerce Category Showcase Pro.', 'wc-category-showcase' ),
							'<a href="https://pluginever.com/plugins/woocommerce-category-showcase-pro/?utm_source=plugin&utm_medium=plugin-action-link&utm_campaign=update-to-pro" target="_blank"><strong>' . esc_html__( 'WooCommerce Category Showcase Pro', 'wc-category-showcase' ) . '</strong></a>'
						)
					);
					?>
				</p>
			</div>
			<?php
		}
	}

	/**
	 * Add plugin action links.
	 * Add Go Pro link to plugin action links.
	 *
	 * @since 1.0.0
	 * @param array $links The plugin action links.
	 * @return array
	 */
	public function plugin_action_links( $links ) {
		if ( ! defined( 'WCCS_PRO_VERSION' ) ) {
			$links[] = '<a href="' . esc_url( trailingslashit( wc_category_showcase()->plugin_uri ) . '?utm_source=plugin&utm_medium=plugin-action-link&utm_campaign=go-pro' ) . '" target="_blank" style="color: orangered;">' . esc_html__( 'Go Pro', 'wc-category-showcase' ) . '</a>';
		}

		return $links;
	}

	/**
	 * Run on before WooCommerce init.
	 * Declare compatibility with WooCommerce features.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function on_before_woocommerce_init() {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', $this->get_file(), true );
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'cart_checkout_blocks', $this->get_file(), true );
		}
	}

	/**
	 * Run on init.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function on_init() {
		// Common classes.
		$this->set( Installer::class );
		$this->set( PostTypes::class );
		$this->set( Shortcodes\Shortcodes::class );

		// Admin classes.
		if ( is_admin() ) {
			$this->set( Admin\Admin::class );
			$this->set( Admin\Menus::class );
			$this->set( Admin\Notices::class );
		}

		/**
		 * Fires when the plugin is initialized.
		 *
		 * @since 1.0.0
		 */
		do_action( 'wc_category_showcase_init' );
	}

	/**
	 * Register scripts.
	 *
	 * @since 1.0.0
	 * @retun void
	 */
	public function register_scripts() {
		$this->scripts->register_style( 'wcc-showcase-fontawesome-icons', '/fonts/fontawesome/fontawesome-icons.css' );
		$this->scripts->register_style( 'wcc-showcase-happy-icons', '/fonts/happy-icons/happy-icons.css' );
		$this->scripts->register_style( 'wcc-showcase-vendor', '/styles/vendor.css' );
		$this->scripts->register_script( 'wcc-showcase-vendor', '/scripts/vendor.js', array( 'jquery' ), true );

		// Common styles and scripts.
		$this->scripts->register_style( 'wcc-showcase-showcase', '/styles/frontend.css', array( 'wcc-showcase-vendor', 'wcc-showcase-fontawesome-icons', 'wcc-showcase-happy-icons' ) );
		$this->scripts->register_script( 'wcc-showcase-showcase', '/scripts/frontend.js', array( 'jquery', 'wcc-showcase-vendor' ), true );
	}
}
