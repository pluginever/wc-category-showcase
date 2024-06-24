<?php

namespace WooCommerceCategoryShowcase\Admin\exportImport;

/**
 * Class Showcases.
 *
 * @since   1.0.2
 *
 * @package WooCommerceCategoryShowcase\Admin\
 */
class Showcases extends CSVExporter {
	/**
	 * Our export type. Used for export-type specific filters/actions.
	 *
	 * @since 1.0.2
	 * @var string
	 */
	public $export_type = 'showcase';


	/**
	 * Return an array of columns to export.
	 *
	 * @return array
	 * @since  1.0.2
	 */
	public function get_columns() {
		return array(
			'id',
			'title',
			'meta',
			'date',
		);
	}

	/**
	 * Get rows.
	 *
	 * @since 1.0.2
	 */
	public function get_rows() {
		$post_type = 'wccs_showcase';

		// Fetch custom posts.
		$args = array(
			'post_type'      => $post_type,
			'post_status'    => 'publish',
			'posts_per_page' => -1,
		);

		$items = get_posts( $args );

		$rows = array();

		foreach ( $items as $item ) {
			$rows[] = $this->generate_row_data( $item );
		}

		return $rows;
	}

	/**
	 * Take an item and generate row data from it for export.
	 *
	 * @param object|array $item Showcase object.
	 *
	 * @return array
	 */
	protected function generate_row_data( $item ) {
		$props = array();
		foreach ( $this->get_columns() as $column ) {
			$value = null;
			switch ( $column ) {
				default:
					$value = '';
					if ( $item->$column ) {
						$value = $item->$column;
					}
					$value = apply_filters( 'wc_category_showcase_export_column_' . $column, $value, $item );
			}

			$props[ $column ] = $value;
		}

		return $props;
	}
}
