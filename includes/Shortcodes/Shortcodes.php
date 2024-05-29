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
		add_shortcode( 'wccs_showcase', array( $this, 'shortcode_render_callback' ) );
	}

	/**
	 * Slider shortcode render callback.
	 *
	 * @param array $attr Shortcode parameters.
	 *
	 * @return mixed
	 * @since 1.0.0
	 */
	public function shortcode_render_callback( $attr ) {
		$attr = wp_parse_args( $attr, array( 'id' => null ) );

		if ( null === $attr['id'] ) {
			return;
		}
		if ( false === get_post_status( $attr['id'] ) ) {
			return;
		}

		$post_id           = intval( $attr['id'] );
		$category_showcase = Helpers::get_slider_settings( $post_id );

		$block_count = 'block' === $category_showcase['wcc_showcase_layout'] ? $category_showcase['wcc_showcase_number_of_block_column'] : $category_showcase['wcc_showcase_number_of_grid_column'];
		$categories  = $category_showcase['wcc_showcase_specific_category_select'];

		$slider_class_list = self::get_slider_classes( $category_showcase );
		$slider_config     = self::get_slider_config( $category_showcase );

		?>
		<div class="wcc-showcase-slider-<?php echo esc_attr( $post_id ); ?> <?php echo sanitize_html_class( $slider_class_list ); ?> is_content_top_left">
			<?php if ( 'yes' === $category_showcase['wcc_showcase_show_section_title'] || 'yes' === $category_showcase['wcc_showcase_show_section_description'] ) { ?>
				<div class="wcc-showcase__slider-heading">
					<?php if ( 'yes' === $category_showcase['wcc_showcase_show_section_title'] ) { ?>
						<h2><?php echo esc_attr( $category_showcase['wcc_showcase_section_title'] ); ?></h2>
					<?php } ?>
					<?php if ( 'yes' === $category_showcase['wcc_showcase_show_section_description'] ) { ?>
						<p><?php echo esc_attr( $category_showcase['wcc_showcase_section_description'] ); ?></p>
					<?php } ?>
				</div>
			<?php } ?>
			<div class="wcc-showcase__slider-body">
				<section class="splide wcc-showcase-<?php echo esc_attr( $post_id ); ?>" id="wcc-showcase-<?php echo esc_attr( $post_id ); ?>" data-splide='<?php echo esc_attr( $slider_config ); ?>' data-grid='{"rows": <?php echo esc_attr( $category_showcase['wcc_showcase_slider']['row'] ); ?>, "columns": <?php echo esc_attr( $category_showcase['wcc_showcase_slider']['column'] ); ?>, "laptop":<?php echo esc_attr( $category_showcase['wcc_showcase_column_breakpoint']['laptop'] ); ?>, "tablet":<?php echo esc_attr( $category_showcase['wcc_showcase_column_breakpoint']['tablet'] ); ?>, "mobile":<?php echo esc_attr( $category_showcase['wcc_showcase_column_breakpoint']['mobile'] ); ?> }' aria-label="<?php echo esc_attr( get_the_title( $post_id ) ); ?>">
					<div class="splide__track">
						<ul class="splide__list">
							<?php
							foreach ( $categories as $category_id ) {
								$category_details = Helpers::get_category_details( $category_id )
								?>
								<li class="splide__slide wcc-showcase-slide-item" data-splide-interval="<?php echo esc_attr( $category_showcase['wcc_showcase_slide_speed'] ); ?>">
									<div class="wcc-showcase-slide-item__cat-thumbnails">
										<div class="wcc-showcase-slide-item__cat-thumbnails__image">
											<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
												<img class="slider-cat-image" src="<?php echo esc_url( $category_details['image_url'] ); ?>" alt="<?php echo esc_attr( $category_details['slug'] ); ?>">
											</a>
										</div>
									</div>
									<div class="wcc-showcase-slide-item__cat-details">
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
												<a href="<?php echo esc_attr( $category_details['cat_link'] ); ?>">
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
				</section>
			</div>
		</div>
		<?php
		wp_enqueue_style( 'wcc-showcase-showcase' );
		wp_enqueue_script( 'wcc-showcase-showcase' );
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
		"wheel":false,
		"autoScroll":false
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
