<?php

namespace WooCommerceCategoryShowcase;

/**
 * Class Plugin.
 *
 * @since 1.2.1
 * @package WooCommerceCategoryShowcase
 */
class Plugin extends \ByteKit\Core\Plugin {
	/**
	 * Plugin constructor.
	 *
	 * @param array $data The plugin data.
	 *
	 * @since 1.0.0
	 */
	protected function __construct( $data ) {
//		$this->container['installer'] = Installer::create( $this );
		$data['id'] = 'wccs';
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
		$upload_dir = wp_upload_dir( null, false );

		define( 'WCCS_VERSION', $this->get_version() );
		define( 'WCCS_PLUGIN_FILE', $this->get_file() );
		define( 'WCCS_PLUGIN_BASENAME', $this->get_basename() );
		define( 'WCCS_PLUGIN_PATH', $this->get_dir_path() . '/' );
		define( 'WCCS_PLUGIN_URL', $this->get_dir_url() . '/' );
		define( 'WCCS_UPLOADS_BASEDIR', $upload_dir['basedir'] . '/eac/' );
		define( 'WCCS_UPLOADS_DIR', $upload_dir['basedir'] . '/eac/' );
		define( 'WCCS_UPLOADS_URL', $upload_dir['baseurl'] . '/eac/' );
		define( 'WCCS_LOG_DIR', $upload_dir['basedir'] . '/eac-logs/' );
		define( 'WCCS_ASSETS_URL', $this->get_assets_url() . '/' );
		define( 'WCCS_ASSETS_DIR', $this->get_assets_path() . '/' );
		define( 'WCCS_TEMPLATES_DIR', $this->get_template_path() . '/' );
	}

	/**
	 * Include required files.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function includes() {
//		require_once __DIR__ . '/functions.php';
	}

	/**
	 * Hook into actions and filters.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function init_hooks() {
		register_activation_hook( $this->get_file(), array( $this, 'on_activation' ) );
		add_action( 'plugins_loaded', array( $this, 'on_init' ), 0 );
	}

	/**
	 * Run on activation.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function on_activation() {
		$this->installer()->install();
	}

	/**
	 * Run on init.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function on_init() {
		if ( $this->is_request( 'admin' ) ) {
			new Admin\Admin();
		}

		/**
		 * Fires when the plugin is initialized.
		 *
		 * @since 1.0.0
		 */
		do_action( 'wc_category_showcase_init' );
	}
}
