<?php
/**
 * Admin notice for upgrade.
 *
 * @since 2.1.0
 * @return void
 *
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="notice-body">
	<div class="notice-icon">
		<img src="<?php echo esc_attr( wc_category_showcase()->get_assets_url( 'images/plugin-icon.png' ) ); ?>" alt="WC Category Showcase">
	</div>
	<div class="notice-content">
		<h3><?php esc_attr_e( 'Flash Sale Alert!', 'wc-category-showcase' ); ?></h3>
		<p>
			<?php
			echo wp_kses_post(
				sprintf(
					// translators: %1$s: WC Category Showcase Pro link, %2$s: Coupon code.
					__( 'Get access to %1$s with a <strong>20%% discount</strong> for the next <strong>72 hours</strong> only! Use coupon code %2$s at checkout. Hurry up, the offer ends soon.', 'wc-category-showcase' ),
					'<a href="https://pluginever.com/plugins/woocommerce-category-showcase-pro/?utm_source=plugin&utm_medium=notice&utm_campaign=flash-sale" target="_blank"><strong>WC Category Showcase Pro</strong></a>',
					'<strong>FLASH20</strong>'
				)
			);
			?>
		</p>
	</div>
</div>
<div class="notice-footer">
	<a class="primary" href="https://pluginever.com/plugins/woocommerce-category-showcase-pro/?utm_source=plugin&utm_medium=notice&utm_campaign=flash-sale" target="_blank">
		<span class="dashicons dashicons-cart"></span>
		<?php esc_attr_e( 'Upgrade now', 'wc-category-showcase' ); ?>
	</a>
	<a href="#" data-snooze="<?php echo esc_attr( WEEK_IN_SECONDS ); ?>">
		<span class="dashicons dashicons-clock"></span>
		<?php esc_attr_e( 'Maybe later', 'wc-category-showcase' ); ?>
	</a>
</div>