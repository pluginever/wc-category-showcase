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

		$layout        = isset( $showcase['wcc_showcase_layout'] ) ? $showcase['wcc_showcase_layout'] : 'slider';
		$layout_option = '';

		if ( 'block' === $layout ) {
			$layout_option = isset( $showcase['wcc_showcase_block_column'] ) ? 'column__x' . $showcase['wcc_showcase_block_column'] : 'column__x1';
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

		$content_placement = $showcase['wcc_showcase_content_placement'] ?? 'top';
		$content_position  = $showcase['wcc_showcase_overlay_content_position'] ?? 'center_center';
		$thumbnail_img     = WC_CATEGORY_SHOWCASE_ASSETS_URL . 'images/category-placeholder-img1.png';

		$count = isset( $showcase['wcc_showcase_block_column'] ) ? absint( $showcase['wcc_showcase_block_column'] ) : null;

		if ( 'all' === $showcase['wcc_showcase_category_filter'] ) {
			$categories = Helpers::get_all_categories( $count );
		} else {
			$categories = isset( $category_showcase['wcc_showcase_specific_category_select'] ) ? $category_showcase['wcc_showcase_specific_category_select'] : array();
		}

		foreach ( $categories as $category ) {
			$category         = Helpers::get_category_details( $category );
			$child_categories = $category['child_categories'];
			?>
			<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?>style="background: url('<?php echo esc_url( $thumbnail_img ); ?>')" <?php endif; ?>>

				<?php if ( 'block' === $layout ) : ?>
					<div class="wccs-entry__head">
						<a href="<?php echo esc_url( $category['cat_link'] ); ?>"><img src="<?php echo esc_url( $category['image_url'] ); ?>" alt="<?php echo esc_html( $category['name'] ); ?>"></a>
					</div>
				<?php endif; ?>

				<div class="wccs-entry__content text-center wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
					<div class="wccs-entry__content-inner">
						<h3><?php echo esc_html( $category['name'] ); ?></h3>
						<p><?php echo esc_html( $category['description'] ); ?></p>
						<p><a href="<?php echo esc_url( $category['cat_link'] ); ?>"><?php echo esc_html( $category['total_count'] . ' products' ); ?></a></p>
						<div class="wccs-card-button">
							<a class="btn wccs-showcase-btn" href="<?php echo esc_url( $category['cat_link'] ); ?>"><span>Shop Now ⟶</span></a>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}

	/**
	 * Get slider content html.
	 *
	 * @param int    $wccs_id Showcase ID.
	 * @param string $layout Current layout.
	 * @param array  $showcase Array of showcase data.
	 * @param string $class_list Slider class list.
	 * @param string $config Slider config.
	 */
	public static function get_slider_content_html( $wccs_id, $layout, $showcase, $class_list, $config ) {

		$post_id           = $wccs_id;
		$category_showcase = $showcase;
		if ( 'all' === $category_showcase['wcc_showcase_category_filter'] ) {
			$categories = Helpers::get_all_categories();
		} else {
			$categories = isset( $category_showcase['wcc_showcase_specific_category_select'] ) ? $category_showcase['wcc_showcase_specific_category_select'] : array();
		}
		$slider_class_list = $class_list;
		$slider_config     = $config;
		$is_ticker         = array_key_exists( 'wcc_showcase_slide_is_ticker', $category_showcase ) && 'yes' === $category_showcase['wcc_showcase_slide_is_ticker'] ? 'true' : 'false';
		$ticker_direction  = 'right_to_left' === $category_showcase['wcc_showcase_slider_ticker_direction'] ? 'true' : 'false';
		$ticker_mode       = 'medium' === $category_showcase['wcc_showcase_ticket_mode'] ? 1 : ( 'slow' === $category_showcase['wcc_showcase_ticket_mode'] ? .5 : 2 );

		// Added latter.
		$content_placement = $showcase['content_placement'] ?? 'bottom';
		$content_position  = $category_showcase['slide_content_position'] ?? 'center_center';
		?>

		<div class="splide wcc-showcase-<?php echo esc_attr( $post_id ); ?> <?php echo esc_attr( $slider_class_list ); ?>" id="wcc-showcase-<?php echo esc_attr( $post_id ); ?>" data-splide='<?php echo esc_attr( $slider_config ); ?>' data-ticker='{"isTicker":<?php echo esc_attr( $is_ticker ); ?>, "tickerDirection":<?php echo esc_attr( $ticker_direction ); ?>, "tickerSpeed":<?php echo esc_attr( $ticker_mode ); ?>}' data-grid='{"rows": <?php echo esc_attr( $category_showcase['wcc_showcase_slider']['row'] ); ?>, "columns": <?php echo esc_attr( $category_showcase['wcc_showcase_slider']['column'] ); ?>, "laptop":<?php echo esc_attr( $category_showcase['wcc_showcase_column_breakpoint']['laptop'] ); ?>, "tablet":<?php echo esc_attr( $category_showcase['wcc_showcase_column_breakpoint']['tablet'] ); ?>, "mobile":<?php echo esc_attr( $category_showcase['wcc_showcase_column_breakpoint']['mobile'] ); ?> }' aria-label="<?php echo esc_attr( get_the_title( $post_id ) ); ?>">
					<div class="splide__track">
						<ul class="splide__list ajsFCDwhesvcusds">
							<?php
							foreach ( $categories as $category_id ) {
								$category_details = Helpers::get_category_details( $category_id )
								?>
								<li class="splide__slide wcc-showcase-slide-item wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" data-splide-interval="<?php echo esc_attr( $category_showcase['wcc_showcase_slide_speed'] ); ?>">
									<div class="wcc-showcase-slide-item__cat-thumbnails">
										<div class="wcc-showcase-slide-item__cat-thumbnails__image">
											<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
												<img class="slider-cat-image" src="<?php echo esc_url( $category_details['image_url'] ); ?>" alt="<?php echo esc_attr( $category_details['slug'] ); ?>">
											</a>
										</div>
									</div>
									<div class="wcc-showcase-slide-item__cat-details wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
										<div class="wccs-entry__content-inner">
											<?php if ( 'yes' === $category_showcase['wcc_showcase_show_category_icon'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-thumbnails__icon">
													<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
														<img  src="<?php echo esc_url( $category_details['icon_url'] ); ?>" alt="<?php echo esc_attr( $category_details['slug'] ); ?>">
													</a>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['wcc_showcase_show_category_title'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-title">
													<h3><a href="<?php echo esc_url( $category_details['cat_link'] ); ?>"><?php echo esc_attr( $category_details['name'] ); ?></a></h3>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['wcc_showcase_show_category_description'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-description">
													<p><?php echo esc_attr( $category_details['description'] ); ?></p>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['wcc_showcase_show_category_product_quantity'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-products">
													<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>"><?php printf( '%s Products', esc_attr( $category_details['total_count'] ) ); ?></a>
												</div>
											<?php } ?>
											<?php if ( ! empty( $category_details['child_categories'] && 'yes' === $category_showcase['wcc_showcase_show_subcategory_product_quantity'] ) ) { ?>
												<div class="wcc-showcase-slide-item__sub-cat">
													<ul class="wcc-showcase-slide-item__sub-cat__sub-cat-list">
														<?php foreach ( $category_details['child_categories'] as $child_category ) { ?>
															<li class="wcc-showcase-slide-item__sub-cat__sub-cat-list__item"><a href="<?php echo esc_url( $child_category['cat_link'] ); ?>"><?php printf( '%s (%s)', esc_attr( $child_category['name'] ), esc_attr( $child_category['total_product'] ) ); ?></a></li>
														<?php } ?>
													</ul>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['wcc_showcase_show_custom_text'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-custom-text">
													<p><?php echo esc_attr( $category_details['custom_text'] ); ?></p>
												</div>
											<?php } ?>
											<?php if ( 'yes' === $category_showcase['wcc_showcase_show_button'] ) { ?>
												<div class="wcc-showcase-slide-item__cat-button">
													<a href="<?php echo esc_attr( $category_details['cat_link'] ); ?>" class="btn wccs-showcase-btn">
														<?php
														echo esc_attr( $category_showcase['wcc_showcase_button_text'] );
														if ( 'yes' === $category_showcase['wcc_showcase_show_button_icon'] ) {
															?>
															<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
																<path d="M14.4192 6.35859C14.1263 6.06569 13.6515 6.06569 13.3586 6.35859C13.0657 6.65148 13.0657 7.12635 13.3586 7.41925L14.4192 6.35859ZM17 10L17.5303 10.5304C17.8232 10.2375 17.8232 9.76259 17.5303 9.4697L17 10ZM13.3586 12.5808C13.0657 12.8737 13.0657 13.3486 13.3586 13.6415C13.6515 13.9344 14.1263 13.9344 14.4192 13.6415L13.3586 12.5808ZM3 9.25003C2.58579 9.25003 2.25 9.58581 2.25 10C2.25 10.4142 2.58579 10.75 3 10.75L3 9.25003ZM13.3586 7.41925L16.4697 10.5304L17.5303 9.4697L14.4192 6.35859L13.3586 7.41925ZM16.4697 9.4697L13.3586 12.5808L14.4192 13.6415L17.5303 10.5304L16.4697 9.4697ZM17 9.25003L3 9.25003L3 10.75L17 10.75V9.25003Z"/>
															</svg>
														<?php } ?>
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
		"type":"' . ( 'yes' === $category_showcase['wcc_showcase_slide_unlimited_loop'] ? 'loop' : 'slide' ) . '",
		"gap":"20px",
		"autoplay": ' . ( 'yes' === $category_showcase['wcc_showcase_slide_slideshow'] ? 'true' : 'false' ) . ',
		"arrows": ' . ( 'yes' === $category_showcase['wcc_showcase_slide_navigation_arrow'] ? 'true' : 'false' ) . ',
		"pagination": ' . ( 'yes' === $category_showcase['wcc_showcase_slide_show_counter'] ? 'true' : 'false' ) . ',
		"rewind": true,
		"rewindSpeed": ' . ( ! empty( $category_showcase['wcc_showcase_slide_speed'] ) ? $category_showcase['wcc_showcase_slide_speed'] : '3000' ) . ',
		"speed": 1000,
		"interval": ' . ( ! empty( $category_showcase['wcc_showcase_slide_speed'] ) ? $category_showcase['wcc_showcase_slide_speed'] : '3000' ) . ',
		"drag":' . ( 'yes' === $category_showcase['wcc_showcase_slide_draggable_slide'] ? 'true' : 'false' ) . ',
		"pauseOnHover":' . ( 'yes' === $category_showcase['wcc_showcase_slide_stop_on_hover'] ? 'true' : 'false' ) . ',
		"releaseWheel":' . ( 'yes' === $category_showcase['wcc_showcase_slide_scroll_interaction'] ? 'true' : 'false' ) . ',
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
		if ( 'yes' === $category_showcase['wcc_showcase_slide_navigation_arrow'] ) {
			$slider_classes .= 'is--arrow';
			$slider_classes .= 'arrow' === $category_showcase['wcc_showcase_slide_arrow_style'] ? '' : ' is--navigation-chevron';
			$slider_classes .= 'default' === $category_showcase['wcc_showcase_slider_navigation_position'] ? '' : ' is--navigation-' . $category_showcase['wcc_showcase_slider_navigation_position'];
		}

		if ( 'yes' === $category_showcase['wcc_showcase_slide_show_counter'] ) {
			$slider_classes .= ' is-pagination';
			$slider_classes .= 'dots' === $category_showcase['wcc_showcase_slide_counter_style'] ? ' ' : ( 'dashes' === $category_showcase['wcc_showcase_slide_counter_style'] ? ' is--pagination-only-dashes' : ' is--pagination-dash-with-dots' );
		}

		if ( 'yes' === $category_showcase['wcc_showcase_show_button'] ) {
			$slider_classes .= ' is-button-' . $category_showcase['wcc_showcase_button_style'];
		}
		return $slider_classes;
	}
}
