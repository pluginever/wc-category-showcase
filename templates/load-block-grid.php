<?php
/**
 * Get block and grid template.
 *
 * @since 2.1.0
 * @package WooCommerceCategoryShowcase
 */

?>
<div class="wccs-category wccs-showcase-id__<?php echo sanitize_html_class( $wccs_id ); ?> wccs-content__<?php echo sanitize_html_class( $content_placement ); ?>" <?php if ( 'grid' === $layout ) : ?> <?php printf( 'style="background: url(%s)"', esc_url( $category['image_url'] ) ); ?> <?php endif; ?>>
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
			<?php if ( 'yes' === $showcase['includes_sub_categories'] && ! empty( $child_categories ) ) : ?>
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
