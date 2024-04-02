<?php
/**
 * Admin views: Edit CategoryShowcase
 *
 * @since 1.0.0
 * @package WC Category Showcase
 */

defined( 'ABSPATH' ) || exit;
$category_showcase_id = filter_input( INPUT_GET, 'edit', FILTER_SANITIZE_NUMBER_INT );
$category_showcase    = wccs_get_category_showcase( $category_showcase_id );
?>
<h1 class="wp-heading-inline">
	<?php esc_html_e( 'Edit Category Showcase', 'wc-category-showcase' ); ?>
	<a href="<?php echo esc_url( admin_url( 'admin.php?page=wc-category-showcase&new=1' ) ); ?>" class="page-title-action">
		<?php esc_html_e( 'Add New', 'wc-category-showcase' ); ?>
	</a>
</h1>

<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
	<div class="pev-poststuff" id="wccs-category-showcase">
		<div class="column-1">
			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"><?php esc_html_e( 'Category Showcase Details', 'wc-category-showcase' ); ?></h3>
					<p class="pev-card__subtitle">
						#<?php echo esc_html( $category_showcase->get_id() ); ?>
					</p>
				</div>
				<div class="pev-card__body form-inline">
					<div class="pev-form-field">
						<label for="category_showcase_title">
							<?php esc_html_e( 'Title', 'wc-category-showcase' ); ?>
						</label>
						<input type="text" name="category_showcase_title" id="category_showcase_title" class="regular-text" value="<?php echo esc_attr( $category_showcase->get_name() ); ?>"/>
					</div>
				</div>
			</div>

			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"> <?php esc_html_e( 'Featured Category Settings', 'wc-category-showcase' ); ?> </h3>
				</div>
				<div class="pev-card__body form-inline">
					<div class="pev-form-field">
						<label for="wccs_featured_categories">
							<?php esc_html_e( 'Select Categories', 'wc-category-showcase' ); ?>
						</label>
						<div>
							<?php $_category = $category_showcase->get_wccs_featured_categories() ? $category_showcase->get_wccs_featured_categories() : array(); ?>
							<select id="wccs_featured_categories" name="wccs_featured_categories[]" multiple="multiple">
								<?php foreach ( $_category as $category_id ) : ?>
									<?php if ( ! empty( $category_id ) ) : ?>
										<option value="<?php echo esc_attr( $category_id ); ?>" selected="selected"><?php echo esc_html( wccs_get_category_title( $category_id ) ); ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select Categories to show in showcase.', 'wc-category-showcase' ); ?>
						</p>
					</div>

					<div class="pev-form-field">
						<label for="wccs_show_block_title">
							<?php esc_html_e( 'Show Block Title', 'wc-category-showcase' ); ?>
						</label>
						<div>
							<select id="wccs_show_block_title" name="wccs_show_block_title">
								<option value="Yes" <?php if ( 'Yes' === $category_showcase->get_wccs_show_block_title() ) { echo 'selected'; } ?>><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No" <?php if ( 'No' === $category_showcase->get_wccs_show_block_title() ) { echo 'selected'; } ?>><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select option to show block title in showcase.', 'wc-category-showcase' ); ?>
						</p>
					</div>

					<div class="pev-form-field">
						<label for="wccs_autoplay_slider">
							<?php esc_html_e( 'Autoplay the slider', 'wc-category-showcase' ); ?>
						</label>
						<div>
							<select id="wccs_autoplay_slider" name="wccs_autoplay_slider">
								<option value="Yes" <?php if ( 'Yes' === $category_showcase->get_wccs_autoplay_slider() ) { echo 'selected'; } ?>><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No" <?php if ( 'No' === $category_showcase->get_wccs_autoplay_slider() ) { echo 'selected'; } ?>><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select option to autoplay the slider in showcase.', 'wc-category-showcase' ); ?>
						</p>
					</div>

					<div class="pev-form-field">
						<label for="wccs_infinite_scroll">
							<?php esc_html_e( 'Infinite Looping for the slider', 'wc-category-showcase' ); ?>
						</label>
						<div>
							<select id="wccs_infinite_scroll" name="wccs_infinite_scroll">
								<option value="Yes" <?php if ( 'Yes' === $category_showcase->get_wccs_infinite_scroll() ) { echo 'selected'; } ?>><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No" <?php if ( 'No' === $category_showcase->get_wccs_infinite_scroll() ) { echo 'selected'; } ?>><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select option to infinite scroll in showcase', 'wc-category-showcase' ); ?>
						</p>
					</div>

					<div class="pev-form-field">
						<label for="wccs_show_navigation">
							<?php esc_html_e( 'Show navigation for the slider', 'wc-category-showcase' ); ?>
						</label>
						<div>
							<select id="wccs_show_navigation" name="wccs_show_navigation">
								<option value="Yes" <?php if ( 'Yes' === $category_showcase->get_wccs_show_navigation() ) { echo 'selected'; } ?>><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No" <?php if ( 'No' === $category_showcase->get_wccs_show_navigation() ) { echo 'selected'; } ?>><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select option to navigation in showcase', 'wc-category-showcase' ); ?>
						</p>
					</div>

					<?php
					/**
					 * Fires after the tabs on add category showcase.
					 *
					 * @since 2.0.0
					 */
					do_action( 'wc_category_showcase_feature_category_metabox' );
					?>
				</div>
			</div>
			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"> <?php esc_html_e( 'Additional Category Settings', 'wc-category-showcase' ); ?> </h3>
				</div>
				<div class="pev-card__body form-inline">
					<div class="pev-form-field">
						<label for="wccs_show_additional_categories">
							<?php esc_html_e( 'Show additional categories', 'wc-category-showcase' ); ?>
						</label>
						<div>
							<select id="wccs_show_additional_categories" name="wccs_show_additional_categories">
								<option value="Yes" <?php if ( 'Yes' === $category_showcase->get_wccs_show_additional_categories() ) { echo 'selected'; } ?>><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No" <?php if ( 'No' === $category_showcase->get_wccs_show_additional_categories() ) { echo 'selected'; } ?>><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select option to show additional categories in showcase', 'wc-category-showcase' ); ?>
						</p>
					</div>

					<div class="pev-form-field">
						<label for="wccs_additional_categories">
							<?php esc_html_e( 'Select Additional Categories', 'wc-category-showcase' ); ?>
						</label>
						<div>
							<?php $_additional_category = $category_showcase->get_wccs_additional_categories() ? $category_showcase->get_wccs_additional_categories() : array(); ?>
							<select id="wccs_additional_categories" name="wccs_additional_categories[]" multiple="multiple">
								<?php foreach ( $_additional_category as $category_id ) : ?>
									<?php if ( ! empty( $category_id ) ) : ?>
										<option value="<?php echo esc_attr( $category_id ); ?>" selected="selected"><?php echo esc_html( wccs_get_category_title( $category_id ) ); ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select Categories to show in showcase.', 'wc-category-showcase' ); ?>
						</p>
					</div>

					<?php
					/**
					 * Fires after the tabs on add category showcase.
					 *
					 * @since 2.0.0
					 */
					do_action( 'wc_category_showcase_additional_category_metabox' );
					?>
				</div>
			</div>
		</div>
		<div class="column-2">
			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"><?php esc_html_e( 'Actions', 'wc-category-showcase' ); ?></h3>
				</div>
				<div class="pev-card__footer">
					<a class="del" href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'action', 'delete', admin_url( 'admin.php?page=wc-category-showcase&id=' . $category_showcase->get_id() ) ), 'bulk-category_showcases' ) ); ?>"><?php esc_html_e( 'Delete', 'wc-category-showcase' ); ?></a>
					<button class="button button-primary"><?php esc_html_e( 'Update', 'wc-category-showcase' ); ?></button>
				</div>
			</div>
			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"><?php esc_html_e( 'Shortcode', 'wc-category-showcase' ); ?></h3>
				</div>
				<div class="pev-card__body">
					<span class="wccs_shortcode is--masked">
						<?php printf( '<span class="wccs_shortcode__code" title="%s">[wccs_showcase id="%s"]</span>', esc_attr( '[wccs_showcase id="' . $category_showcase->get_id() . '"]' ), esc_attr( $category_showcase->get_id() ) ); ?>
						<?php printf( '<span class="wccs_shortcode__copy" data-key="%s">%s</span>', esc_attr( '[wccs_showcase id="' . $category_showcase->get_id() . '"]' ), esc_html__( 'Copy', 'wc-category-showcase' ) ); ?>
					</span>
					<p><?php esc_html_e( 'Click the icon to copy this category showcase shortcode.', 'wc-category-showcase' ); ?></p>
				</div>
			</div>
			<?php if ( ! is_plugin_active( 'woocommerce-category-showcase-pro/wc-category-showcase-pro.php' ) ) { ?>
			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"><?php esc_html_e( 'What More?', 'wc-category-showcase' ); ?></h3>
				</div>
				<div class="pev-card__body">
					<img src="<?php echo esc_url( WCCS_ASSETS_URL ) . '/images/promotion.png'; ?>" alt="wc-category-showcase-pro" style="width: 100%;margin-bottom: 10px;">
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

				</div>
				<div class="pev-card__footer">
					<a href="<?php echo esc_url( 'https://pluginever.com/plugins/woocommerce-category-showcase-pro/' ); ?>" target="_blank" class="button button-primary">
						<?php esc_html_e( 'Upgrade To PRO Now', 'wc-category-showcase' ); ?>
					</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

	<input type="hidden" name="action" value="wccs_edit_category_showcase">
	<input type="hidden" name="category_showcase_id" value="<?php echo esc_attr( $category_showcase->get_id() ); ?>">
	<?php wp_nonce_field( 'wccs_edit_category_showcase' ); ?>
</form>
