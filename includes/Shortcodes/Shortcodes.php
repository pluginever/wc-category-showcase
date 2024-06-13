<?php

namespace WooCommerceCategoryShowcase\Shortcodes;

use WooCommerceCategoryShowcase\Controllers\Helpers;

defined( 'ABSPATH' ) || exit;

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
		add_shortcode( 'wccs_showcase', array( $this, 'render_shortcode' ) );
	}

	/**
	 * Category showcase shortcode.
	 *
	 * @param mixed $atts Shortcode attributes.
	 * @param null  $content Shortcode content.
	 *
	 * @return string
	 * @since 2.0.5
	 */
	public function render_shortcode( $atts, $content = null ) {
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

		$content  = $content ?? null;
		$wccs_id  = intval( $atts['id'] );
		$showcase = Helpers::get_slider_settings( $wccs_id );

		$layout        = isset( $showcase['layout'] ) ? $showcase['layout'] : 'slider';
		$layout_option = '';

		if ( 'block' === $layout ) {
			$layout_option = isset( $showcase['block_column'] ) ? 'column__x' . $showcase['block_column'] : 'column__x1';
		}
		if ( 'grid' === $layout ) {
			$layout_option = isset( $showcase['layout_option'] ) ? sanitize_key( $showcase['layout_option'] ) : '';
		}

		// Get the showcase individual style.
		$card_bg_color         = $showcase['card']['background_color'] ?? '#ffffff';
		$card_bg_hover_color   = $showcase['card']['hover_color'] ?? '#cccccc';
		$card_text_color       = $showcase['card']['text_color'] ?? '#000000';
		$card_text_hover_color = $showcase['card']['hover_text_color'] ?? '#cccccc';
		$card_border_radius    = $showcase['border_radius'] ?? '8';
		$card_gap              = $showcase['gap_between_cards'] ?? '9';

		$shop_now_btn_bg               = $showcase['button']['background_color'] ?? $showcase['button']['background_color'];
		$shop_now_btn_text_color       = $showcase['button']['text_color'] ?? $showcase['button']['text_color'];
		$shop_now_btn_hover_bg         = $showcase['button']['hover_color'] ?? $showcase['button']['hover_color'];
		$shop_now_btn_hover_text_color = $showcase['button']['hover_text_color'] ?? $showcase['button']['hover_text_color'];

		$navigation_bg               = $showcase['slide_button']['background_color'] ?? $showcase['slide_button']['background_color'];
		$navigation_text_color       = $showcase['slide_button']['text_color'] ?? $showcase['slide_button']['text_color'];
		$navigation_hover_bg         = $showcase['slide_button']['hover_color'] ?? $showcase['slide_button']['hover_color'];
		$navigation_hover_text_color = $showcase['slide_button']['hover_text_color'] ?? $showcase['slide_button']['hover_text_color'];

		$counter_bg         = $showcase['slide_counter']['background_color'] ?? $showcase['slide_counter']['background_color'];
		$counter_text       = $showcase['slide_counter']['text_color'] ?? $showcase['slide_counter']['text_color'];
		$counter_hover_bg   = $showcase['slide_counter']['hover_color'] ?? $showcase['slide_counter']['hover_color'];
		$counter_hover_text = $showcase['slide_counter']['hover_text_color'] ?? $showcase['slide_counter']['hover_text_color'];

		$section_title_font_family     = $showcase['font_main_title']['font_family'];
		$section_title_text_size       = $showcase['font_main_title']['text_size'];
		$section_title_text_weight     = 'default' === $showcase['font_main_title']['text_weight'] ? '700' : $showcase['font_main_title']['text_weight'];
		$section_title_line_height     = $showcase['font_main_title']['line_height'];
		$section_title_letter_spacing  = $showcase['font_main_title']['letter_spacing'];
		$section_title_text_align      = $showcase['font_main_title']['text_align'];
		$section_title_text_decoration = $showcase['font_main_title']['text_decoration'];
		$section_title_text_color      = $showcase['font_main_title']['text_color'];

		$category_title_font_family     = $showcase['font_category_title']['font_family'];
		$category_title_text_size       = $showcase['font_category_title']['text_size'];
		$category_title_text_weight     = $showcase['font_category_title']['text_weight'];
		$category_title_line_height     = $showcase['font_category_title']['line_height'];
		$category_title_letter_spacing  = $showcase['font_category_title']['letter_spacing'];
		$category_title_text_align      = $showcase['font_category_title']['text_align'];
		$category_title_text_decoration = $showcase['font_category_title']['text_decoration'];
		$category_title_text_color      = $showcase['font_category_title']['text_color'];

		$styles = "
			.wccs-categories__{$wccs_id}{
				gap: {$card_gap}px!important;
			}
			.wccs-showcase-id__{$wccs_id}, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item{
				background-color: {$card_bg_color};
				color: {$card_text_color};
				border: 1px solid {$card_bg_hover_color};
				border-radius: {$card_border_radius}px;
			}
			.wccs-showcase-id__{$wccs_id}:hover, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item:hover{
				background-color: {$card_bg_hover_color};
				color: {$card_text_hover_color};
			}
			.wcc-showcase-{$wccs_id} .splide__pagination__page{
				background-color: {$counter_bg};
				color: {$counter_text};
			}
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
				border: 1px solid {$shop_now_btn_bg} !important;
				color: {$shop_now_btn_text_color};
			}
			.wcc-showcase-{$wccs_id} .wccs-showcase-btn:hover, .wccs-showcase-id__{$wccs_id} .wccs-showcase-btn:hover{
				background-color: {$shop_now_btn_hover_bg};
				border: 1px solid {$shop_now_btn_hover_bg} !important;
				color: {$shop_now_btn_hover_text_color};
			}
			.wccs-categories-heading__{$wccs_id} .section-title {
				font-size: {$section_title_text_size}px;
				font-weight: {$section_title_text_weight};
				letter-spacing: {$section_title_letter_spacing}px;
				line-height: {$section_title_line_height}px;
				color: {$section_title_text_color};
				text-align: {$section_title_text_align};
			}

			.wccs-categories__{$wccs_id} .category-name a {
				font-size: {$category_title_text_size}px;
				font-weight: {$category_title_text_weight};
				letter-spacing: {$category_title_letter_spacing}px;
				line-height: {$category_title_line_height}px;
				color: {$category_title_text_color};
				text-align: {$category_title_text_align};
			}
		";
		if ( 'yes' !== $showcase['show_button_icon'] ) {
			$styles .= "
				.wcc-showcase-{$wccs_id} .wccs-showcase-btn::after, .wccs-showcase-id__{$wccs_id} .wccs-showcase-btn::after{
					content: '' !important;
				}
			";
		}
		wp_add_inline_style( 'wcc-showcase-showcase', $styles );

		ob_start();

		?>
		<section class="wccs-section is-layout__<?php echo sanitize_html_class( $layout ); ?>">
			<?php if ( isset( $showcase['section_title'] ) || isset( $showcase['section_description'] ) ) : ?>
				<div class="wccs-section__header wccs-categories-heading__<?php echo sanitize_html_class( $wccs_id ); ?> text-<?php echo isset( $showcase['heading_alignment'] ) ? sanitize_html_class( $showcase['heading_alignment'] ) : 'left'; ?>">
					<?php
					echo isset( $showcase['section_title'] ) && 'yes' === $showcase['show_section_title'] ? sprintf( '<%s class="section-title">%s</%s>', esc_attr( $showcase['font_main_title']['text_tag'] ), esc_attr( $showcase['section_title'] ), esc_attr( $showcase['font_main_title']['text_tag'] ) ) : '';
					echo isset( $showcase['section_description'] ) && 'yes' === $showcase['show_section_description'] ? '<p>' . esc_html( $showcase['section_description'] ) . '</p>' : '';
					?>
				</div>
			<?php endif; ?>
			<div class="wccs-section__body wccs-categories wccs-categories__<?php echo sanitize_html_class( $wccs_id ); ?> <?php echo sanitize_html_class( $layout_option ); ?>">
			<?php
			switch ( $layout ) {
				case 'slider':
					$slider_class_list = self::get_slider_classes( $showcase );
					$slider_config     = self::get_slider_config( $showcase );
					self::get_slider_content_html( $wccs_id, $layout, $showcase, $slider_class_list, $slider_config );
					break;
				default:
					self::get_content_html( $wccs_id, $layout, $showcase );
					break;
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
	public static function get_content_html( $wccs_id, $layout, $showcase ) {

		$content_placement = $showcase['content_placement'] ?? 'top';
		$content_position  = $showcase['overlay_content_position'] ?? 'center_center';
		$thumbnail_img     = WC_CATEGORY_SHOWCASE_ASSETS_URL . 'images/category-placeholder-img1.png';

		// Get category query args values.
		$hide_empty = isset( $showcase['hide_empty_categories'] ) && 'yes' === $showcase['hide_empty_categories'] ? true : false;
		if ( 'block' === $layout ) {
			$limit = isset( $showcase['category_display_limit'] ) ? absint( $showcase['category_display_limit'] ) : null;
		} else {
			$limit = isset( $showcase['block_column'] ) ? absint( $showcase['block_column'] ) : null;
		}

		if ( 'all' === $showcase['category_filter'] ) {
			$args       = array(
				'number'     => $limit,
				'hide_empty' => $hide_empty,
			);
			$categories = Helpers::get_all_categories( $args );
		} else {
			$categories = isset( $showcase['specific_category_select'] ) ? $showcase['specific_category_select'] : array();
		}

		$categories = array_slice( $categories, 0, $showcase['category_display_limit'], true );

		if ( ! empty( $categories ) ) {
			foreach ( $categories as $category ) {
				if ( 'all' === $showcase['category_filter'] ) {
					$category = Helpers::get_category_details( $category->term_id );
				} else {
					$category = Helpers::get_category_details( $category, $wccs_id );
				}

				$child_categories = $category['child_categories'];
				?>
			<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?> <?php printf( 'style="background: url(%s)"', esc_url( $category['image_url'] ) ); ?> <?php endif; ?>>

				<?php if ( 'block' === $layout ) : ?>
					<div class="wccs-entry__head">
						<a href="<?php echo esc_url( $category['cat_link'] ); ?>"><img src="<?php echo esc_url( $category['image_url'] ); ?>" alt="<?php echo esc_html( $category['name'] ); ?>"></a>
					</div>
				<?php endif; ?>

				<div class="wccs-entry__content text-center wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
					<div class="wccs-entry__content-inner">
						<?php printf( '<%s class="category-name"><a href="%s">%s</a></%s>', esc_attr( $category['font_category_title']['text_tag'] ), esc_url( $category['cat_link'] ), esc_attr( $category['custom_name'] ), esc_attr( $category['font_category_title']['text_tag'] ) ); ?>
						<p><?php echo esc_html( $category['description'] ); ?></p>
						<p><a href="<?php echo esc_url( $category['cat_link'] ); ?>"><?php echo esc_html( $category['total_count'] . ' products' ); ?></a></p>

						<?php if ( 'yes' === $showcase['includes_sub_categories'] && ! empty( $child_categories ) ) : ?>
						<ul class="wccs-subcategory__items">
							<?php
							foreach ( $child_categories as $child_category ) :
								printf(
									'<li class="wccs-subcategory__item"><a href="%1$s">%2$s <span>(%3$s)<span></a></li>',
									esc_url( $child_category['cat_link'] ),
									esc_html( $child_category['name'] ),
									esc_html( $child_category['total_product'] ),
								);
							endforeach;
							?>
						</ul>
						<?php endif; ?>

						<div class="wccs-card-button">
							<a class="btn wccs-showcase-btn" href="<?php echo esc_url( $category['cat_link'] ); ?>">
								<?php
								echo esc_attr( $showcase['button_text'] );
								?>
							</a>
						</div>
					</div>
				</div>
			</div>
				<?php
			}
		}
	}

	/**
	 * Get slider content html.
	 *
	 * @param int    $wccs_id Showcase ID.
	 * @param string $layout Current layout.
	 * @param array  $category_showcase Array of showcase data.
	 * @param string $class_list Slider class list.
	 * @param string $config Slider config.
	 */
	public static function get_slider_content_html( $wccs_id, $layout, $category_showcase, $class_list, $config ) {

		$post_id = $wccs_id;
		if ( 'all' === $category_showcase['category_filter'] ) {
			$categories = Helpers::get_all_categories();
		} else {
			$categories = isset( $category_showcase['specific_category_select'] ) ? $category_showcase['specific_category_select'] : array();
		}
		$categories = array_slice( $categories, 0, $category_showcase['category_display_limit'], true );

		$slider_class_list = $class_list;
		$slider_config     = $config;
		$is_ticker         = array_key_exists( 'slide_is_ticker', $category_showcase ) && 'yes' === $category_showcase['slide_is_ticker'] ? 'true' : 'false';
		$ticker_direction  = 'right_to_left' === $category_showcase['slider_ticker_direction'] ? 'true' : 'false';
		$ticker_mode       = 'medium' === $category_showcase['ticket_mode'] ? 1 : ( 'slow' === $category_showcase['ticket_mode'] ? .5 : 2 );

		// Added latter.
		$content_placement = $category_showcase['content_placement'] ?? 'bottom';
		$content_position  = $category_showcase['slide_content_position'] ?? 'center_center';
		?>

		<div class="splide wcc-showcase-<?php echo esc_attr( $post_id ); ?> <?php echo esc_attr( $slider_class_list ); ?>" id="wcc-showcase-<?php echo esc_attr( $post_id ); ?>" data-splide='<?php echo esc_attr( $slider_config ); ?>' data-ticker='{"isTicker":<?php echo esc_attr( $is_ticker ); ?>, "tickerDirection":<?php echo esc_attr( $ticker_direction ); ?>, "tickerSpeed":<?php echo esc_attr( $ticker_mode ); ?>}' data-grid='{"rows": <?php echo esc_attr( $category_showcase['slider']['row'] ); ?>, "columns": <?php echo esc_attr( $category_showcase['slider']['column'] ); ?>, "laptop":<?php echo esc_attr( $category_showcase['column_breakpoint']['laptop'] ); ?>, "tablet":<?php echo esc_attr( $category_showcase['column_breakpoint']['tablet'] ); ?>, "mobile":<?php echo esc_attr( $category_showcase['column_breakpoint']['mobile'] ); ?> }' aria-label="<?php echo esc_attr( get_the_title( $post_id ) ); ?>">
					<div class="splide__track">
						<ul class="splide__list">
							<?php
							foreach ( $categories as $category ) {
								if ( 'all' === $category_showcase['category_filter'] ) {
									$category_details = Helpers::get_category_details( $category->term_id );
								} else {
									$category_details = Helpers::get_category_details( $category, $post_id );
								}
								?>
								<li class="splide__slide wcc-showcase-slide-item wccs-content__<?php echo sanitize_html_class( $content_placement ); ?> wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>" data-splide-interval="<?php echo esc_attr( $category_showcase['slide_speed'] ); ?>">
									<div class="wcc-showcase-slide-item__cat-thumbnails">
										<div class="wcc-showcase-slide-item__cat-thumbnails__image">
											<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
												<img class="slider-cat-image" src="<?php echo esc_url( $category_details['image_url'] ); ?>" alt="<?php echo esc_attr( $category_details['slug'] ); ?>">
											</a>
										</div>
									</div>
									<div class="wcc-showcase-slide-item__cat-details wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
										<div class="wccs-entry__content-inner">
											<?php if ( 'yes' === $category_showcase['show_category_icon'] && 'yes' === $category_details['is_icon'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-thumbnails__icon">
													<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
														<i class="<?php echo esc_url( $category_details['icon_name'] ); ?>"></i>
													</a>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['show_category_title'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-title">
													<?php printf( '<%s class="category-name"><a href="%s">%s</a></%s>', esc_attr( $category_showcase['font_category_title']['text_tag'] ), esc_url( $category_details['cat_link'] ), esc_attr( $category_details['custom_name'] ), esc_attr( $category_showcase['font_category_title']['text_tag'] ) ); ?>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['show_category_description'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-description">
													<p><?php echo esc_attr( $category_details['description'] ); ?></p>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['show_category_product_quantity'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-products">
													<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>"><?php printf( '%s Products', esc_attr( $category_details['total_count'] ) ); ?></a>
												</div>
											<?php } ?>
											<?php if ( ! empty( $category_details['child_categories'] && 'yes' === $category_showcase['show_subcategory_product_quantity'] ) ) { ?>
												<div class="wcc-showcase-slide-item__sub-cat">
													<ul class="wcc-showcase-slide-item__sub-cat__sub-cat-list">
														<?php foreach ( $category_details['child_categories'] as $child_category ) { ?>
															<li class="wcc-showcase-slide-item__sub-cat__sub-cat-list__item"><a href="<?php echo esc_url( $child_category['cat_link'] ); ?>"><?php printf( '%s (%s)', esc_attr( $child_category['name'] ), esc_attr( $child_category['total_product'] ) ); ?></a></li>
														<?php } ?>
													</ul>
												</div>
											<?php } ?>

											<?php if ( 'yes' === $category_showcase['show_custom_text'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-custom-text">
													<p><?php echo esc_attr( $category_details['custom_text'] ); ?></p>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['show_button'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-button">
													<a href="<?php echo esc_attr( $category_details['cat_link'] ); ?>" class="btn wccs-showcase-btn">
														<?php
														echo esc_attr( $category_showcase['button_text'] );
														?>
													</a>
												</div>
											<?php } ?>
										</div>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<div class="splide__arrows splide__arrows--ltr wcc-showcase__navigation">
						<button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide" aria-controls="splide01-track"></button>
						<button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide01-track"></button>
					</div>
					<div class="wcc-showcase__pagination">
						<ul class="splide__pagination"></ul>
					</div>
				</div>
		<?php
	}

	/**
	 * Get slider config
	 *
	 * @param array $category_showcase Category Showcase Settings Array.
	 *
	 * @return string
	 */
	protected function get_slider_config( $category_showcase ) {
		$slider_config = '{
		"perPage": 1,
		"perMove": 1,
		"type":"' . ( 'yes' === $category_showcase['slide_unlimited_loop'] ? 'loop' : 'slide' ) . '",
		"gap":"20px",
		"autoplay": ' . ( 'yes' !== $category_showcase['slide_is_ticker'] ? ( 'yes' === $category_showcase['slide_slideshow'] ? 'true' : 'false' ) : 'false' ) . ',
		"arrows": ' . ( 'yes' === $category_showcase['slide_navigation_arrow'] ? 'true' : 'false' ) . ',
		"pagination": ' . ( 'yes' === $category_showcase['slide_show_counter'] ? 'true' : 'false' ) . ',
		"rewind": true,
		"rewindSpeed": ' . ( ! empty( $category_showcase['slide_speed'] ) ? $category_showcase['slide_speed'] : '3000' ) . ',
		"speed": 1000,
		"interval": ' . ( ! empty( $category_showcase['slide_speed'] ) ? $category_showcase['slide_speed'] : '3000' ) . ',
		"drag":' . ( 'yes' === $category_showcase['slide_draggable_slide'] ? 'true' : 'false' ) . ',
		"pauseOnHover":' . ( 'yes' === $category_showcase['slide_stop_on_hover'] ? 'true' : 'false' ) . ',
		"releaseWheel":' . ( 'yes' === $category_showcase['slide_scroll_interaction'] ? 'true' : 'false' ) . ',
		"direction": "ltr",
		"wheel":false
		}';
		return $slider_config;
	}

	/**
	 * Get slider classes
	 *
	 * @param array $category_showcase Category Showcase Settings Array.
	 *
	 * @return string
	 */
	protected function get_slider_classes( $category_showcase ) {
		$slider_classes = '';
		if ( 'yes' === $category_showcase['slide_navigation_arrow'] ) {
			$slider_classes .= 'is--arrow';
			$slider_classes .= 'arrow' === $category_showcase['slide_arrow_style'] ? '' : ' is--navigation-chevron';
			$slider_classes .= 'default' === $category_showcase['slider_navigation_position'] ? '' : ' is--navigation-' . $category_showcase['slider_navigation_position'];
			$slider_classes .= $category_showcase['slide_button_style'] ? ' is--' . $category_showcase['slide_button_style'] : '';
		}

		if ( 'yes' === $category_showcase['slide_show_counter'] ) {
			$slider_classes .= ' is-pagination';
			$slider_classes .= 'dots' === $category_showcase['slide_counter_style'] ? ' ' : ( 'dashes' === $category_showcase['slide_counter_style'] ? ' is--pagination-only-dashes' : ' is--pagination-dash-with-dots' );
		}

		if ( 'yes' === $category_showcase['show_button'] ) {
			$slider_classes .= ' is-button-' . $category_showcase['button_style'];
		}
		return $slider_classes;
	}
}
