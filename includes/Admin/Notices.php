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
		// TODO: Uncomment the below code when Back Friday offer is over.
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

		// Black Friday offer notice.
		$black_friday_end_time = date_i18n( strtotime( '2025-12-05 00:00:00' ) );
		if ( ! defined( 'WCCS_PRO_VERSION' ) && $current_time < $black_friday_end_time ) {
			wc_category_showcase()->notices->add(
				array(
					'message'     => __DIR__ . '/views/notices/black-friday.php',
					'dismissible' => false,
					'notice_id'   => 'wccs_black_friday_promo_2025',
					'style'       => 'border-left-color: #000000;',
					'class'       => 'notice-black-friday',
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
