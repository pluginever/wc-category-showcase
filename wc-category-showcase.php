<?php
/**
 * Plugin Name:          Product Category Showcase for WooCommerce
 * Plugin URI:           https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 * Description:          WooCommerce extension to showcase categories in interactive slider blocks.
 * Version:              2.0.5
 * Author:               PluginEver
 * Author URI:           https://pluginever.com
 * License:              GPLv2+
 * Text Domain:          wc-category-showcase
 * Domain Path:          /languages
 * Requires at least:    5.0.0
 * Tested up to:         6.5.5
 * Requires PHP:         8.0
 * WC requires at least: 6.0.0
 * WC tested up to:      9.1.2
 *
 * @package WooCommerceCategoryShowcase
 */

/**
 * Copyright (c) 2024 PluginEver (email : support@pluginever.com)
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

// Instantiate the plugin.
WooCommerceCategoryShowcase\Plugin::create(
	array(
		'file'         => __FILE__,
		'settings_url' => admin_url( 'admin.php?page=wc-category-showcase' ),
	)
);
