<?php

defined( 'ABSPATH' ) || exit;

?>
<h1>
	<?php esc_html_e( 'Add New Category Showcase', 'wc-category-showcase' ); ?>
	<a href="<?php echo esc_attr( admin_url( 'admin.php?page=wc-category-showcase' ) ); ?>" class="page-title-action">
		<?php esc_html_e( 'Go Back', 'wc-category-showcase' ); ?>
	</a>
</h1>
<p><?php esc_html_e( 'You can create a new category showcase here.', 'wc-category-showcase' ); ?></p>
<form action="<?php echo esc_attr( admin_url( 'admin-post.php' ) ); ?>" method="post">
	<div class="pev-poststuff" id="wccs-category-showcase">
		<div class="column-1">
			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"> <?php esc_html_e( 'Add Event Details', 'wc-category-showcase' ); ?> </h3>
				</div>
				<div class="pev-card__body form-inline">
					<div class="pev-form-field">
						<label for="category_showcase_title">
							<?php esc_html_e( 'Title', 'wc-category-showcase' ); ?>
						</label>
						<input type="text" name="category_showcase_title" id="category_showcase_title" class="regular-text" />
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
							<select id="wccs_featured_categories" name="wccs_featured_categories[]" multiple="multiple">
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
								<option value=""><?php esc_html_e( '--Select option---', 'wc-category-showcase' ); ?></option>
								<option value="Yes"><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No"><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
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
								<option value=""><?php esc_html_e( '--Select option---', 'wc-category-showcase' ); ?></option>
								<option value="Yes"><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No"><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
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
								<option value=""><?php esc_html_e( '--Select option---', 'wc-category-showcase' ); ?></option>
								<option value="Yes"><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No"><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
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
								<option value=""><?php esc_html_e( '--Select option---', 'wc-category-showcase' ); ?></option>
								<option value="Yes"><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No"><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select option to navigation in showcase', 'wc-category-showcase' ); ?>
						</p>
					</div>
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
								<option value=""><?php esc_html_e( '--Select option---', 'wc-category-showcase' ); ?></option>
								<option value="Yes"><?php esc_html_e( 'Yes', 'wc-category-showcase' ); ?></option>
								<option value="No" ><?php esc_html_e( 'No', 'wc-category-showcase' ); ?></option>
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
							<select id="wccs_additional_categories" name="wccs_additional_categories[]" multiple="multiple">
							</select>
						</div>
						<p class="description">
							<?php esc_html_e( 'Select Categories to show in showcase.', 'wc-category-showcase' ); ?>
						</p>
					</div>
				</div>
			</div>

		</div><!-- .column-1 -->
		<div class="column-2">
			<div class="pev-card">
				<div class="pev-card__header">
					<h3 class="pev-card__title"><?php esc_html_e( 'Publish', 'wc-category-showcase' ); ?></h3>
				</div>
				<div class="pev-card__footer">
					<input type="hidden" name="action" value="wccs_add_category_showcase"/>
					<?php wp_nonce_field( 'wccs_add_category_showcase' ); ?>
					<?php submit_button( __( 'Publish', 'wc-category-showcase' ), 'primary', 'add_category_showcase' ); ?>
				</div>
			</div>
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
		</div><!-- .column-2 -->
	</div><!-- .pev-poststuff -->
</form>
