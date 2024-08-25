<?php
// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a specific term details
 *
 * @param null $id term_id
 * @param $post_id
 * @param $type
 *
 * @return array|bool
 */
function wccs_get_term_details( $id, $post_id = false, $type = 'featured' ) {
	$term = get_term( $id, 'product_cat' );


	if ( is_wp_error( $term ) ) {
		return false;
	}

	if ( ! $term ) {
		return false;
	}

	$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
	$image_url    = wp_get_attachment_url( $thumbnail_id ) ? wp_get_attachment_url( $thumbnail_id ) : '';

	if ( empty( $image_url ) ) {
		$image_url = PLVR_WCCS_ASSETS . '/images/placeholder.jpg';
	}

	$response = [
		'term_id' => $term->term_id,
		'title'   => $term->name,
		'desc'    => term_description( $term->term_id, 'product_cat' ),
		'image'   => $image_url,
		'col'     => 1,
		'link'    => get_term_link( $term->term_id, 'product_cat' ),
	];

	if ( $post_id ) {
		$response = apply_filters( 'wccs_get_term_details', $response, $term->term_id, $post_id, $type );
	}


	return $response;
}

/**
 * Return all WC categories
 *
 * @param $args
 *
 * @return array|int|\WP_Error
 * @since 3.0.0
 *
 */
function wccs_get_wc_categories( $args = array() ) {
	global $wp_version;
	$categories = array();
	$default    = array(
		'number'     => '20',
		'orderby'    => 'name',
		'order'      => 'ASC',
		'hide_empty' => false,
		'include'    => array(),
		'exclude'    => array(),
		'child_of'   => 0,
	);
	//$args = array_intersect_key( $args, $default);
	if ( version_compare( $wp_version, '4.5.0', '<' ) ) {
		$args       = wp_parse_args( $args, $default );
		$categories = get_terms( 'product_cat', $args );
	} else {
		$args             = wp_parse_args( $args, $default );
		$args['taxonomy'] = 'product_cat';
		$categories       = get_terms( $args );
	}

	return $categories;
}

/**
 * Get term html function
 * @since 1.0.0
 */
function wccs_get_term_html() {

	if ( empty( intval( $_POST['term_id'] ) ) ) {
		wp_send_json_error( [ 'message' => 'no term id' ] );
	}

	if ( empty( intval( $_POST['post_id'] ) ) ) {
		wp_send_json_error( [ 'message' => 'no post id' ] );
	}

	$term = wccs_get_term_details( intval( $_POST['term_id'] ), intval( $_POST['post_id'] ) );
	if ( $term ) {
		wp_send_json_success( $term );
	}

	wp_send_json_error( [ 'message' => 'nothing found' ] );
}

add_action( 'wp_ajax_wccs_get_term_html', 'wccs_get_term_html' );

