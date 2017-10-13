<?php
add_action( 'init', 'wccs_custom_post_type' );

function wccs_custom_post_type() {
    $labels = array(
        'name'               => _x( 'WC Category Showcase', 'post type general name', 'wc-category-showcase' ),
        'singular_name'      => _x( 'WC Category Showcase', 'post type singular name', 'wc-category-showcase' ),
        'menu_name'          => _x( 'WC Showcase', 'admin menu', 'wc-category-showcase' ),
        'name_admin_bar'     => _x( 'WC Category Showcase', 'add new on admin bar', 'wc-category-showcase' ),
        'add_new'            => _x( 'Add New', 'book', 'wc-category-showcase' ),
        'add_new_item'       => __( 'Add New Category Showcase', 'wc-category-showcase' ),
        'new_item'           => __( 'New Category Showcase', 'wc-category-showcase' ),
        'edit_item'          => __( 'Edit Category Showcase', 'wc-category-showcase' ),
        'view_item'          => __( 'View Category Showcase', 'wc-category-showcase' ),
        'all_items'          => __( 'All Category Showcases', 'wc-category-showcase' ),
        'search_items'       => __( 'Search Showcase', 'wc-category-showcase' ),
        'parent_item_colon'  => __( 'Parent Showcase:', 'wc-category-showcase' ),
        'not_found'          => __( 'No Showcase found.', 'wc-category-showcase' ),
        'not_found_in_trash' => __( 'No Showcase found in Trash.', 'wc-category-showcase' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title')
    );

    register_post_type( 'wccs_showcase', $args );
}
