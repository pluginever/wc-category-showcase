<?php

defined( 'ABSPATH' ) || exit;

/**
 * Get list table class.
 *
 * @param string $type Type of list table to get.
 *
 * @since 1.0.0
 * @return object
 */
function wccs_get_list_table( $type ) {
	switch ( $type ) {
		case 'category-showcase':
		default:
			$list_table = new \WooCommerceCategoryShowcase\Admin\ListTables\CategoryShowcaseListTable();
			break;
	}

	return $list_table;
}
