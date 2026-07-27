<?php

namespace PluginEver\CategoryShowcase;

use PluginEver\CategoryShowcase\B8\Component;

defined( 'ABSPATH' ) || exit;

/**
 * Class PostTypes.
 *
 * Handles the PostTypes.
 *
 * @since 1.0.0
 * @package PluginEver\CategoryShowcase
 */
class PostTypes extends Component {

	/**
	 * Register hooks.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register(): void {
		add_action( 'init', array( $this, 'register_post_type' ) );
	}

	/**
	 * Register post type for showcase.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register_post_type() {
		$labels = array(
			'name'               => _x( 'Category Showcase', 'post type general name', 'wc-category-showcase' ),
			'singular_name'      => _x( 'Category Showcase', 'post type singular name', 'wc-category-showcase' ),
			'menu_name'          => _x( 'Category Showcase', 'admin menu', 'wc-category-showcase' ),
			'name_admin_bar'     => _x( 'Category Showcase', 'add new on admin bar', 'wc-category-showcase' ),
			'add_new'            => _x( 'Add New', 'book', 'wc-category-showcase' ),
			'add_new_item'       => __( 'Add New Showcase', 'wc-category-showcase' ),
			'new_item'           => __( 'New Category Showcase', 'wc-category-showcase' ),
			'edit_item'          => __( 'Edit Category Showcase', 'wc-category-showcase' ),
			'view_item'          => __( 'View Category Showcase', 'wc-category-showcase' ),
			'all_items'          => __( 'All Category Showcases', 'wc-category-showcase' ),
			'search_items'       => __( 'Search Showcase', 'wc-category-showcase' ),
			'parent_item_colon'  => __( 'Parent Showcase:', 'wc-category-showcase' ),
			'not_found'          => __( 'No showcase found.', 'wc-category-showcase' ),
			'not_found_in_trash' => __( 'No showcase found in trash.', 'wc-category-showcase' ),
		);

		$args = array(
			'labels'              => apply_filters( 'wc_category_showcase_post_type_labels', $labels ),
			'public'              => false,
			'publicly_queryable'  => false,
			'exclude_from_search' => true,
			'show_ui'             => false,
			'show_in_menu'        => false,
			'show_in_nav_menus'   => false,
			'query_var'           => false,
			'can_export'          => false,
			'rewrite'             => false,
			'capability_type'     => 'post',
			'has_archive'         => false,
			'hierarchical'        => false,
			'menu_position'       => null,
			'supports'            => array( 'title' ),
		);

		register_post_type( 'wccs_showcase', apply_filters( 'wc_category_showcase_post_type_args', $args ) );
	}
}
