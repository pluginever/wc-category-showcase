<?php
/**
 * Plugin Name:          Product Category Showcase for WooCommerce
 * Plugin URI:           https://pluginever.com/plugins/woocommerce-category-showcase-pro/
 * Description:          WooCommerce extension to showcase categories in interactive slider blocks.
 * Version:              2.1.0
 * Author:               PluginEver
 * Author URI:           https://pluginever.com
 * License:              GPLv2+
 * License URI:          http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:          wc-category-showcase
 * Domain Path:          /languages
 * Requires plugin:      WooCommerce
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

/**
 * Schedule the migration cron job (runs every 15 minutes).
 *
 * @since 2.2.0
 * @return void
 */
function wccs_schedule_migration() {
	if ( ! wp_next_scheduled( 'wccs_migrate_data' ) ) {
		wp_schedule_event( time(), 'every_five_minutes', 'wccs_migrate_data' );
	}
}
add_action( 'admin_init', 'wccs_schedule_migration' );

/**
 * Add custom interval for migration (15 minutes).
 *
 * @param array $schedules The existing cron schedules.
 *
 * @since 2.2.0
 * @return array The modified cron schedules.
 */
function wccs_custom_cron_schedules( $schedules ) {
	$schedules['every_five_minutes'] = array(
		'interval' => 900, // 300 seconds = 15 minutes
		'display'  => __( 'Every 5 Minutes' ),
	);
	return $schedules;
}
add_filter( 'cron_schedules', 'wccs_custom_cron_schedules' );

/**
 * Migration function.
 * Migrate data from old version to new version.
 *
 * @since 2.2.0
 * @return void
 */
function wccs_migrate_data() {
	$fields = array(
		'wccs_featured_categories'   => 'wcc_showcase_specific_category_select',
		'wccs_show_block_title'      => 'wcc_showcase_show_section_title',
		'wccs_autoplay_slider'       => 'wcc_showcase_slide_slideshow',
		'wccs_infinite_scroll'       => 'wcc_showcase_slide_unlimited_loop',
		'wccs_show_navigation'       => 'wcc_showcase_slide_navigation_arrow',
		'wccs_featured_show_title'   => 'wcc_showcase_show_category_title',
		'wccs_featured_show_desc'    => 'wcc_showcase_show_category_description',
		'wccs_featured_show_button'  => 'wcc_showcase_show_button',
		'wccs_featured_button_text'  => 'wcc_showcase_button_text',
		'wccs_additional_categories' => 'wcc_showcase_additional_category_select',
	);

	$fields_to_delete = array(
		'wccs_featured_content_color',
		'wccs_featured_content_bg',
		'wccs_additional_show_title',
		'wccs_additional_title_color',
		'wccs_additional_content_bg',
		'wccs_featured_show_custom_message',
		'wccs_featured_custom_message',
		'wccs_additional_button_hover_color',
		'wccs_additional_button_hover_text_color',
	);

	// Get current offset.
	$offset = (int) get_option( 'wccs_migrated', 0 );

	// Fetch one post at a time.
	$query = new WP_Query(
		array(
			'post_type'      => 'wccs_showcase',
			'posts_per_page' => 1,
			'offset'         => $offset,
			'fields'         => 'ids',
		)
	);

	if ( $query->have_posts() ) {
		foreach ( $query->posts as $post_id ) {
			// Update the uncommon meta keys.
			update_post_meta( $post_id, 'wcc_showcase_layout', 'slider' );
			update_post_meta(
				$post_id,
				'wcc_showcase_slider',
				array(
					'column' => '1',
					'row'    => '1',
				)
			);
			update_post_meta( $post_id, 'wcc_showcase_category_filter', 'specific' );
			update_post_meta( $post_id, 'wcc_showcase_specific_category_select', 'specific' );

			foreach ( $fields as $key => $field ) {
				$value = get_post_meta( $post_id, $key, true );

				// Check if value and field are set. Then update the post meta using $field.
				if ( ! empty( $value ) && isset( $field ) ) {
					update_post_meta( $post_id, $field, $value );
				}

				// Update the title if the block title is set.
				if ( 'wccs_show_block_title' === $key ) {
					update_post_meta( $post_id, 'wcc_showcase_section_title', get_the_title( $post_id ) );
				}

				// Delete old meta keys if necessary.
				// TODO: delete_post_meta( $post_id, $key );
			}

			// Update additional customizer settings.
			$featured_customizer   = get_post_meta( $post_id, 'wccsp_featured_customizer', true );
			$additional_customizer = get_post_meta( $post_id, 'wccsp_additional_customizer', true );

			// Update array keys from $featured_customizer, title should be "name" and image should be "image_url".
			if ( is_array( $featured_customizer ) ) {
				$featured_customizer = array_map(
					function ( $item ) {
						$item['name']      = $item['title'];
						$item['image_url'] = $item['image'];
						unset( $item['title'] );
						unset( $item['image'] );
						return $item;
					},
					$featured_customizer
				);
			}

			// Update array keys from $additional_customizer, title should be "name" and image should be "image_url".
			if ( is_array( $additional_customizer ) ) {
				$additional_customizer = array_map(
					function ( $item ) {
						$item['name']      = $item['title'];
						$item['image_url'] = $item['image'];
						unset( $item['title'] );
						unset( $item['image'] );
						return $item;
					},
					$additional_customizer
				);
			}

			// Update the post meta.
			update_post_meta( $post_id, 'wcc_showcase_category_list_item', $featured_customizer );
			update_post_meta( $post_id, 'wcc_showcase_additional_category_list_item', $additional_customizer );

			// Updating style settings.
			$content_color    = get_post_meta( $post_id, 'wccs_featured_content_color', true );
			$content_bg_color = get_post_meta( $post_id, 'wccs_featured_content_bg', true );

			$card_content = array(
				'background_color' => empty( $content_bg_color ) ? '#96588A00' : $content_bg_color,
				'text_color'       => empty( $content_color ) ? '#FFFFFFFF' : $content_color,
				'hover_color'      => empty( $content_bg_color ) ? '#96588A00' : $content_bg_color,
				'hover_text_color' => empty( $content_color ) ? '#FFFFFFFF' : $content_color,
			);

			update_post_meta( $post_id, 'wcc_showcase_card_content', $card_content );
		}

		// Delete the old meta keys.
		foreach ( $fields_to_delete as $field ) {
			// delete_post_meta( $post_id, $field );
		}

		// Increment the offset.
		update_option( 'wccs_migrated', $offset + 1 );
	} else {
		// No more posts left to migrate, remove the cron job.
		wp_clear_scheduled_hook( 'wccs_migrate_data' );
		delete_option( 'wccs_migrated' );
	}
}
add_action( 'wccs_migrate_data', 'wccs_migrate_data' );
