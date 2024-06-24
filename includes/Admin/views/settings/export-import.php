<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
	<div class="bkit-card">
		<div class="bkit-card__header">
			<h2 class="bkit-card__title"><?php echo esc_html__( 'Export Showcases', 'wc-category-showcase' ); ?></h2>
		</div>
		<div class="bkit-card__body">
			<div class="bkit-columns">
				<div class="bkit-col-6">
					<label for="wcc_showcase_export_showcases" class="tw-text-sm"><?php esc_html_e( 'Select Option to export showcases', 'wc-category-showcase' ); ?></label>
					<select name="wcc_showcase_export_showcases" id="wcc_showcase_export_showcases" class="tw-w-full">
						<option value="<?php echo esc_attr( 'all' ); ?>"><?php esc_html_e( 'All', 'wc-category-showcase' ); ?></option>
						<option value="<?php echo esc_attr( 'slider' ); ?>"><?php esc_html_e( 'Slider', 'wc-category-showcase' ); ?></option>
						<option value="<?php echo esc_attr( 'block' ); ?>"><?php esc_html_e( 'Block', 'wc-category-showcase' ); ?></option>
						<option value="<?php echo esc_attr( 'grid' ); ?>"><?php esc_html_e( 'Grid', 'wc-category-showcase' ); ?></option>
					</select>
				</div>
			</div>
		</div>
		<div class="bkit-card__footer">
			<?php wp_nonce_field( 'wcc-showcase-export' ); ?>
			<input name="action" value="wcc_showcase_export" type="hidden">
			<button type="submit" class="button button-primary"><?php echo esc_html__( 'Export Showcase', 'wc-category-showcase' ); ?></button>
		</div>
	</div>
</form>
