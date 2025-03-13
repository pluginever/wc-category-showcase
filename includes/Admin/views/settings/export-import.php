<?php
/**
 * View: Showcase export / import.
 *
 * @since 2.2.0
 * @package WooCommerceCategoryShowcase/Admin/Views/Settings
 */

defined( 'ABSPATH' ) || exit();

?>
<div class="wcc-showcase-upcoming">
	<div style="padding: 10px;">
		<h1><?php esc_html_e( 'Export / Import', 'wc-category-showcase' ); ?></h1>
		<p><?php esc_html_e( 'These export import tabs will help you to export and import showcase data.', 'wc-category-showcase' ); ?></p>
	</div>

	<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" style="padding: 10px;">
		<div class="bk-card">
			<div class="bk-card__header">
				<h2 class="bk-card__title"><?php echo esc_html__( 'Export Showcases', 'wc-category-showcase' ); ?></h2>
			</div>
			<div class="bk-card__body">
				<div class="bk-columns">
					<div class="bk-col-6">
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
			<div class="bk-card__footer">
				<?php wp_nonce_field( 'wcc_showcase_export' ); ?>
				<input name="action" value="wcc_showcase_export" type="hidden">
				<button type="submit" class="button button-primary"><?php echo esc_html__( 'Export', 'wc-category-showcase' ); ?></button>
			</div>
		</div>
	</form>

	<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" style="padding: 10px;">
		<div class="bk-card">
			<div class="bk-card__header">
				<h2 class="bk-card__title"><?php echo esc_html__( 'Import Showcases', 'wc-category-showcase' ); ?></h2>
			</div>
			<div class="bk-card__body">
				<div class="bk-columns">
					<div class="bk-col-6">
						<input name="upload" type="file" required="required" accept="text/csv">
					</div>
				</div>
			</div>
			<div class="bk-card__footer">
				<?php wp_nonce_field( 'wcc_showcase_import' ); ?>
				<input name="action" value="wcc_showcase_import" type="hidden">
				<button type="submit" class="button button-primary"><?php echo esc_html__( 'Import CSV', 'wc-category-showcase' ); ?></button>
			</div>
		</div>
	</form>

	<div class="wcc-showcase-upcoming-features tw-flex tw-justify-center tw-items-center">
		<h3 class="tw-text-accent-orange-500 tw-text-2xl"><?php esc_html_e( 'Upcoming Pro Features', 'wc-category-showcase' ); ?></h3>
	</div>
</div>
