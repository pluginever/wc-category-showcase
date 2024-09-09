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
	 *
	 * @return string
	 * @since 2.0.5
	 */
	public function render_shortcode( $atts ) {
		$atts = shortcode_atts(
			array(
				'id' => null,
			),
			$atts,
			'wc_category_showcase'
		);

		if ( empty( $atts['id'] ) || false === get_post_status( $atts['id'] ) ) {
			return null;
		}

		wp_enqueue_style( 'wcc-showcase-showcase' );
		wp_enqueue_script( 'wcc-showcase-showcase' );

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

		// Enqueue the showcase inline styles.
		$styles = self::get_showcase_styles( $showcase, $wccs_id );
		$styles = apply_filters( 'wccs_showcase_styles', $styles, $showcase, $wccs_id );
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

		$content_placement = $showcase['content_placement'] ? $showcase['content_placement'] : 'center';
		$content_position  = $showcase['overlay_content_position'] ? $showcase['overlay_content_position'] : 'center_center';

		// Get category query args values.
		$hide_empty = isset( $showcase['hide_empty_categories'] ) && 'yes' === $showcase['hide_empty_categories'] ? true : false;
		if ( 'block' === $layout ) {
			$limit = isset( $showcase['category_display_limit'] ) ? absint( $showcase['category_display_limit'] ) : null;
		} else {
			$limit = isset( $showcase['number_of_grid_column'] ) ? absint( $showcase['number_of_grid_column'] ) : null;
		}

		if ( 'all' === $showcase['category_filter'] ) {
			$args       = array(
				'number'     => $limit,
				'hide_empty' => $hide_empty,
				'orderby'    => 'default' === $showcase['category_sort_order_by'] ? 'date' : $showcase['category_sort_order_by'],
				'order'      => $showcase['category_sort_order'],
			);
			$categories = Helpers::get_all_categories( $args );
		} else {
			$categories = isset( $showcase['specific_category_select'] ) ? $showcase['specific_category_select'] : array();
		}

		$categories = array_slice( $categories, 0, $limit, true );

		if ( ! empty( $categories ) ) {
			foreach ( $categories as $category ) {
				if ( 'all' === $showcase['category_filter'] ) {
					$category = Helpers::get_category_details( $category->term_id );
				} else {
					$category = Helpers::get_category_details( $category, $wccs_id );
				}

				$child_categories = $category['child_categories'];
				$ribbon_placement = ( 'left' === $showcase['content_alignment'] && 'top' === $content_placement ) ? 'right' : 'left';
				?>
			<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?> <?php printf( 'style="background: url(%s)"', esc_url( $category['image_url'] ) ); ?> <?php endif; ?>>
				<?php if ( 'yes' === $category['is_label'] && ! empty( $category['label_text'] ) ) { ?>
					<div class="wcc-showcase-ribbon wcc-showcase-ribbon-<?php echo esc_attr( $category['label_color'] ); ?> wcc-showcase-ribbon-<?php echo esc_attr( $ribbon_placement ); ?>">
						<?php echo esc_attr( $category['label_text'] ); ?>
					</div>
				<?php } ?>
				<?php if ( 'block' === $layout ) : ?>
					<div class="wccs-entry__head">
						<a href="<?php echo esc_url( $category['cat_link'] ); ?>"><img src="<?php echo esc_url( $category['image_url'] ); ?>" alt="<?php echo esc_html( $category['name'] ); ?>"></a>
					</div>
				<?php endif; ?>

				<div class="wccs-entry__content text-center wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
					<div class="wccs-entry__content-inner">
						<?php if ( 'yes' === $showcase['show_category_icon'] && 'yes' === $category['is_icon'] ) { ?>
							<?php printf( '<i class="category-icon %s"></i>', esc_attr( $category['icon_name'] ) ); ?>
						<?php } ?>
						<?php if ( 'yes' === $showcase['show_category_title'] ) { ?>
							<?php printf( '<%s class="category-name"><a href="%s">%s</a></%s>', esc_attr( $showcase['font_category_title']['text_tag'] ), esc_url( $category['cat_link'] ), esc_attr( $category['custom_name'] ), esc_attr( $showcase['font_category_title']['text_tag'] ) ); ?>
						<?php } ?>
						<?php if ( 'yes' === $showcase['show_category_description'] ) { ?>
							<p><?php echo esc_html( $category['description'] ); ?></p>
						<?php } ?>
						<?php if ( 'yes' === $showcase['show_category_product_quantity'] ) { ?>
							<p><a href="<?php echo esc_url( $category['cat_link'] ); ?>"><?php echo esc_html( $category['total_count'] . ' products' ); ?></a></p>
						<?php } ?>
						<?php if ( 'yes' === $showcase['show_subcategory_product_quantity'] && ! empty( $child_categories ) ) : ?>
							<ul class="wccs-subcategory__items">
								<?php
								foreach ( $child_categories as $child_category ) :
									printf( '<li class="wccs-subcategory__item"><a href="%1$s">%2$s <span>(%3$s)<span></a></li>', esc_url( $child_category['cat_link'] ), esc_html( $child_category['name'] ), esc_html( $child_category['total_product'] ) );
								endforeach;
								?>
							</ul>
						<?php endif; ?>

						<?php if ( 'yes' === $showcase['show_button'] ) { ?>
							<div class="wccs-card-button <?php echo 'yes' === $showcase['show_button_icon'] ? 'is-shop-now-icon' : ''; ?>">
								<a class="btn wccs-showcase-btn" href="<?php echo esc_url( $category['cat_link'] ); ?>">
									<?php
									echo esc_attr( $showcase['button_text'] );
									?>
								</a>
							</div>
						<?php } ?>
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
			$hide_empty = isset( $category_showcase['hide_empty_categories'] ) && 'yes' === $category_showcase['hide_empty_categories'] ? true : false;
			$args       = array(
				'hide_empty' => $hide_empty,
				'orderby'    => 'default' === $category_showcase['category_sort_order_by'] ? 'date' : $category_showcase['category_sort_order_by'],
				'order'      => $category_showcase['category_sort_order'],
			);
			$categories = Helpers::get_all_categories( $args );
		} else {
			$categories = isset( $category_showcase['category_list_item'] ) ? $category_showcase['category_list_item'] : array();
		}
		$categories = array_slice( $categories, 0, $category_showcase['category_display_limit'], true );

		$slider_class_list = $class_list;
		$slider_config     = $config;
		$is_ticker         = array_key_exists( 'slide_is_ticker', $category_showcase ) && 'yes' === $category_showcase['slide_is_ticker'] ? 'true' : 'false';
		$ticker_direction  = 'right_to_left' === $category_showcase['slider_ticker_direction'] ? 'true' : 'false';
		$ticker_mode       = 'medium' === $category_showcase['ticket_mode'] ? 1 : ( 'slow' === $category_showcase['ticket_mode'] ? .5 : 2 );

		// Added latter.
		$content_placement = $category_showcase['content_placement'] ? $category_showcase['content_placement'] : 'bottom';
		$content_position  = $category_showcase['overlay_content_position'] ? $category_showcase['overlay_content_position'] : 'center_center';
		?>

		<div class="splide wcc-showcase-<?php echo esc_attr( $post_id ); ?> <?php echo esc_attr( $slider_class_list ); ?>" id="wcc-showcase-<?php echo esc_attr( $post_id ); ?>" data-splide='<?php echo esc_attr( $slider_config ); ?>' data-ticker='{"isTicker":<?php echo esc_attr( $is_ticker ); ?>, "tickerDirection":<?php echo esc_attr( $ticker_direction ); ?>, "tickerSpeed":<?php echo esc_attr( $ticker_mode ); ?>}' data-grid='{"rows": <?php echo esc_attr( $category_showcase['slider']['row'] ); ?>, "columns": <?php echo esc_attr( $category_showcase['slider']['column'] ); ?>, "laptop":<?php echo esc_attr( $category_showcase['column_breakpoint']['laptop'] ); ?>, "tablet":<?php echo esc_attr( $category_showcase['column_breakpoint']['tablet'] ); ?>, "mobile":<?php echo esc_attr( $category_showcase['column_breakpoint']['mobile'] ); ?>, "gap":<?php echo esc_attr( $category_showcase['gap_between_cards'] ); ?> }' aria-label="<?php echo esc_attr( get_the_title( $post_id ) ); ?>">
					<div class="splide__track">
						<ul class="splide__list">
							<?php
							foreach ( $categories as $category ) {
								if ( 'all' === $category_showcase['category_filter'] ) {
									$category_details = Helpers::get_category_details( $category->term_id );
								} else {
									$category_details = Helpers::get_category_details( $category['cat_id'], $post_id );
								}
								$ribbon_placement = ( 'left' === $category_showcase['content_alignment'] && 'top' === $content_placement ) ? 'right' : 'left';
								?>
								<li class="splide__slide wcc-showcase-slide-item text-<?php echo sanitize_html_class( $category_showcase['content_alignment'] ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?> wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>" data-splide-interval="<?php echo esc_attr( $category_showcase['slide_speed'] ); ?>">
									<?php if ( 'yes' === $category_details['is_label'] && ! empty( $category_details['label_text'] ) ) { ?>
										<div class="wcc-showcase-ribbon wcc-showcase-ribbon-<?php echo esc_attr( $category_details['label_color'] ); ?> wcc-showcase-ribbon-<?php echo esc_attr( $ribbon_placement ); ?>">
											<?php echo esc_attr( $category_details['label_text'] ); ?>
										</div>
									<?php } ?>
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
														<i class="<?php echo esc_attr( $category_details['icon_name'] ); ?>"></i>
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
											<?php if ( ! empty( $category_details['child_categories'] && 'yes' === $category_showcase['includes_sub_categories'] ) ) { ?>
												<div class="wcc-showcase-slide-item__sub-cat">
													<ul class="wcc-showcase-slide-item__sub-cat__sub-cat-list">
														<?php foreach ( $category_details['child_categories'] as $child_category ) { ?>
															<li class="wcc-showcase-slide-item__sub-cat__sub-cat-list__item"><a href="<?php echo esc_url( $child_category['cat_link'] ); ?>"><?php printf( '%s %s', esc_attr( $child_category['name'] ), 'yes' === $category_showcase['show_subcategory_product_quantity'] ? '(' . esc_attr( $child_category['total_product'] ) . ')' : '' ); ?></a></li>
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
		"wheel":' . ( 'yes' === $category_showcase['slide_scroll_interaction'] ? 'true' : 'false' ) . '
		}';
		$slider_config = apply_filters( 'wcc_showcase_slider_config', $slider_config, $category_showcase );
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

		$slider_classes .= ' is-image-' . $category_showcase['image_layout'];

		if ( 'yes' === $category_showcase['show_button_icon'] ) {
			$slider_classes .= ' is-shop-now-icon';
		}
		if ( 'yes' === $category_showcase['image_zoom_on_hover'] ) {
			$slider_classes .= ' is-image-zoom-on-hover';
		}
		$slider_classes = apply_filters( 'wcc_showcase_slider_classes', $slider_classes, $category_showcase );
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
		$card_border_radius    = $showcase['border_radius'] ? $showcase['border_radius'] : '';
		$card_gap              = $showcase['gap_between_cards'] ? $showcase['gap_between_cards'] : '';
		$card_gap              = $card_gap / 16;

		$card_content_padding        = $showcase['content_padding'] ? $showcase['content_padding'] : '';
		$card_content_padding_is_all = 'yes' === $showcase['content_padding_is_all'] ? $showcase['content_padding_is_all'] : 'no';
		if ( 'yes' === $card_content_padding_is_all ) {
			$content_padding_top    = $showcase['content_padding_all']['top'] ? $showcase['content_padding_all']['top'] : '';
			$content_padding_right  = $showcase['content_padding_all']['right'] ? $showcase['content_padding_all']['right'] : '';
			$content_padding_bottom = $showcase['content_padding_all']['bottom'] ? $showcase['content_padding_all']['bottom'] : '';
			$content_padding_left   = $showcase['content_padding_all']['left'] ? $showcase['content_padding_all']['left'] : '';
		} else {
			$content_padding_top    = $card_content_padding;
			$content_padding_right  = $card_content_padding;
			$content_padding_bottom = $card_content_padding;
			$content_padding_left   = $card_content_padding;
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
				border-radius: {$card_border_radius}px;
				transition: 0.3s;
			}
			.wccs-showcase-id__{$wccs_id} .wccs-entry__content {
				border-radius: {$card_border_radius}px;
			}

			.wccs-showcase-id__{$wccs_id} .wccs-entry__content-inner p, .wccs-showcase-id__{$wccs_id} .wccs-entry__content-inner a {
				color: {$card_text_hover_color};
			}
			.wcc-showcase-{$wccs_id} .wcc-showcase-slide-item a, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item p{
				color: {$card_text_color};
			}
			.wcc-showcase-{$wccs_id} .wcc-showcase-slide-item:hover a, .wcc-showcase-{$wccs_id} .wcc-showcase-slide-item:hover p{
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
			.wcc-showcase-{$wccs_id} .splide__pagination__page{
				background-color: {$counter_bg};
				color: {$counter_text};
			}
			.wcc-showcase-{$wccs_id} .wcc-showcase-slide-item .slider-cat-image{
				border-top-left-radius: {$card_border_radius}px !important;
				border-top-right-radius: {$card_border_radius}px !important;
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
				border: 1px solid {$shop_now_btn_border_color};
				color: {$shop_now_btn_text_color};
			}
			.wcc-showcase-{$wccs_id} .wccs-showcase-btn:hover, .wccs-showcase-id__{$wccs_id} .wccs-showcase-btn:hover{
				background-color: {$shop_now_btn_hover_bg} !important;
				border: 1px solid {$shop_now_btn_border_hover_color} !important;
				color: {$shop_now_btn_hover_text_color} !important;
			}

			.wccs-categories__{$wccs_id} .wcc-showcase-slide-item__cat-details {
				padding: {$content_padding_top}px {$content_padding_right}px {$content_padding_bottom}px {$content_padding_left}px;
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
