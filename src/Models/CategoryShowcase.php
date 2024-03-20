<?php

namespace WooCommerceCategoryShowcase\Models;

use WooCommerceCategoryShowcase\Lib\Data;

defined( 'ABSPATH' ) || exit();

/**
 * Class Something.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase\Models
 */
class CategoryShowcase extends Data {
	/**
	 * Post type.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	protected $post_type = 'wccs_showcase';

	/**
	 * All data for this object. Name value pairs (name + default value).
	 *
	 * @since 1.0.0
	 * @var array All data.
	 */
	protected $data = array(
		'post_title'                      => '',
		'category_showcase_title'         => '',
		'wccs_featured_categories'        => array(),
		'wccs_show_block_title'           => null,
		'wccs_autoplay_slider'            => null,
		'wccs_infinite_scroll'            => null,
		'wccs_show_navigation'            => null,
		'wccs_show_additional_categories' => null,
		'wccs_additional_categories'      => array(),
		'date_created'                    => null,
	);

	/**
	 * Post data to property map.
	 *
	 * Post data key => property key.
	 *
	 * @since 1.0.0
	 * @var array
	 */
	protected $postdata_map = array(
		'post_title'   => 'post_title',
		'date_created' => 'post_date',
	);

	/**
	 * Save data.
	 *
	 * @since 1.0.0
	 * @return $this|\WP_Error Post object (or WP_Error on failure).
	 */
	public function save() {
		if ( empty( $this->get_name() ) ) {
			return new \WP_Error( 'missing_required', __( 'Please enter a name for the category showcase.', 'wc-category-showcase' ) );
		}

		return parent::save();
	}

	/*
	|--------------------------------------------------------------------------
	| Getters and Setters.
	|--------------------------------------------------------------------------
	| Getters and setters for the data properties.
	*/

	/**
	 * Get name.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_name() {
		return $this->get_prop( 'post_title' );
	}

	/**
	 * Set name.
	 *
	 * @param string $name The name.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_name( $name ) {
		$this->set_prop( 'post_title', sanitize_text_field( $name ) );
	}

	/**
	 * Get category showcase_title.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_category_showcase_title() {
		return $this->get_prop( 'category_showcase_title' );
	}

	/**
	 * Set category showcase_title.
	 *
	 * @param string $category_showcase_title Category showcase_title.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_category_showcase_title( $category_showcase_title ) {
		$this->set_prop( 'category_showcase_title', sanitize_text_field( $category_showcase_title ) );
	}

	/**
	 * Get show block title.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_show_block_title() {
		return $this->get_prop( 'wccs_show_block_title' );
	}

	/**
	 * Set show block title.
	 *
	 * @param string $wccs_show_block_title Show bloc title.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_show_block_title( $wccs_show_block_title ) {
		$this->set_prop( 'wccs_show_block_title', sanitize_text_field( $wccs_show_block_title ) );
	}

	/**
	 * Get autoplay slider.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_autoplay_slider() {
		return $this->get_prop( 'wccs_autoplay_slider' );
	}

	/**
	 * Set autoplay slider.
	 *
	 * @param string $wccs_autoplay_slider Autoplay slider.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_autoplay_slider( $wccs_autoplay_slider ) {
		$this->set_prop( 'wccs_autoplay_slider', sanitize_text_field( $wccs_autoplay_slider ) );
	}

	/**
	 * Get infinite scroll.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_infinite_scroll() {
		return $this->get_prop( 'wccs_infinite_scroll' );
	}

	/**
	 * Set infinite scroll.
	 *
	 * @param string $wccs_infinite_scroll Infinite scroll.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_infinite_scroll( $wccs_infinite_scroll ) {
		$this->set_prop( 'wccs_infinite_scroll', sanitize_text_field( $wccs_infinite_scroll ) );
	}

	/**
	 * Get show navigation.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_show_navigation() {
		return $this->get_prop( 'wccs_show_navigation' );
	}

	/**
	 * Set show navigation.
	 *
	 * @param string $wccs_show_navigation Show navigation.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_show_navigation( $wccs_show_navigation ) {
		$this->set_prop( 'wccs_show_navigation', sanitize_text_field( $wccs_show_navigation ) );
	}

	/**
	 * Get show additional categories.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_show_additional_categories() {
		return $this->get_prop( 'wccs_show_additional_categories' );
	}

	/**
	 * Set show additional categories.
	 *
	 * @param string $wccs_show_additional_categories Show additional categories.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_show_additional_categories( $wccs_show_additional_categories ) {
		$this->set_prop( 'wccs_show_additional_categories', sanitize_text_field( $wccs_show_additional_categories ) );
	}

	/**
	 * Get featured categories.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_featured_categories() {
		return $this->get_prop( 'wccs_featured_categories' );
	}

	/**
	 * Set featured categories.
	 *
	 * @param string $wccs_featured_categories Featured categories array.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_featured_categories( $wccs_featured_categories ) {
		$this->set_prop( 'wccs_featured_categories', map_deep( $wccs_featured_categories, 'sanitize_text_field' ) );
	}

	/**
	 * Get additional categories.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_wccs_additional_categories() {
		return $this->get_prop( 'wccs_additional_categories' );
	}

	/**
	 * Set additional categories.
	 *
	 * @param string $wccs_featured_categories Additional categories array.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_additional_categories( $wccs_featured_categories ) {
		$this->set_prop( 'wccs_additional_categories', map_deep( $wccs_featured_categories, 'sanitize_text_field' ) );
	}

	/**
	 * Get date created.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_date_created() {
		$prop = $this->get_prop( 'date_created' );
		// check the date is valid then format as July 17, 2023.
		if ( ! empty( $prop ) && strtotime( $prop ) ) {
			return date_i18n( 'F j, Y', strtotime( $prop ) );
		}

		return null;
	}
}
