<?php

namespace WooCommerceCategoryShowcase\Admin;

defined( 'ABSPATH' ) || exit;

/**
 * Menus class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase\Admin
 */
class Menus {

	/**
	 * Parent menu slug.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	const PARENT_SLUG = 'wc-category-showcase';

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Add admin menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function admin_menu() {
		add_menu_page(
			__( 'Category Showcase', 'wc-category-showcase' ),
			__( 'WC Showcase', 'wc-category-showcase' ),
			'manage_options',
			self::PARENT_SLUG,
			array( $this, 'render_menu' ),
			'dashicons-admin-generic',
			56
		);
	}

	/**
	 * Render menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function render_menu() {
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'Category Showcase', 'wc-category-showcase' ); ?></h1>
			<p><?php esc_html_e( 'Welcome to the Category Showcase plugin.', 'wc-category-showcase' ); ?></p>
		</div>
		<?php
	}
}
