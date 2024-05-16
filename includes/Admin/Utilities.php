<?php

namespace WooCommerceCategoryShowcase\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Utilities class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase\Admin
 */
class Utilities {
	/**
	 * Get admin menus.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public static function get_menus() {
		$menus = array(
			array(
				'page_title' => __( 'Settings', 'wc-category-showcase' ),
				'menu_title' => __( 'Settings', 'wc-category-showcase' ),
				'capability' => 'manage_options',
				'menu_slug'  => 'wcc_showcase-items',
				'page_hook'  => 'settings',
			),
		);

		return apply_filters( 'wc_category_showcase_admin_menus', $menus );
	}

	/**
	 * Get page ids.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public static function get_screen_ids() {
		$screen_ids = array(
			'toplevel_page_wc-category-showcase',
		);

		foreach ( self::get_menus() as $page ) {
			$screen_ids[] = Menus::PARENT_SLUG . '_page_' . $page['menu_slug'];
		}

		return $screen_ids;
	}

	/**
	 * Determine if current page is add screen.
	 *
	 * @since 1.0.0
	 * @return bool
	 */
	public static function is_add_screen() {
		return isset( $_GET['add'] ) ? true : false; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	}

	/**
	 * Determine if current page is edit screen.
	 *
	 * @since 1.0.0
	 * @return false|int False if not edit screen, id if edit screen.
	 */
	public static function is_edit_screen() {
		return filter_input( INPUT_GET, 'edit', FILTER_VALIDATE_INT );
	}
}
