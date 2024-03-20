<?php

namespace WooCommerceCategoryShowcase\Admin\ListTables;

use WooCommerceCategoryShowcase\Models\CategoryShowcase;

defined( 'ABSPATH' ) || exit;

/**
 * CategoryShowcaseListTable class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class CategoryShowcaseListTable extends AbstractListTable {
	/**
	 * Get category showcases started
	 *
	 * @param array $args Optional.
	 *
	 * @see WP_List_Table::__construct()
	 * @since  1.0.0
	 */
	public function __construct( $args = array() ) {
		$args         = (array) wp_parse_args(
			$args,
			array(
				'singular' => 'category-showcase',
				'plural'   => 'category-showcases',
			)
		);
		$this->screen = get_current_screen();
		parent::__construct( $args );
	}

	/**
	 * Retrieve the search query string.
	 *
	 * @since 2.0.0
	 * @return string Search query.
	 */
	protected function get_search() {
		return $this->get_request_var( 's', '' );
	}

	/**
	 * Retrieve the order query string.
	 *
	 * @since 2.0.0
	 * @return string Order query.
	 */
	protected function get_order() {
		return $this->get_request_var( 'order', 'ASC' );
	}

	/**
	 * Retrieve the orderby query string.
	 *
	 * @since 2.0.0
	 * @return string Orderby query.
	 */
	protected function get_orderby() {
		return $this->get_request_var( 'orderby', 'post_status' );
	}

	/**
	 * Retrieve the limit query string.
	 *
	 * @since 2.0.0
	 * @return string Limit query.
	 */
	protected function get_per_page() {
		return $this->get_request_var( 'limit', '20' );
	}

	/**
	 * Retrieve the offset query string.
	 *
	 * @since 2.0.0
	 * @return string Offset query.
	 */
	protected function get_offset() {
		return $this->get_request_var( 'offset', '0' );
	}

	/**
	 * Retrieve all the data for the table.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function prepare_items() {
		$columns               = $this->get_columns();
		$sortable              = $this->get_sortable_columns();
		$hidden                = $this->get_hidden_columns();
		$this->_column_headers = array( $columns, $hidden, $sortable );

		$args = array(
			'limit'       => $this->get_per_page(),
			'offset'      => $this->get_offset(),
			's'           => $this->get_search(),
			'order'       => $this->get_order(),
			'orderby'     => $this->get_orderby(),
			'post_status' => 'any',
		);

		$this->items       = wccs_get_category_showcases( $args );
		$this->total_count = wccs_get_category_showcases( $args, true );

		$this->set_pagination_args(
			array(
				'total_items' => $this->total_count,
				'per_page'    => $this->get_per_page(),
			)
		);
	}


	/**
	 * No items found text.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function no_items() {
		esc_html_e( 'No items found.', 'wc-category-showcase' );
	}

	/**
	 * Get the table columns
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_columns() {
		return array(
			'cb'           => '<input type="checkbox" />',
			'name'         => __( 'Name', 'wc-category-showcase' ),
			'shortcode'    => __( 'Shortcode', 'wc-category-showcase' ),
			'date_created' => __( 'Date Created', 'wc-category-showcase' ),
		);
	}

	/**
	 * Get the table sortable columns
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_sortable_columns() {
		return array(
			'name'         => array( 'post_title', true ),
			'date_created' => array( 'date_created', true ),
		);
	}

	/**
	 * Get the table hidden columns
	 *
	 * @since 1.0.0
	 * @return array
	 */
	public function get_hidden_columns() {
		return array();
	}

	/**
	 * Get bulk actions
	 *
	 * since 1.0.0
	 *
	 * @return array
	 */
	public function get_bulk_actions() {
		return array(
			'delete' => __( 'Delete', 'wc-category-showcase' ),
		);
	}

	/**
	 * Process bulk action.
	 *
	 * @param string $doaction Action name.
	 *
	 * @since 1.0.2
	 */
	public function process_bulk_action( $doaction ) {
		if ( ! empty( $doaction ) && check_admin_referer( 'bulk-' . $this->_args['plural'] ) ) {
			$id  = filter_input( INPUT_GET, 'id' );
			$ids = filter_input( INPUT_GET, 'ids', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY );
			if ( ! empty( $id ) ) {
				$ids      = wp_parse_id_list( $id );
				$doaction = ( - 1 !== $_REQUEST['action'] ) ? $_REQUEST['action'] : $_REQUEST['action2']; // phpcs:ignore
			} elseif ( ! empty( $ids ) ) {
				$ids = array_map( 'absint', $ids );
			} elseif ( wp_get_referer() ) {
				wp_safe_redirect( wp_get_referer() );
				exit;
			}

			switch ( $doaction ) {
				case 'delete':
					$deleted = 0;
					foreach ( $ids as $id ) {
						$category_showcases = wccs_get_category_showcase( $id );
						if ( $category_showcases && $category_showcases->delete() ) {
							++$deleted;
						}
					}
					// translators: %d: number of category showcases deleted.
					wc_category_showcase()->add_notice( sprintf( _n( '%d category showcase deleted.', '%d category showcases deleted.', $deleted, 'wc-category-showcase' ), $deleted ) );
					break;
			}

			wp_safe_redirect( remove_query_arg( array( 'action', 'action2', 'id', 'ids', 'paged' ) ) );
			exit();
		}

		parent::process_bulk_actions( $doaction );
	}

	/**
	 * Define primary column.
	 *
	 * @since 1.0.0
	 * @return string
	 */
	public function get_primary_column_name() {
		return 'name';
	}

	/**
	 * Renders the checkbox column in the items list table.
	 *
	 * @param CategoryShowcase $item The current ticket object.
	 *
	 * @return string Displays a checkbox.
	 * @since  1.0.0
	 */
	public function column_cb( $item ) {
		return sprintf( '<input type="checkbox" name="ids[]" value="%d"/>', esc_attr( $item->get_id() ) );
	}

	/**
	 * Renders the name column in the items list table.
	 *
	 * @param CategoryShowcase $item The current ticket object.
	 *
	 * @return string Displays the ticket name.
	 * @since  1.0.0
	 */
	public function column_name( $item ) {
		$admin_url = admin_url( 'admin.php?page=wc-category-showcase&tab=category_showcase' );
		$id_url    = add_query_arg( 'id', $item->get_id(), $admin_url );
		$actions   = array(
			'edit'   => sprintf( '<a href="%s">%s</a>', esc_url( add_query_arg( 'edit', $item->get_id(), $admin_url ) ), __( 'Edit', 'wc-category-showcase' ) ),
			'delete' => sprintf( '<a href="%s">%s</a>', wp_nonce_url( add_query_arg( 'action', 'delete', $id_url ), 'bulk-category_showcases' ), __( 'Delete', 'wc-category-showcase' ) ),
		);

		return sprintf( '<a href="%s">%s</a> %s', esc_url( add_query_arg( 'edit_category_showcase', $item->get_id(), $admin_url ) ), esc_html( $item->get_name() ), $this->row_actions( $actions ) );
	}

	/**
	 * This function renders most of the columns in the list table.
	 *
	 * @param CategoryShowcase $item The current ticket object.
	 * @param string           $column_name The name of the column.
	 *
	 * @since 1.0.0
	 */
	public function column_default( $item, $column_name ) {
		$value = '&mdash;';
		switch ( $column_name ) {
			case 'shortcode':
				$id    = $item->ID;
				$html  = '<span class="wccs_shortcode is--masked">';
				$html .= sprintf( '<span class="wccs_shortcode__code" title="%s">[wccs_showcase id="%s"]</span>', esc_attr( '[wccs_showcase id="' . $id . '"]' ), $id );
				$html .= sprintf( '<span class="wccs_shortcode__copy" data-key="%s">%s</span>', esc_attr( '[wccs_showcase id="' . $id . '"]' ), esc_html__( 'Copy', 'wc-category-showcase' ) );
				$html .= '</span>';
				$value = $html;
				break;
			default:
				$value = parent::column_default( $item, $column_name );
		}

		return $value;
	}
}
