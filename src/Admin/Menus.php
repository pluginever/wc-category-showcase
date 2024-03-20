<?php

namespace WooCommerceCategoryShowcase\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Admin class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Menus {

	/**
	 * Menus constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'main_menu' ) );
		add_action( 'admin_menu', array( $this, 'settings_menu' ), 100 );
		add_action( 'wc_category_showcase_category-showcase_content', array( $this, 'output_category_showcase_content' ) );
	}

	/**
	 * Main menu.
	 *
	 * @since 1.0.0
	 */
	public function main_menu() {
		add_menu_page(
			esc_html__( 'WC Category Showcase', 'wc-category-showcase' ),
			esc_html__( 'WC Category Showcase', 'wc-category-showcase' ),
			'manage_options',
			'wc-category-showcase',
			null,
			'dashicons-grid-view',
			'55.5'
		);

		add_submenu_page(
			'wc-category-showcase',
			esc_html__( 'All Category Showcase', 'wc-category-showcase' ),
			esc_html__( 'All Category Showcase', 'wc-category-showcase' ),
			'manage_options',
			'wc-category-showcase',
			array( $this, 'output_main_page' )
		);
	}

	/**
	 * Settings menu.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function settings_menu() {
		add_submenu_page(
			'wc-category-showcase',
			__( 'Settings', 'wc-category-showcase' ),
			__( 'Settings', 'wc-category-showcase' ),
			'manage_options',
			'wccs-settings',
			array( Settings::class, 'output' )
		);
	}

	/**
	 * Output main page.
	 *
	 * @since 1.0.0
	 */
	public function output_main_page() {
		$page_hook = 'category-showcase';
		include __DIR__ . '/views/admin-page.php';
	}

	/**
	 * Output category_showcases content.
	 *
	 * @since 1.0.0
	 */
	public function output_category_showcase_content() {
		$add_category_showcase  = isset( $_GET['new'] ) ? true : false; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$edit_category_showcase = isset( $_GET['edit'] ) ? absint( wp_unslash( $_GET['edit'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( $edit_category_showcase && ! wccs_get_category_showcase( $edit_category_showcase ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=wc-category-showcase' ) );
			exit();
		}

		if ( $add_category_showcase ) {
			include __DIR__ . '/views/add-category-showcase.php';
		} elseif ( $edit_category_showcase ) {
			include __DIR__ . '/views/edit-category-showcase.php';
		} else {
			include __DIR__ . '/views/list-category-showcase.php';
		}
	}
}
