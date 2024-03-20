<?php

namespace WooCommerceCategoryShowcase;

defined( 'ABSPATH' ) || exit;

/**
 * Class Installer.
 *
 * @since   1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Installer {

	/**
	 * Update callbacks.
	 *
	 * @since 1.0.0
	 * @var array
	 */
	protected $updates = array(
		'1.0.1' => 'wccs_update_101',
	);

	/**
	 * Installer constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'check_update' ), 5 );
	}

	/**
	 * Check the plugin version and run the updater if necessary.
	 *
	 * This check is done on all requests and runs if the versions do not match.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function check_update() {
		$db_version      = wc_category_showcase()->get_db_version();
		$current_version = wc_category_showcase()->get_version();
		$requires_update = version_compare( $db_version, $current_version, '<' );
		$can_install     = ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) && ! defined( 'IFRAME_REQUEST' );
		if ( $can_install && $requires_update ) {
			static::install();

			$update_versions = array_keys( $this->updates );
			usort( $update_versions, 'version_compare' );
			if ( ! is_null( $db_version ) && version_compare( $db_version, end( $update_versions ), '<' ) ) {
				$this->update();
			} else {
				wc_category_showcase()->update_db_version( $current_version );
			}
		}
	}

	/**
	 * Update the plugin.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function update() {
		$db_version = wc_category_showcase()->get_db_version();
		foreach ( $this->updates as $version => $callbacks ) {
			$callbacks = (array) $callbacks;
			if ( version_compare( $db_version, $version, '<' ) ) {
				foreach ( $callbacks as $callback ) {
					wc_category_showcase()->log( sprintf( 'Updating to %s from %s', $version, $db_version ) );
					// if the callback return false then we need to update the db version.
					$continue = call_user_func( array( $this, $callback ) );
					if ( ! $continue ) {
						wc_category_showcase()->update_db_version( $version );
						$notice = sprintf(
						/* translators: 1: plugin name 2: version number */
							__( '%1$s updated to version %2$s successfully.', 'wc-category-showcase' ),
							'<strong>' . wc_category_showcase()->get_name() . '</strong>',
							'<strong>' . $version . '</strong>'
						);
						wc_category_showcase()->add_notice( $notice, 'success' );
					}
				}
			}
		}
	}

	/**
	 * Install the plugin.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function install() {
		if ( ! is_blog_installed() ) {
			return;
		}

		// create tables here.
		Admin\Settings::instance()->save_defaults();
		wc_category_showcase()->update_db_version( wc_category_showcase()->get_version(), false );
		add_option( 'wc_category_showcase_install_date', current_time( 'mysql' ) );
		set_transient( 'wc_category_showcase_activated', true, 30 );
		set_transient( 'wc_category_showcase_activation_redirect', true, 30 );
	}

	/**
	 * Update database.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function wccs_update_1_0_3() {
		$args = array(
			'post_type' => 'wccs_showcase',
			'order'     => 'ASC',
		);

		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$id                    = get_the_ID();
			$featured_categories   = get_post_meta( $id, '_wccs_featured_categories', true );
			$additional_categories = get_post_meta( $id, '_wccs_additional_categories', true );
			if ( $featured_categories ) {
				$f_cats = wp_list_pluck( $featured_categories, 'term_id' );
				delete_post_meta( $id, '_wccs_featured_categories' );
				update_post_meta( $id, 'wccs_featured_categories', $f_cats );
			}

			if ( $additional_categories ) {
				$a_cats = wp_list_pluck( $additional_categories, 'term_id' );
				delete_post_meta( $id, '_wccs_additional_categories' );
				update_post_meta( $id, 'wccs_additional_categories', $a_cats );
			}
		endwhile;

		wp_reset_postdata();
	}
}
