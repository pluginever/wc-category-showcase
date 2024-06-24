<?php

namespace WooCommerceCategoryShowcase\Admin;

use WooCommerceCategoryShowcase\Admin\exportImport\Showcases;

/**
 * Class Actions.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Actions {
	/**
	 * Initialize the class.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// Export Import data.
		add_action( 'admin_post_wcc_showcase_export', array( __CLASS__, 'export_showcase_data' ) );
		add_action( 'admin_post_wcc_showcase_import', array( __CLASS__, 'import_showcase_data' ) );
	}

	/**
	 * Export showcase data.
	 *
	 * @since 1.1.6
	 * @return void
	 */
	public static function export_showcase_data() {
		check_admin_referer( 'wcc_showcase_export' );
		$posted = wp_unslash( $_POST );

		$exporter = new Showcases();
		$exporter->process_step( 1 );
		$exporter->export();

		wp_safe_redirect( wp_get_referer() );
		exit();
	}

	/**
	 * Import showcase data.
	 *
	 * @since 1.1.6
	 * @return void
	 */
	public static function import_showcase_data() {
		check_admin_referer( 'wcc_showcase_import' );
		$posted = wp_unslash( $_POST );

		// if export type not set, die.
		if ( empty( $export_type ) ) {
			wp_die( esc_html__( 'Import type not found!', 'wc-category-showcase' ) );
		}
	}
}
