<?php

namespace WooCommerceCategoryShowcase\Admin;

use WooCommerceCategoryShowcase\Controllers\Helpers;

defined( 'ABSPATH' ) || exit;

/**
 * Menus class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase\Admin
 */
class Menus {

	/**
	 * Parent menu slug.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	const PARENT_SLUG = 'wc-category-showcase';

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'wc_category_showcase_settings_export-import', array( $this, 'export_import_tab_render' ) );
		add_action( 'wc_category_showcase_list-table', array( $this, 'showcase_list_render' ) );
	}

	/**
	 * Add admin menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function admin_menu() {
		add_menu_page(
			__( 'WC Showcase', 'wc-category-showcase' ),
			__( 'WC Showcases', 'wc-category-showcase' ),
			'manage_options',
			self::PARENT_SLUG,
			null,
			'dashicons-admin-generic',
			56
		);

		add_submenu_page(
			self::PARENT_SLUG,
			esc_html__( 'All Showcases', 'wc-category-showcase' ),
			esc_html__( 'All Showcases', 'wc-category-showcase' ),
			'manage_options',
			self::PARENT_SLUG,
			array( $this, 'render_menu' )
		);

		add_submenu_page(
			self::PARENT_SLUG,
			'Add New Showcase',
			'Add New Showcase',
			'manage_options',
			'wccs_add_new_showcase',
			function () {
				wp_safe_redirect( 'admin.php?page=wc-category-showcase&add' );
				exit;
			}
		);

		// phpcs:disable
		/*
		add_submenu_page(
			self::PARENT_SLUG,
			esc_html__( 'Settings', 'wc-category-showcase' ),
			esc_html__( 'Settings', 'wc-category-showcase' ),
			'manage_options',
			'wccs-settings',
			array( $this, 'output_tab_settings_page' )
		);
		*/
		// phpcs:enable

		// Add a Documentation page.
		add_submenu_page(
			self::PARENT_SLUG,
			esc_html__( 'Documentation', 'wc-category-showcase' ),
			esc_html__( 'Documentation', 'wc-category-showcase' ),
			'manage_options',
			'wccs-documentation',
			function () {
				wp_redirect( 'https://pluginever.com/docs/wc-category-showcase/' ); // phpcs:ignore WordPress.Security.SafeRedirect.wp_redirect_wp_redirect
				exit;
			}
		);
	}

	/**
	 * Render menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function render_menu() {
		$page_hook = 'list-table';
		include __DIR__ . '/views/admin-page.php';
	}

	/**
	 * Output list table page.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function showcase_list_render() {
		wp_verify_nonce( '_nonce' );
		$add              = isset( $_GET['add'] ) ? true : false;
		$post_id          = isset( $_GET['edit'] ) ? absint( wp_unslash( $_GET['edit'] ) ) : '';
		$showcase_details = Helpers::get_showcase_settings( $post_id );
		if ( $add ) {
			include __DIR__ . '/views/add-category-showcase.php';
		} elseif ( $post_id ) {
			include __DIR__ . '/views/add-category-showcase.php';
		} else {
			include __DIR__ . '/views/list-category-showcase.php';
		}
	}

	/**
	 * Output settings page.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function output_tab_settings_page() {
		$page_hook = 'settings';
		$tabs      = array(
			'general'       => __( 'General', 'wc-category-showcase' ),
			'documentation' => __( 'Documentation', 'wc-category-showcase' ),
		);
		include __DIR__ . '/views/admin-page.php';
	}

	/**
	 * Output export/import tab page.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function export_import_tab_render() {
		include __DIR__ . '/views/settings/export-import.php';
	}
}
