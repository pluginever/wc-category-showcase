<?php
/**
 * Get slider template.
 *
 * @since 2.1.0
 * @package WooCommerceCategoryShowcase
 */

?>

<div class="splide wcc-showcase-<?php echo esc_attr( $wccs_id ); ?> <?php echo esc_attr( $slider_class_list ); ?>" id="wcc-showcase-<?php echo esc_attr( $wccs_id ); ?>" data-splide='<?php echo esc_attr( $slider_config ); ?>' data-ticker='{"isTicker":<?php echo esc_attr( $is_ticker ); ?>, "tickerDirection":<?php echo esc_attr( $ticker_direction ); ?>, "tickerSpeed":<?php echo esc_attr( $ticker_mode ); ?>}' data-grid='{"rows": <?php echo esc_attr( $showcase['slider']['row'] ); ?>, "columns": <?php echo esc_attr( $showcase['slider']['column'] ); ?>, "laptop":<?php echo esc_attr( $showcase['column_breakpoint']['laptop'] ); ?>, "tablet":<?php echo esc_attr( $showcase['column_breakpoint']['tablet'] ); ?>, "mobile":<?php echo esc_attr( $showcase['column_breakpoint']['mobile'] ); ?>, "gap":<?php echo esc_attr( $showcase['gap_between_cards'] ); ?> }' aria-label="<?php echo esc_attr( get_the_title( $wccs_id ) ); ?>">
	<div class="splide__track">
		<ul class="splide__list">
			<?php
			foreach ( $categories as $category_details ) {
				$ribbon_placement = ( 'left' === $showcase['content_alignment'] && 'top' === $content_placement ) ? 'right' : 'left';
				?>
				<li class="splide__slide wcc-showcase-slide-item text-<?php echo sanitize_html_class( $showcase['content_alignment'] ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?> wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>" data-splide-interval="<?php echo esc_attr( $showcase['slide_speed'] ); ?>">
					<?php if ( 'yes' === $category_details['is_label'] && ! empty( $category_details['label_text'] ) ) { ?>
						<div class="wcc-showcase-ribbon wcc-showcase-ribbon-<?php echo esc_attr( $category_details['label_color'] ); ?> wcc-showcase-ribbon-<?php echo esc_attr( $ribbon_placement ); ?>">
							<?php echo esc_attr( $category_details['label_text'] ); ?>
						</div>
						<?php
					}
					if ( 'yes' === $showcase['show_category_image'] ) {
						?>
						<div class="wcc-showcase-slide-item__cat-thumbnails">
							<div class="wcc-showcase-slide-item__cat-thumbnails__image">
								<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
									<img class="slider-cat-image" src="<?php echo esc_url( $category_details['image_url'] ); ?>" alt="<?php echo esc_attr( $category_details['slug'] ); ?>">
								</a>
							</div>
						</div>
					<?php } ?>
					<div class="wcc-showcase-slide-item__cat-details wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>">
						<div class="wccs-entry__content-inner">
							<?php if ( 'yes' === $showcase['show_category_icon'] && 'yes' === $category_details['is_icon'] ) { ?>
								<div class="wcc-showcase-slide-item__cat-thumbnails__icon">
									<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
										<i class="<?php echo esc_attr( $category_details['icon_name'] ); ?>"></i>
									</a>
								</div>
							<?php } ?>
							<?php if ( 'yes' === $showcase['show_category_title'] ) { ?>
								<div class="wcc-showcase-slide-item__cat-title">
									<?php printf( '<%s class="category-name"><a href="%s">%s</a></%s>', esc_attr( $showcase['font_category_title']['text_tag'] ), esc_url( $category_details['cat_link'] ), esc_attr( $category_details['custom_name'] ), esc_attr( $showcase['font_category_title']['text_tag'] ) ); ?>
								</div>
							<?php } ?>
							<?php if ( 'yes' === $showcase['show_category_description'] ) { ?>
								<div class="wcc-showcase-slide-item__cat-description">
									<p><?php echo esc_attr( $category_details['description'] ); ?></p>
								</div>
							<?php } ?>
							<?php if ( 'yes' === $showcase['show_category_product_quantity'] ) { ?>
								<div class="wcc-showcase-slide-item__cat-products">
									<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>"><?php printf( '%s Products', esc_attr( $category_details['total_count'] ) ); ?></a>
								</div>
							<?php } ?>
							<?php if ( ! empty( $category_details['child_categories'] && 'yes' === $showcase['includes_sub_categories'] ) ) { ?>
								<div class="wcc-showcase-slide-item__sub-cat">
									<ul class="wcc-showcase-slide-item__sub-cat__sub-cat-list">
										<?php foreach ( $category_details['child_categories'] as $child_category ) { ?>
											<li class="wcc-showcase-slide-item__sub-cat__sub-cat-list__item"><a href="<?php echo esc_url( $child_category['cat_link'] ); ?>"><?php printf( '%s %s', esc_attr( $child_category['name'] ), 'yes' === $showcase['show_subcategory_product_quantity'] ? '(' . esc_attr( $child_category['total_product'] ) . ')' : '' ); ?></a></li>
										<?php } ?>
									</ul>
								</div>
							<?php } ?>

							<?php if ( 'yes' === $showcase['show_custom_text'] ) { ?>
								<div class="wcc-showcase-slide-item__cat-custom-text">
									<p><?php echo esc_attr( $category_details['custom_text'] ); ?></p>
								</div>
							<?php } ?>
							<?php if ( 'yes' === $showcase['show_button'] ) { ?>
								<div class="wcc-showcase-slide-item__cat-button">
									<a href="<?php echo esc_attr( $category_details['cat_link'] ); ?>" class="btn wccs-showcase-btn">
										<?php
										echo esc_attr( $showcase['button_text'] );
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
