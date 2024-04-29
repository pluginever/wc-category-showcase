<?php
/**
 * List category showcase view
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="wrap bkit-wrap">
	<h1 class="wp-heading-inline">
		<?php esc_html_e( 'Category Showcase', 'wc-category-showcase' ); ?>
		<a href="<?php echo esc_attr( admin_url( 'admin.php?page=wc-category-showcase&add' ) ); ?>" class="page-title-action">
			<?php esc_html_e( 'Add New', 'wc-category-showcase' ); ?>
		</a>
	</h1>
	<p>Bellow are the all category showcases.</p>
	<hr class="wp-header-end">

	<form id="wc-category-showcase-table" method="get">
	</form>
</div>
