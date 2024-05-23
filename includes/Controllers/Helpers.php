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
	 * @param \WP_Term| int $category Category title.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	public static function get_category_details( $category ) {
		$category = get_term( $category );
		if ( $category && ! is_wp_error( $category ) ) {
			return sprintf(
				'%2$s',
				$category->term_id,
				html_entity_decode( $category->name )
			);
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
			'layout'                            => 'grid',
			'slider'                            => array(
				'column' => '3',
				'row'    => '1',
			),
			'block'                             => array(
				'column' => '3',
				'row'    => '2',
			),
			'number_of_grid_column'             => '3',
			'number_of_block_column'            => '3',
			'layout_option'                     => 'basic',
			'column_breakpoint'                 => array(
				'laptop' => '3',
				'tablet' => '2',
				'mobile' => '1',
			),
			'category_filter'                   => 'all',
			'specific_category_select'          => array(),
			'category_sort_order'               => 'default',
			'category_sort_order_by'            => 'asc',
			'category_display_limit'            => '12',
			'includes_sub_categories'           => 'no',
			'hide_empty_categories'             => 'no',
			'pre_loader'                        => 'no',
			// Showcase tab settings data.
			'show_section_title'                => 'no',
			'section_title'                     => '',
			'show_section_description'          => 'no',
			'section_description'               => '',
			'heading_alignment'                 => 'left',
			'card'                              => array(
				'background_color' => '#000000',
				'text_color'       => '#000000',
				'hover_color'      => '#000000',
			),
			'border_radius'                     => 8,
			'border_is_all'                     => 'no',
			'border_radius_all'                 => array(
				'top'    => '8',
				'right'  => '8',
				'bottom' => '8',
				'left'   => '8',
			),
			'gap_between_cards'                 => '8',
			'content_placement'                 => 'top',
			'content_margin'                    => 12,
			'content_margin_is_all'             => '',
			'content_margin_all'                => array(
				'top'    => '10',
				'right'  => '20',
				'bottom' => '10',
				'left'   => '20',
			),
			'show_category_icon'                => 'no',
			'show_category_title'               => 'no',
			'show_category_description'         => 'no',
			'show_category_product_quantity'    => 'no',
			'show_subcategory_product_quantity' => 'no',
			'show_custom_text'                  => 'no',
			'show_button'                       => 'no',
			'button_text'                       => 'Shop Now',
			'button_style'                      => 'only_text',
			'show_button_icon'                  => 'no',
			'button'                            => array(
				'background_color' => '#ffffff',
				'text_color'       => '#ffffff',
				'hover_color'      => '#ffffff',
			),
			// Slide tab settings data.
			'slide_slideshow'                   => 'no',
			'slide_button_style'                => 'rounded',
			'slide_button_background_style'     => 'filled',
			'slide_speed'                       => '3000',
			'slide_stop_on_hover'               => 'no',
			'slide_unlimited_loop'              => 'no',
			'slide_navigation_arrow'            => 'no',
			'slide_arrow_style'                 => 'arrow',
			'slider_navigation_position'        => 'top-right',
			'slide_button'                      => array(
				'background_color' => '#000000',
				'text_color'       => '#000000',
				'hover_color'      => '#000000',
			),
			'slide_show_counter'                => 'no',
			'slide_counter_style'               => 'dashes',
			'slide_counter'                     => array(
				'background_color' => '#000000',
				'text_color'       => '#000000',
				'hover_color'      => '#000000',
			),
			'slide_touch_interaction'           => 'no',
			'slide_scroll_interaction'          => 'no',
			'slide_draggable_slide'             => 'no',
			'slide_free_mode'                   => 'no',
			// Image tab settings data.
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
