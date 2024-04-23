<?php

namespace WooCommerceCategoryShowcase\admin;

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
				'page_title' => __( 'Items', 'wp-ever-accounting' ),
				'menu_title' => __( 'Items', 'wp-ever-accounting' ),
				'capability' => 'manage_options',
				'menu_slug'  => 'eac-items',
				'page_hook'  => 'items',
			),
			array(
				'page_title' => __( 'Sales', 'wp-ever-accounting' ),
				'menu_title' => __( 'Sales', 'wp-ever-accounting' ),
				'capability' => 'manage_options',
				'menu_slug'  => 'eac-sales',
				'page_hook'  => 'sales',
				'tabs'       => array(
					'revenues'  => __( 'Revenues', 'wp-ever-accounting' ),
					'invoices'  => __( 'Invoices', 'wp-ever-accounting' ),
					'customers' => __( 'Customers', 'wp-ever-accounting' ),
				),
			),
			array(
				'page_title' => __( 'Expenses', 'wp-ever-accounting' ),
				'menu_title' => __( 'Expenses', 'wp-ever-accounting' ),
				'capability' => 'manage_options',
				'menu_slug'  => 'eac-expenses',
				'page_hook'  => 'expenses',
				'tabs'       => array(
					'payments' => __( 'Payments', 'wp-ever-accounting' ),
					'bills'    => __( 'Bills', 'wp-ever-accounting' ),
					'vendors'  => __( 'Vendors', 'wp-ever-accounting' ),
				),
			),
			array(
				'page_title' => __( 'Banking', 'wp-ever-accounting' ),
				'menu_title' => __( 'Banking', 'wp-ever-accounting' ),
				'capability' => 'manage_options',
				'menu_slug'  => 'eac-banking',
				'page_hook'  => 'banking',
				'tabs'       => array(
					'accounts'     => __( 'Accounts', 'wp-ever-accounting' ),
					'transactions' => __( 'Transactions', 'wp-ever-accounting' ),
					'transfers'    => __( 'Transfers', 'wp-ever-accounting' ),
					'currencies'   => __( 'Currencies', 'wp-ever-accounting' ),
				),
			),
			array(
				'page_title' => __( 'Tools', 'wp-ever-accounting' ),
				'menu_title' => __( 'Tools', 'wp-ever-accounting' ),
				'capability' => 'manage_options',
				'menu_slug'  => 'eac-tools',
				'page_hook'  => 'tools',
				'tabs'       => array(
					'import' => __( 'Import', 'wp-ever-accounting' ),
					'export' => __( 'Export', 'wp-ever-accounting' )
				),
			),
		);

		return apply_filters( 'starter_plugin_admin_menus', $menus );
	}

	/**
	 * Get page ids.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public static function get_screen_ids() {
		$screen_ids = array();

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

