<?php

namespace PluginEver\CategoryShowcase;

use PluginEver\CategoryShowcase\B8\Component;

defined( 'ABSPATH' ) || exit;

/**
 * Handles plugin installation.
 *
 * @since   1.0.0
 * @package PluginEver\CategoryShowcase
 */
class Installer extends B8\Component {

	/**
	 * Update hook name.
	 *
	 * @since 1.0.0
	 * @var string
	 */
	const UPDATE_HOOK = 'wc_category_showcase_run_update';

	/**
	 * Upgrade routines keyed by the target version.
	 *
	 * @since 1.0.0
	 * @var array<string, callable>
	 */
	protected array $updates = array();

	/**
	 * Register hooks.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function register(): void {
		add_action( 'init', array( $this, 'maybe_update' ) );
		add_action( self::UPDATE_HOOK, array( $this, 'run_update' ) );
		add_action( 'wccs_migrate_data', array( $this, 'migrate_data' ) );
	}

	/**
	 * Run a pending upgrade.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function maybe_update(): void {
		if ( version_compare( $this->app->version, $this->app->options->get_db_version(), '>' ) ) {
			$this->install();
			if ( ! empty( $this->updates ) ) {
				$this->app->queue->add( self::UPDATE_HOOK );
			}
		}
	}

	/**
	 * Run the pending upgrades.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function run_update(): void {
		$installed = $this->app->options->get_db_version();

		uksort( $this->updates, 'version_compare' );

		foreach ( $this->updates as $version => $callback ) {
			if ( version_compare( $installed, $version, '<' ) ) {
				call_user_func( $callback );
				$this->app->options->update_db_version( $version, true );
			}
		}

		$this->app->options->update_db_version( $this->app->version, true );
	}

	/**
	 * Install the plugin.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public static function install(): void {
		if ( ! is_blog_installed() ) {
			return;
		}

		// Get the status of the migration.
		$is_migrated = (int) get_option( 'wccs_data_migrated' );

		// On install, Schedule the migration cron job (runs hourly).
		if ( ! wp_next_scheduled( 'wccs_migrate_data' ) && empty( $is_migrated ) ) {
			wp_schedule_event( time(), 'hourly', 'wccs_migrate_data' );
		}

		add_option( 'wccs_install_date', current_time( 'mysql' ) );
		set_transient( 'wccs_activated', true, 30 );
		set_transient( 'wccs_activation_redirect', true, 30 );
		add_option( 'wccs_installed', wp_date( 'U' ) );
	}

	/**
	 * Clean up the plugin's runtime state.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function deactivate(): void {
		$this->app->queue->clear();

		wp_clear_scheduled_hook( 'wccs_migrate_data' );

		flush_rewrite_rules();
	}

	/**
	 * Migration function.
	 * Migrate data from old version to new version.
	 *
	 * @since 2.2.0
	 * @return void
	 */
	public function migrate_data() {
		// Fields to update.
		$fields = array(
			'wccs_show_block_title'     => 'wcc_showcase_show_section_title',
			'wccs_autoplay_slider'      => 'wcc_showcase_slide_slideshow',
			'wccs_infinite_scroll'      => 'wcc_showcase_slide_unlimited_loop',
			'wccs_show_navigation'      => 'wcc_showcase_slide_navigation_arrow',
			'wccs_featured_show_title'  => 'wcc_showcase_show_category_title',
			'wccs_featured_show_desc'   => 'wcc_showcase_show_category_description',
			'wccs_featured_show_button' => 'wcc_showcase_show_button',
			'wccs_featured_button_text' => 'wcc_showcase_button_text',
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
			'wccs_show_additional_categories',
			'wccsp_featured_customizer',
			'wccs_featured_categories',
			'wccsp_additional_customizer',
			'wccs_additional_categories',
		);

		// Get current offset.
		$paged = (int) get_option( 'wccs_data_migrated', 1 );

		// Fetch one post at a time.
		$showcase_ids = get_posts(
			array(
				'post_type'      => 'wccs_showcase',
				'posts_per_page' => 10,
				'paged'          => $paged,
				'fields'         => 'ids',
			)
		);

		if ( $showcase_ids ) {
			foreach ( $showcase_ids as $post_id ) {
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

				foreach ( $fields as $key => $field ) {
					$value = get_post_meta( $post_id, $key, true );

					// Check if value and field are set. Then update the post meta using $field.
					if ( ! empty( $value ) && isset( $field ) ) {
						$value = '1' === $value ? 'yes' : $value;
						update_post_meta( $post_id, $field, $value );
					}

					// Update the title if the block title is set.
					if ( 'wccs_show_block_title' === $key ) {
						update_post_meta( $post_id, 'wcc_showcase_section_title', get_the_title( $post_id ) );
					}

					// Delete old meta keys if necessary.
					delete_post_meta( $post_id, $key );
				}

				// Update additional customizer settings.
				$featured_customizer   = get_post_meta( $post_id, 'wccsp_featured_customizer', true );
				$featured_cat_ids      = get_post_meta( $post_id, 'wccs_featured_categories', true );
				$additional_customizer = get_post_meta( $post_id, 'wccsp_additional_customizer', true );
				$additional_cat_ids    = get_post_meta( $post_id, 'wccs_additional_categories', true );

				if ( empty( $featured_customizer ) && ! empty( $featured_cat_ids ) ) {
					$featured_customizer = array();

					foreach ( $featured_cat_ids as $cat_id ) {
						$term                           = get_term( $cat_id );
						$thumbnail_id                   = get_term_meta( $cat_id, 'thumbnail_id', true );
						$image_url                      = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : '';
						$featured_customizer[ $cat_id ] = array(
							'title' => $term && ! is_wp_error( $term ) ? $term->name : '',
							'image' => $image_url,
						);
					}
				}

				// Update array keys from $featured_customizer, title should be "name" and image should be "image_url".
				if ( is_array( $featured_customizer ) ) {
					$updated_featured_customizer = array();

					foreach ( $featured_customizer as $key => $item ) {
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
						unset( $item['title'], $item['image'] );

						// Assign to new array using $key as index.
						$updated_featured_customizer[ $key ] = $item;
					}

					$featured_customizer = $updated_featured_customizer;

					// Update the post meta.
					update_post_meta( $post_id, 'wcc_showcase_specific_category_select', array_keys( $featured_customizer ) );
					update_post_meta( $post_id, 'wcc_showcase_category_list_item', $featured_customizer );
				}

				if ( empty( $additional_customizer ) && ! empty( $additional_cat_ids ) ) {
					$additional_customizer = array();

					foreach ( $additional_cat_ids as $cat_id ) {
						$term                             = get_term( $cat_id );
						$thumbnail_id                     = get_term_meta( $cat_id, 'thumbnail_id', true );
						$image_url                        = $thumbnail_id ? wp_get_attachment_url( $thumbnail_id ) : '';
						$additional_customizer[ $cat_id ] = array(
							'title' => $term && ! is_wp_error( $term ) ? $term->name : '',
							'image' => $image_url,
						);
					}
				}

				// Update array keys from $additional_customizer, title should be "name" and image should be "image_url".
				if ( is_array( $additional_customizer ) ) {
					$updated_additional_customizer = array();

					foreach ( $additional_customizer as $key => $item ) {
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

						unset( $item['title'], $item['image'] );

						$updated_additional_customizer[ $key ] = $item;
					}

					$additional_customizer = $updated_additional_customizer;

					if ( ! empty( $additional_customizer ) && '1' === get_post_meta( $post_id, 'wccs_show_additional_categories', true ) ) {
						update_post_meta( $post_id, 'wcc_showcase_enable_additional_category', 'yes' );
					}

					update_post_meta( $post_id, 'wcc_showcase_additional_category_select', array_keys( $additional_customizer ) );
					update_post_meta( $post_id, 'wcc_showcase_additional_category_list_item', $additional_customizer );
				}

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

				$card = array(
					'background_color' => '#FFFFFFFF',
					'text_color'       => '#FFFFFFFF',
					'hover_color'      => '#FFFFFF00',
					'hover_text_color' => '#FFFFFFFF',
				);
				update_post_meta( $post_id, 'wcc_showcase_card', $card );

				$font_category_title = array(
					'text_tag'        => 'h2',
					'font_family'     => 'Roboto',
					'text_weight'     => '600',
					'text_size'       => '24',
					'line_height'     => '32',
					'letter_spacing'  => '0',
					'text_align'      => 'left',
					'text_decoration' => 'bold',
					'text_color'      => '#FFFFFFFF',
				);
				update_post_meta( $post_id, 'wcc_showcase_font_category_title', $font_category_title );

				// Update the additional options.
				update_post_meta( $post_id, 'wcc_showcase_additional_title_color', get_post_meta( $post_id, 'wccs_additional_title_color', true ) );

				// Few more options need to be enabled of disabled based on the new settings.
				update_post_meta( $post_id, 'wcc_showcase_show_category_product_quantity', 'no' );
				update_post_meta( $post_id, 'wcc_showcase_show_subcategory_product_quantity', 'no' );
				update_post_meta( $post_id, 'wcc_showcase_show_button_icon', 'no' );
				update_post_meta( $post_id, 'wcc_showcase_button_style', 'slightly_rounded' );
				update_post_meta( $post_id, 'wcc_showcase_includes_sub_categories', 'no' );
				update_post_meta( $post_id, 'wcc_showcase_overlay_content_position', 'center_center' );
				update_post_meta( $post_id, 'wcc_showcase_image_layout', 'rectangle' );
			}

			// Delete the old meta keys.
			foreach ( $fields_to_delete as $field ) {
				delete_post_meta( $post_id, $field );
			}

			// Increment the offset.
			update_option( 'wccs_data_migrated', $paged + 1 );
		} else {
			// No more posts left to migrate, remove the cron job.
			wp_clear_scheduled_hook( 'wccs_migrate_data' );
		}
	}
}
