<?php
/**
 * Handle exporters.
 *
 * @since   1.0.2
 *
 * @package WooCommerceCategoryShowcase\Admin\
 */

namespace WooCommerceCategoryShowcase\Admin\exportImport;

/**
 * Class CSVExporter.
 *
 * @since   1.0.2
 *
 * @package WooCommerceCategoryShowcase\Admin
 */
abstract class CSVExporter {
	/**
	 * Our export type. Used for export-type specific filters/actions.
	 *
	 * @since 1.0.2
	 * @var string
	 */
	public $export_type = 'default';

	/**
	 * Capability needed to perform the current export.
	 *
	 * @since  1.0.2
	 * @var    string
	 */
	public $capability = 'wcc_showcase_export';

	/**
	 * Number exported.
	 *
	 * @since 1.0.2
	 * @var integer
	 */
	protected $exported_count = 0;

	/**
	 * The delimiter parameter sets the field delimiter (one character only).
	 *
	 * @since 1.0.2
	 * @var string
	 */
	protected $delimiter = ',';

	/**
	 * Page being exported
	 *
	 * @var integer
	 */
	protected $page = 1;

	/**
	 * Batch limit.
	 *
	 * @since 1.0.2
	 * @var integer
	 */
	protected $limit = 1000;

	/**
	 * Total rows to export.
	 *
	 * @since 1.0.2
	 * @var integer
	 */
	protected $total_count = 0;

	/**
	 * export file name.
	 *
	 * @since 1.0.2
	 * @var string
	 */
	protected $filename = '';

	/**
	 * Return an array of supported column names and ids.
	 *
	 * @since 1.0.2
	 * @return array
	 */
	abstract protected function get_columns();

	/**
	 * Prepare data that will be exported.
	 *
	 * @since 1.0.2
	 * @return array
	 */
	abstract protected function get_rows();

	/**
	 * Can we export?
	 *
	 * @since  1.0.2
	 * @return bool Whether we can export or not
	 */
	public function can_export() {
		return (bool) current_user_can( apply_filters( 'wc_category_showcase_export_capability', $this->capability ) );
	}

	/**
	 * Generate the CSV file.
	 *
	 * @since 1.0.2
	 *
	 * @param int $step Step number.
	 */
	public function process_step( $step ) {
		$this->page = absint( $step );
		global $wp_filesystem;
		if ( empty( $wp_filesystem ) ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			WP_Filesystem();
		}

		if ( 1 === $this->page ) {
			$wp_filesystem->delete( $this->get_file_path() );
		}

		$rows = $this->prepare_rows( $this->get_rows() );

		$file = $this->get_file();

		if ( 100 === $this->get_percent_complete() ) {
			$file = chr( 239 ) . chr( 187 ) . chr( 191 ) . $this->get_column_headers() . $file;
		}

		$file .= $rows;
		$wp_filesystem->put_contents( $this->get_file_path(), $file, FS_CHMOD_FILE );
	}

	/**
	 * Serve the file and remove once sent to the client.
	 *
	 * @since 1.0.2
	 */
	public function export() {
		$this->send_headers();
		$this->send_content( $this->get_file() );
		global $wp_filesystem;
		if ( empty( $wp_filesystem ) ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			WP_Filesystem();
		}
		$wp_filesystem->delete( $this->get_file_path() );
		die();
	}

	/**
	 * Set filename to export to.
	 *
	 * @param string $filename Filename to export to.
	 */
	public function set_filename( $filename ) {
		$this->filename = sanitize_file_name( str_replace( '.csv', '', $filename ) . '.csv' );
	}

	/**
	 * Generate and return a filename.
	 *
	 * @return string
	 */
	public function get_filename() {
		$date = wp_date( 'Ymd' );
		return sanitize_file_name( "{$this->export_type}-$date.csv" );
	}

	/**
	 * Get total % complete.
	 *
	 * @since 1.0.2
	 * @return int
	 */
	public function get_percent_complete() {
		return $this->total_count ? floor( ( $this->get_total_exported() / $this->total_count ) * 100 ) : 100;
	}

	/**
	 * Get count of records exported.
	 *
	 * @since 1.0.2
	 * @return int
	 */
	public function get_total_exported() {
		return ( ( $this->page - 1 ) * $this->limit ) + $this->exported_count;
	}

	/**
	 * Get file path to export to.
	 *
	 * @since 1.0.2
	 * @return string
	 */
	protected function get_file_path() {
		$upload_dir = wp_upload_dir();

		return trailingslashit( $upload_dir['basedir'] ) . $this->get_filename();
	}

	/**
	 * Get the file contents.
	 *
	 * @since 1.0.2
	 * @return string
	 */
	protected function get_file() {
		$file = '';
		global $wp_filesystem;
		if ( empty( $wp_filesystem ) ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			WP_Filesystem();
		}

		// check if file exists.
		if ( $wp_filesystem->exists( $this->get_file_path() ) ) {
			$file = $wp_filesystem->get_contents( $this->get_file_path() );
		} else {
			// create file if not exists.
			$wp_filesystem->put_contents( $this->get_file_path(), $file, FS_CHMOD_FILE );
		}

		return $file;
	}

	/**
	 * Export rows in CSV format.
	 *
	 * @param array $rows Rows to export.
	 *
	 * @since 1.0.2
	 * @return string
	 */
	protected function prepare_rows( $rows ) {
		$buffer = fopen( 'php://output', 'w' );
		ob_start();

		array_walk( $rows, array( $this, 'prepare_row' ), $buffer );

		return apply_filters( "wc_category_showcase_{$this->export_type}_export_rows", ob_get_clean(), $this );
	}

	/**
	 * Export rows to an array ready for the CSV.
	 *
	 * @since 1.0.2
	 *
	 * @param array    $row Data to export.
	 * @param string   $key      Column being exported.
	 * @param resource $buffer   Output buffer.
	 */
	protected function prepare_row( $row, $key, $buffer ) {
		$columns    = $this->get_columns();
		$export_row = array();

		foreach ( $columns as $column ) {
			if ( isset( $row[ $column ] ) ) {
				$export_row[] = $this->format_data( $row[ $column ] );
			} else {
				$export_row[] = '';
			}
		}

		$this->fputcsv( $buffer, $export_row );

		++ $this->exported_count;
	}

	/**
	 * Format and escape data ready for the CSV file.
	 *
	 * @since 1.0.2
	 *
	 * @param mixed $data Data to format.
	 *
	 * @return string
	 */
	protected function format_data( $data ) {
		if ( ! is_scalar( $data ) ) {
			if ( is_a( $data, DateTime::class ) ) {
				$data = $data->date( 'Y-m-d G:i:s' );
			} else {
				$data = ''; // Not supported.
			}
		} elseif ( is_bool( $data ) ) {
			$data = $data ? 1 : 0;
		}

		$use_mb = function_exists( 'mb_convert_encoding' );

		if ( $use_mb ) {
			$encoding = mb_detect_encoding( $data, 'UTF-8, ISO-8859-1', true );
			$data     = 'UTF-8' === $encoding ? $data : utf8_encode( $data );
		}

		return $this->escape_data( $data );
	}

	/**
	 * Escape a string to be used in a CSV context
	 *
	 * @since 1.0.2
	 *
	 * @param string $data CSV field to escape.
	 *
	 * @return string
	 */
	protected function escape_data( $data ) {
		$active_content_triggers = array( '=', '+', '-', '@' );

		if ( in_array( mb_substr( $data, 0, 1 ), $active_content_triggers, true ) ) {
			$data = "'" . $data;
		}

		return $data;
	}

	/**
	 * Get column headers in CSV format.
	 *
	 * @since 1.0.2
	 * @return string
	 */
	protected function get_column_headers() {
		$columns    = $this->get_columns();
		$export_row = array();
		$buffer     = fopen( 'php://output', 'w' );
		ob_start();

		foreach ( $columns as $column ) {
			$export_row[] = $this->format_data( $column );
		}

		$this->fputcsv( $buffer, $export_row );

		return ob_get_clean();
	}

	/**
	 * Write to the CSV file, ensuring escaping works across versions of
	 * PHP.
	 *
	 * PHP 5.5.4 uses '\' as the default escape character. This is not RFC-4180 compliant.
	 * \0 disables the escape character.
	 *
	 * @since 1.0.2
	 *
	 * @param resource $buffer     Resource we are writing to.
	 * @param array    $export_row Row to export.
	 */
	protected function fputcsv( $buffer, $export_row ) {

		if ( version_compare( PHP_VERSION, '5.5.4', '<' ) ) {
			ob_start();
			$temp = fopen( 'php://output', 'w' ); // @codingStandardsIgnoreLine
			fputcsv( $temp, $export_row, $this->delimiter, '"' ); // @codingStandardsIgnoreLine
			fclose( $temp ); // @codingStandardsIgnoreLine
			$row = ob_get_clean();
			$row = str_replace( '\\"', '\\""', $row );
			fwrite( $buffer, $row ); // @codingStandardsIgnoreLine
		} else {
			fputcsv( $buffer, $export_row, $this->delimiter, '"', "\0" ); // @codingStandardsIgnoreLine
		}
	}

	/**
	 * Set the export headers.
	 *
	 * @since 1.0.2
	 * @return void
	 */
	protected function send_headers() {
		ignore_user_abort( true );
		nocache_headers();
		header( 'Content-Type: text/csv; charset=utf-8' );
		header( 'Content-Disposition: attachment; filename=' . $this->get_filename() );
		header( 'Pragma: no-cache' );
		header( 'Expires: 0' );
	}

	/**
	 * Set the export content.
	 *
	 * @since 1.0.2
	 *
	 * @param string $content All CSV content.
	 */
	protected function send_content( $content ) {
		echo wp_kses_post( $content );
	}
}
