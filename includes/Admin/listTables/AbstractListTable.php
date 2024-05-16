<?php

namespace WooCommerceCategoryShowcase\Admin\listTables;

defined( 'ABSPATH' ) || exit();

// Load WP_List_Table if not loaded.
if ( ! class_exists( '\WP_List_Table' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}

/**
 * List table class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
abstract class AbstractListTable extends \WP_List_Table {

	/**
	 * Tab Post
	 *
	 * @var object
	 */
	public $items;

	/**
	 * Total count
	 *
	 * @var int
	 */
	public $total_count;

	/**
	 * Total pages count
	 *
	 * @var int
	 */
	public $total_pages;

	/**
	 * Process bulk action.
	 *
	 * @param string $doaction Action name.
	 *
	 * @since 1.0.0
	 */
	public function process_bulk_actions( $doaction ) {
		if ( ! empty( $_GET['_wp_http_referer'] ) || ! empty( $_GET['_wpnonce'] ) ) { // phpcs:ignore
			wp_safe_redirect(
				remove_query_arg(
					array(
						'_wp_http_referer',
						'_wpnonce',
					),
					wp_unslash( $_SERVER['REQUEST_URI'] ) // phpcs:ignore
				)
			);
			exit;
		}
	}

	/**
	 * This function renders most of the columns in the list table.
	 *
	 * @param Object|array $item The current item.
	 * @param string       $column_name The name of the column.
	 *
	 * @since 1.0.0
	 * @return string The column value.
	 */
	public function column_default( $item, $column_name ) {

		if ( is_object( $item ) && method_exists( $item, "get_$column_name" ) ) {
			$getter = "get_$column_name";

			return empty( $item->$getter( 'view' ) ) ? '&mdash;' : esc_html( $item->$getter( 'view' ) );
		} elseif ( is_array( $item ) && isset( $item[ $column_name ] ) ) {
			return empty( $item[ $column_name ] ) ? '&mdash;' : esc_html( $item[ $column_name ] );
		}

		return '&mdash;';
	}
}
