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
		$current_time   = wp_date( 'U' );
		$halloween_time = date_i18n( strtotime( '2024-11-11 00:00:00' ) );
		if ( $current_time > $halloween_time ) {
			return;
		}
		wp_enqueue_style( 'plvr-halloween', PLVR_WCCS_ASSETS . '/css/halloween.css', false, PLVR_WCCS_VERSION );

		// check if it has already been dismissed
		$hide_notice = get_option( ''.$this->uniq_key.'_initial_upsell_promotion', 'no' );

		if ( 'hide' == $hide_notice ) {
			return;
		}

		?>
		<div class="notice bk-notice notice-halloween notice-info is-dismissible" id="<?php echo esc_attr( $this->uniq_key );?>-promotional-offer-notice" style="background-image: url(<?php echo esc_url( PLVR_WCCS_ASSETS . '/images/halloween-banner.svg' ); ?>);">
			<div class="notice-body">
				<div class="notice-icon">
					<img src="<?php echo esc_url(PLVR_WCCS_ASSETS . '/images/halloween-icon.svg' ); ?>" alt="WC Category Showcase">
				</div>
				<div class="notice-content">
					<h3>
						<?php esc_html_e( 'Limited Time Offer! PluginEver Halloween Sale: 30% OFF!!', 'wc-category-showcase' ); ?>
					</h3>
					<p>
						<?php
						echo wp_kses_post(
							sprintf(
							// translators: 1.Offer Percentage, 2. Coupon Code.
								__( 'Spectacular Halloween Deal! Get %1$s on all premium plugins with code %2$s. Don\'t miss out — this offer vanishes soon! 👻', 'wc-category-showcase' ),
								'<strong>' . esc_attr( '30% OFF' ) . '</strong>',
								'<strong>' . esc_attr( 'BIGTREAT30' ) . '</strong>'
							)
						);
						?>
					</p>
				</div>
			</div>
			<div class="notice-footer">
				<div class="footer-btn">
					<a href="<?php echo esc_url( 'https://pluginever.com/plugins/woocommerce-category-showcase-pro?utm_source=plugin&utm_medium=notice&utm_campaign=halloween-2024&discount=bigtreat30' ); ?>" class="primary halloween-upgrade-btn" target="_blank">
						<span class="dashicons dashicons-cart"></span>
						<?php esc_html_e( 'Claim Your Discount!!', 'wc-category-showcase' ); ?>
					</a>
					<a href="<?php echo esc_attr( 'https://pluginever.com/plugins' ); ?>" class="halloween-remind-btn" target="_blank">
						<span class="dashicons dashicons-megaphone"></span>
						<?php esc_html_e( 'View Our Plugins & Offer', 'wc-category-showcase' ); ?>
					</a>
				</div>
				<strong class="halloween-footer-text"><?php esc_html_e( 'Valid until November 10, 2024', 'wc-category-showcase' ); ?></strong>
			</div>
		</div><!-- #<?php echo esc_attr( $this->uniq_key );?>-promotional-offer-notice -->

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
