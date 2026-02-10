<?php
/**
 * Admin notice for review.
 *
 * @since 2.2.0
 * @return void
 *
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="notice-body">
	<div class="notice-icon">
		<img src="<?php echo esc_attr( wc_category_showcase()->get_assets_url( 'images/plugin-icon.png' ) ); ?>" alt="Product Category Showcase for WooCommerce">
	</div>
	<div class="notice-content">
		<h3>
			<?php esc_html_e( 'Enjoying Product Category Showcase for WooCommerce?', 'wc-category-showcase' ); ?>
		</h3>
		<p>
			<?php
			echo wp_kses_post(
				sprintf(
				// translators: %1$s: Product Category Showcase for WooCommerce plugin link, %2$s: Coupon code.
					__( 'We hope you had a wonderful experience using %1$s. Please take a moment to show us your support by leaving a 5-star review on <a href="%2$s" target="_blank"><strong>WordPress.org</strong></a>. Thank you! 😊', 'wc-category-showcase' ),
					'<a href="ttps://wordpress.org/plugins/wc-category-showcase/" target="_blank"><strong>Product Category Showcase for WooCommerce</strong></a>',
					'https://wordpress.org/support/plugin/wc-category-showcase/reviews/?filter=5#new-post'
				)
			);
			?>
		</p>
	</div>
</div>
<div class="notice-footer">
	<a class="primary" href="https://wordpress.org/support/plugin/wc-category-showcase/reviews/?filter=5#new-post" target="_blank">
		<span class="dashicons dashicons-heart"></span>
		<?php esc_html_e( 'Sure, I\'d love to help!', 'wc-category-showcase' ); ?>
	</a>
	<a href="#" data-snooze>
		<span class="dashicons dashicons-clock"></span>
		<?php esc_html_e( 'Maybe later', 'wc-category-showcase' ); ?>
	</a>
	<a href="#" data-dismiss>
		<span class="dashicons dashicons-smiley"></span>
		<?php esc_html_e( 'I\'ve already left a review', 'wc-category-showcase' ); ?>
	</a>
</div>
