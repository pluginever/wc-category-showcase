<?php
/**
 * Plugin Name: Product Category Showcase for WooCommerce
 * Plugin URI: https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 * Description: WooCommerce extension to showcase categories in interactive slider blocks.
 * Version:     2.0.0
 * Author:      PluginEver
 * Author URI:  https://pluginever.com
 * License:     GPLv2+
 * Text Domain: wc-category-showcase
 * Domain Path: /i18n/languages
 * Requires at least: 4.4
 * Tested up to: 6.1
 * WC requires at least: 3.0.0
 * WC tested up to: 7.1
 *
 * @package     WooCommerceCategoryShowcase
 * @author      pluginever
 * @link        https://pluginever.com/plugins/wc-min-max-quantities/
 */

/**
 * Copyright (c) 2017 PluginEver (email : support@pluginever.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


use WooCommerceCategoryShowcase\Plugin;

// don't call the file directly.
defined( 'ABSPATH' ) || exit();

// Autoload function.
spl_autoload_register(
	function ( $class_name ) {
		$prefix = 'WooCommerceCategoryShowcase\\';
		$len    = strlen( $prefix );

		// Bail out if the class name doesn't start with our prefix.
		if ( strncmp( $prefix, $class_name, $len ) !== 0 ) {
			return;
		}

		// Remove the prefix from the class name.
		$relative_class = substr( $class_name, $len );
		// Replace the namespace separator with the directory separator.
		$file = str_replace( '\\', DIRECTORY_SEPARATOR, $relative_class ) . '.php';

		// Look for the file in the src and lib directories.
		$file_paths = array(
			__DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $file,
			__DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . $file,
		);

		foreach ( $file_paths as $file_path ) {
			if ( file_exists( $file_path ) ) {
				require_once $file_path;
				break;
			}
		}
	}
);

/**
 * Plugin compatibility with WooCommerce HPOS
 *
 * @since 1.0.0
 * @return void
 */
add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	}
);


/**
 * Get the plugin instance.
 *
 * @since 1.0.0
 * @return Plugin
 */
function wc_category_showcase() { // phpcs:ignore
	$data = array(
		'file'         => __FILE__,
		'settings_url' => admin_url( 'admin.php?page=wc-category-showcase' ),
		'docs_url'     => 'https://pluginever.com/docs/wc-category-showcase/',
		'review_url'   => 'https://wordpress.org/support/plugin/wc-category-showcase/reviews/?filter=5#new-post',
	);

	return Plugin::create( $data );
}

// Initialize the plugin.
wc_category_showcase();
