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
 *
 * @package WooCommerceCategoryShowcase
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

defined( 'ABSPATH' ) || exit();

require_once __DIR__ . '/vendor/autoload.php';

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

// Category showcase view (BLock & Grid).
add_shortcode( 'wc_category_showcase_test', 'wc_category_showcase_test_shortcode' );

/**
 * Block category showcase shortcode.
 *
 * @param mixed $atts Shortcode attributes.
 * @param null  $content Shortcode content.
 *
 * @return string
 * @since 2.0.5
 */
function wc_category_showcase_test_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'id' => null,
		),
		$atts,
		'wc_category_showcase_test'
	);

	if ( null === $atts['id'] ) {
		return null;
	}

	wp_enqueue_style( 'wcc-showcase-showcase' );
	wp_enqueue_script( 'wcc-showcase-showcase' );

	$content       = $content ?? null;
	$showcase      = WooCommerceCategoryShowcase\Controllers\Helpers::get_slider_settings( $atts['id'] );
	$layout        = isset( $showcase['wcc_showcase_layout'] ) ? $showcase['wcc_showcase_layout'] : 'default';
	$layout_option = '';

	if ( 'block' === $layout ) {
		$layout_option = isset( $showcase['wcc_showcase_block']['column'] ) ? 'column__x' . $showcase['wcc_showcase_block']['column'] : 'column__x1';
	}
	if ( 'grid' === $layout ) {
		// Available options are:
		// 2X: simple_1x2, simple_2x2.
		// 3X: simple_1x3, simple_2x3 standard_1x3, standard_2x3, cross_1x3, cross_2x3.
		// 4X: crescent_1x4, crescent_2x4, zen_1x4, zen_2x4, catalog_1x4, catalog_2x4, catalog_3x4, catalog_4x4, matrix_1x4, matrix_2x4, matrix_3x4, matrix_4x4, matrix_5x4, mystic_1x4, mystic_2x4, mystic_3x4, mystic_4x4.
		// 5X: catalog_1x5, catalog_2x5, schema_1x5, schema_2x5, modern_1x5, modern_2x5, modern_3x5.
		// 6X: catalog_1x6, catalog_2x6, matrix_1x6, matrix_2x6, zen_1x6, zen_2x6, zen_3x6.
		// 7X: catalog_1x7, catalog_2x7, helix_1x7, helix_2x7.
		$layout_option = isset( $showcase['wcc_showcase_layout_option'] ) ? sanitize_key( $showcase['wcc_showcase_layout_option'] ) : '';
	}

	// Get the showcase individual style.
	$wccs_id               = intval( $atts['id'] );
	$card_bg_color         = $showcase['wcc_showcase_card']['background_color'] ?? '#ffffff';
	$card_bg_hover_color   = $showcase['wcc_showcase_card']['hover_color'] ?? '#cccccc';
	$card_text_color       = $showcase['wcc_showcase_card']['text_color'] ?? '#000000';
	$card_text_hover_color = $showcase['wcc_showcase_card']['hover_text_color'] ?? '#cccccc';
	$card_border_radius    = $showcase['wcc_showcase_border_radius'] ?? '8';
	$card_gap              = $showcase['wcc_showcase_gap_between_cards'] ?? '9';

	$styles = "
		.wccs-categories__{$wccs_id}{
			gap: {$card_gap}px!important;
		}
		.wccs-showcase-id__{$wccs_id}{
			background-color: {$card_bg_color};
			color: {$card_text_color};
			border: 1px solid {$card_bg_hover_color};
			border-radius: {$card_border_radius}px;
		}
		.wccs-showcase-id__{$wccs_id}:hover{
			background-color: {$card_bg_hover_color};
			color: {$card_text_hover_color};
		}
	";
	wp_add_inline_style( 'wcc-showcase-showcase', $styles );

	ob_start();
	?>
	<section class="wccs-section is-layout__<?php echo sanitize_html_class( $layout ); ?>">
		<?php if ( isset( $showcase['wcc_showcase_section_title'] ) || isset( $showcase['wcc_showcase_section_description'] ) ) : ?>
		<div class="wccs-section__header text-<?php echo isset( $showcase['wcc_showcase_heading_alignment'] ) ? sanitize_html_class( $showcase['wcc_showcase_heading_alignment'] ) : 'left'; ?>">
			<?php
			echo isset( $showcase['wcc_showcase_section_title'] ) ? '<h2>' . esc_html( $showcase['wcc_showcase_section_title'] ) . '</h2>' : '';
			echo isset( $showcase['wcc_showcase_section_description'] ) ? '<p>' . esc_html( $showcase['wcc_showcase_section_description'] ) . '</p>' : '';
			?>
		</div>
		<?php endif; ?>
		<div class="wccs-section__body wccs-categories wccs-categories__<?php echo sanitize_html_class( $wccs_id ); ?> <?php echo sanitize_html_class( $layout_option ); ?>">
			<?php
			if ( 'slider' === $layout ) {
				wccs_get_slider_content_html( $wccs_id, $layout, $showcase );
			} else {
				wccs_get_content_html( $wccs_id, $layout, $showcase );
			}
			?>
		</div>
	</section>
	<?php
	return wp_kses_post( ob_get_clean() );
}

/**
 * Get Block/Grid content.
 *
 * @param int    $wccs_id Showcase ID.
 * @param string $layout Current layout.
 * @param array  $showcase Array of showcase data.
 */
function wccs_get_content_html( $wccs_id, $layout, $showcase ) {

	$content_placement = $showcase['wcc_showcase_content_placement'] ?? 'top';
	$content_position  = $showcase['wcc_showcase_overlay_content_position'] ?? 'center_center';
	$thumbnail_img     = plugin_dir_url( __FILE__ ) . 'assets/images/category-placeholder-img1.png';
	?>
	<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

		<?php if ( 'block' === $layout ) : ?>
			<div class="wccs-entry__head">
				<img src="<?php echo esc_url( $thumbnail_img ); ?>" alt="<?php echo esc_html( 'Image alt text/Category heading text' ); ?>">
			</div>
		<?php endif; ?>

		<div class="wccs-entry__content wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
			<div class="wccs-entry__content-inner">
				<h3>The category title</h3>
				<p>The category description</p>
				<a class="btn wccs-showcase-btn" href="#">Shop Now</a>
			</div>
		</div>
	</div>

	<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

		<?php if ( 'block' === $layout ) : ?>
			<div class="wccs-entry__head">
				<img src="<?php echo esc_url( $thumbnail_img ); ?>" alt="<?php echo esc_html( 'Image alt text/Category heading text' ); ?>">
			</div>
		<?php endif; ?>

		<div class="wccs-entry__content wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
			<div class="wccs-entry__content-inner">
				<h3>The category title</h3>
				<p>The category description</p>
				<a class="btn wccs-showcase-btn" href="#">Shop Now</a>
			</div>
		</div>
	</div>

	<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

		<?php if ( 'block' === $layout ) : ?>
			<div class="wccs-entry__head">
				<img src="<?php echo esc_url( $thumbnail_img ); ?>" alt="<?php echo esc_html( 'Image alt text/Category heading text' ); ?>">
			</div>
		<?php endif; ?>

		<div class="wccs-entry__content wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
			<div class="wccs-entry__content-inner">
				<h3>The category title</h3>
				<p>The category description</p>
				<a class="btn wccs-showcase-btn" href="#">Shop Now</a>
			</div>
		</div>
	</div>

	<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

		<?php if ( 'block' === $layout ) : ?>
			<div class="wccs-entry__head">
				<img src="<?php echo esc_url( $thumbnail_img ); ?>" alt="<?php echo esc_html( 'Image alt text/Category heading text' ); ?>">
			</div>
		<?php endif; ?>

		<div class="wccs-entry__content wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
			<div class="wccs-entry__content-inner">
				<h3>The category title</h3>
				<p>The category description</p>
				<a class="btn wccs-showcase-btn" href="#">Shop Now</a>
			</div>
		</div>
	</div>

	<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

		<?php if ( 'block' === $layout ) : ?>
			<div class="wccs-entry__head">
				<img src="<?php echo esc_url( $thumbnail_img ); ?>" alt="<?php echo esc_html( 'Image alt text/Category heading text' ); ?>">
			</div>
		<?php endif; ?>

		<div class="wccs-entry__content wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
			<div class="wccs-entry__content-inner">
				<h3>The category title</h3>
				<p>The category description</p>
				<a class="btn wccs-showcase-btn" href="#">Shop Now</a>
			</div>
		</div>
	</div>

	<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

		<?php if ( 'block' === $layout ) : ?>
			<div class="wccs-entry__head">
				<img src="<?php echo esc_url( $thumbnail_img ); ?>" alt="<?php echo esc_html( 'Image alt text/Category heading text' ); ?>">
			</div>
		<?php endif; ?>

		<div class="wccs-entry__content wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
			<div class="wccs-entry__content-inner">
				<h3>The category title</h3>
				<p>The category description</p>
				<a class="btn wccs-showcase-btn" href="#">Shop Now</a>
			</div>
		</div>
	</div>

	<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

		<?php if ( 'block' === $layout ) : ?>
			<div class="wccs-entry__head">
				<img src="<?php echo esc_url( $thumbnail_img ); ?>" alt="<?php echo esc_html( 'Image alt text/Category heading text' ); ?>">
			</div>
		<?php endif; ?>

		<div class="wccs-entry__content wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
			<div class="wccs-entry__content-inner">
				<h3>The category title</h3>
				<p>The category description</p>
				<a class="btn wccs-showcase-btn" href="#">Shop Now</a>
			</div>
		</div>
	</div>
	<?php
}

/**
 * Slider content.
 *
 * @param int    $wccs_id Showcase ID.
 * @param string $layout The current layout.
 * @param array  $showcase Array of showcase data.
 */
function wccs_get_slider_content_html( $wccs_id, $layout, $showcase ) {
	echo 'slider content';
}
