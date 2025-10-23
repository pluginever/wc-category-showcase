<?php

namespace WooCommerceCategoryShowcase\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Notices class.
 *
 * @since 2.2.0
 */
class Notices {

	/**
	 * Notices constructor.
	 *
	 * @since 2.2.0
	 */
	public function __construct() {
		add_action( 'admin_init', array( $this, 'admin_notices' ) );
	}

	/**
	 * Admin notices.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public function admin_notices() {
		$installed_time = get_option( 'wccs_installed' );
		$current_time   = wp_date( 'U' );

		// phpcs:disable
		// TODO: Uncomment the below code when halloween offer is over.
		/*
		if ( ! defined( 'WCCS_PRO_VERSION' ) ) {
			wc_category_showcase()->notices->add(
				array(
					'message'     => __DIR__ . '/views/notices/upgrade.php',
					'notice_id'   => 'wccs_upgrade',
					'style'       => 'border-left-color: #0542fa;',
					'dismissible' => false,
				)
			);
		}
		*/
		// phpcs:enable

		// Halloween offer notice.
		$halloween_end_time = date_i18n( strtotime( '2025-11-08 00:00:00' ) );
		if ( $current_time < $halloween_end_time ) {
			wc_category_showcase()->notices->add(
				array(
					'message'     => __DIR__ . '/views/notices/halloween.php',
					'dismissible' => false,
					'notice_id'   => 'wccs_halloween_promo_2025',
					'style'       => 'border-left-color: #8500ff;',
					'class'       => 'notice-halloween',
				)
			);
		}

		// Show after 5 days.
		if ( $installed_time && $current_time > ( $installed_time + ( 5 * DAY_IN_SECONDS ) ) ) {
			wc_category_showcase()->notices->add(
				array(
					'message'     => __DIR__ . '/views/notices/review.php',
					'dismissible' => false,
					'notice_id'   => 'wccs_review',
					'style'       => 'border-left-color: #0542fa;',
				)
			);
		}
	}
}
