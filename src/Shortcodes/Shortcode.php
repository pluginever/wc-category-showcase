<?php
namespace WooCommerceCategoryShowcase\Shortcodes;

use WooCommerceCategoryShowcase\Models\CategoryShowcase;

defined( 'ABSPATH' ) || exit;

/**
 * Shortcode class.
 *
 * @since 1.0.0
 * @package WooCommerceCategoryShowcase
 */
class Shortcode {
	/**
	 * Shortcode constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_shortcode( 'wccs_showcase', array( $this, 'shortcode_render_callback' ) );
	}

	/**
	 * Slider shortcode render callback.
	 *
	 * @param array $attr Shortcode parameters.
	 *
	 * @return mixed
	 * @since 1.0.0
	 */
	public function shortcode_render_callback( $attr ) {
		$attr = wp_parse_args( $attr, array( 'id' => null ) );

		if ( null === $attr['id'] ) {
			return;
		}
		if ( false === get_post_status( $attr['id'] ) ) {
			return;
		}

		$post_id           = intval( $attr['id'] );
		$category_showcase = wccs_get_category_showcase_object( $post_id );

		$params = array(
			'wccs_featured_categories'                => array(),
			'wccs_additional_categories'              => array(),
			'wccs_show_block_title'                   => '0',
			'wccs_featured_show_title'                => '1',
			'wccs_featured_show_desc'                 => '1',
			'wccs_featured_show_button'               => '1',
			'wccs_featured_button_text'               => 'Shop Now',
			'wccs_featured_content_color'             => '#fff',
			'wccs_featured_content_bg'                => 'rgba(150,88,138,.9)',
			'wccs_additional_show_title'              => '1',
			'wccs_additional_title_color'             => '#000',
			'wccs_additional_content_bg'              => '#fff',
			'wccs_featured_show_custom_message'       => '1',
			'wccs_featured_custom_message'            => '',
			'wccs_additional_button_hover_color'      => 'rgba(150,88,138,.9)',
			'wccs_additional_button_hover_text_color' => '#ffffff',
		);

		$featured_sets = $category_showcase->get_wccs_featured_categories() ? $category_showcase->get_wccs_featured_categories() : array();
		if ( false !== $featured_sets ) {
			$params['wccs_featured_categories'] = $featured_sets;
		}

		$additional_sets = $category_showcase->get_wccs_additional_categories() ? $category_showcase->get_wccs_additional_categories() : array();
		if ( false !== $additional_sets ) {
			$params['wccs_additional_categories'] = $additional_sets;
		}
		$show_title = $category_showcase->get_wccs_show_block_title();
		if ( 'Yes' === $show_title ) {
			$params['wccs_show_block_title'] = $show_title;
		}

		$params = apply_filters( 'wccs_showcase_settings', $params, $post_id );

		$featured_categories   = $params['wccs_featured_categories'];
		$additional_categories = (array) $params['wccs_additional_categories'];

		if ( is_array( $additional_categories ) && count( $additional_categories ) > 6 ) {
			$additional_categories = array_slice( $additional_categories, 0, 6 );
		}
		ob_start();

		$additional_cats_width     = array();
		$set                       = 0;
		$total                     = 0;
		$total_additional_category = count( $additional_categories );
		for ( $i = 0; $i < $total_additional_category; $i++ ) {

			if ( $total >= 6 ) {
				break;
			}
			$term = wccs_get_term_details( $additional_categories[ $i ], $post_id, 'additional' );

			if ( ! empty( $term['col'] ) ) {
				$col = $term['col'];
			} else {
				$col = 1;
			}

			if ( $set + $col > 3 ) {
				$col = 3 - $set;
			}

			$set += $col;
			if ( $set >= 3 ) {
				$set = 0;
			}

			$total += $col;
			$additional_cats_width[ $additional_categories[ $i ] ] = "{$col}";
		}
		$additional_categories = $additional_cats_width;

		$show_additonal_categories = $category_showcase->get_wccs_show_additional_categories();
		if ( 'Yes' === $show_additonal_categories && $total_additional_category > 0 ) {
			$left_block_classes  = 'col-xs-12 col-sm-12 col-md-5 col-lg-5  woo-cs-left-block';
			$right_block_classes = 'show-lg show-md col-xs-12 col-sm-12 col-md-7 col-lg-7 woo-cs-right-block';
		} else {
			$left_block_classes  = 'col-xs-12 col-sm-12 col-md-12 col-lg-12  woo-cs-left-block';
			$right_block_classes = 'hide';
		}
		?>
		<div class="woo-cs has-border" id="wccs-slider-<?php echo esc_attr( $post_id ); ?>">
			<?php if ( ! empty( $params['wccs_show_block_title'] ) ) : ?>
				<h2 class="woo-cs-heading"><?php echo esc_attr( get_the_title( $post_id ) ); ?></h2>
			<?php endif; ?>
			<div class="woo-cs-inner">
				<div class="row eq-height">
					<div class="<?php echo esc_attr( $left_block_classes ); ?>">
						<div class="woo-cs-slider-block">
							<div class="woo-cs-slider" data-slider-config='<?php echo esc_attr( $this->get_slider_config( $post_id ) ); ?>'>
								<?php
								foreach ( $featured_categories as $featured_category_id ) {
									$featured_category = wccs_get_term_details( $featured_category_id, $post_id, 'featured' );
									$html              = '<div>';
									$html             .= '<a class="woo-cs-slide woo-cs-box-link" href="' . $featured_category['link'] . '">';
									$html             .= '<span class="woo-cs-slide-img-container">';
									$html             .= '<img src="' . $featured_category['image'] . '" alt="' . $featured_category['title'] . '">';
									$html             .= '</a>';
									$html             .= '</span>';

									if ( $params['wccs_featured_show_title'] || $params['wccs_featured_show_desc'] || $params['wccs_featured_show_button'] || $params['wccs_featured_show_custom_message'] ) {

										$html .= '<span class="woo-cs-cat-details">';

										if ( '1' === $params['wccs_featured_show_title'] ) {
											$html .= '<span class="woo-cs-cat-title">' . $featured_category['title'] . '</span>';
										}

										if ( '1' === $params['wccs_featured_show_desc'] ) {
											$html .= '<span class="woo-cs-cat-des">' . $featured_category['desc'] . '</span>';
										}

										if ( '1' === $params['wccs_featured_show_custom_message'] && '1' !== $params['wccs_featured_show_desc'] ) {
											$html .= '<span class="woo-cs-cat-des"><p>' . sanitize_textarea_field( $params['wccs_featured_custom_message'] ) . '</p></span>';
										}

										if ( '1' === $params['wccs_featured_show_button'] ) {
											$html .= '<a href="' . $featured_category['link'] . '" class="woo-cs-cat-button">' . $params['wccs_featured_button_text'] . '</a>';
										}

										$html .= '</span>';

									}

									$html .= '</div>';
									echo wp_kses_post( $html );
								}
								?>

							</div>

						</div>
						<!--.woo-cs-slider-block-->

					</div>
					<!--.woo-cs-left-block-->
					<?php if ( $total_additional_category > 0 ) { ?>
					<div class="<?php echo esc_attr( $right_block_classes ); ?>">
						<div class="row eq-height">

							<?php
							if ( is_plugin_active( 'optimole-wp/optimole-wp.php' ) ) :
								echo '<input type="hidden" name="optimole_active" value="1">';
							endif;
							$counter = 0;
							foreach ( $additional_categories as $id => $width ) {
								$additional_category = wccs_get_term_details( $id, $post_id, 'additional' );

								$html  = '<div class="center col-xs-12 col-sm-12 col-md-' . ( $width * 4 ) . ' col-lg-' . ( $width * 4 ) . '">';
								$html .= '<div class="woo-cs-box">';
								$href  = ! empty( $additional_category ) ? $additional_category['link'] : '#';
								$image = ! empty( $additional_category ) ? $additional_category['image'] : '';

								$title = ! empty( $additional_category ) ? $additional_category['title'] : '';

								$html .= '<a class="woo-cs-slide woo-cs-box-link" href="' . $href . '">';

								$html .= '<span class="woo-cs-thumb-container">';
								$html .= '<img src="' . $image . '" alt="' . $title . '" class="woo-cs-image woo-cs-image-thumb">';
								$html .= '</span>';
								if ( $params['wccs_additional_show_title'] ) {
									$html .= '<span class="woo-cs-cat-name">' . $title . '</span>';
								}

								$html .= '</a>';
								$html .= '</div>';
								$html .= '</div>';
								echo wp_kses_post( $html );
								++$counter;
							}

							?>

						</div>       <!--.plvr-grid-noGutter-equalHeight-->
					</div>
					<!--.woo-cs-right-block-->
		<?php } ?>
				</div>

			</div>
		</div>

		<style>
			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-right-block .woo-cs-cat-name {
				background: <?php echo esc_attr( $params['wccs_additional_content_bg'] ); ?>;
				color: <?php echo esc_attr( $params['wccs_additional_title_color'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details {
				background: <?php echo esc_attr( $params['wccs_featured_content_bg'] ); ?>;
				color: <?php echo esc_attr( $params['wccs_featured_content_color'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details .woo-cs-cat-button {
				color: <?php echo esc_attr( $params['wccs_featured_content_color'] ); ?>;
				border: 1px solid<?php echo esc_attr( $params['wccs_featured_content_color'] ); ?>;
				background: transparent;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details .woo-cs-cat-button:hover {
				color: <?php echo esc_attr( $params['wccs_featured_content_bg'] ); ?>;
				background: <?php echo esc_attr( $params['wccs_featured_content_color'] ); ?>;
				border: 1px solid<?php echo esc_attr( $params['wccs_featured_content_color'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details .woo-cs-cat-des {
				border-top: 1px solid<?php echo esc_attr( $params['wccs_featured_content_color'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-heading {
				border-top: 3px solid<?php echo esc_attr( $params['wccs_featured_content_bg'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-heading {
				border-top: 3px solid<?php echo esc_attr( $params['wccs_featured_content_bg'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-prev,
			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-prev:before,
			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-next,
			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-next:before {
				color: <?php echo esc_attr( $params['wccs_featured_content_color'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-prev:hover,
			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-next:hover {
				background: <?php echo esc_attr( $params['wccs_featured_content_bg'] ); ?>;
			}

			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-right-block .woo-cs-box-link:hover .woo-cs-cat-name {
				background: <?php echo esc_attr( $params['wccs_additional_button_hover_color'] ); ?>;
				color: <?php echo esc_attr( $params['wccs_additional_button_hover_text_color'] ); ?>;
			}

			<?php
				$show_slider_navigation = $category_showcase->get_wccs_show_navigation();
			if ( 'No' === $show_slider_navigation ) {
				?>
			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-prev,
			#wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-next {
				display: none !important;
			}

				<?php
			}
			?>
		</style>

		<?php
		$output = ob_get_contents();
		ob_get_clean();

		return $output;
	}

	/**
	 * Get slider settings
	 *
	 * @param int $post_id Category Showcase ID.
	 *
	 * @return string
	 */
	protected function get_slider_config( $post_id ) {
		$category_showcase = wccs_get_category_showcase_object( $post_id );
		$config            = array(
			'autoplay' => 'Yes' === $category_showcase->get_wccs_autoplay_slider(),
			'infinite' => 'Yes' === $category_showcase->get_wccs_infinite_scroll(),
			'speed'    => 500,
		);

		$config = apply_filters( 'wc_slider_config', $config );

		return wp_json_encode( $config );
	}
}
