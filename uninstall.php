<?php
/**
 * WC Category Showcase Uninstall
 *
 * Uninstalling WC Category Showcase deletes user roles, pages, tables, and options.
 *
 * @package     WooCommerceCategoryShowcase
 */

defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

// remove all the options starting with wc_category_showcase.
$delete_all_options = get_option( 'wc_category_showcase_delete_data' );
if ( empty( $delete_all_options ) ) {
	return;
}
// Delete all the options.
global $wpdb;
$wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE 'wc_category_showcase%';" ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching
