<?php

namespace WooCommerceCategoryShowcase\Admin\listTables;

defined( 'ABSPATH' ) || exit;

/**
 * CategoryShowcase ListTable class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class ShowcaseListTable extends AbstractListTable {
	/**
	 * Get things started
	 *
	 * @param array $args Optional.
	 *
	 * @see WP_List_Table::__construct()
	 * @since  1.0.0
	 */
	public function __construct( $args = array() ) {
		$args         = wp_parse_args(
			$args,
			array(
				'singular' => 'showcase',
				'plural'   => 'showcases',
				'ajax'     => true,
			)
		);
		$this->screen = get_current_screen();
		parent::__construct( $args );
	}

	/**
	 * Retrieve all the data for the table.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function prepare_items() {
		wp_verify_nonce( '_nonce' );
		$columns               = $this->get_columns();
		$sortable              = $this->get_sortable_columns();
		$hidden                = $this->get_hidden_columns();
		$this->_column_headers = array( $columns, $hidden, $sortable );
		$per_page              = 20;
		$order_by              = isset( $_GET['orderby'] ) ? sanitize_key( wp_unslash( $_GET['orderby'] ) ) : '';
		$order                 = isset( $_GET['order'] ) ? sanitize_key( wp_unslash( $_GET['order'] ) ) : '';
		$search                = isset( $_GET['s'] ) ? sanitize_key( wp_unslash( $_GET['s'] ) ) : '';
		$current_page          = isset( $_GET['paged'] ) ? sanitize_key( wp_unslash( $_GET['paged'] ) ) : 1;
		if ( ! empty( $search ) ) {
			$args = array(
				'post_type'      => 'wccs_showcase',
				'post_status'    => 'any',
				'order'          => $order,
				'order_by'       => $order_by,
				's'              => $search,
				'posts_per_page' => $per_page,
				'paged'          => $current_page,
			);
		} else {
			$args = array(
				'post_type'      => 'wccs_showcase',
				'post_status'    => 'any',
				'order'          => $order,
				'order_by'       => $order_by,
				'posts_per_page' => $per_page,
				'paged'          => $current_page,
			);
		}
		$query = new \WP_Query( $args );

		$this->items       = $query->posts;
		$this->total_count = $query->found_posts;
		$this->total_pages = $query->max_num_pages;

		$this->set_pagination_args(
			array(
				'total_items' => $this->total_count,
				'per_page'    => $per_page,
				'total_pages' => $this->total_pages,
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
			'name'         => __( 'Title', 'wc-category-showcase' ),
			'shortcode'    => __( 'Shortcode', 'wc-category-showcase' ),
			'date_created' => __( 'Date created', 'wc-category-showcase' ),
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
	 * @since 1.0.0
	 */
	public function process_bulk_action( $doaction ) {
		if ( ! empty( $doaction ) && check_admin_referer( 'bulk-' . $this->_args['plural'] ) ) {
			$id  = filter_input( INPUT_GET, 'id' );
			$ids = filter_input( INPUT_GET, 'ids', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY );
			if ( ! empty( $id ) ) {
				$ids      = wp_parse_id_list( $id );
				$action   = isset( $_REQUEST['action'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['action'] ) ) : - 1;
				$action2  = isset( $_REQUEST['action2'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['action2'] ) ) : - 1;
				$doaction = ( - 1 !== $action ) ? $action : $action2;
			} elseif ( ! empty( $ids ) ) {
				$ids = array_map( 'absint', $ids );
			} elseif ( wp_get_referer() ) {
				wp_safe_redirect( wp_get_referer() );
				exit;
			}
			$deleted_count = 0;
			switch ( $doaction ) {
				case 'delete':
					$deleted_count = 0;
					foreach ( $ids as $id ) {
						wp_delete_post( $id, true );
						++$deleted_count;
					}
					break;
			}
			// translators: %d: number of things deleted.
			wc_category_showcase()->flash->success( __( 'Showcases successfully deleted.', 'wc-category-showcase' ) );
			wp_safe_redirect( admin_url( 'admin.php?page=wc-category-showcase' ) );
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
	 * @param object $item The current ticket object.
	 *
	 * @since  1.0.0
	 * @return string Displays a checkbox.
	 */
	public function column_cb( $item ) {
		return sprintf( '<input type="checkbox" name="ids[]" value="%d"/>', esc_attr( $item->ID ) );
	}

	/**
	 * Renders the name column in the items list table.
	 *
	 * @param object $item The current post showcase object.
	 *
	 * @since  1.0.0
	 * @return string Displays the showcase name.
	 */
	public function column_name( $item ) {
		$admin_url = admin_url( 'admin.php?page=wc-category-showcase&' );
		$id_url    = add_query_arg( 'id', $item->ID, $admin_url );
		$actions   = array(
			'edit'   => sprintf( '<a href="%s">%s</a>', esc_url( add_query_arg( 'edit', $item->ID, $admin_url ) ), __( 'Edit', 'wc-category-showcase' ) ),
			'delete' => sprintf( '<a href="%s">%s</a>', wp_nonce_url( add_query_arg( 'action', 'delete', $id_url ), 'bulk-showcases' ), __( 'Delete', 'wc-category-showcase' ) ),
		);

		return sprintf( '<a href="%s">%s</a> %s', esc_url( add_query_arg( 'edit', $item->ID, $admin_url ) ), esc_html( $item->post_title ), $this->row_actions( $actions ) );
	}


	/**
	 * This function renders most of the columns in the list table.
	 *
	 * @param object $item The current showcase object.
	 * @param string $column_name The name of the column.
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
			case 'date_created':
				$date = $item->post_date;
				if ( $date ) {
					$value = sprintf( '<time datetime="%s">%s</time>', esc_attr( $date ), esc_html( date_i18n( get_option( 'date_format' ), strtotime( $date ) ) ) );
				}
				break;
			default:
				$value = parent::column_default( $item, $column_name );
		}

		return $value;
	}
}
