<?php

namespace WooCommerceCategoryShowcase;

defined( 'ABSPATH' ) || exit;

/**
 * Class Plugin.
 *
 * @since 1.2.1
 * @package WooCommerceCategoryShowcase
 */
final class Plugin extends ByteKit\Plugin {
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
		define( 'WC_CATEGORY_SHOWCASE_VERSION', $this->get_version() );
		define( 'WC_CATEGORY_SHOWCASE_FILE', $this->get_file() );
		define( 'WC_CATEGORY_SHOWCASE_PATH', $this->get_dir_path() . '/' );
		define( 'WC_CATEGORY_SHOWCASE_ASSETS_URL', $this->get_assets_url() );
		define( 'WC_CATEGORY_SHOWCASE_TEMPLATES_URL', $this->get_dir_path() . 'templates/' );
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
		add_action( 'plugins_loaded', array( $this, 'on_init' ), 0 );
		add_action( 'before_woocommerce_init', array( $this, 'on_before_woocommerce_init' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
	}

	/**
	 * Run on before WooCommerce init.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function on_before_woocommerce_init() {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', $this->get_file(), true );
		}
	}

	/**
	 * Run on init.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function on_init() {
		new Shortcodes\Shortcodes();

		// Admin classes.
		if ( is_admin() ) {
			$this->set(
				array(
					Admin\Admin::class,
					Admin\Menus::class,
				)
			);
		}

		/**
		 * Fires when the plugin is initialized.
		 *
		 * @since 1.0.0
		 */
		do_action( 'wc_category_showcase_init' );
	}

	/**
	 * register scripts.
	 *
	 * @since 1.
	 * @retun void
	 */
	public function register_scripts() {
		$this->scripts->register_style( 'wcc-showcase-showcase', 'css/showcase.css' );
		$this->scripts->register_script( 'wcc-showcase-splide', '/js/splide.js' );
		$this->scripts->register_script( 'wcc-showcase-splide-grid', '/js/splide-extension-grid.js' );
		$this->scripts->register_script( 'wcc-showcase-splide-auto-scroll', '/js/splide-extension-auto-scroll.js' );
		$this->scripts->register_script( 'wcc-showcase-showcase', '/js/showcase.js', array( 'jquery', 'wcc-showcase-splide', 'wcc-showcase-splide-grid', 'wcc-showcase-splide-auto-scroll' ), true );
	}
}
