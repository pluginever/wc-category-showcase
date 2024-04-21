<?php

namespace Pluginever\WCCCS;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Metabox {

	public function __construct() {
		add_action( 'admin_init', [ $this, 'init_featured_cats_settings_metabox' ] );
		add_action( 'admin_init', [ $this, 'init_additional_cats_settings_metabox' ] );

		if ( ! \WC_Category_Showcase::is_pro_installed() ) {
			add_action( 'add_meta_boxes', [ $this, 'init_promotion_metabox' ] );
		}
	}

	/**
	 * Set metabox for featured categories
	 * @return array
	 * @since 1.0.3
	 *
	 */
	public function init_featured_cats_settings_metabox() {
		$metabox = new \Pluginever\Framework\Metabox( 'wccs_featured_categories_metabox' );
		$config  = array(
			'title'        => __( 'Featured Category Settings', 'wc-category-showcase' ),
			'screen'       => 'wccs_showcase',
			'context'      => 'normal',
			'priority'     => 'high',
			'lazy_loading' => 'true',
			'fields'       => array(
				array(
					'type'     => 'select',
					'name'     => 'wccs_featured_categories',
					'label'    => __( 'Select Categories', 'wc-category-showcase' ),
					'value'    => 'all',
					'multiple' => true,
					'select2'  => 'true',
					'sanitize' => 'intval',
					'options'  => $this->get_wc_category_list(),
				),
				array(
					'type'     => 'select',
					'name'     => 'wccs_show_block_title',
					'label'    => __( 'Show Block Title', 'wc-category-showcase' ),
					'sanitize' => 'intval',
					'value'    => '1',
					'options'  => array(
						'1' => __( 'Yes', 'wc-category-showcase' ),
						'0' => __( 'No', 'wc-category-showcase' ),
					),
				),
				array(
					'type'     => 'select',
					'name'     => 'wccs_autoplay_slider',
					'label'    => __( 'Autoplay the slider', 'wc-category-showcase' ),
					'sanitize' => 'intval',
					'value'    => '1',
					'options'  => array(
						'1' => __( 'Yes', 'wc-category-showcase' ),
						'0' => __( 'No', 'wc-category-showcase' ),
					),

				),
				array(
					'type'     => 'select',
					'name'     => 'wccs_infinite_scroll',
					'label'    => __( 'Infinite Looping for the slider', 'wc-category-showcase' ),
					'sanitize' => 'intval',
					'value'    => '1',
					'options'  => array(
						'1' => __( 'Yes', 'wc-category-showcase' ),
						'0' => __( 'No', 'wc-category-showcase' ),
					),
				),
				array(
					'type'     => 'select',
					'name'     => 'wccs_show_navigation',
					'label'    => __( 'Show navigation for the slider', 'wc-category-showcase' ),
					'sanitize' => 'intval',
					'value'    => '1',
					'options'  => array(
						'1' => __( 'Yes', 'wc-category-showcase' ),
						'0' => __( 'No', 'wc-category-showcase' ),
					),
				),
			),
		);
		$metabox->init( apply_filters( 'wccs_featured_metabox_fields', $config ) );
	}

	/**
	 * Additional categories
	 * @return array
	 * @since 1.0.3
	 *
	 */
	public function init_additional_cats_settings_metabox() {
		$metabox = new \Pluginever\Framework\Metabox( 'wccs_additional_categories_metabox' );
		$config  = array(
			'title'        => __( 'Additional Category Settings', 'wc-category-showcase' ),
			'screen'       => 'wccs_showcase',
			'context'      => 'normal',
			'priority'     => 'high',
			'lazy_loading' => 'true',
			'fields'       => array(
				array(
					'type'     => 'select',
					'name'     => 'wccs_show_additional_categories',
					'label'    => __( 'Show additional categories', 'wc-category-showcase' ),
					'sanitize' => 'intval',
					'value'    => '1',
					'options'  => array(
						'1' => __( 'Yes', 'wc-category-showcase' ),
						'0' => __( 'No', 'wc-category-showcase' ),
					),

				),
				array(
					'type'     => 'select',
					'name'     => 'wccs_additional_categories',
					'label'    => __( 'Select Categories', 'wc-category-showcase' ),
					'value'    => 'all',
					'multiple' => true,
					'select2'  => 'true',
					'sanitize' => 'intval',
					'options'  => $this->get_wc_category_list(),
				),
			),
		);

		$metabox->init( apply_filters( 'wccs_addtional_metabox_fields', $config ) );
	}

	/**
	 * Show Pro version feature
	 *
	 * since 1.0.0
	 */
	public function init_promotion_metabox() {
		add_meta_box( 'wccs_showcase-promotion', __( 'What More?', 'wc-category-showcase' ), [
			$this,
			'promotion_metabox_callback'
		], 'wccs_showcase', 'side' );
	}

	/**
	 * Show Pro version feature list
	 *
	 * since 1.0.0
	 */
	public function promotion_metabox_callback() {
		?>
		<img src="<?php echo esc_url( PLVR_WCCS_ASSETS ) . '/images/promotion.png'; ?>" alt="WOO Category Showcase Pro" style="width: 100%;margin-bottom: 10px;">
		<h4 style="margin: 0;padding: 0;border-bottom: 1px solid #333;"><?php esc_html_e( 'Pro Features', 'wc-category-showcase' ); ?></h4>
		<ul style="padding-left: 25px;list-style: disc;">
			<li><?php esc_html_e( 'Custom featured category image', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Custom additional category image', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Custom category title', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Category title show hide', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Category description show hide', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Category button show hide', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Category button custom text', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Custom content color', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Custom content background color', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'Custom image column', 'wc-category-showcase' ); ?></li>
			<li><?php esc_html_e( 'And Many More', 'wc-category-showcase' ); ?></li>
		</ul>
		<a href="http://bit.ly/woocommerce-category-showcase-pro" target="_blank" style="text-align: center;font-weight: bold;"><?php esc_html_e( 'Upgrade To PRO Now', 'wc-category-showcase' ); ?></a>
		<?php
	}

	/**
	 * get Woocommerce product category
	 *
	 * since 1.0.0
	 *
	 * @return array
	 */
	protected function get_wc_category_list() {
		$categories = wccs_get_wc_categories( [ 'number' => 1000 ] );
		$list       = array();

		if ( is_wp_error( $categories ) ) {
			return $list;
		}

		foreach ( $categories as $key => $category ) {
			$list[ $category->term_id ] = $category->name;
		}

		return $list;
	}

}
