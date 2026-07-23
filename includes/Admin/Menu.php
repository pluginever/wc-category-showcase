<?php

namespace PluginEver\CategoryShowcase\Admin;

use PluginEver\CategoryShowcase\B8\Component;
use PluginEver\CategoryShowcase\Controllers\Helpers;

defined( 'ABSPATH' ) || exit;

/**
 * Handles the admin menu.
 *
 * @since   1.0.0
 * @package PluginEver\CategoryShowcase\Admin
 */
class Menu extends Component {

	/**
	 * Registered screen IDs.
	 *
	 * @since 1.0.0
	 * @var array<int, string>
	 */
	protected array $screen_ids = array();

	/**
	 * Parent menu slug.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	const PARENT_SLUG = 'wc-category-showcase';

	/**
	 * Register hooks.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register(): void {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'wc_category_showcase_settings_export-import', array( $this, 'export_import_tab_render' ) );
		add_action( 'wc_category_showcase_list-table', array( $this, 'showcase_list_render' ) );
	}

	/**
	 * Register the admin menu.
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

		$this->screen_ids[] = 'toplevel_page_wc-category-showcase';
	}

	/**
	 * Render menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function render_menu() {
		$page_hook = 'list-table';
		include WCCS_PATH . 'templates/admin/admin-page.php';
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
			include WCCS_PATH . 'templates/admin/add-category-showcase.php';
		} elseif ( $post_id ) {
			include WCCS_PATH . 'templates/admin/add-category-showcase.php';
		} else {
			include WCCS_PATH . 'templates/admin/list-category-showcase.php';
		}
	}

	/**
	 * Output export/import tab page.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function export_import_tab_render() {
		include WCCS_PATH . 'templates/admin/settings/export-import.php';
	}

	/**
	 * Get the screen ids.
	 *
	 * @since 1.0.0
	 * @return array<int, string> Screen IDs.
	 */
	public function get_screen_ids(): array {
		return $this->screen_ids;
	}
}
