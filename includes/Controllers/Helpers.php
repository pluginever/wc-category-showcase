<?php

namespace WooCommerceCategoryShowcase\Controllers;

defined( 'ABSPATH' ) || exit;

/**
 * Helpers class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase.
 */
class Helpers {
	/**
	 * Get category details.
	 *
	 * @param \WP_Term| int $category_id Category ID.
	 * @param int           $post_id Post ID.
	 * @param bool          $additional_category Additional category.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public static function get_category_details( $category_id, $post_id = null, $additional_category = false ) {
		$category                = get_term( $category_id );
		$category_details        = array();
		$category_custom_details = array();

		// Get the custom category details.
		if ( ! empty( $post_id ) && ! $additional_category ) {
			$category_custom_details = get_post_meta( $post_id, 'wcc_showcase_category_list_item', true );
			$category_custom_details = $category_custom_details[ $category_id ] ?? array();
		}

		// Get the custom additional category details.
		if ( ! empty( $post_id ) && $additional_category ) {
			$category_custom_details = get_post_meta( $post_id, 'wcc_showcase_additional_category_list_item', true );
			$category_custom_details = $category_custom_details[ $category_id ] ?? array();
		}

		if ( $category && ! is_wp_error( $category ) ) {
			$category_image   = wp_get_attachment_url( get_term_meta( $category->term_id, 'thumbnail_id', true ), 'full' ) ? esc_url( wp_get_attachment_url( get_term_meta( $category->term_id, 'thumbnail_id', true ), 'full' ) ) : '';
			$category_details = array(
				'cat_id'           => esc_attr( $category->term_id ),
				'name'             => esc_attr( $category->name ),
				'custom_name'      => esc_attr( $category_custom_details['name'] ?? $category->name ),
				'slug'             => esc_attr( $category->slug ),
				'description'      => wp_kses_post( $category_custom_details['description'] ?? $category->description ),
				'image_url'        => esc_url( $category_custom_details['image_url'] ?? $category_image ),
				'icon_name'        => esc_attr( $category_custom_details['icon_name'] ?? '' ),
				'is_icon'          => esc_attr( $category_custom_details['is_icon'] ?? 'no' ),
				'cat_link'         => esc_url( get_category_link( $category->term_id ) ),
				'custom_text'      => esc_attr( $category_custom_details['custom_text'] ?? '' ),
				'is_custom_text'   => esc_attr( $category_custom_details['is_custom_text'] ?? 'no' ),
				'label_text'       => esc_attr( $category_custom_details['label_text'] ?? '' ),
				'label_color'      => esc_attr( $category_custom_details['label_color'] ?? 'green' ),
				'is_label'         => esc_attr( $category_custom_details['is_label'] ?? 'no' ),
				'total_count'      => esc_attr( $category->count ),
				'child_categories' => self::get_child_categories( $category->term_id ),
				'position'         => esc_attr( $category_custom_details['position'] ?? '0' ),
			);
		}

		return $category_details;
	}

	/**
	 * Get Product Categories.
	 *
	 * @param array $args Array of query arguments.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public static function get_all_categories( $args = array() ) {
		$defaults = array(
			'taxonomy'   => 'product_cat',
			'number'     => null,
			'hide_empty' => true,
		);

		$args = wp_parse_args( $args, $defaults );

		return get_terms( $args );
	}

	/**
	 * Category Product Counts.
	 *
	 * @param \WP_Term| int $parent_category_id Parent Category id.
	 *
	 * @since 1.0.0
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

		$category_ids = array_merge( array( $parent_category_id ), wp_list_pluck( $categories, 'term_id' ) );

		$args = array(
			'post_type'      => 'product',
			'posts_per_page' => -1,
			'tax_query'      => array( // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_tax_query
				array(
					'taxonomy' => 'product_cat',
					'field'    => 'term_id',
					'terms'    => $category_ids,
					'operator' => 'IN',
				),
			),
			'fields'         => 'ids',
		);

		$query         = new \WP_Query( $args );
		$product_count = $query->found_posts;

		wp_reset_postdata();

		return $product_count;
	}

	/**
	 * Get selected categories.
	 *
	 * @param array $showcase Showcase settings.
	 * @param int   $wccs_id Showcase ID.
	 *
	 * @since 2.1.0
	 * @return array
	 */
	public static function get_selected_categories( $showcase, $wccs_id = null ) {
		$hide_empty = isset( $showcase['hide_empty_categories'] ) && 'yes' === $showcase['hide_empty_categories'] ? true : false;
		if ( 'all' === $showcase['category_filter'] ) {
			$args = array(
				'hide_empty' => $hide_empty,
				'orderby'    => 'default' === $showcase['category_sort_order_by'] ? 'date' : $showcase['category_sort_order_by'],
				'order'      => $showcase['category_sort_order'],
			);

			$categories = self::get_all_categories( $args );
		} else {
			$categories = isset( $showcase['specific_category_select'] ) ? $showcase['specific_category_select'] : array();
		}

		// Get all categories details.
		$all_custom_categories = array();
		if ( 'all' === $showcase['category_filter'] ) {
			foreach ( $categories as $category ) {
				$all_custom_categories[] = self::get_category_details( $category->term_id );
			}
		} else {
			foreach ( $categories as $category ) {
				$all_custom_categories[] = self::get_category_details( $category, $wccs_id );
			}

			uasort( $all_custom_categories, array( self::class, 'sort_categories_according_to_position' ) );
		}

		// Limit the number of categories to display as per the settings and return.
		$limit = isset( $showcase['number_of_grid_column'] ) && 'grid' === $showcase['layout']
			? absint( $showcase['number_of_grid_column'] )
			: ( isset( $showcase['category_display_limit'] ) ? absint( $showcase['category_display_limit'] ) : null );

		return array_slice( $all_custom_categories, 0, $limit, true );
	}

	/**
	 * Get additional selected categories.
	 *
	 * @param array $showcase Showcase settings.
	 * @param int   $wccs_id Showcase ID.
	 *
	 * @since 2.1.0
	 * @return array
	 */
	public static function get_additional_categories( $showcase, $wccs_id = null ) {
		$categories = isset( $showcase['additional_category_select'] ) ? $showcase['additional_category_select'] : array();

		// Get all categories details.
		$all_custom_categories = array();

		foreach ( $categories as $category ) {
			$all_custom_categories[] = self::get_category_details( $category, $wccs_id, true );
		}

		uasort( $all_custom_categories, array( self::class, 'sort_categories_according_to_position' ) );

		return $all_custom_categories;
	}

	/**
	 * Get all child categories.
	 *
	 * @param \WP_Term| int $parent_category_id Parent Category ID.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public static function get_child_categories( $parent_category_id ) {
		$args = array(
			'taxonomy'   => 'product_cat',
			'child_of'   => $parent_category_id,
			'hide_empty' => false,
		);

		$all_child_categories = get_terms( $args );
		$child_categories     = array_map(
			function ( $child_category ) {
				return array(
					'name'          => $child_category->name,
					'cat_link'      => esc_url( get_category_link( $child_category->term_id ) ),
					'total_product' => esc_attr( $child_category->count ),
				);
			},
			$all_child_categories
		);

		return $child_categories;
	}

	/**
	 * Sorting categories array.
	 *
	 * @param array $a Array values.
	 * @param array $b Array values.
	 *
	 * @since  1.0.0
	 * @return int
	 */
	public static function sort_categories_according_to_position( $a, $b ) {
		if ( $a['position'] === $b['position'] ) {
			return 0;
		}
		return $a['position'] < $b['position'] ? - 1 : 1;
	}

	/**
	 * Get slider settings.
	 *
	 * @param int $id ID of the slider post.
	 *
	 * @return array Returns the slider settings.
	 */
	public static function get_showcase_settings( $id = null ) {
		$settings = array(
			// General tab settings data.
			'post_title'                        => '',
			'current_tab'                       => 'first',
			'layout'                            => 'grid',
			'slider'                            => array(
				'column' => '3',
				'row'    => '1',
			),
			'block_column'                      => '3',
			'number_of_grid_column'             => '7',
			'layout_option'                     => 'catalog_1x7',
			'column_breakpoint'                 => array(
				'laptop' => '3',
				'tablet' => '2',
				'mobile' => '1',
			),
			'category_filter'                   => 'all',
			'specific_category_select'          => array(),
			'category_list_item'                => array(),
			'enable_additional_category'        => 'no',
			'additional_category_select'        => array(),
			'additional_category_list_item'     => array(),
			'category_sort_order'               => 'asc',
			'category_sort_order_by'            => 'default',
			'category_display_limit'            => '12',
			'includes_sub_categories'           => 'no',
			'hide_empty_categories'             => 'yes',
			// Showcase tab settings data.
			'show_section_title'                => 'no',
			'section_title'                     => '',
			'show_section_description'          => 'no',
			'section_description'               => '',
			'heading_alignment'                 => 'left',
			'card'                              => array(
				'background_color' => '#96588AFF',
				'text_color'       => '#FFFFFFFF',
				'hover_color'      => '#96588AE6',
				'hover_text_color' => '#FFFFFFFF',
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
			'content_placement'                 => 'overlay',
			'overlay_content_position'          => 'center_center',
			'content_alignment'                 => 'center',
			'content_padding'                   => 16,
			'content_padding_is_all'            => 'no',
			'content_padding_all'               => array(
				'top'    => '16',
				'right'  => '16',
				'bottom' => '16',
				'left'   => '16',
			),
			'card_content'                      => array(
				'background_color' => '#96588A00',
				'hover_color'      => '#96588A00',
				'text_color'       => '#130F31FF',
				'hover_text_color' => '#130F31FF',
			),
			'content_inner_padding_is_all'      => 'no',
			'content_inner_padding'             => 16,
			'content_inner_padding_all'         => array(
				'top'    => '16',
				'right'  => '16',
				'bottom' => '16',
				'left'   => '16',
			),
			'show_category_image'               => 'yes',
			'show_category_icon'                => 'yes',
			'show_category_title'               => 'yes',
			'show_category_description'         => 'no',
			'show_category_product_quantity'    => 'yes',
			'show_subcategory_product_quantity' => 'no',
			'show_custom_text'                  => 'yes',
			'show_button'                       => 'yes',
			'button_text'                       => 'Shop Now',
			'button_style'                      => 'slightly_rounded',
			'show_button_icon'                  => 'no',
			'button'                            => array(
				'background_color'   => '#130F3100',
				'text_color'         => '#FFFFFFFF',
				'hover_color'        => '#FFFFFFFF',
				'hover_text_color'   => '#130F31FF',
				'border_color'       => '#FFFFFFFF',
				'border_hover_color' => '#FFFFFFFF',
			),
			// Slide tab settings data.
			'slider_height'                     => '300',
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
			'slide_button_style'                => 'circle',
			'slide_button_background_style'     => 'filled',
			'slide_button'                      => array(
				'background_color'   => '#96588AE6',
				'text_color'         => '#FFFFFFFF',
				'hover_color'        => '#FFFFFFFF',
				'hover_text_color'   => '#96588AE6',
				'border_color'       => '#FFFFFFFF',
				'border_hover_color' => '#FFFFFFFF',
			),
			'slide_show_counter'                => 'yes',
			'slide_counter_style'               => 'dots',
			'slide_counter'                     => array(
				'background_color'   => '#130F31FF',
				'text_color'         => '#130F31FF',
				'hover_color'        => '#D4D4D4FF',
				'hover_text_color'   => '#130F31FF',
				'border_color'       => '#FFFFFFFF',
				'border_hover_color' => '#FFFFFFFF',
			),
			'slide_touch_interaction'           => 'yes',
			'slide_scroll_interaction'          => 'no',
			'slide_draggable_slide'             => 'yes',
			'slide_free_mode'                   => 'yes',
			// Image tab settings data.
			'image_layout'                      => 'rounded',
			'image_zoom_on_hover'               => 'no',
			// Fonts tab settings data.
			'font_google_support'               => 'no',
			'font_main_title'                   => array(
				'text_tag'        => 'h2',
				'font_family'     => 'Roboto',
				'text_weight'     => '600',
				'text_size'       => '36',
				'line_height'     => '44',
				'letter_spacing'  => '0',
				'text_align'      => 'left',
				'text_decoration' => 'bold',
				'text_color'      => '#130F31FF',
			),
			'font_category_title'               => array(
				'text_tag'        => 'h2',
				'font_family'     => 'Roboto',
				'text_weight'     => '600',
				'text_size'       => '24',
				'line_height'     => '32',
				'letter_spacing'  => '0',
				'text_align'      => 'left',
				'text_decoration' => 'bold',
				'text_color'      => '#130F31FF',
			),
		);
		$settings = apply_filters( 'wc_category_showcase_settings', $settings );

		// Get all settings post meta.
		if ( ! empty( $id ) ) {
			foreach ( $settings as $key => $value ) {
				$meta_value = get_post_meta( $id, "wcc_showcase_{$key}", true );

				if ( ! empty( $meta_value ) || '0' === $meta_value ) {
					$settings[ $key ] = $meta_value;
				}
			}
			$settings['post_title'] = get_the_title( $id );
		}

		if ( 'yes' === $settings['show_section_title'] && empty( $settings['section_title'] ) ) {
			$settings['show_section_title'] = 'no';
		}

		if ( 'yes' === $settings['show_section_description'] && empty( $settings['section_description'] ) ) {
			$settings['show_section_description'] = 'no';
		}

		return $settings;
	}
}
