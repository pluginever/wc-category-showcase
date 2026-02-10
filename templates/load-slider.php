<?php
/**
 * Get slider template.
 *
 * @since 2.1.0
 * @package WooCommerceCategoryShowcase
 * @var array $showcase The showcase data.
 * @var array $categories The categories data.
 * @var string $slider_class_list The slider class list.
 * @var string $slider_config The slider config.
 * @var int $wccs_id The showcase ID.
 * @var int $is_ticker The ticker status.
 * @var int $ticker_direction The ticker direction.
 * @var int $ticker_mode The ticker mode.
 * @var string $content_placement The content placement.
 * @var string $content_position The content position.
 */

use WooCommerceCategoryShowcase\Controllers\Helpers;

?>
<div class="splide wccs-category wcc-showcase-<?php echo esc_attr( $wccs_id ); ?> <?php echo esc_attr( $slider_class_list ); ?>" id="wcc-showcase-<?php echo esc_attr( $wccs_id ); ?>" data-splide='<?php echo esc_attr( $slider_config ); ?>' data-ticker='{"isTicker":<?php echo esc_attr( $is_ticker ); ?>, "tickerDirection":<?php echo esc_attr( $ticker_direction ); ?>, "tickerSpeed":<?php echo esc_attr( $ticker_mode ); ?>}' data-grid='{"rows": <?php echo esc_attr( $showcase['slider']['row'] ); ?>, "columns": <?php echo esc_attr( $showcase['slider']['column'] ); ?>, "laptop":<?php echo esc_attr( $showcase['column_breakpoint']['laptop'] ); ?>, "tablet":<?php echo esc_attr( $showcase['column_breakpoint']['tablet'] ); ?>, "mobile":<?php echo esc_attr( $showcase['column_breakpoint']['mobile'] ); ?>, "gap":<?php echo esc_attr( $showcase['gap_between_cards'] ); ?> }' aria-label="<?php echo esc_attr( get_the_title( $wccs_id ) ); ?>">
	<div class="splide__track">
		<ul class="splide__list">
			<?php
			foreach ( $categories as $category_details ) :
				$has_image        = 'yes' === $showcase['show_category_image'] && ! empty( $category_details['image_url'] ) ? 'has-image' : 'has-no-image';
				$ribbon_placement = ( 'left' === $showcase['content_alignment'] && 'top' === $content_placement ) ? 'right' : 'left';
				?>
				<li class="splide__slide wcc-showcase-slide-item text-<?php echo sanitize_html_class( $showcase['content_alignment'] ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?> wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?>" data-splide-interval="<?php echo esc_attr( $showcase['slide_speed'] ); ?>">
					<?php if ( ! empty( $category_details['label_text'] ) ) { ?>
						<div class="wcc-showcase-ribbon wcc-showcase-ribbon-<?php echo esc_attr( $category_details['label_color'] ); ?> wcc-showcase-ribbon-<?php echo esc_attr( $ribbon_placement ); ?>">
							<?php echo esc_attr( $category_details['label_text'] ); ?>
						</div>
						<?php
					}
					if ( 'has-image' === $has_image ) {
						?>
						<div class="wcc-showcase-slide-item__cat-thumbnails">
							<div class="wcc-showcase-slide-item__cat-thumbnails__image">
								<a href="<?php echo esc_url( $category_details['cat_link'] ); ?>">
									<img class="slider-cat-image" src="<?php echo esc_url( $category_details['image_url'] ); ?>" alt="<?php echo esc_attr( $category_details['slug'] ); ?>">
								</a>
							</div>
						</div>
					<?php } ?>
					<div class="wcc-showcase-slide-item__cat-details wccs-content-position__<?php echo sanitize_html_class( $content_position ); ?> <?php echo sanitize_html_class( $has_image ); ?>">
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
							<?php if ( 'yes' === wccs_get_showcase_data( $showcase, 'show_button' ) ) { ?>
								<div class="wccs-card-button <?php echo 'yes' === wccs_get_showcase_data( $showcase, 'show_button_icon' ) ? 'is-shop-now-icon' : ''; ?>">
									<a class="btn wccs-category__btn wccs-showcase-btn <?php echo sanitize_html_class( wccs_get_showcase_data( $showcase, 'button_style' ) ); ?>" href="<?php echo esc_url( $category_details['cat_link'] ); ?>"><?php echo esc_html( wccs_get_showcase_data( $showcase, 'button_text' ) ); ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<?php
if ( array_key_exists( 'enable_additional_category', $showcase ) && 'yes' === $showcase['enable_additional_category'] ) {
	// Get the selected categories.
	$categories = Helpers::get_additional_categories( $showcase, $wccs_id );

	$layout            = 'grid'; // Overwrite the layout for additional categories to grid.
	$content_placement = $showcase['content_placement'] ? $showcase['content_placement'] : 'center';
	$content_position  = $showcase['overlay_content_position'] ? $showcase['overlay_content_position'] : 'center_center';

	// Slice array to make it 6 categories.
	$categories_count = count( $categories );
	if ( $categories_count > 6 ) {
		$categories = array_slice( $categories, 0, 6 );
	}

	echo '<div class="wccs-additional-categories wccs-categories_' . esc_attr( $categories_count ) . '">';
	if ( ! empty( $categories ) ) {
		foreach ( $categories as $category ) {
			$child_categories = $category['child_categories'];
			$ribbon_placement = ( 'left' === $showcase['content_alignment'] && 'top' === $content_placement ) ? 'right' : 'left';

			include WCCS_TEMPLATES_URL . 'load-block-grid.php';
		}
	}
	echo '</div>';
}
