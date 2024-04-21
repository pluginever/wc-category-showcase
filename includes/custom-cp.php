<?php
// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'wccs_custom_post_type' );

function wccs_custom_post_type() {
	$labels = array(
		'name'               => _x( 'Category Showcase', 'post type general name', 'wc-category-showcase' ),
		'singular_name'      => _x( 'WC Category Showcase', 'post type singular name', 'wc-category-showcase' ),
		'menu_name'          => _x( 'Category Showcase', 'admin menu', 'wc-category-showcase' ),
		'name_admin_bar'     => _x( 'WC Category Showcase', 'add new on admin bar', 'wc-category-showcase' ),
		'add_new'            => _x( 'Add New', 'book', 'wc-category-showcase' ),
		'add_new_item'       => __( 'Add New Category Showcase', 'wc-category-showcase' ),
		'new_item'           => __( 'New Category Showcase', 'wc-category-showcase' ),
		'edit_item'          => __( 'Edit Category Showcase', 'wc-category-showcase' ),
		'view_item'          => __( 'View Category Showcase', 'wc-category-showcase' ),
		'all_items'          => __( 'All Category Showcases', 'wc-category-showcase' ),
		'search_items'       => __( 'Search Showcase', 'wc-category-showcase' ),
		'parent_item_colon'  => __( 'Parent Showcase:', 'wc-category-showcase' ),
		'not_found'          => __( 'No showcase found.', 'wc-category-showcase' ),
		'not_found_in_trash' => __( 'No showcase found in trash.', 'wc-category-showcase' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'capability_type'    => 'post',
		'menu_icon'          => 'dashicons-grid-view',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title' )
	);

	register_post_type( 'wccs_showcase', $args );
}


function wccs_shortocode_metabox() {
	add_meta_box(
		'wccs-shortcode',
		__( 'Short Code', 'wc-category-showcase' ),
		'wccs_shortocode_metabox_callback',
		'wccs_showcase',
		'side',
		'default'
	);
}

add_action( 'add_meta_boxes', 'wccs_shortocode_metabox', 0 );


function wccs_shortocode_metabox_callback( $post ) {

	if ( ! isset( $post->ID ) || empty( $post->ID ) ) {
		echo esc_html__( 'Please publish the post first. Shortcode will automatically visible here afterward.', 'wc-category-showcase' );
	} else {
		echo "<pre><code>[wccs_showcase id='".esc_attr($post->ID)."']</code></pre>";
	}
}
