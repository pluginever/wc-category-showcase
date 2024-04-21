<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WC_Category_Showcase_Promotion {
	/**
	 * @var string
	 */
	protected $uniq_key;

	public function __construct() {
		$this->uniq_key = sanitize_key('wc-category-showcase-2020');
		add_action( 'admin_notices', array( $this, 'promotional_offer' ) );
		add_action( 'wp_ajax_'.$this->uniq_key.'-dismiss-promotional-offer-notice', array( $this, 'dismiss_promotional_offer' ) );
	}

	/**
	 *
	 * since 1.0.0
	 */
	public function promotional_offer() {
		// Show only to Admins
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		// 2018-03-26 23:59:00
//		if ( time() > strtotime('30-4-2018') ) {
//			return;
//		}

		// check if it has already been dismissed
		$hide_notice = get_option( ''.$this->uniq_key.'_initial_upsell_promotion', 'no' );

		if ( 'hide' == $hide_notice ) {
			return;
		}

		?>
		<div class="notice notice-info is-dismissible" id="<?php echo esc_attr( $this->uniq_key );?>-promotional-offer-notice">
			<p>Thank you for installing <strong><a href="https://www.pluginever.com/plugins/woocommerce-category-showcase-pro/" target="_blank">WooCommerce Category Showcase</a></strong>. <strong>WooCommerce Category Showcase</strong> is now powering <strong>1000+</strong> stores. Use the coupon code <strong>SHOWCASEFREETOPRO</strong> for 20% discount on PRO. <a href="https://www.pluginever.com/plugins/woocommerce-category-showcase-pro//?utm_source=plugin_activation_promotion&utm_medium=link&utm_campaign=wc-category-slider&utm_content=Upgrade" target="_blank" style="text-decoration: none;"><span
						class="dashicons dashicons-smiley" style="margin-left: 10px;"></span> Get the Offer</a></p>
			<span class="dashicons dashicons-megaphone"></span>
		</div><!-- #<?php echo esc_attr( $this->uniq_key );?>-promotional-offer-notice -->

		<style>

			#<?php echo esc_attr( $this->uniq_key );?>-promotional-offer-notice p {
				color: #000;
				font-size: 14px;
				margin-bottom: 10px;
				-webkit-text-shadow: 0.1px 0.1px 0px rgba(250, 250, 250, 0.24);
				-moz-text-shadow: 0.1px 0.1px 0px rgba(250, 250, 250, 0.24);
				-o-text-shadow: 0.1px 0.1px 0px rgba(250, 250, 250, 0.24);
				text-shadow: 0.1px 0.1px 0px rgba(250, 250, 250, 0.24);
				padding-left: 30px;
			}


			#<?php echo esc_attr( $this->uniq_key );?>-promotional-offer-notice span.dashicons-megaphone {
				position: absolute;
				top: 8px;
				left: 0;
				color: #0073aa;
				font-size: 36px;
				transform: rotate(-21deg);
			}
		</style>

		<script type='text/javascript'>
			jQuery('body').on('click', '#<?php echo esc_attr( $this->uniq_key );?>-promotional-offer-notice .notice-dismiss', function (e) {
				e.preventDefault();

				wp.ajax.post('<?php echo esc_attr( $this->uniq_key );?>-dismiss-promotional-offer-notice', {
					dismissed: true
				});
			});
		</script>
		<?php
	}


	/**
	 * Dismiss promotion notice
	 *
	 * @return void
	 * @since  2.5
	 *
	 */
	public function dismiss_promotional_offer() {
		if ( ! empty( $_POST['dismissed'] ) ) {
			$offer_key = $this->uniq_key.'_initial_upsell_promotion';
			update_option( $offer_key, 'hide' );
		}
	}
}

new WC_Category_Showcase_Promotion();
