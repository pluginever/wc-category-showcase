<?php
/**
 * Usefully functions.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */

use WooCommerceCategoryShowcase\Models\CategoryShowcase;

defined( 'ABSPATH' ) || exit;

/**
 * Get category showcase.
 *
 * @param mixed $data The data.
 *
 * @return CategoryShowcase|false The category showcase , or false if not found.
 * @since 1.0.0
 */
function wccs_get_category_showcase( $data ) {
	if ( $data instanceof CategoryShowcase ) {
		return $data;
	}

	if ( is_numeric( $data ) ) {
		$data = get_post( $data );
	}

	if ( $data instanceof WP_Post && 'wccs_showcase' === $data->post_type ) {
		return new CategoryShowcase( $data );
	}

	return false;
}

/**
 * Insert category showcase.
 *
 * @param array $data The data.
 * @param bool  $wp_error Optional. Whether to return a WP_Error object on failure. Default false.
 *
 * @return CategoryShowcase|WP_Error|false The category showcase object on success, WP_Error on failure. False if $wp_error is set to false.
 * @since 1.0.0
 */
function wccs_create_category_showcase( $data, $wp_error = true ) {
	$defaults          = array(
		'ID' => 0,
	);
	$data              = wp_parse_args( $data, $defaults );
	$category_showcase = new CategoryShowcase( $data['ID'] );
	$category_showcase->set_data( $data );
	$saved = $category_showcase->save();

	if ( is_wp_error( $saved ) ) {
		return $wp_error ? $saved : false;
	}

	return $category_showcase;
}

/**
 * Get category showcases.
 *
 * @param array $args The args.
 * @param bool  $count Whether to return a count.
 *
 * @return CategoryShowcase[]|int The category showcases.
 * @since 1.0.0
 */
function wccs_get_category_showcases( $args = array(), $count = false ) {
	$defaults = array(
		'post_type'      => 'wccs_showcase',
		'posts_per_page' => -1,
		'orderby'        => 'title',
		'order'          => 'ASC',
	);
	$args     = wp_parse_args( $args, $defaults );
	$query    = new WP_Query( $args );

	if ( $count ) {
		return $query->found_posts;
	}

	return array_map( 'wccs_get_category_showcase', $query->posts );
}

/**
 * Get Woocommerce product category.
 *
 * since 1.0.0
 *
 * @return array
 */
function get_wc_category_list() {
	$categories = wccs_get_wc_categories( array( 'number' => 1000 ) );
	$list       = array();

	if ( is_wp_error( $categories ) ) {
		return $list;
	}

	foreach ( $categories as $key => $category ) {
		$list[ $category->term_id ] = $category->name;
	}

	return $list;
}


/**
 * Return all WC categories.
 *
 * @param array $args Arguments for categories.
 *
 * @return array|int|\WP_Error
 * @since 3.0.0
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
		'exclude'    => array(), // phpcs:ignore WordPressVIPMinimum.Performance.WPQueryParams.PostNotIn_exclude
		'child_of'   => 0,
	);
	if ( version_compare( $wp_version, '4.5.0', '<' ) ) {
		$args       = wp_parse_args( $args, $default );
		$categories = get_terms( 'product_cat' );
	} else {
		$args             = wp_parse_args( $args, $default );
		$args['taxonomy'] = 'product_cat';
		$categories       = get_terms( $args );
	}

	return $categories;
}

/**
 * Get ticket.
 *
 * @param mixed $category_showcase Ticket object or ID.
 *
 * @return CategoryShowcase|null
 * @version 1.0.0
 */
function wccs_get_category_showcase_object( $category_showcase ) {
	$category_showcase = new CategoryShowcase( $category_showcase );

	if ( $category_showcase->get_id() ) {
		return $category_showcase;
	}

	return null;
}

/**
 * Get category title.
 *
 * @param \WP_Term| int $category Category title.
 *
 * @since 1.0.0
 *
 * @return string
 */
function wccs_get_category_title( $category ) {
	$category = get_term( $category );
	if ( $category && ! is_wp_error( $category ) ) {
		return sprintf(
			'(#%1$s) %2$s',
			$category->term_id,
			html_entity_decode( $category->name )
		);
	}
	return null;
}

/**
 * Insert CategoryShowcase.
 *
 * @param array $data The key data.
 * @param bool  $wp_error Whether to return a WP_Error object on failure.
 *
 * @since 1.0.0
 * @return CategoryShowcase|\WP_Error|false The key or WP_Error or false.
 */
function wccs_insert_category_showcase( $data, $wp_error = false ) {
	$id                = isset( $data['id'] ) ? $data['id'] : 0;
	$category_showcase = new CategoryShowcase( $id );
	$category_showcase->set_data( $data );
	$saved = $category_showcase->save();
	if ( is_wp_error( $saved ) ) {
		return $wp_error ? $saved : false;
	}

	return $category_showcase;
}

/**
 * Get a specific term details.
 *
 * @param string $id Term ID.
 * @param int    $post_id Terms ID.
 * @param string $type Terms type.
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
		$image_url = WCCS_ASSETS_URL . 'images/promotion.png';
	}

	$response = array(
		'term_id' => $term->term_id,
		'title'   => $term->name,
		'desc'    => $term->description,
		'image'   => $image_url,
		'col'     => 1,
		'link'    => get_term_link( $term->term_id, 'product_cat' ),
	);

	if ( $post_id ) {
		$response = apply_filters( 'wccs_get_term_details', $response, $term->term_id, $post_id, $type );
	}

	return $response;
}
