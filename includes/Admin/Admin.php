<?php

namespace PluginEver\CategoryShowcase\Admin;

use PluginEver\CategoryShowcase\B8\Component;
use PluginEver\CategoryShowcase\Controllers\Helpers;

defined( 'ABSPATH' ) || exit;

/**
 * Admin class.
 *
 * @since 1.0.0
 * @package PluginEver\CategoryShowcase\Admin
 */
class Admin extends Component {

	/**
	 * Child components.
	 *
	 * @since 1.0.0
	 * @var array<int|string, class-string>
	 */
	public array $components = array(
		Menu::class,
		Notices::class,
		Feedback::class,
	);

	/**
	 * Whether to load.
	 *
	 * @since 1.0.0
	 * @return bool
	 */
	public function autoload(): bool {
		return is_admin();
	}

	/**
	 * Register hooks.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register(): void {
		add_action( 'admin_init', array( $this, 'buffer_start' ), 1 );
		add_filter( 'woocommerce_screen_ids', array( $this, 'screen_ids' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_filter( 'admin_footer_text', array( $this, 'admin_footer_text' ), PHP_INT_MAX );
		add_filter( 'update_footer', array( $this, 'update_footer' ), PHP_INT_MAX );
		add_action( 'admin_post_wcc_showcase_add_category_showcase', array( __CLASS__, 'handle_add_category_showcase' ) );
		add_action( 'wp_ajax_wc_category_showcase_search_categories', array( __CLASS__, 'search_categories' ) );
		add_action( 'wp_ajax_wc_category_showcase_get_category_details', array( __CLASS__, 'get_category_details' ) );
		add_action( 'wp_ajax_wc_category_showcase_get_additional_category_details', array( __CLASS__, 'get_additional_category_details' ) );
	}

	/**
	 * Start output buffering.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function buffer_start() {
		ob_start();
	}

	/**
	 * Add the plugin screens to the WooCommerce screens.
	 * This will load the WooCommerce admin styles and scripts.
	 *
	 * @param array $ids Screen ids.
	 *
	 * @return array
	 */
	public function screen_ids( $ids ) {
		return array_merge( $ids, $this->app->get( Menu::class )->get_screen_ids() );
	}

	/**
	 * Enqueue admin scripts.
	 *
	 * @param string $hook The current admin page.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function enqueue_scripts( $hook ) {
		wp_enqueue_style( 'b8-components' );
		wp_enqueue_style( 'b8-layout' );

		$showcase_add = isset( $_GET['add'] ) ? true : false; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$showcase_id  = isset( $_GET['edit'] ) ? absint( wp_unslash( $_GET['edit'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended

		$screen_ids = $this->app->get( Menu::class )->get_screen_ids();

		if ( in_array( $hook, $screen_ids, true ) || $showcase_id || $showcase_add ) {
			$assets  = $this->app->assets_url() . '/build';
			$version = $this->app->version;

			wp_register_style( 'wccs_tailwind', $assets . '/styles/tailwind.css', array(), $version );
			wp_register_style( 'wcc-showcase-fontawesome-icons', $assets . '/fonts/fontawesome/fontawesome-icons.css', array(), $version );
			wp_register_style( 'wcc-showcase-happy-icons', $assets . '/fonts/happy-icons/happy-icons.css', array(), $version );
			wp_register_style( 'wcc-showcase-vendor', $assets . '/styles/vendor.css', array(), $version );
			wp_register_script( 'wcc-showcase-vendor', $assets . '/scripts/vendor.js', array( 'jquery' ), $version, true );

			wp_enqueue_style( 'wcc_showcase-admin', $assets . '/styles/admin.css', array( 'wccs_tailwind', 'wcc-showcase-vendor', 'wcc-showcase-fontawesome-icons', 'wcc-showcase-happy-icons' ), $version );
			wp_enqueue_script( 'wcc_showcase-admin', $assets . '/scripts/admin.js', array( 'jquery', 'wp-color-picker', 'wcc-showcase-vendor' ), $version, true );

			wp_enqueue_media();

			wp_localize_script(
				'wcc_showcase-admin',
				'wcc_showcase_admin_js_vars',
				array(
					'ajax_url'     => admin_url( 'admin-ajax.php' ),
					'search_nonce' => wp_create_nonce( 'wcc_showcase_search_category_action' ),
					'i18n'         => array(
						'search_category' => __( 'Search category...', 'wc-category-showcase' ),
					),
				)
			);
		}

		// Open documentation in new tab.
		if ( is_admin() ) {
			$script = "
            document.addEventListener('DOMContentLoaded', function () {
                let menuItem = document.querySelector(\"a[href='admin.php?page=wccs-documentation']\");
                if (menuItem) {
                    menuItem.setAttribute('target', '_blank');
                    menuItem.setAttribute('rel', 'noopener noreferrer');
                }
            });
        ";
			wp_add_inline_script( 'jquery', $script );
		}
	}

	/**
	 * Request review.
	 *
	 * @param string $text Footer text.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function admin_footer_text( $text ) {
		$screen_ids = $this->app->get( Menu::class )->get_screen_ids();

		if ( in_array( get_current_screen()->id, $screen_ids, true ) ) {
			$text = sprintf(
			/* translators: %s: Plugin name */
				__( 'Thank you for using %s!', 'wc-category-showcase' ),
				'<strong>' . esc_html( $this->app->get( 'name' ) ) . '</strong>'
			);
			if ( $this->app->get( 'review_url' ) ) {
				$text .= sprintf(
				/* translators: %s: Plugin name */
					__( ' Share your appreciation with a five-star review %s.', 'wc-category-showcase' ),
					'<a href="' . esc_url( $this->app->get( 'review_url' ) ) . '" target="_blank">here</a>'
				);
			}
		}

		return $text;
	}

	/**
	 * Update footer.
	 *
	 * @param string $footer_text Footer text.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function update_footer( $footer_text ) {
		$screen_ids = $this->app->get( Menu::class )->get_screen_ids();

		if ( in_array( get_current_screen()->id, $screen_ids, true ) ) {
			/* translators: 1: Plugin version */
			$footer_text = sprintf( esc_html__( 'Version %s', 'wc-category-showcase' ), $this->app->version );
		}

		return $footer_text;
	}

	/**
	 * Add/Edit category showcase.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function handle_add_category_showcase() {
		check_admin_referer( 'wcc_showcase_add_category_showcase' );
		$post_id = isset( $_POST['post_id'] ) ? absint( $_POST['post_id'] ) : '';
		$referer = wp_get_referer();

		// Post title.
		$wcc_showcase_title = isset( $_POST['wcc_showcase_title'] ) ? sanitize_text_field( wp_unslash( $_POST['wcc_showcase_title'] ) ) : '';
		// Add category showcase.
		$args     = array(
			'ID'          => $post_id,
			'post_title'  => $wcc_showcase_title,
			'post_type'   => 'wccs_showcase',
			'post_status' => 'publish',
		);
		$settings = Helpers::get_showcase_settings();
		$post_id  = wp_insert_post( $args );
		if ( is_wp_error( $post_id ) ) {
			wc_category_showcase()->app->flash->error( __( 'Failed to Add Category Showcase: Please Try Again!', 'wc-category-showcase' ) );
			wp_safe_redirect( $referer );
			exit();
		}

		foreach ( $settings as $key => $default_value ) {
			$post_key = 'wcc_showcase_' . $key;
			if ( isset( $_POST[ $post_key ] ) ) {
				$meta_value = is_scalar( $_POST[ $post_key ] ) ? sanitize_text_field( wp_unslash( $_POST[ $post_key ] ) ) : map_deep( wp_unslash( $_POST[ $post_key ] ), 'sanitize_text_field' );

				if ( 'wcc_showcase_category_list_item' === $post_key ) {
					if ( empty( $meta_value ) ) {
						continue;
					}

					// if it is not array the remove it from the list.
					$meta_value = array_filter( $meta_value, 'is_array' );

					uasort( $meta_value, array( Helpers::class, 'sort_categories_according_to_position' ) );
					foreach ( $meta_value as $keys => $category_details ) {
						if ( ! array_key_exists( 'is_icon', $category_details ) ) {
							$meta_value[ $keys ]['is_icon'] = 'no';
						}
						if ( ! array_key_exists( 'is_custom_text', $category_details ) ) {
							$meta_value[ $keys ]['is_custom_text'] = 'no';
						}
						if ( ! array_key_exists( 'is_label', $category_details ) ) {
							$meta_value[ $keys ]['is_label'] = 'no';
						}
					}
				}

				if ( 'wcc_showcase_additional_category_list_item' === $post_key ) {
					if ( empty( $meta_value ) ) {
						continue;
					}

					// if it is not array the remove it from the list.
					$meta_value = array_filter( $meta_value, 'is_array' );

					uasort( $meta_value, array( Helpers::class, 'sort_categories_according_to_position' ) );
					foreach ( $meta_value as $keys => $category_details ) {
						if ( ! array_key_exists( 'is_icon', $category_details ) ) {
							$meta_value[ $keys ]['is_icon'] = 'no';
						}
						if ( ! array_key_exists( 'is_custom_text', $category_details ) ) {
							$meta_value[ $keys ]['is_custom_text'] = 'no';
						}
						if ( ! array_key_exists( 'is_label', $category_details ) ) {
							$meta_value[ $keys ]['is_label'] = 'no';
						}
					}
				}

				update_post_meta( $post_id, $post_key, $meta_value );
			} else {
				$meta_value = '';
				if ( 'yes' === $default_value ) {
					$meta_value = 'no';
				}
				update_post_meta( $post_id, $post_key, $meta_value );
			}
		}
		wc_category_showcase()->app->flash->success( __( 'The category showcase has been successfully updated!', 'wc-category-showcase' ) );
		$redirect_to = admin_url( 'admin.php?page=wc-category-showcase&edit=' . $post_id );
		wp_safe_redirect( $redirect_to );
		exit;
	}

	/**
	 * Search categories.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function search_categories() {
		check_admin_referer( 'wcc_showcase_search_category_action', 'nonce' );
		$term = isset( $_POST['term'] ) ? sanitize_text_field( wp_unslash( $_POST['term'] ) ) : '';

		if ( empty( $term ) ) {
			wp_send_json_success( esc_html__( 'No, search term provided.', 'wc-category-showcase' ) );
			wp_die();
		}

		$categories = get_terms(
			array(
				'taxonomy'   => 'product_cat',
				'hide_empty' => false,
				'name__like' => $term,
			)
		);

		$results = array();

		if ( ! empty( $categories ) ) {
			foreach ( $categories as $category ) {
				$text = sprintf(
					'(#%1$s) %2$s',
					$category->term_id,
					wp_strip_all_tags( $category->name )
				);

				$results[] = array(
					'id'   => $category->term_id,
					'text' => $text,
				);
			}
		}

		wp_send_json(
			array(
				'results'    => $results,
				'pagination' => array(
					'more' => false,
				),
			)
		);
	}

	/**
	 * Get category details.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function get_category_details() {
		check_admin_referer( 'wcc_showcase_search_category_action', 'nonce' );
		$term_id          = isset( $_POST['term_id'] ) ? sanitize_text_field( wp_unslash( $_POST['term_id'] ) ) : '';
		$current_position = isset( $_POST['position'] ) ? sanitize_text_field( wp_unslash( $_POST['position'] ) ) : '';

		if ( empty( $term_id ) ) {
			wp_send_json_success( esc_html__( 'No, search term id provided.', 'wc-category-showcase' ) );
			wp_die();
		}
		$category_details             = Helpers::get_category_details( $term_id );
		$category_details['position'] = $current_position;
		include WCCS_PATH . 'templates/admin/load-category-details.php';
		wp_die();
	}

	/**
	 * Get category details.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function get_additional_category_details() {
		check_admin_referer( 'wcc_showcase_search_category_action', 'nonce' );
		$term_id          = isset( $_POST['term_id'] ) ? sanitize_text_field( wp_unslash( $_POST['term_id'] ) ) : '';
		$current_position = isset( $_POST['position'] ) ? sanitize_text_field( wp_unslash( $_POST['position'] ) ) : '';

		if ( empty( $term_id ) ) {
			wp_send_json_success( esc_html__( 'No, search term id provided.', 'wc-category-showcase' ) );
			wp_die();
		}
		$category_details             = Helpers::get_category_details( $term_id );
		$category_details['position'] = $current_position;
		include WCCS_PATH . 'templates/admin/load-additional-category-details.php';
		wp_die();
	}
}
