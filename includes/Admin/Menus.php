<?php

namespace WooCommerceCategoryShowcase\Admin;

use WooCommerceCategoryShowcase\Controllers\Helpers;

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
		add_action( 'admin_menu', array( $this, 'add_submenu' ) );
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
	 * Add sub-menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function add_submenu() {
		$menus = Utilities::get_menus();
		usort(
			$menus,
			function ( $a, $b ) {
				$a = isset( $a['position'] ) ? $a['position'] : PHP_INT_MAX;
				$b = isset( $b['position'] ) ? $b['position'] : PHP_INT_MAX;

				return $a - $b;
			}
		);
		foreach ( $menus as $menu ) {
			$menu = wp_parse_args(
				$menu,
				array(
					'page_title' => '',
					'menu_title' => '',
					'capability' => 'manage_options',
					'menu_slug'  => '',
					'callback'   => null,
					'position'   => '10',
					'page_hook'  => null,
					'tabs'       => array(),
					'load_hook'  => null,
				)
			);
			if ( ! is_callable( $menu['callback'] ) && ! empty( $menu['page_hook'] ) ) {
				$menu['callback'] = function () use ( $menu ) {
					$page_hook = $menu['page_hook'];
					$tabs      = $menu['tabs'];
					include_once __DIR__ . '/views/admin-page.php';
				};
			}
			$load = add_submenu_page(
				self::PARENT_SLUG,
				$menu['page_title'],
				$menu['menu_title'],
				$menu['capability'],
				$menu['menu_slug'],
				$menu['callback'],
				$menu['position']
			);
			if ( ! empty( $menu['load_hook'] ) && is_callable( $menu['load_hook'] ) ) {
				add_action( 'load-' . $load, $menu['load_hook'] );
			}
		}
	}

	/**
	 * Render menu.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function render_menu() {
		$add              = isset( $_GET['add'] ) ? true : false; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$post_id          = isset( $_GET['edit'] ) ? absint( wp_unslash( $_GET['edit'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$showcase_details = Helpers::get_slider_settings( $post_id );

		if ( $add ) {
			include __DIR__ . '/views/add-category-showcase.php';
		} elseif ( $post_id ) {
			include __DIR__ . '/views/add-category-showcase.php';
		} else {
			include __DIR__ . '/views/list-category-showcase.php';
		}
	}
}
