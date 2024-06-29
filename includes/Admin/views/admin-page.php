<?php
/**
 * View: Admin Page
 *
 * @since 1.0.0
 * @subpackage Admin/Views
 * @package WooCommerceCategoryShowcase
 * @var string $page_hook Page hook.
 */

defined( 'ABSPATH' ) || exit;
$current_tab  = filter_input( INPUT_GET, 'tab', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$current_page = filter_input( INPUT_GET, 'page', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
$tabs         = isset( $tabs ) ? $tabs : array();
$tabs         = apply_filters( 'wc_category_showcase_' . $page_hook . '_tabs', $tabs );
$current_tab  = ! empty( $current_tab ) && array_key_exists( $current_tab, $tabs ) ? $current_tab : key( $tabs );
?>
	<div class="wrap bk-wrap">
		<?php if ( ! empty( $tabs ) && count( $tabs ) > 1 ) : ?>
			<nav class="nav-tab-wrapper bk-navbar">
				<?php
				foreach ( $tabs as $name => $label ) {
					if ( 'documentation' === $name ) {
						printf(
							'<a href="%s" class="nav-tab" target="_blank">%s</a>',
							esc_url( 'https://pluginever.com/docs/wc-category-showcase/' ),
							esc_html( $label )
						);
					} else {
						printf(
							'<a href="%s" class="nav-tab %s">%s</a>',
							esc_url( admin_url( 'admin.php?page=' . $current_page . '&tab=' . $name ) ),
							esc_attr( $current_tab === $name ? 'nav-tab-active' : '' ),
							esc_html( $label )
						);
					}
				}
				?>
				<?php
				/**
				 * Fires after the tabs on the settings page.
				 *
				 * @param string $current_tab Current tab..
				 * @param array  $tabs Tabs.
				 *
				 * @since 1.0.0
				 */
				do_action( 'wc_category_showcase_' . $page_hook . '_nav_items', $current_tab, $tabs );
				?>
			</nav>
		<?php endif; ?>

		<?php
		if ( ! empty( $current_tab ) && $page_hook !== $current_tab ) {
			/**
			 * Action: Admin Page Tab
			 *
			 * @param string $current_tab Current tab.
			 *
			 * @since 1.0.0
			 */
			do_action( "wc_category_showcase_{$page_hook}_{$current_tab}", $current_tab );
		} else {
			/**
			 * Action: Admin Page Content
			 *
			 * @param string $current_tab Current tab.
			 *
			 * @since 1.0.0
			 */
			do_action( "wc_category_showcase_{$page_hook}", $current_tab );
		}
		?>
	</div>
<?php
