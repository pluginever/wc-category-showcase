<?php

namespace WooCommerceCategoryShowcase\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Utilities class.
 *
 * @since 2.2.0
 * @package WooCommerceCategoryShowcase\Admin
 */
class Utilities {
	/**
	 * Get page ids.
	 *
	 * @since 2.2.0
	 * @return array
	 */
	public static function get_screen_ids() {
		$screen_ids = array(
			'toplevel_page_wc-category-showcase',
			'wc-showcases_page_wc-category-showcase-settings',
		);

		return $screen_ids;
	}
}
