<?php
/**
 * Plugin Name:          Category Showcase
 * Plugin URI:           https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 * Description:          WooCommerce extension to showcase categories in various styles and layouts like sliders, blocks, and grids.
 * Version:              2.3.2
 * Requires at least:    5.2
 * Requires PHP:         7.4
 * Author:               PluginEver
 * Author URI:           https://pluginever.com
 * License:              GPL v2 or later
 * License URI:          http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:          wc-category-showcase
 * Domain Path:          /languages
 * Tested up to:         7.0
 * WC requires at least: 3.0.0
 * WC tested up to:      10.7
 * Requires Plugins:     woocommerce
 *
 * @link https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 * @author    Sultan Nasir Uddin <manikdrmc@gmail.com>
 * @copyright 2026 ByteEver
 * @license   GPL-2.0+
 * @package   PluginEver\CategoryShowcase
 */

use PluginEver\CategoryShowcase\Installer;
use PluginEver\CategoryShowcase\Plugin;

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/includes/functions.php';

$data = array(
	'version'      => '2.3.2',
	'name'         => 'Category Showcase',
	'settings_url' => admin_url( 'admin.php?page=wc-category-showcase' ),
	'support_url'  => 'https://pluginever.com/support/',
	'docs_url'     => 'https://pluginever.com/docs/wc-category-showcase/',
	'review_url'   => 'https://wordpress.org/support/plugin/wc-category-showcase/reviews/#new-post',
	'pro_basename' => 'woocommerce-category-showcase-pro/wc-category-showcase-pro.php',
	'upgrade_url'  => 'https://pluginever.com/plugins/woocommerce-category-showcase-pro/',
);

Plugin::create( __FILE__, $data );

wc_category_showcase()->on_activation( array( Installer::class, 'install' ) );
wc_category_showcase()->on_deactivation( array( Installer::class, 'deactivate' ) );

add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'cart_checkout_blocks', __FILE__, true );
		}
	}
);

wc_category_showcase()->bootstrap();
