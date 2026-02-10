<?php
/**
 * List category showcase view
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */

defined( 'ABSPATH' ) || exit;

$list_table = new \WooCommerceCategoryShowcase\Admin\listTables\ShowcaseListTable();
$action     = $list_table->current_action();
$list_table->process_bulk_action( $action );
$list_table->prepare_items();

?>
<div class="wrap bk-wrap">
	<h1 class="wp-heading-inline">
		<?php esc_html_e( 'Category Showcase', 'wc-category-showcase' ); ?>
		<a href="<?php echo esc_attr( admin_url( 'admin.php?page=wc-category-showcase&add' ) ); ?>" class="page-title-action">
			<?php esc_html_e( 'Add New', 'wc-category-showcase' ); ?>
		</a>
	</h1>

	<hr class="wp-header-end">

	<form id="wc-category-showcase-table" method="get">
	</form>
	<form id="wc-category-showcase-table" method="get" action="<?php echo esc_url( admin_url( 'admin.php' ) ); ?>">
		<?php
		$list_table->views();
		$list_table->search_box( __( 'Search', 'wc-category-showcase' ), 'search' );
		$list_table->display();
		?>
		<input type="hidden" name="page" value="wc-category-showcase">
	</form>
</div>
