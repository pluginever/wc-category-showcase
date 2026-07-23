<?php

use PluginEver\CategoryShowcase\Plugin;

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wc_category_showcase' ) ) {
	/**
	 * Get the plugin instance.
	 *
	 * @since 1.0.0
	 * @return \PluginEver\CategoryShowcase\Plugin Plugin instance.
	 */
	function wc_category_showcase() {
		return Plugin::instance();
	}
}

if ( ! function_exists( 'wc_category_showcase_is_pro_active' ) ) {
	/**
	 * Whether the Pro add-on is active.
	 *
	 * @since 1.0.0
	 * @return bool True when the Pro add-on is active.
	 */
	function wc_category_showcase_is_pro_active(): bool {
		return wc_category_showcase()->is_pro_active();
	}
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
