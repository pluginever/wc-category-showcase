<?php

use WooCommerceCategoryShowcase\Plugin;

defined( 'ABSPATH' ) || exit;

/**
 * Get the plugin instance.
 *
 * @since 1.0.0
 * @return WooCommerceCategoryShowcase\Plugin
 */
function wc_category_showcase() {
	return Plugin::instance();
}

/**
 * Get the showcase data.
 *
 * @param array  $showcase The showcase data.
 * @param string $meta_key The meta key.
 *
 * @since 1.0.0
 * @return mixed|null
 */
function wccs_get_showcase_data( $showcase, $meta_key ) {
	if ( empty( $showcase ) || empty( $meta_key ) ) {
		return null;
	}

	return array_key_exists( $meta_key, $showcase ) ? $showcase[ $meta_key ] : null;
}
