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
		'wccs_show_block_title'           => 'Yes',
		'wccs_autoplay_slider'            => 'Yes',
		'wccs_infinite_scroll'            => 'Yes',
		'wccs_show_navigation'            => 'Yes',
		// Pro features.
		'wccs_slider_autoplaySpeed'       => '500',
		'wccs_featured_show_title'        => 'Yes',
		'wccs_featured_show_desc'         => 'Yes',
		'wccs_featured_show_button'       => 'Yes',
		'wccs_featured_button_text'       => 'Shop Now',
		'wccs_featured_content_color'     => '#fff',
		'wccs_featured_content_bg'        => 'rgba(150,88,138,.9)',
		'wccsp_featured_customizer'       => array(),

		'wccs_show_additional_categories' => 'Yes',
		'wccs_additional_categories'      => array(),
		// Pro features.
		'wccs_additional_show_title'      => 'Yes',
		'wccs_additional_title_color'     => '#000',
		'wccs_additional_content_bg'      => '#fff',
		'wccsp_additional_customizer'     => array(),
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
	 * @param array $wccs_featured_categories Additional categories array.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_additional_categories( $wccs_featured_categories ) {
		$this->set_prop( 'wccs_additional_categories', map_deep( $wccs_featured_categories, 'sanitize_text_field' ) );
	}

	/*
	|--------------------------------------------------------------------------
	| Pro Features Getters and setters.
	|--------------------------------------------------------------------------
	| Pro Features Getters and setters for the data properties.
	*/

	/**
	 * Get slider autoplay speed.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_slider_autoplaySpeed() {
		return $this->get_prop( 'wccs_slider_autoplaySpeed' );
	}

	/**
	 * Set slider autoplay speed.
	 *
	 * @param string $wccs_slider_autoplay_speed Slider autoplay speed.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_slider_autoplaySpeed( $wccs_slider_autoplay_speed ) {
		$this->set_prop( 'wccs_slider_autoplaySpeed', sanitize_text_field( $wccs_slider_autoplay_speed ) );
	}

	/**
	 * Get feature show title.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_featured_show_title() {
		return $this->get_prop( 'wccs_featured_show_title' );
	}

	/**
	 * Set feature show title.
	 *
	 * @param string $wccs_featured_show_title Feature show title.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_featured_show_title( $wccs_featured_show_title ) {
		$this->set_prop( 'wccs_featured_show_title', sanitize_text_field( $wccs_featured_show_title ) );
	}

	/**
	 * Get feature show description.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_featured_show_desc() {
		return $this->get_prop( 'wccs_featured_show_desc' );
	}

	/**
	 * Set feature show description.
	 *
	 * @param string $wccs_featured_show_desc Feature show description.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_featured_show_desc( $wccs_featured_show_desc ) {
		$this->set_prop( 'wccs_featured_show_desc', sanitize_text_field( $wccs_featured_show_desc ) );
	}

	/**
	 * Get feature show button.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_featured_show_button() {
		return $this->get_prop( 'wccs_featured_show_button' );
	}

	/**
	 * Set feature show button.
	 *
	 * @param string $wccs_featured_show_button Feature show button.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_featured_show_button( $wccs_featured_show_button ) {
		$this->set_prop( 'wccs_featured_show_button', sanitize_text_field( $wccs_featured_show_button ) );
	}

	/**
	 * Get feature button text.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_featured_button_text() {
		return $this->get_prop( 'wccs_featured_button_text' );
	}

	/**
	 * Set feature button text.
	 *
	 * @param string $wccs_featured_button_text Feature button text.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_featured_button_text( $wccs_featured_button_text ) {
		$this->set_prop( 'wccs_featured_button_text', sanitize_text_field( $wccs_featured_button_text ) );
	}

	/**
	 * Get feature content color.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_featured_content_color() {
		return $this->get_prop( 'wccs_featured_content_color' );
	}

	/**
	 * Set feature content color.
	 *
	 * @param string $wccs_featured_content_color Feature content color.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_featured_content_color( $wccs_featured_content_color ) {
		$this->set_prop( 'wccs_featured_content_color', sanitize_text_field( $wccs_featured_content_color ) );
	}

	/**
	 * Get feature content background color.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_wccs_featured_content_bg() {
		return $this->get_prop( 'wccs_featured_content_bg' );
	}

	/**
	 * Set feature content background color.
	 *
	 * @param string $wccs_featured_content_bg Feature content background color.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_featured_content_bg( $wccs_featured_content_bg ) {
		$this->set_prop( 'wccs_featured_content_bg', sanitize_text_field( $wccs_featured_content_bg ) );
	}

	/**
	 * Get featured customizer.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_wccsp_featured_customizer() {
		return $this->get_prop( 'wccsp_featured_customizer' );
	}

	/**
	 * Set featured customizer.
	 *
	 * @param array $wccsp_featured_customizer Featured customizer.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccsp_featured_customizer( $wccsp_featured_customizer ) {
		$this->set_prop( 'wccsp_featured_customizer', $wccsp_featured_customizer );
	}

	/**
	 * Get additional show title.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_wccs_additional_show_title() {
		return $this->get_prop( 'wccs_additional_show_title' );
	}

	/**
	 * Set additional show title.
	 *
	 * @param string $wccs_additional_show_title Additional show title.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_additional_show_title( $wccs_additional_show_title ) {
		$this->set_prop( 'wccs_additional_show_title', sanitize_text_field( $wccs_additional_show_title ) );
	}

	/**
	 * Get additional title color.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_wccs_additional_title_color() {
		return $this->get_prop( 'wccs_additional_title_color' );
	}

	/**
	 * Set additional title color.
	 *
	 * @param string $wccs_additional_title_color Additional title color.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_additional_title_color( $wccs_additional_title_color ) {
		$this->set_prop( 'wccs_additional_title_color', sanitize_text_field( $wccs_additional_title_color ) );
	}

	/**
	 * Get additional content background.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_wccs_additional_content_bg() {
		return $this->get_prop( 'wccs_additional_content_bg' );
	}

	/**
	 * Set additional content background.
	 *
	 * @param string $wccs_additional_content_bg Additional content background.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccs_additional_content_bg( $wccs_additional_content_bg ) {
		$this->set_prop( 'wccs_additional_content_bg', sanitize_text_field( $wccs_additional_content_bg ) );
	}

	/**
	 * Get additional customizer.
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_wccsp_additional_customizer() {
		return $this->get_prop( 'wccsp_additional_customizer' );
	}

	/**
	 * Set additional customizer.
	 *
	 * @param array $wccsp_additional_customizer Additional customizer.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function set_wccsp_additional_customizer( $wccsp_additional_customizer ) {
		$this->set_prop( 'wccsp_additional_customizer', $wccsp_additional_customizer );
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
