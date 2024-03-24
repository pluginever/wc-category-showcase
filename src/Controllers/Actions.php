<?php
namespace WooCommerceCategoryShowcase\Controllers;

defined( 'ABSPATH' ) || exit;

/**
 * Actions class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Actions {

	/**
	 * Actions constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_post_wccs_add_category_showcase', array( __CLASS__, 'handle_add_category_showcase' ) );
		add_action( 'admin_post_wccs_edit_category_showcase', array( __CLASS__, 'handle_edit_category_showcase' ) );
		add_action( 'wp_ajax_wccs_search_categories', array( __CLASS__, 'search_categories' ) );
	}

	/**
	 * Add category showcase.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function handle_add_category_showcase() {
		check_admin_referer( 'wccs_add_category_showcase' );
		$referer  = wp_get_referer();
		$postdata = map_deep( $_POST, 'sanitize_text_field' );

		$data                            = array();
		$postdata                        = wp_unslash( $_POST );
		$category_showcase_title         = isset( $postdata['category_showcase_title'] ) ? sanitize_text_field( $postdata['category_showcase_title'] ) : '';
		$wccs_featured_categories        = isset( $postdata['wccs_featured_categories'] ) ? map_deep( $postdata['wccs_featured_categories'], 'sanitize_text_field' ) : '';
		$wccs_show_block_title           = isset( $postdata['wccs_show_block_title'] ) ? sanitize_text_field( $postdata['wccs_show_block_title'] ) : '';
		$wccs_autoplay_slider            = isset( $postdata['wccs_autoplay_slider'] ) ? sanitize_text_field( $postdata['wccs_autoplay_slider'] ) : '';
		$wccs_infinite_scroll            = isset( $postdata['wccs_infinite_scroll'] ) ? sanitize_text_field( $postdata['wccs_infinite_scroll'] ) : '';
		$wccs_show_navigation            = isset( $postdata['wccs_show_navigation'] ) ? sanitize_text_field( $postdata['wccs_show_navigation'] ) : '';
		$wccs_show_additional_categories = isset( $postdata['wccs_show_additional_categories'] ) ? sanitize_text_field( $postdata['wccs_show_additional_categories'] ) : '';
		$wccs_additional_categories      = isset( $postdata['wccs_additional_categories'] ) ? map_deep( $postdata['wccs_additional_categories'], 'sanitize_text_field' ) : '';

		$data = array(
			'post_title'                      => $category_showcase_title,
			'category_showcase_title'         => $category_showcase_title,
			'wccs_featured_categories'        => $wccs_featured_categories,
			'wccs_show_block_title'           => $wccs_show_block_title,
			'wccs_autoplay_slider'            => $wccs_autoplay_slider,
			'wccs_infinite_scroll'            => $wccs_infinite_scroll,
			'wccs_show_navigation'            => $wccs_show_navigation,
			'wccs_show_additional_categories' => $wccs_show_additional_categories,
			'wccs_additional_categories'      => $wccs_additional_categories,
			'date_created'                    => current_time( 'mysql' ),
		);

		$category_showcase = wccs_insert_category_showcase( $data, true );
		if ( is_wp_error( $category_showcase ) ) {
			wc_category_showcase()->add_notice( $category_showcase->get_error_message(), 'error' );
			wp_safe_redirect( $referer );
			exit;
		}

		$notice = sprintf( '%s', __( 'Category showcase added successfully.', 'wc-category-showcase' ) );
		wc_category_showcase()->add_notice( $notice, 'success' );

		wp_safe_redirect( admin_url( 'admin.php?page=wc-category-showcase&tab=category_showcase&edit=' . $category_showcase->get_id() ) );
		exit;
	}

	/**
	 * Edit category showcase.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function handle_edit_category_showcase() {
		check_admin_referer( 'wccs_edit_category_showcase' );
		$referer           = wp_get_referer();
		$id                = filter_input( INPUT_POST, 'category_showcase_id', FILTER_SANITIZE_NUMBER_INT );
		$category_showcase = wccs_get_category_showcase_object( $id );

		if ( empty( $category_showcase ) ) {
			wc_category_showcase()->add_notice( __( 'Category Showcase not found.', 'wc-category-showcase' ), 'error' );
			wp_safe_redirect( $referer );
			exit;
		}

		$data                            = array();
		$postdata                        = wp_unslash( $_POST );
		$category_showcase_title         = isset( $postdata['category_showcase_title'] ) ? sanitize_text_field( $postdata['category_showcase_title'] ) : '';
		$wccs_featured_categories        = isset( $postdata['wccs_featured_categories'] ) ? map_deep( $postdata['wccs_featured_categories'], 'sanitize_text_field' ) : '';
		$wccs_show_block_title           = isset( $postdata['wccs_show_block_title'] ) ? sanitize_text_field( $postdata['wccs_show_block_title'] ) : '';
		$wccs_autoplay_slider            = isset( $postdata['wccs_autoplay_slider'] ) ? sanitize_text_field( $postdata['wccs_autoplay_slider'] ) : '';
		$wccs_infinite_scroll            = isset( $postdata['wccs_infinite_scroll'] ) ? sanitize_text_field( $postdata['wccs_infinite_scroll'] ) : '';
		$wccs_show_navigation            = isset( $postdata['wccs_show_navigation'] ) ? sanitize_text_field( $postdata['wccs_show_navigation'] ) : '';
		$wccs_show_additional_categories = isset( $postdata['wccs_show_additional_categories'] ) ? sanitize_text_field( $postdata['wccs_show_additional_categories'] ) : '';
		$wccs_additional_categories      = isset( $postdata['wccs_additional_categories'] ) ? map_deep( $postdata['wccs_additional_categories'], 'sanitize_text_field' ) : '';

		$data['post_title']                      = $category_showcase_title;
		$data['category_showcase_title']         = $category_showcase_title;
		$data['wccs_featured_categories']        = $wccs_featured_categories;
		$data['wccs_show_block_title']           = $wccs_show_block_title;
		$data['wccs_autoplay_slider']            = $wccs_autoplay_slider;
		$data['wccs_infinite_scroll']            = $wccs_infinite_scroll;
		$data['wccs_show_navigation']            = $wccs_show_navigation;
		$data['wccs_show_additional_categories'] = $wccs_show_additional_categories;
		$data['wccs_additional_categories']      = $wccs_additional_categories;

		$category_showcase->set_data( $data );
		$saved = $category_showcase->save();

		if ( is_wp_error( $saved ) ) {
			wc_category_showcase()->add_notice( $saved->get_error_message(), 'error' );
		} else {
			wc_category_showcase()->add_notice( __( 'Category showcase updated successfully.', 'wc-category-showcase' ), 'success' );
		}

		wp_safe_redirect( $referer );
		exit;
	}

	/**
	 * Search categories.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function search_categories() {
		check_admin_referer( 'wc_category_showcase_ajax', 'nonce' );
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
}
