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

		// Pro Module Fields.
		$wccs_slider_autoplay_speed  = isset( $postdata['wccs_slider_autoplaySpeed'] ) ? sanitize_text_field( $postdata['wccs_slider_autoplaySpeed'] ) : 'Yes';
		$wccs_featured_show_title    = isset( $postdata['wccs_featured_show_title'] ) ? sanitize_text_field( $postdata['wccs_featured_show_title'] ) : 'Yes';
		$wccs_featured_show_desc     = isset( $postdata['wccs_featured_show_desc'] ) ? sanitize_text_field( $postdata['wccs_featured_show_desc'] ) : 'Yes';
		$wccs_featured_show_button   = isset( $postdata['wccs_featured_show_button'] ) ? sanitize_text_field( $postdata['wccs_featured_show_button'] ) : '500';
		$wccs_featured_button_text   = isset( $postdata['wccs_featured_button_text'] ) ? sanitize_text_field( $postdata['wccs_featured_button_text'] ) : 'Shop Now';
		$wccs_featured_content_color = isset( $postdata['wccs_featured_content_color'] ) ? sanitize_text_field( $postdata['wccs_featured_content_color'] ) : '#FFFFFF';
		$wccs_featured_content_bg    = isset( $postdata['wccs_featured_content_bg'] ) ? sanitize_text_field( $postdata['wccs_featured_content_bg'] ) : '#96588A';
		$wccsp_featured_customizer   = $postdata['wccsp_featured_customizer'] ?? array();
		$featured_customizer         = array();
		foreach ( $wccsp_featured_customizer as $term_id => $customizer ) {
			$item = array();
			if ( ! empty( $customizer['image'] ) ) {
				$item['image'] = esc_url_raw( $customizer['image'] );
			}

			if ( ! empty( $customizer['title'] ) ) {
				$item['title'] = sanitize_text_field( $customizer['title'] );
			}

			if ( ! empty( $item ) ) {
				$featured_customizer[ $term_id ] = $item;
			}
		}

		$wccs_additional_show_title  = isset( $postdata['wccs_additional_show_title'] ) ? sanitize_text_field( $postdata['wccs_additional_show_title'] ) : 'Yes';
		$wccs_additional_title_color = isset( $postdata['wccs_additional_title_color'] ) ? sanitize_text_field( $postdata['wccs_additional_title_color'] ) : '#000000';
		$wccs_additional_content_bg  = isset( $postdata['wccs_additional_content_bg'] ) ? sanitize_text_field( $postdata['wccs_additional_content_bg'] ) : '#FFFFFF';
		$wccsp_additional_customizer = $postdata['wccsp_additional_customizer'] ?? array();
		$additional_customizer       = array();
		foreach ( $wccsp_additional_customizer as $term_id => $customizer ) {
			$item = array();
			if ( ! empty( $customizer['image'] ) ) {
				$item['image'] = esc_url_raw( $customizer['image'] );
			}

			if ( ! empty( $customizer['title'] ) ) {
				$item['title'] = sanitize_text_field( $customizer['title'] );
			}

			if ( ! empty( $customizer['col'] ) ) {
				$item['col'] = intval( $customizer['col'] );
			}

			if ( ! empty( $item ) ) {
				$additional_customizer[ $term_id ] = $item;
			}
		}

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
			// Pro features.
			'wccs_slider_autoplaySpeed'       => $wccs_slider_autoplay_speed,
			'wccs_featured_show_title'        => $wccs_featured_show_title,
			'wccs_featured_show_desc'         => $wccs_featured_show_desc,
			'wccs_featured_show_button'       => $wccs_featured_show_button,
			'wccs_featured_button_text'       => $wccs_featured_button_text,
			'wccs_featured_content_color'     => $wccs_featured_content_color,
			'wccs_featured_content_bg'        => $wccs_featured_content_bg,
			'wccsp_featured_customizer'       => $featured_customizer,
			'wccs_additional_show_title'      => $wccs_additional_show_title,
			'wccs_additional_title_color'     => $wccs_additional_title_color,
			'wccs_additional_content_bg'      => $wccs_additional_content_bg,
			'wccsp_additional_customizer'     => $additional_customizer,
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

		// Pro Module Fields.
		$wccs_slider_autoplay_speed  = isset( $postdata['wccs_slider_autoplaySpeed'] ) ? sanitize_text_field( $postdata['wccs_slider_autoplaySpeed'] ) : 'Yes';
		$wccs_featured_show_title    = isset( $postdata['wccs_featured_show_title'] ) ? sanitize_text_field( $postdata['wccs_featured_show_title'] ) : 'Yes';
		$wccs_featured_show_desc     = isset( $postdata['wccs_featured_show_desc'] ) ? sanitize_text_field( $postdata['wccs_featured_show_desc'] ) : 'Yes';
		$wccs_featured_show_button   = isset( $postdata['wccs_featured_show_button'] ) ? sanitize_text_field( $postdata['wccs_featured_show_button'] ) : '500';
		$wccs_featured_button_text   = isset( $postdata['wccs_featured_button_text'] ) ? sanitize_text_field( $postdata['wccs_featured_button_text'] ) : 'Shop Now';
		$wccs_featured_content_color = isset( $postdata['wccs_featured_content_color'] ) ? sanitize_text_field( $postdata['wccs_featured_content_color'] ) : '#FFFFFF';
		$wccs_featured_content_bg    = isset( $postdata['wccs_featured_content_bg'] ) ? sanitize_text_field( $postdata['wccs_featured_content_bg'] ) : '#96588A';
		$wccsp_featured_customizer   = $postdata['wccsp_featured_customizer'] ?? array();
		$featured_customizer         = array();
		foreach ( $wccsp_featured_customizer as $term_id => $customizer ) {
			$item = array();
			if ( ! empty( $customizer['image'] ) ) {
				$item['image'] = esc_url_raw( $customizer['image'] );
			}

			if ( ! empty( $customizer['title'] ) ) {
				$item['title'] = sanitize_text_field( $customizer['title'] );
			}

			if ( ! empty( $item ) ) {
				$featured_customizer[ $term_id ] = $item;
			}
		}

		$wccs_additional_show_title  = isset( $postdata['wccs_additional_show_title'] ) ? sanitize_text_field( $postdata['wccs_additional_show_title'] ) : 'Yes';
		$wccs_additional_title_color = isset( $postdata['wccs_additional_title_color'] ) ? sanitize_text_field( $postdata['wccs_additional_title_color'] ) : '#000000';
		$wccs_additional_content_bg  = isset( $postdata['wccs_additional_content_bg'] ) ? sanitize_text_field( $postdata['wccs_additional_content_bg'] ) : '#FFFFFF';
		$wccsp_additional_customizer = $postdata['wccsp_additional_customizer'] ?? array();
		$additional_customizer       = array();
		foreach ( $wccsp_additional_customizer as $term_id => $customizer ) {
			$item = array();
			if ( ! empty( $customizer['image'] ) ) {
				$item['image'] = esc_url_raw( $customizer['image'] );
			}

			if ( ! empty( $customizer['title'] ) ) {
				$item['title'] = sanitize_text_field( $customizer['title'] );
			}

			if ( ! empty( $customizer['col'] ) ) {
				$item['col'] = intval( $customizer['col'] );
			}

			if ( ! empty( $item ) ) {
				$additional_customizer[ $term_id ] = $item;
			}
		}

		$data['post_title']                      = $category_showcase_title;
		$data['category_showcase_title']         = $category_showcase_title;
		$data['wccs_featured_categories']        = $wccs_featured_categories;
		$data['wccs_show_block_title']           = $wccs_show_block_title;
		$data['wccs_autoplay_slider']            = $wccs_autoplay_slider;
		$data['wccs_infinite_scroll']            = $wccs_infinite_scroll;
		$data['wccs_show_navigation']            = $wccs_show_navigation;
		$data['wccs_show_additional_categories'] = $wccs_show_additional_categories;
		$data['wccs_additional_categories']      = $wccs_additional_categories;
		$data['wccs_slider_autoplaySpeed']       = $wccs_slider_autoplay_speed;
		$data['wccs_featured_show_title']        = $wccs_featured_show_title;
		$data['wccs_featured_show_desc']         = $wccs_featured_show_desc;
		$data['wccs_featured_show_button']       = $wccs_featured_show_button;
		$data['wccs_featured_button_text']       = $wccs_featured_button_text;
		$data['wccs_featured_content_color']     = $wccs_featured_content_color;
		$data['wccs_featured_content_bg']        = $wccs_featured_content_bg;
		$data['wccsp_featured_customizer']       = $featured_customizer;
		$data['wccs_additional_show_title']      = $wccs_additional_show_title;
		$data['wccs_additional_title_color']     = $wccs_additional_title_color;
		$data['wccs_additional_content_bg']      = $wccs_additional_content_bg;
		$data['wccsp_additional_customizer']     = $additional_customizer;

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
