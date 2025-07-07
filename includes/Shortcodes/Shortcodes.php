<?php

namespace WooCommerceCategoryShowcase\Shortcodes;

use WooCommerceCategoryShowcase\Controllers\Helpers;

defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

/**
 * Shortcode class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Shortcodes {

	/**
	 * Shortcode constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_shortcode( 'wccs_showcase', array( $this, 'render_shortcode' ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 2.0.5
	 * @return void
	 */
	public function enqueue_scripts() {
		$shortcode_tag = 'wccs_showcase';
		// check if the content contains the shortcode.
		if ( ! get_post() || ! has_shortcode( get_post()->post_content, $shortcode_tag ) ) {
			return;
		}

		// parse the shortcode.
		$pattern = get_shortcode_regex( array( 'wccs_showcase' ) );
		if ( preg_match_all( '/' . $pattern . '/s', get_post()->post_content, $matches ) && array_key_exists( 2, $matches ) ) {
			foreach ( $matches[2] as $key => $shortcode ) {
				if ( $shortcode === $shortcode_tag ) {
					$attr_string = $matches[3][ $key ];
					$attributes  = shortcode_parse_atts( $attr_string );
					$id          = ! empty( $attributes['id'] ) ? $attributes['id'] : null;

					// bail if no id is found.
					if ( empty( $id ) || 'wccs-showcase' === get_post_type( $id ) ) {
						return;
					}
					$showcase = Helpers::get_showcase_settings( $id );
					$styles   = self::get_showcase_styles( $showcase, $id );
					$styles   = apply_filters( 'wccs_showcase_styles', $styles, $showcase, $id );
					wp_add_inline_style( 'wcc-showcase-showcase', $styles );
				}
			}
		}
	}

	/**
	 * Category showcase shortcode.
	 *
	 * @param mixed $atts Shortcode attributes.
	 *
	 * @return string
	 * @since 2.0.5
	 */
	public function render_shortcode( $atts ) {
		$atts = shortcode_atts( array( 'id' => null ), $atts, 'wc_category_showcase' );

		if ( empty( $atts['id'] ) || false === get_post_status( $atts['id'] ) ) {
			return null;
		}

		wp_enqueue_style( 'wcc-showcase-showcase' );
		wp_enqueue_script( 'wcc-showcase-showcase' );

		$wccs_id       = intval( $atts['id'] );
		$showcase      = Helpers::get_showcase_settings( $wccs_id );
		$layout        = $showcase['layout'] ?? 'slider';
		$layout_option = ( 'block' === $layout ) ? 'column__x' . ( $showcase['block_column'] ?? '1' ) : ( ( 'grid' === $layout ) ? sanitize_key( $showcase['layout_option'] ?? '' ) : '' );

		ob_start();
		?>
		<section class="wccs-section is-layout__<?php echo sanitize_html_class( $layout ); ?>">
			<?php if ( ! empty( $showcase['section_title'] ) || ! empty( $showcase['section_description'] ) ) : ?>
				<div class="wccs-section__header wccs-categories-heading__<?php echo sanitize_html_class( $wccs_id ); ?> text-<?php echo isset( $showcase['heading_alignment'] ) ? sanitize_html_class( $showcase['heading_alignment'] ) : 'left'; ?>">
					<?php
					echo isset( $showcase['section_title'] ) && 'yes' === $showcase['show_section_title'] ? sprintf( '<%s class="section-title">%s</%s>', esc_attr( $showcase['font_main_title']['text_tag'] ), esc_attr( $showcase['section_title'] ), esc_attr( $showcase['font_main_title']['text_tag'] ) ) : '';
					echo isset( $showcase['section_description'] ) && 'yes' === $showcase['show_section_description'] ? '<p>' . esc_html( $showcase['section_description'] ) . '</p>' : '';
					?>
				</div>
			<?php endif; ?>
			<div class="wccs-section__body wccs-categories wccs-categories__<?php echo sanitize_html_class( $wccs_id ); ?> <?php echo sanitize_html_class( $layout_option ); ?> <?php echo array_key_exists( 'enable_additional_category', $showcase ) && 'yes' === $showcase['enable_additional_category'] ? sanitize_html_class( $layout . '-has-additional-categories' ) : ''; ?>">
			<?php
			if ( 'slider' === $layout ) {
				$this->render_slider_content( $wccs_id, $showcase );
			} else {
				$this->render_block_grid_content( $wccs_id, $layout, $showcase );
			}
			?>
			</div>
		</section>
		<?php

		return wp_kses_post( ob_get_clean() );
	}

	/**
	 * Render Block/Grid content.
	 * This function will render the block/grid content.
	 *
	 * @param int    $wccs_id Showcase ID.
	 * @param string $layout Current layout.
	 * @param array  $showcase Array of showcase data.
	 *
	 * @since 2.1.0
	 * @return void
	 */
	public static function render_block_grid_content( $wccs_id, $layout, $showcase ) {
		// Get the selected categories.
		$categories = Helpers::get_selected_categories( $showcase, $wccs_id );

		$content_placement = $showcase['content_placement'] ? $showcase['content_placement'] : 'center';
		$content_position  = $showcase['overlay_content_position'] ? $showcase['overlay_content_position'] : 'center_center';

		if ( ! empty( $categories ) ) {
			foreach ( $categories as $category ) {
				$child_categories = $category['child_categories'];
				$ribbon_placement = ( 'left' === $showcase['content_alignment'] && 'top' === $content_placement ) ? 'right' : 'left';

				include WCCS_TEMPLATES_URL . 'load-block-grid.php';
			}
		}
	}

	/**
	 * Get slider content html.
	 *
	 * @param int   $wccs_id Showcase ID.
	 * @param array $showcase Array of showcase data.
	 *
	 * @since 2.1.0
	 * @return void
	 */
	public function render_slider_content( $wccs_id, $showcase ) {
		$categories        = Helpers::get_selected_categories( $showcase, $wccs_id );
		$slider_class_list = self::get_slider_classes( $wccs_id, $showcase );
		$slider_config     = self::get_slider_config( $wccs_id, $showcase );

		$is_ticker        = array_key_exists( 'slide_is_ticker', $showcase ) && 'yes' === $showcase['slide_is_ticker'] ? 'true' : 'false';
		$ticker_direction = 'right_to_left' === $showcase['slider_ticker_direction'] ? 'true' : 'false';
		$ticker_mode      = 'medium' === $showcase['ticket_mode'] ? 1 : ( 'slow' === $showcase['ticket_mode'] ? .5 : 2 );

		// Added latter.
		$content_placement = $showcase['content_placement'] ? $showcase['content_placement'] : 'bottom';
		$content_position  = $showcase['overlay_content_position'] ? $showcase['overlay_content_position'] : 'center_center';

		include WCCS_TEMPLATES_URL . 'load-slider.php';
	}

	/**
	 * Get slider config
	 *
	 * @param int   $wccs_id Showcase ID.
	 * @param array $category_showcase Category Showcase Settings Array.
	 *
	 * @since 2.1.0
	 * @return string
	 */
	protected function get_slider_config( $wccs_id, $category_showcase ) {
		$slider_config = array(
			'perPage'      => 1,
			'perMove'      => 1,
			'type'         => 'yes' === $category_showcase['slide_unlimited_loop'] ? 'loop' : 'slide',
			'autoplay'     => 'yes' !== $category_showcase['slide_is_ticker'] ? ( 'yes' === $category_showcase['slide_slideshow'] ? true : false ) : false,
			'arrows'       => 'yes' === $category_showcase['slide_navigation_arrow'],
			'pagination'   => 'yes' === $category_showcase['slide_show_counter'],
			'rewind'       => true,
			'rewindSpeed'  => ! empty( $category_showcase['slide_speed'] ) ? $category_showcase['slide_speed'] : 3000,
			'speed'        => 1500,
			'interval'     => ! empty( $category_showcase['slide_speed'] ) ? $category_showcase['slide_speed'] : 3000,
			'drag'         => 'yes' === $category_showcase['slide_draggable_slide'],
			'pauseOnHover' => 'yes' === $category_showcase['slide_stop_on_hover'],
			'releaseWheel' => 'yes' === $category_showcase['slide_scroll_interaction'],
			'direction'    => 'ltr',
			'wheel'        => 'yes' === $category_showcase['slide_scroll_interaction'],
		);

		$slider_config = apply_filters( 'wcc_showcase_slider_config', $slider_config, $wccs_id, $category_showcase );
		$slider_config = wp_json_encode( $slider_config );
		return $slider_config;
	}

	/**
	 * Get slider classes.
	 *
	 * @param int   $wccs_id Showcase ID.
	 * @param array $category_showcase Category Showcase Settings Array.
	 *
	 * @since 2.1.0
	 * @return string
	 */
	protected function get_slider_classes( $wccs_id, $category_showcase ) {
		$slider_classes = '';

		if ( 'yes' === $category_showcase['slide_navigation_arrow'] ) {
			$slider_classes .= 'is--arrow';
			$slider_classes .= 'arrow' === $category_showcase['slide_arrow_style'] ? ' is--navigation-arrow' : '';
			$slider_classes .= 'default' !== $category_showcase['slider_navigation_position'] ? ' is--navigation-' . $category_showcase['slider_navigation_position'] : '';
			$slider_classes .= $category_showcase['slide_button_style'] ? ' is--' . $category_showcase['slide_button_style'] : '';
		}

		if ( 'yes' === $category_showcase['slide_show_counter'] ) {
			$slider_classes .= ' is-pagination';
			$slider_classes .= 'dots' === $category_showcase['slide_counter_style'] ? ' ' : ( 'dashes' === $category_showcase['slide_counter_style'] ? ' is--pagination-only-dashes' : ' is--pagination-dash-with-dots' );
		}
		$slider_classes .= 'yes' === $category_showcase['show_button'] ? ' is-button-' . $category_showcase['button_style'] : '';
		$slider_classes .= ' is-image-' . $category_showcase['image_layout'];
		$slider_classes .= 'yes' === $category_showcase['show_button_icon'] ? ' is-shop-now-icon' : '';
		$slider_classes .= 'yes' === $category_showcase['image_zoom_on_hover'] ? ' is-image-zoom-on-hover' : '';

		$slider_classes = apply_filters( 'wcc_showcase_slider_classes', $slider_classes, $wccs_id, $category_showcase );
		return $slider_classes;
	}

	/**
	 * Get showcase styles.
	 *
	 * @param array $showcase Showcase settings.
	 * @param int   $wccs_id Showcase ID.
	 *
	 * @return string
	 */
	public static function get_showcase_styles( $showcase, $wccs_id ) {
		// Get the showcase individual style.
		$card_bg_color         = $showcase['card']['background_color'] ? $showcase['card']['background_color'] : '';
		$card_bg_hover_color   = $showcase['card']['hover_color'] ? $showcase['card']['hover_color'] : '';
		$card_text_color       = $showcase['card']['text_color'] ? $showcase['card']['text_color'] : '';
		$card_text_hover_color = $showcase['card']['hover_text_color'] ? $showcase['card']['hover_text_color'] : '';

		if ( 'yes' === wccs_get_showcase_data( $showcase, 'border_is_all' ) ) {
			$borders_radius     = $showcase['border_radius_all'];
			$card_border_radius = $borders_radius['top'] . 'px ' . $borders_radius['right'] . 'px ' . $borders_radius['bottom'] . 'px ' . $borders_radius['left'] . 'px';

		} else {
			$border_radius      = isset( $showcase['border_radius'] ) ? $showcase['border_radius'] : 0;
			$card_border_radius = $border_radius . 'px';
		}

		$card_gap                    = $showcase['gap_between_cards'] ? $showcase['gap_between_cards'] : '';
		$card_gap                    = $card_gap / 16;
		$card_content_padding        = $showcase['content_padding'] ? $showcase['content_padding'] : '';
		$card_content_padding_is_all = 'yes' === $showcase['content_padding_is_all'] ? $showcase['content_padding_is_all'] : 'no';

		if ( 'yes' === $card_content_padding_is_all ) {
			$content_padding_top    = $showcase['content_padding_all']['top'] ? $showcase['content_padding_all']['top'] : '0';
			$content_padding_right  = $showcase['content_padding_all']['right'] ? $showcase['content_padding_all']['right'] : '0';
			$content_padding_bottom = $showcase['content_padding_all']['bottom'] ? $showcase['content_padding_all']['bottom'] : '0';
			$content_padding_left   = $showcase['content_padding_all']['left'] ? $showcase['content_padding_all']['left'] : '0';
		} else {
			$content_padding_top    = $card_content_padding;
			$content_padding_right  = $card_content_padding;
			$content_padding_bottom = $card_content_padding;
			$content_padding_left   = $card_content_padding;
		}

		$card_inner_bg_color               = $showcase['card_content']['background_color'] ? $showcase['card_content']['background_color'] : '';
		$card_inner_bg_hover_color         = $showcase['card_content']['hover_color'] ? $showcase['card_content']['hover_color'] : '';
		$card_content_inner_padding        = $showcase['content_inner_padding'] ? $showcase['content_inner_padding'] : '16';
		$card_content_inner_padding_is_all = 'yes' === $showcase['content_inner_padding_is_all'] ? $showcase['content_inner_padding_is_all'] : 'no';

		if ( 'yes' === $card_content_inner_padding_is_all ) {
			$content_inner_padding_top    = $showcase['content_inner_padding_all']['top'] ? $showcase['content_inner_padding_all']['top'] : '16';
			$content_inner_padding_right  = $showcase['content_inner_padding_all']['right'] ? $showcase['content_inner_padding_all']['right'] : '16';
			$content_inner_padding_bottom = $showcase['content_inner_padding_all']['bottom'] ? $showcase['content_inner_padding_all']['bottom'] : '16';
			$content_inner_padding_left   = $showcase['content_inner_padding_all']['left'] ? $showcase['content_inner_padding_all']['left'] : '16';
		} else {
			$content_inner_padding_top    = $card_content_inner_padding;
			$content_inner_padding_right  = $card_content_inner_padding;
			$content_inner_padding_bottom = $card_content_inner_padding;
			$content_inner_padding_left   = $card_content_inner_padding;
		}

		$shop_now_btn_bg                 = $showcase['button']['background_color'] ? $showcase['button']['background_color'] : '';
		$shop_now_btn_text_color         = $showcase['button']['text_color'] ? $showcase['button']['text_color'] : '';
		$shop_now_btn_hover_bg           = $showcase['button']['hover_color'] ? $showcase['button']['hover_color'] : '';
		$shop_now_btn_hover_text_color   = $showcase['button']['hover_text_color'] ? $showcase['button']['hover_text_color'] : '';
		$shop_now_btn_border_color       = $showcase['button']['border_color'] ? $showcase['button']['border_color'] : '';
		$shop_now_btn_border_hover_color = $showcase['button']['border_hover_color'] ? $showcase['button']['border_hover_color'] : '';

		$navigation_bg               = $showcase['slide_button']['background_color'] ? $showcase['slide_button']['background_color'] : '';
		$navigation_text_color       = $showcase['slide_button']['text_color'] ? $showcase['slide_button']['text_color'] : '';
		$navigation_hover_bg         = $showcase['slide_button']['hover_color'] ? $showcase['slide_button']['hover_color'] : '';
		$navigation_hover_text_color = $showcase['slide_button']['hover_text_color'] ? $showcase['slide_button']['hover_text_color'] : '';

		$counter_bg         = $showcase['slide_counter']['background_color'] ? $showcase['slide_counter']['background_color'] : '';
		$counter_text       = $showcase['slide_counter']['text_color'] ? $showcase['slide_counter']['text_color'] : '';
		$counter_hover_bg   = $showcase['slide_counter']['hover_color'] ? $showcase['slide_counter']['hover_color'] : '';
		$counter_hover_text = $showcase['slide_counter']['hover_text_color'] ? $showcase['slide_counter']['hover_text_color'] : '';

		$styles = "
			.wccs-categories__{$wccs_id}{
				gap: {$card_gap}rem !important;
			}
			.wccs-showcase-id__{$wccs_id}, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item{
				background-color: {$card_bg_color};
				color: {$card_text_color};
				border-radius: {$card_border_radius};
				transition: 0.3s;
				overflow: hidden;
			}
			.wccs-showcase-id__{$wccs_id} .wccs-entry__content {
				border-radius: {$card_border_radius};
			}

			.wccs-showcase-id__{$wccs_id} .wccs-entry__content-inner p, .wccs-showcase-id__{$wccs_id} .wccs-entry__content-inner a {
				color: {$card_text_hover_color};
			}
			.wcc-showcase-{$wccs_id} .wcc-showcase-slide-item p{
				color: {$card_text_color};
			}
			.wcc-showcase-{$wccs_id} .wcc-showcase-slide-item:hover p{
				color: {$card_text_hover_color};
			}
			.wccs-showcase-id__{$wccs_id} .wccs-entry__content-inner a {
				color: {$card_text_color};
			}
			.wccs-showcase-id__{$wccs_id} .wccs-entry__content-inner a:hover {
				color: {$card_text_hover_color};
			}

			.wcc-showcase-{$wccs_id} .wcc-showcase-slide-item__cat-products a:hover, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item__sub-cat__sub-cat-list__item a:hover{
				color: {$card_text_hover_color} !important;
				opacity: .6 !important;
			}

			.wccs-showcase-id__{$wccs_id}:hover, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item:hover{
				background-color: {$card_bg_hover_color};
				color: {$card_text_hover_color};
			}
			.wccs-showcase-id__{$wccs_id}:hover, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item:hover{
				background-color: {$card_bg_hover_color};
				color: {$card_text_hover_color};
			}
			.wccs-showcase-id__{$wccs_id}:hover .wccs-entry__content.has-image{
				background-color: {$card_bg_hover_color};
				color: {$card_text_hover_color};
				transition: 0.3s;
			}
			.wcc-showcase-{$wccs_id} .splide__pagination__page{
				background-color: {$counter_bg};
				color: {$counter_text};
			}
			.wcc-showcase-{$wccs_id} .wcc-showcase-slide-item .slider-cat-image{
				border-top-left-radius: {$card_border_radius}px !important;
				border-top-right-radius: {$card_border_radius}px !important;
				height: {$showcase['slider_height']}px !important;
			}
			.is-layout__slider .wcc-showcase-{$wccs_id} .splide__track{
				height: {$showcase['slider_height']}px !important;
			}
			.wcc-showcase-{$wccs_id} .splide__pagination__page.is-active,
			.wcc-showcase-{$wccs_id} .splide__pagination__page:hover{
				background-color: {$counter_hover_bg};
				color: {$counter_hover_text};
			}
			.wcc-showcase-{$wccs_id} .splide__arrow--prev, .wcc-showcase-{$wccs_id} .splide__arrow--next {
				background-color: {$navigation_bg};
				color: {$navigation_text_color};
			}
			.wcc-showcase-{$wccs_id} .wcc-showcase__navigation .splide__arrow--prev::before, .wcc-showcase-{$wccs_id} .wcc-showcase__navigation .splide__arrow--next::before {
				color: {$navigation_text_color} !important;
			}
			.wcc-showcase-{$wccs_id} .splide__arrow--prev:hover, .wcc-showcase-{$wccs_id} .splide__arrow--next:hover{
				background-color: {$navigation_hover_bg};
				color: {$navigation_hover_text_color};
			}

			.wcc-showcase-{$wccs_id} .wcc-showcase__navigation .splide__arrow--prev:hover::before, .wcc-showcase-{$wccs_id} .wcc-showcase__navigation .splide__arrow--next:hover::before{
				color: {$navigation_hover_text_color} !important;
			}

			.wcc-showcase-{$wccs_id} .wccs-showcase-btn, .wccs-showcase-id__{$wccs_id} .wccs-showcase-btn{
				background-color: {$shop_now_btn_bg};
				border-color: {$shop_now_btn_border_color};
				color: {$shop_now_btn_text_color};
			}
			.wcc-showcase-{$wccs_id} .wccs-showcase-btn:hover, .wccs-showcase-id__{$wccs_id} .wccs-showcase-btn:hover{
				background-color: {$shop_now_btn_hover_bg} !important;
				border: 1px solid {$shop_now_btn_border_hover_color} !important;
				color: {$shop_now_btn_hover_text_color} !important;
			}

			.wccs-categories__{$wccs_id} .wcc-showcase-slide-item__cat-details,
			.wccs-categories__{$wccs_id} .wccs-entry__content {
				padding: {$content_padding_top}px {$content_padding_right}px {$content_padding_bottom}px {$content_padding_left}px;
			}

			.wccs-categories__{$wccs_id} .wccs-entry__content-inner {
				padding: {$content_inner_padding_top}px {$content_inner_padding_right}px {$content_inner_padding_bottom}px {$content_inner_padding_left}px!important;
				background-color: {$card_inner_bg_color};
			}
			.wccs-categories__{$wccs_id} .wccs-entry__content-inner:hover {
				background-color: {$card_inner_bg_hover_color};
			}
		";

		if ( 'yes' !== $showcase['show_button_icon'] ) {
			$styles .= "
				.wcc-showcase-{$wccs_id} .wccs-showcase-btn::after, .wccs-showcase-id__{$wccs_id} .wccs-showcase-btn::after{
					content: '' !important;
				}
			";
		}

		return $styles;
	}
}
