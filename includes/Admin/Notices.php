<?php

namespace PluginEver\CategoryShowcase\Admin;

use PluginEver\CategoryShowcase\B8\Component;

defined( 'ABSPATH' ) || exit;

/**
 * Notices class.
 *
 * @since 2.2.0
 * @package PluginEver\CategoryShowcase\Admin
 */
class Notices extends Component {

	/**
	 * Register hooks.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register(): void {
		add_action( 'admin_init', array( $this, 'admin_notices' ) );
	}

	/**
	 * Admin notices.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public function admin_notices() {
		$installed_time = absint( get_option( 'wccs_installed' ) );
		$current_time   = absint( wp_date( 'U' ) );

		if ( ! defined( 'WCCS_PRO_VERSION' ) ) {
			$this->app->notices->add(
				array(
					'message'     => $this->app->templates_path( 'admin/notices/upgrade.php' ),
					'notice_id'   => 'wccs_upgrade',
					'style'       => 'border-left-color: #0542fa;',
					'dismissible' => false,
				)
			);
		}

		// Show after 5 days.
		if ( $installed_time && $current_time > ( $installed_time + ( 5 * DAY_IN_SECONDS ) ) ) {
			$this->app->notices->add(
				array(
					'message'     => $this->app->templates_path( 'admin/notices/review.php' ),
					'dismissible' => false,
					'notice_id'   => 'wccs_review',
					'style'       => 'border-left-color: #0542fa;',
				)
			);
		}
	}
}
