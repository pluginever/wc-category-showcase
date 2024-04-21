<?php

namespace Pluginever\WCCCS;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class Admin {
	public function __construct() {
		add_filter( 'manage_wccs_showcase_posts_columns', array( $this, 'set_shortocode_column' ) );
		add_filter( 'manage_wccs_showcase_posts_custom_column', array( $this, 'shortocode_column_data' ), 10, 2 );
	}

	/**
	 * Add shortcode admin column
	 *
	 * @param $columns
	 *
	 * @return mixed
	 */
	public function set_shortocode_column( $columns ) {
		unset( $columns['date'] );
		$columns['shortcode'] = __( 'Shortcode', 'wc-category-showcase' );
		$columns['date']      = __( 'Date', 'wc-category-showcase' );

		return $columns;
	}

	/**
	 * Show shortcode admin column
	 *
	 * @param $column
	 * @param $post_id
	 */
	public function shortocode_column_data( $column, $post_id ) {
		switch ( $column ) {

			case 'shortcode' :
				echo "<code>[wccs_showcase id='".esc_attr( $post_id ) ."']</code>";
				break;

		}

	}

}

new Admin();
