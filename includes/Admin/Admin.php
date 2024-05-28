<?php

namespace WooCommerceCategoryShowcase\Admin;

use CoenJacobs\Mozart\Composer\Package;
use WooCommerceCategoryShowcase\Controllers\Helpers;

defined( 'ABSPATH' ) || exit;

/**
 * Admin class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Admin {

	/**
	 * Admin constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_init', array( $this, 'buffer_start' ), 1 );
		add_filter( 'woocommerce_screen_ids', array( $this, 'screen_ids' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_filter( 'admin_footer_text', array( $this, 'admin_footer_text' ), PHP_INT_MAX );
		add_filter( 'update_footer', array( $this, 'update_footer' ), PHP_INT_MAX );
		add_action( 'admin_post_wcc_showcase_add_category_showcase', array( __CLASS__, 'handle_add_category_showcase' ) );
		add_action( 'wp_ajax_wc_category_showcase_search_categories', array( __CLASS__, 'search_categories' ) );
		add_action( 'wp_ajax_wc_category_showcase_get_category_details', array( __CLASS__, 'get_category_details' ) );
	}

	/**
	 * Start output buffering.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function buffer_start() {
		ob_start();
	}

	/**
	 * Add the plugin screens to the WooCommerce screens.
	 * This will load the WooCommerce admin styles and scripts.
	 *
	 * @param array $ids Screen ids.
	 *
	 * @return array
	 */
	public function screen_ids( $ids ) {
		return array_merge( $ids, Utilities::get_screen_ids() );
	}

	/**
	 * Enqueue admin scripts.
	 *
	 * @param string $hook The current admin page.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function enqueue_scripts( $hook ) {
		if ( ! in_array( $hook, Utilities::get_screen_ids(), true ) ) {
			return;
		}
		// Early core enqueue.
		wc_category_showcase()->scripts->enqueue_style( 'wcc_showcase-admin', '/css/admin.css' );
		wc_category_showcase()->scripts->enqueue_script( 'wcc_showcase-admin', '/js/admin.js', array(), true );

		wp_localize_script(
			'wcc_showcase-admin',
			'wcc_showcase_admin_js_vars',
			array(
				'ajax_url'     => admin_url( 'admin-ajax.php' ),
				'search_nonce' => wp_create_nonce( 'wcc_showcase_search_category_action' ),
				'i18n'         => array(
					'search_category' => __( 'Search category...', 'wc-category-showcase' ),
				),
			)
		);
	}

	/**
	 * Request review.
	 *
	 * @param string $text Footer text.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function admin_footer_text( $text ) {
		if ( in_array( get_current_screen()->id, Utilities::get_screen_ids(), true ) ) {
			$text = sprintf(
			/* translators: %s: Plugin name */
				__( 'Thank you for using %s!', 'wc-category-showcase' ),
				'<strong>' . esc_html( wc_category_showcase()->get_name() ) . '</strong>'
			);
			if ( wc_category_showcase()->review_url ) {
				$text .= sprintf(
				/* translators: %s: Plugin name */
					__( ' Share your appreciation with a five-star review %s.', 'wc-category-showcase' ),
					'<a href="' . esc_url( wc_category_showcase()->review_url ) . '" target="_blank">here</a>'
				);
			}
		}

		return $text;
	}

	/**
	 * Update footer.
	 *
	 * @param string $footer_text Footer text.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function update_footer( $footer_text ) {
		if ( in_array( get_current_screen()->id, Utilities::get_screen_ids(), true ) ) {
			/* translators: 1: Plugin version */
			$footer_text = sprintf( esc_html__( 'Version %s', 'wc-category-showcase' ), wc_category_showcase()->get_version() );
		}

		return $footer_text;
	}

	/**
	 * Add category showcase.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function handle_add_category_showcase() {
		check_admin_referer( 'wcc_showcase_add_category_showcase' );
		$post_id = isset( $_POST['post_id'] ) ? absint( $_POST['post_id'] ) : '';
		$referer = wp_get_referer();

		$data = Helpers::get_slider_settings();
		unset( $data['wcc_showcase_post_title'] );

		// Post title.
		$wcc_showcase_title = isset( $_POST['wcc_showcase_title'] ) ? sanitize_text_field( wp_unslash( $_POST['wcc_showcase_title'] ) ) : '';

		if ( empty( $post_id ) ) {
			// Add category showcase.
			$args = array(
				'post_title'  => $wcc_showcase_title,
				'post_type'   => 'wccs_showcase',
				'post_status' => 'publish',
			);

			$post_id = wp_insert_post( $args );

			foreach ( $data as $key => $defaults ) {
				if ( is_array( wp_unslash( $_POST[ $key ] ) ) ) {
					$value = ! empty( $_POST[ $key ] ) ? map_deep( wp_unslash( $_POST[ $key ] ), 'sanitize_text_field' ) : $defaults;
				} else {
					$value = ! empty( $_POST[ $key ] ) ? sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) : $defaults;
				}

				if ( empty( $value ) ) {
					delete_post_meta( $post_id, $key );
				} else {
					update_post_meta( $post_id, $key, $value );
				}
			}

			$redirect_to = admin_url( 'admin.php?page=wc-category-showcase&edit=' . $post_id );
			wp_safe_redirect( $redirect_to );
			exit;
		} else {
			// Update category showcase.
			$args = array(
				'ID'          => $post_id,
				'post_title'  => $wcc_showcase_title,
				'post_type'   => 'wccs_showcase',
				'post_status' => 'publish',
			);

			$post_id = wp_update_post( $args );

			foreach ( $data as $key => $defaults ) {
				if ( is_array( wp_unslash( $_POST[ $key ] ) ) ) {
					$value = ! empty( $_POST[ $key ] ) ? map_deep( wp_unslash( $_POST[ $key ] ), 'sanitize_text_field' ) : $defaults;
				} else {
					$value = ! empty( $_POST[ $key ] ) ? sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) : $defaults;
				}

				if ( empty( $value ) ) {
					delete_post_meta( $post_id, $key );
				} else {
					update_post_meta( $post_id, $key, $value );
				}
			}

			$redirect_to = admin_url( 'admin.php?page=wc-category-showcase&edit=' . $post_id );
			wp_safe_redirect( $redirect_to );
			exit;
		}
	}

	/**
	 * Search categories.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function search_categories() {
		check_admin_referer( 'wcc_showcase_search_category_action', 'nonce' );
		$term = isset( $_POST['term'] ) ? sanitize_text_field( wp_unslash( $_POST['term'] ) ) : '';

		if ( empty( $term ) ) {
			wp_send_json_success( esc_html__( 'No, search term provided.', 'wc-category-showcase' ) );
			wp_die();
		}

		$categories = get_terms(
			array(
				'taxonomy'   => 'product_cat',
				'hide_empty' => false,
				'name__like' => $term,
			)
		);

		$results = array();

		if ( ! empty( $categories ) ) {
			foreach ( $categories as $category ) {
				$text = sprintf(
					'(#%1$s) %2$s',
					$category->term_id,
					wp_strip_all_tags( $category->name )
				);

				$results[] = array(
					'id'   => $category->term_id,
					'text' => $text,
				);
			}
		}

		wp_send_json(
			array(
				'results'    => $results,
				'pagination' => array(
					'more' => false,
				),
			)
		);
	}

	/**
	 * Get category details.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function get_category_details() {
		check_admin_referer( 'wcc_showcase_search_category_action', 'nonce' );
		$term_id = isset( $_POST['term_id'] ) ? sanitize_text_field( wp_unslash( $_POST['term_id'] ) ) : '';

		if ( empty( $term_id ) ) {
			wp_send_json_success( esc_html__( 'No, search term id provided.', 'wc-category-showcase' ) );
			wp_die();
		}
		include __DIR__ . '/views/showcase/load-category-details.php';
		wp_die();
	}
}
