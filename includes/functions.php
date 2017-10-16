<?php
// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function wccs_get_term_details( $id = null ) {
    if ( null == $id ) {
        global $post;
        $id = $post->ID;
    }

    if ( ! $id ) {
        return [];
    }
    $term = get_term($id, 'product_cat');
    if( ! $term ){
        return false;
    }

    $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
    $image_url    = wp_get_attachment_url( $thumbnail_id ) ? wp_get_attachment_url( $thumbnail_id ) : '';

    $response = [
        'term_id'     => $term->term_id,
        'name'     => $term->name,
        'desc'     => term_description( $term->term_id, 'product_cat' ),
        'image'    => $image_url,
        'bg_color' => 'rgba(0, 0, 0, 0.2)',
        'color'    => '#fff'
    ];


    return $response;
}


function wccs_get_wc_categories() {
    global $wp_version;
    if ( version_compare( $wp_version, '4.5.0', '=<' ) ) {
        $args = array(
            'hide_empty' => false,
        );

        $product_categories = get_terms( 'product_cat', $args );
    } else {
        // since wordpress 4.5.0
        $args = array(
            'taxonomy'   => "product_cat",
            'hide_empty' => false,
        );

        $product_categories = get_terms( $args );
    }

    $categories = array();

    foreach ($product_categories as $product_category){
        $categories[$product_category->term_id] = $product_category->name;
    }

    return $categories;

}
