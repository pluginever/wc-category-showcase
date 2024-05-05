<?php

namespace WooCommerceCategoryShowcase\controllers;

defined( 'ABSPATH' ) || exit;

/**
 * Actions class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Actions {

	/**
	 * Actions constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_post_wccs_add_category_showcase', array( __CLASS__, 'handle_add_category_showcase' ) );
	}
}
