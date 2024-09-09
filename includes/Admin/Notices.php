<?php

namespace WooCommerceCategoryShowcase\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Notices class.
 *
 * @since 1.0.0
 */
class Notices {

	/**
	 * Notices constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_init', array( $this, 'admin_notices' ) );
	}

	/**
	 * Admin notices.
	 *
	 * @since 1.0.0
	 */
	public function admin_notices() {
		$installed_time = get_option( 'wccs_installed' );
		$current_time   = wp_date( 'U' );

		if ( ! defined( 'WCKM_PRO_VERSION' ) ) {
			wc_category_showcase()->notices->add(
				array(
					'message'     => __DIR__ . '/views/notices/upgrade.php',
					'notice_id'   => 'wccs_upgrade',
					'style'       => 'border-left-color: #0542fa;',
					'dismissible' => false,
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
