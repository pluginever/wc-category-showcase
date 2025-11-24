<?php
/**
 * Plugin Name:          Category Showcase
 * Plugin URI:           https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 * Description:          WooCommerce extension to showcase categories in various styles and layouts like sliders, blocks, and grids.
 * Version:              2.2.7
 * Requires at least:    5.2
 * Requires PHP:         7.4
 * Author:               PluginEver
 * Author URI:           https://pluginever.com
 * License:              GPL v2 or later
 * License URI:          http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:          wc-category-showcase
 * Domain Path:          /languages
 * Tested up to:         6.8
 * WC requires at least: 3.0.0
 * WC tested up to:      10.3
 * Requires plugin:      woocommerce
 *
 * @package WooCommerceCategoryShowcase
 *
 * Copyright (c) 2025 PluginEver (email : support@pluginever.com)
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

defined( 'ABSPATH' ) || exit();

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor-prefixed/autoload.php';

// Instantiate the plugin.
WooCommerceCategoryShowcase\Plugin::create(
	array(
		'file'         => __FILE__,
		'settings_url' => admin_url( 'admin.php?page=wc-category-showcase' ),
	)
);
