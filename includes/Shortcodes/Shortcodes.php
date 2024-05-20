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

		wp_enqueue_style( 'wcc-showcase-showcase' );
		wp_enqueue_script( 'wcc-showcase-showcase' );

		$post_id           = intval( $attr['id'] );
		$category_showcase = Helpers::get_slider_settings( $post_id );

		$block_count = 'block' === $category_showcase['wcc_showcase_layout'] ? $category_showcase['wcc_showcase_number_of_block_column'] : $category_showcase['wcc_showcase_number_of_grid_column'];
		$categories  = $category_showcase['wcc_showcase_specific_category_select'];
		?>
		<div class="wcc-showcase-slider">
			<div class="wcc-showcase__slider-heading">
				<h2><?php echo esc_attr( $category_showcase['wcc_showcase_section_title'] ); ?></h2>
				<p><?php echo esc_attr( $category_showcase['wcc_showcase_section_description'] ); ?></p>
			</div>
			<div>
				<section class="splide" data-splide='{"type":"loop","perPage":<?php echo esc_attr( $block_count ); ?>,"gap":"24px"}' aria-label="<?php echo esc_attr( get_the_title( $post_id ) ); ?>">
					<div class="splide__track">
						<ul class="splide__list">
							<?php foreach ( $categories as $category_id ) { ?>
							<li class="splide__slide wcc-showcase-item" data-splide-interval="<?php echo esc_attr( $category_showcase['wcc_showcase_slide_speed'] ); ?>">
								<div class="wcc-showcase-item__cat-thumbnails">
									<div class="wcc-showcase-item__cat-thumbnails__image">
										<a href="#">
											<img class="" src="<?php echo esc_url( WC_CATEGORY_SHOWCASE_ASSETS_URL . 'images/category-placeholder-image.jpg' ); ?>" alt="<?php echo esc_attr( $category_id ); ?>">
										</a>
									</div>
									<div class="wcc-showcase-item__cat-thumbnails__icon">
										<a href="#">
											<img  src="<?php echo esc_url( WC_CATEGORY_SHOWCASE_ASSETS_URL . 'images/category-placeholder-icon.jpg' ); ?>" alt="<?php echo esc_attr( $category_id ); ?>">
										</a>
									</div>
								</div>
								<div class="wcc-showcase-item__cat-details">
									<div class="wcc-showcase-item__cat-products">
										<a href="<?php echo esc_attr( get_category_link( $category_id ) ); ?>"><?php echo esc_attr( '316 Products' ); ?></a>
									</div>
									<div class="wcc-showcase-item__cat-title">
										<h3><?php echo esc_attr( Helpers::get_category_details( $category_id ) ); ?></h3>
									</div>
									<div class="wcc-showcase-item__cat-label">
										<p><?php esc_html_e( '27 Products', 'wc-category-showcase' ); ?></p>
									</div>
									<div class="wcc-showcase-item__cat-button">
										<a href="<?php echo esc_attr( get_category_link( $category_id ) ); ?>">
											<?php echo esc_attr( $category_showcase['wcc_showcase_button_text'] ); ?>
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M14.4192 6.35859C14.1263 6.06569 13.6515 6.06569 13.3586 6.35859C13.0657 6.65148 13.0657 7.12635 13.3586 7.41925L14.4192 6.35859ZM17 10L17.5303 10.5304C17.8232 10.2375 17.8232 9.76259 17.5303 9.4697L17 10ZM13.3586 12.5808C13.0657 12.8737 13.0657 13.3486 13.3586 13.6415C13.6515 13.9344 14.1263 13.9344 14.4192 13.6415L13.3586 12.5808ZM3 9.25003C2.58579 9.25003 2.25 9.58581 2.25 10C2.25 10.4142 2.58579 10.75 3 10.75L3 9.25003ZM13.3586 7.41925L16.4697 10.5304L17.5303 9.4697L14.4192 6.35859L13.3586 7.41925ZM16.4697 9.4697L13.3586 12.5808L14.4192 13.6415L17.5303 10.5304L16.4697 9.4697ZM17 9.25003L3 9.25003L3 10.75L17 10.75V9.25003Z" fill="#1F2937"/>
											</svg>
										</a>
									</div>
								</div>
							</li>
						<?php } ?>
						</ul>
					</div>
					<div class="splide__arrows splide__arrows--ltr wcc-showcase__slide-arrow">
						<button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide" aria-controls="splide01-track"></button>
						<button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide01-track"></button>
					</div>
				</section>
			</div>
		</div>
		<?php
	}

	/**
	 * Get slider settings
	 *
	 * @param int $post_id Category Showcase ID.
	 *
	 * @return void
	 */
	protected function get_slider_config( $post_id ) {
		// TODO: slider config will be write here.
	}
}
