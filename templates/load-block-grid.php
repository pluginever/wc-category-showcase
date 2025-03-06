<?php
/**
 * Get block and grid template.
 *
 * @since 2.1.0
 * @package WooCommerceCategoryShowcase
 * @var array $category          Category data.
 * @var array $showcase          Showcase data.
 * @var array $child_categories  Child categories.
 * @var string $content_placement Content placement.
 * @var string $content_position  Content position.
 * @var string $layout            Layout.
 * @var string $ribbon_placement  Ribbon placement.
 * @var string $wccs_id           Showcase ID.
 */

?>
<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout && 'yes' === $showcase['show_category_image'] ) : ?> <?php printf( 'style="background: url(%s)"', esc_url( $category['image_url'] ) ); ?> <?php endif; ?>>
	<?php if ( 'yes' === $category['is_label'] && ! empty( $category['label_text'] ) ) { ?>
		<div class="wcc-showcase-ribbon wcc-showcase-ribbon-<?php echo esc_attr( $category['label_color'] ); ?> wcc-showcase-ribbon-<?php echo esc_attr( $ribbon_placement ); ?>">
			<?php echo esc_attr( $category['label_text'] ); ?>
		</div>
	<?php } ?>
	<?php if ( 'block' === $layout ) : ?>
		<div class="wccs-entry__head">
			<a href="<?php echo esc_url( $category['cat_link'] ); ?>">
				<img class="wccs-entry__image" src="<?php echo esc_url( $category['image_url'] ); ?>" alt="<?php echo esc_attr( $category['slug'] ); ?>">
			</a>
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
			<?php if ( 'yes' === get_showcase_data( $showcase, 'includes_sub_categories' ) && ! empty( $child_categories ) ) : ?>
				<ul class="wccs-subcategory__items">
					<?php
					foreach ( $child_categories as $child_category ) :
						if ( is_array( $child_category ) && empty( $child_category['cat_link'] ) && empty( $child_category['name'] ) ) {
							continue;
						}

						printf(
							'<li class="wccs-subcategory__item"><a href="%1$s">%2$s%3$s</a></li>',
							esc_url( $child_category['cat_link'] ),
							esc_html( $child_category['name'] ),
							'yes' === get_showcase_data( $showcase, 'show_subcategory_product_quantity' ) ? '<span> (' . esc_html( $child_category['total_product'] ) . ')<span>' : ''
						);
					endforeach;
					?>
				</ul>
			<?php endif; ?>

			<?php if ( 'yes' === get_showcase_data( $showcase, 'show_custom_text' ) && isset( $category['custom_text'] ) ) { ?>
				<div class="wcc-showcase-custom-text">
					<p><?php echo esc_attr( $category['custom_text'] ); ?></p>
				</div>
			<?php } ?>

			<?php if ( 'yes' === get_showcase_data( $showcase, 'show_button' ) ) { ?>
				<div class="wccs-card-button <?php echo 'yes' === get_showcase_data( $showcase, 'show_button_icon' ) ? 'is-shop-now-icon' : ''; ?>">
					<a class="btn wccs-category__btn wccs-showcase-btn <?php echo sanitize_html_class( get_showcase_data( $showcase, 'button_style' ) ); ?>" href="<?php echo esc_url( $category['cat_link'] ); ?>"><?php echo esc_html( get_showcase_data( $showcase, 'button_text' ) ); ?></a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

