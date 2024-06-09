<?php

namespace WooCommerceCategoryShowcase\Controllers;

defined( 'ABSPATH' ) || exit;

/**
 * Helpers class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Helpers {
	/**
	 * Get category details.
	 *
	 * @param \WP_Term| int $category_id Category ID.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public static function get_category_details( $category_id ) {
		$category_details = array();
		$category         = get_term( $category_id );
		if ( $category && ! is_wp_error( $category ) ) {
			$category_details['cat_id']           = esc_attr( $category->term_id );
			$category_details['name']             = esc_attr( $category->name );
			$category_details['slug']             = esc_attr( $category->slug );
			$category_details['description']      = wp_kses_post( $category->description );
			$category_details['image_url']        = esc_url( wp_get_attachment_url( get_term_meta( $category->term_id, 'thumbnail_id', true ), 'full' ) );
			$category_details['icon_url']         = esc_url( WC_CATEGORY_SHOWCASE_ASSETS_URL . 'images/category-placeholder-icon.jpg' );
			$category_details['is_icon']          = esc_attr( 'no' );
			$category_details['cat_link']         = esc_url( get_category_link( $category->term_id ) );
			$category_details['custom_text']      = esc_attr( 'Price Range: $250 - $1100' );
			$category_details['is_custom_text']   = esc_attr( 'no' );
			$category_details['label_text']       = esc_attr( '25% off Today' );
			$category_details['label_color']      = esc_attr( 'green' );
			$category_details['is_label']         = esc_attr( 'no' );
			$category_details['total_count']      = self::get_product_count_in_category( $category->term_id );
			$category_details['child_categories'] = self::get_child_categories( $category->term_id );
			$category_details['position']         = esc_attr( '0' );
		}
		return $category_details;
	}

	/**
	 * Category Product Counts.
	 *
	 * @param \WP_Term| int $parent_category_id Parent Category id.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public static function get_product_count_in_category( $parent_category_id ) {
		$categories = get_terms(
			array(
				'taxonomy'   => 'product_cat',
				'child_of'   => $parent_category_id,
				'hide_empty' => false,
			)
		);

		// Add the parent category to the array of categories.
		$category_ids = array( $parent_category_id );
		foreach ( $categories as $category ) {
			$category_ids[] = $category->term_id;
		}

		// Set up the query arguments to get products in these categories.
		$args = array(
			'post_type'      => 'product',
			'posts_per_page' => -1, // No limit.
			'tax_query'      => array(
				array(
					'taxonomy' => 'product_cat',
					'field'    => 'term_id',
					'terms'    => $category_ids,
					'operator' => 'IN',
				),
			),
			'fields'         => 'ids', // Only get product IDs to count them.
		);

		// Execute the query.
		$query = new \WP_Query( $args );

		// Get the number of products.
		$product_count = $query->found_posts;

		// Reset the post data.
		wp_reset_postdata();
		return $product_count;
	}

	/**
	 * Get all child categories.
	 *
	 * @param \WP_Term| int $parent_category_id Parent Category ID.
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public static function get_child_categories( $parent_category_id ) {
		// Define the arguments for get_terms.
		$args = array(
			'taxonomy'   => 'product_cat', // WooCommerce product category taxonomy.
			'child_of'   => $parent_category_id, // Parent category ID.
			'hide_empty' => true, // Show all categories, including those without products.
		);

		// Get the child categories.
		$child_categories     = array();
		$all_child_categories = get_terms( $args );
		foreach ( $all_child_categories as $child_category ) {
			$child_categories[ $child_category->term_id ]['name']          = $child_category->name;
			$child_categories[ $child_category->term_id ]['cat_link']      = esc_url( get_category_link( $child_category->term_id ) );
			$child_categories[ $child_category->term_id ]['total_product'] = esc_attr( self::get_product_count_in_category( $child_category->term_id ) );
		}

		// Return the child categories.
		return $child_categories;
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
	public static function get_category_title( $category ) {
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
	 * sorting categories array.
	 *
	 * @param int $a Array values.
	 * @param int $b Array values.
	 *
	 * @since  1.0.0
	 * @return int
	 */
	public static function sort_categories_according_to_position( $a, $b ) {
		if ( $a['position'] === $b['position'] ) {
			return 0;
		}
		return $a['position'] < $b['position'] ? -1 : 1;
	}

	/**
	 * Get slider settings.
	 *
	 * @param int $id ID of the slider post.
	 *
	 * @return array Returns the slider settings.
	 */
	public static function get_slider_settings( $id = null ) {
		$defaults = array(
			// General tab settings data.
			'post_title'                        => '',
			'layout'                            => 'block',
			'slider'                            => array(
				'column' => '3',
				'row'    => '1',
			),
			'block_column'                      => '3',
			'number_of_grid_column'             => '4',
			'layout_option'                     => 'catalog_1x4',
			'column_breakpoint'                 => array(
				'laptop' => '3',
				'tablet' => '2',
				'mobile' => '1',
			),
			'category_filter'                   => 'all',
			'specific_category_select'          => array(),
			'category_list_item'                => array(),
			'category_sort_order'               => 'default',
			'category_sort_order_by'            => 'asc',
			'category_display_limit'            => '12',
			'includes_sub_categories'           => 'yes',
			'hide_empty_categories'             => 'yes',
			'pre_loader'                        => 'yes',
			// Showcase tab settings data.
			'show_section_title'                => 'yes',
			'section_title'                     => __( 'Browse Categories', 'wc-category-showcase' ),
			'show_section_description'          => 'yes',
			'section_description'               => __( 'Explore Through a World of Digital Goods to Find Your Perfect Product', 'wc-category-showcase' ),
			'heading_alignment'                 => 'left',
			'card'                              => array(
				'background_color' => '#F5F5F5',
				'text_color'       => '#020617',
				'hover_color'      => '#FFFFFF',
				'hover_text_color' => '#020617',
			),
			'border_radius'                     => 8,
			'border_is_all'                     => 'no',
			'border_radius_all'                 => array(
				'top'    => '8',
				'right'  => '8',
				'bottom' => '8',
				'left'   => '8',
			),
			'gap_between_cards'                 => '16',
			'content_placement'                 => 'bottom',
			'overlay_content_position'          => 'top_left',
			'content_alignment'                 => 'center',
			'content_padding'                   => 16,
			'content_padding_is_all'            => 'no',
			'content_padding_all'               => array(
				'top'    => '16',
				'right'  => '16',
				'bottom' => '16',
				'left'   => '16',
			),
			'show_category_icon'                => 'yes',
			'show_category_title'               => 'yes',
			'show_category_description'         => 'yes',
			'show_category_product_quantity'    => 'yes',
			'show_subcategory_product_quantity' => 'yes',
			'show_custom_text'                  => 'yes',
			'show_button'                       => 'yes',
			'button_text'                       => 'Shop Now',
			'button_style'                      => 'only_text',
			'show_button_icon'                  => 'yes',
			'button'                            => array(
				'background_color' => '#ffffff',
				'text_color'       => '#ffffff',
				'hover_color'      => '#ffffff',
				'hover_text_color' => '#000000',
			),
			// Slide tab settings data.
			'slide_is_ticker'                   => 'no',
			'slider_ticker_direction'           => 'left_to_right',
			'ticket_mode'                       => 'medium',
			'slide_slideshow'                   => 'yes',
			'slide_speed'                       => '3000',
			'slide_stop_on_hover'               => 'yes',
			'slide_unlimited_loop'              => 'yes',
			'slide_navigation_arrow'            => 'yes',
			'slide_arrow_style'                 => 'arrow',
			'slider_navigation_position'        => 'default',
			'slide_button_style'                => 'rounded',
			'slide_button_background_style'     => 'filled',
			'slide_button'                      => array(
				'background_color' => '#000000',
				'text_color'       => '#000000',
				'hover_color'      => '#000000',
				'hover_text_color' => '#000000',
			),
			'slide_show_counter'                => 'yes',
			'slide_counter_style'               => 'dashes',
			'slide_counter'                     => array(
				'background_color' => '#000000',
				'text_color'       => '#000000',
				'hover_color'      => '#000000',
				'hover_text_color' => '#000000',
			),
			'slide_touch_interaction'           => 'yes',
			'slide_scroll_interaction'          => 'yes',
			'slide_draggable_slide'             => 'yes',
			'slide_free_mode'                   => 'yes',
			// Image tab settings data.
			'image_layout'                      => 'rectangle',
			'image_lazy_load'                   => 'no',
			'image_zoom_on_hover'               => 'no',
			'interactive_hover_style'           => 'always_gray',
			// Fonts tab settings data.
			'font_google_support'               => 'no',
			'font_main_title'                   => array(
				'text_tag'        => 'h2',
				'font_family'     => 'Roboto',
				'text_weight'     => 'default',
				'text_size'       => '14',
				'line_height'     => '16',
				'letter_spacing'  => '2',
				'text_align'      => 'left',
				'text_decoration' => 'bold',
				'text_color'      => '#000000',
			),
			'font_category_title'               => array(
				'text_tag'        => 'h1',
				'font_family'     => 'Roboto',
				'text_weight'     => 'semibold',
				'text_size'       => '16',
				'line_height'     => '15',
				'letter_spacing'  => '6',
				'text_align'      => 'left',
				'text_decoration' => 'bold',
				'text_color'      => '#000000',
			),
		);

		if ( ! empty( $id ) ) {
			$metadata                            = get_post_meta( $id );
			$settings                            = array();
			$settings['wcc_showcase_post_title'] = get_the_title( $id );
			foreach ( $metadata as $key => $value ) {
				if ( str_starts_with( $key, 'wcc_showcase_' ) ) {
					$value = maybe_unserialize( is_array( $value ) ? $value[0] : $value );
					if ( ! empty( $value ) ) {
						$settings[ $key ] = $value;
					}
				}
			}
		} else {
			$settings = array();
			foreach ( $defaults as $key => $value ) {
				$settings[ 'wcc_showcase_' . $key ] = $value;
			}
		}

		// Adjust other properties based on the dependent fields.

		return $settings;
	}
}
