<?php
namespace WooCommerceCategoryShowcase\Frontend;

defined( 'ABSPATH' ) || exit;

/**
 * Frontend class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Frontend {
	/**
	 * Frontend constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		$this->add_actions();
	}

	/**
	 * Add actions.
	 *
	 * @since 1.0.0
	 */
	public function add_actions() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, 'frontend_scripts' ) );
	}

	/**
	 * Enqueue frontend scripts.
	 *
	 * @since 1.0.0
	 */
	public static function frontend_scripts() {
		wc_category_showcase()->register_style( 'wc-category-showcase-frontend', 'css/frontend-common.css' );
		wc_category_showcase()->register_script( 'wc-category-showcase-frontend', 'js/frontend-common.js' );
		wc_category_showcase()->register_script( 'wc-category-showcase-slick', 'js/slick.js' );

		wp_enqueue_style( 'wc-category-showcase-frontend' );
		wp_enqueue_script( 'wc-category-showcase-frontend' );
		wp_enqueue_script( 'wc-category-showcase-slick' );

		$localize = array(
			'ajaxurl'  => admin_url( 'admin-ajax.php' ),
			'security' => wp_create_nonce( 'wccs_category_showcase' ),
			'i18n'     => array(),
		);
		wp_localize_script( 'wc-category-showcase-frontend', 'jsobject', $localize );
	}
}
