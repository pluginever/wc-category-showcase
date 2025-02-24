<?php

namespace WooCommerceCategoryShowcase;

defined( 'ABSPATH' ) || exit;

/**
 * Class Installer.
 *
 * @since 2.2.0
 * @package WooCommerceCategoryShowcase
 */
class Installer {

	/**
	 * Update callbacks.
	 *
	 * @since 2.2.0
	 * @var array
	 */
	protected $updates = array(
		'2.2.0' => array( 'update_220' ),
	);

	/**
	 * Installer constructor.
	 *
	 * @since 2.2.0
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'check_update' ), 0 );

		// Schedule the migration cron job (runs every 15 minutes).
		add_filter( 'cron_schedules', array( $this, 'add_cron_schedules' ) );
		add_action( 'wccs_migrate_data', array( $this, 'migrate_data' ) );
	}

	/**
	 * Check the plugin version and run the updater if necessary.
	 *
	 * This check is done on all requests and runs if the versions do not match.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public function check_update() {
		$db_version      = wc_category_showcase()->get_db_version();
		$current_version = wc_category_showcase()->get_version();
		$requires_update = version_compare( $db_version, $current_version, '<' );
		$can_install     = ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) && ! defined( 'IFRAME_REQUEST' );
		if ( $can_install && $requires_update ) {
			static::install();
			$update_versions = array_keys( $this->updates );
			usort( $update_versions, 'version_compare' );
			if ( ! is_null( $db_version ) && version_compare( $db_version, end( $update_versions ), '<' ) ) {
				$this->update();
			} else {
				wc_category_showcase()->update_db_version( $current_version );
			}
		}
	}

	/**
	 * Update the plugin.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public function update() {
		$db_version = wc_category_showcase()->get_db_version();
		foreach ( $this->updates as $version => $callbacks ) {
			$callbacks = (array) $callbacks;
			if ( version_compare( $db_version, $version, '<' ) ) {
				foreach ( $callbacks as $callback ) {
					wc_category_showcase()->log( sprintf( 'Updating to %s from %s', $version, $db_version ) );
					// if the callback return false then we need to update the db version.
					$continue = call_user_func( array( $this, $callback ) );
					if ( ! $continue ) {
						wc_category_showcase()->update_db_version( $version );
						$notice = sprintf(
						/* translators: 1: plugin name 2: version number */
							__( '%1$s updated to version %2$s successfully.', 'wc-category-showcase' ),
							'<strong>' . wc_category_showcase()->get_name() . '</strong>',
							'<strong>' . $version . '</strong>'
						);
						wc_category_showcase()->flash->success( $notice );
					}
				}
			}
		}
	}

	/**
	 * Install the plugin.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public static function install() {
		if ( ! is_blog_installed() ) {
			return;
		}

		// On install, Schedule the migration cron job (runs every 15 minutes).
		if ( ! wp_next_scheduled( 'wccs_migrate_data' ) ) {
			wp_schedule_event( time(), 'every_five_minutes', 'wccs_migrate_data' );
		}

		wc_category_showcase()->update_db_version( wc_category_showcase()->get_version(), false );
		add_option( 'wcc_showcase_install_date', current_time( 'mysql' ) );
		set_transient( 'wcc_showcase_activated', true, 30 );
		set_transient( 'wcc_showcase_activation_redirect', true, 30 );
		add_option( 'wcc_showcase_installed', wp_date( 'U' ) );
	}

	/**
	 * Add custom interval to process migration (15 minutes).
	 *
	 * @param array $schedules The existing cron schedules.
	 *
	 * @since 2.2.0
	 * @return array The modified cron schedules.
	 */
	public function add_cron_schedules( $schedules ) {
		$schedules['every_five_minutes'] = array(
			'interval' => 900, // Similar to 15 minutes.
			'display'  => __( 'Every 5 Minutes' ),
		);
		return $schedules;
	}

	/**
	 * Migration function.
	 * Migrate data from old version to new version.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public function migrate_data() {
		error_log( 'Migrating data...' );

		$fields = array(
			'wccs_featured_categories'   => 'wcc_showcase_specific_category_select',
			'wccs_show_block_title'      => 'wcc_showcase_show_section_title',
			'wccs_autoplay_slider'       => 'wcc_showcase_slide_slideshow',
			'wccs_infinite_scroll'       => 'wcc_showcase_slide_unlimited_loop',
			'wccs_show_navigation'       => 'wcc_showcase_slide_navigation_arrow',
			'wccs_featured_show_title'   => 'wcc_showcase_show_category_title',
			'wccs_featured_show_desc'    => 'wcc_showcase_show_category_description',
			'wccs_featured_show_button'  => 'wcc_showcase_show_button',
			'wccs_featured_button_text'  => 'wcc_showcase_button_text',
			// 'wccs_additional_categories' => 'wcc_showcase_additional_category_select',
		);

		$fields_to_delete = array(
			'wccs_featured_content_color',
			'wccs_featured_content_bg',
			'wccs_additional_show_title',
			'wccs_additional_title_color',
			'wccs_additional_content_bg',
			'wccs_featured_show_custom_message',
			'wccs_featured_custom_message',
			'wccs_additional_button_hover_color',
			'wccs_additional_button_hover_text_color',
		);

		// Get current offset.
		$paged = (int) get_option( 'wccs_migrated', 1 );

		// Fetch one post at a time.
		$query = new \WP_Query(
			array(
				'post_type'      => 'wccs_showcase',
				'posts_per_page' => 1,
				'offset'         => $paged,
				'fields'         => 'ids',
			)
		);

		if ( $query->have_posts() ) {
			foreach ( $query->posts as $post_id ) {
				error_log( 'Migrating post ID: ' . $post_id );
				// Update the uncommon meta keys.
				update_post_meta( $post_id, 'wcc_showcase_layout', 'slider' );
				update_post_meta(
					$post_id,
					'wcc_showcase_slider',
					array(
						'column' => '1',
						'row'    => '1',
					)
				);
				update_post_meta( $post_id, 'wcc_showcase_category_filter', 'specific' );
				update_post_meta( $post_id, 'wcc_showcase_specific_category_select', 'specific' );

				var_dump( get_post_meta( $post_id, 'wccs_featured_categories', true ) );

				foreach ( $fields as $key => $field ) {
					$value = get_post_meta( $post_id, $key, true );

					// Check if value and field are set. Then update the post meta using $field.
					if ( ! empty( $value ) && isset( $field ) ) {
						update_post_meta( $post_id, $field, $value );
					}

					// Update the title if the block title is set.
					if ( 'wccs_show_block_title' === $key ) {
						update_post_meta( $post_id, 'wcc_showcase_section_title', get_the_title( $post_id ) );
					}

					// Delete old meta keys if necessary.
					// delete_post_meta( $post_id, $key );
				}

				// Update additional customizer settings.
				$featured_customizer   = get_post_meta( $post_id, 'wccsp_featured_customizer', true );
				$additional_customizer = get_post_meta( $post_id, 'wccsp_additional_customizer', true );

				error_log( 'Featured Customizer: ' . print_r( $featured_customizer, true ) );

				// Update array keys from $featured_customizer, title should be "name" and image should be "image_url".
				if ( is_array( $featured_customizer ) ) {
					$featured_customizer = array_map(
						function ( $item, $key ) {
							// Update the keys.
							$item['name']      = $item['title'];
							$item['image_url'] = $item['image'];

							// Add default values.
							$item['description']    = '';
							$item['custom_text']    = '';
							$item['icon_name']      = '';
							$item['label_text']     = '';
							$item['label_color']    = 'green';
							$item['position']       = '0';
							$item['cat_id']         = (string) $key;
							$item['is_icon']        = 'no';
							$item['is_custom_text'] = 'no';
							$item['is_label']       = 'no';

							// Unset the old keys.
							unset( $item['title'] );
							unset( $item['image'] );
							return $item;
						},
						$featured_customizer,
						array_keys( $featured_customizer )
					);
				}

				// Update array keys from $additional_customizer, title should be "name" and image should be "image_url".
				if ( is_array( $additional_customizer ) ) {
					$additional_customizer = array_map(
						function ( $item, $key ) {
							// Update the keys.
							$item['name']      = $item['title'];
							$item['image_url'] = $item['image'];

							// Add default values.
							$item['description']    = '';
							$item['custom_text']    = '';
							$item['icon_name']      = '';
							$item['label_text']     = '';
							$item['label_color']    = 'green';
							$item['position']       = '0';
							$item['cat_id']         = (string) $key;
							$item['is_icon']        = 'no';
							$item['is_custom_text'] = 'no';
							$item['is_label']       = 'no';

							// Add default values.
							unset( $item['title'] );
							unset( $item['image'] );
							return $item;
						},
						$additional_customizer,
						array_keys( $additional_customizer )
					);
				}

				// Update the post meta.
				update_post_meta( $post_id, 'wcc_showcase_category_list_item', $featured_customizer );
				update_post_meta( $post_id, 'wcc_showcase_additional_category_list_item', $additional_customizer );

				// Updating style settings.
				$content_color    = get_post_meta( $post_id, 'wccs_featured_content_color', true );
				$content_bg_color = get_post_meta( $post_id, 'wccs_featured_content_bg', true );

				$card_content = array(
					'background_color' => empty( $content_bg_color ) ? '#96588A00' : $content_bg_color,
					'text_color'       => empty( $content_color ) ? '#FFFFFFFF' : $content_color,
					'hover_color'      => empty( $content_bg_color ) ? '#96588A00' : $content_bg_color,
					'hover_text_color' => empty( $content_color ) ? '#FFFFFFFF' : $content_color,
				);

				update_post_meta( $post_id, 'wcc_showcase_card_content', $card_content );
			}

			// Delete the old meta keys.
			foreach ( $fields_to_delete as $field ) {
				// delete_post_meta( $post_id, $field );
			}

			// Increment the offset.
			update_option( 'wccs_migrated', $paged + 1 );
		} else {
			// No more posts left to migrate, remove the cron job.
			wp_clear_scheduled_hook( 'wccs_migrate_data' );
			delete_option( 'wccs_migrated' );
		}
	}

	/**
	 * Upgrade to 2.2.0.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public static function update_220() {
		// TODO: Add update logic here. Remove if not needed.
	}
}
