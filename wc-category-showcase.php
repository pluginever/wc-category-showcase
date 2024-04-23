<?php
/**
 * Plugin Name: Product Category Showcase for WooCommerce
 * Plugin URI: https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 * Description: WooCommerce extension to showcase categories in interactive slider blocks.
 * Version:     2.0.4
 * Author:      PluginEver
 * Author URI:  https://pluginever.com
 * License:     GPLv2+
 * Text Domain: wc-category-showcase
 * Domain Path: /i18n/languages
 * Requires at least: 4.4
 * Tested up to: 6.5
 * WC requires at least: 3.0.0
 * WC tested up to: 8.8
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

defined( 'ABSPATH' ) || exit();

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Plugin compatibility with WooCommerce HPOS
 *
 * @return void
 * @since 1.0.0
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
 * Main instance of WooCommerceCategoryShowcase.
 *
 * Returns the main instance of WooCommerceCategoryShowcase to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return WooCommerceCategoryShowcase\Plugin
 */
function wc_category_showcase() {
	return WooCommerceCategoryShowcase\Plugin::create( __FILE__ );
}

// Instantiate the plugin.
wc_category_showcase();



