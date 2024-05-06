<?php

namespace WooCommerceCategoryShowcase\Controllers;

defined( 'ABSPATH' ) || exit;

/**
 * Helpers class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Helpers {
	/**
	 * Helpers constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// TODO: code will be write here.
	}

	/**
	 * Get category title.
	 *
	 * @param \WP_Term| int $category Category title.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public static function get_category_title( $category ) {
		$category = get_term( $category );
		if ( $category && ! is_wp_error( $category ) ) {
			return sprintf(
				'(#%1$s) %2$s',
				$category->term_id,
				html_entity_decode( $category->name )
			);
		}
		return null;
	}
}
