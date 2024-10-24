<?php

namespace Pluginever\WCCS;

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Shortcode {

	/*
	* Class construct function
	*/

	public function __construct() {
		add_shortcode( 'wccs_showcase', array( $this, 'shortcode_render_callback' ) );
	}

	/**
	 * Slider shortcode render callback
	 *
	 * @param $attr
	 *
	 * @return mixed
	 * @since 1.0.0
	 */

	public function shortcode_render_callback( $attr ) {
		$attr = wp_parse_args( $attr, array( 'id' => null ) );

		if ( $attr['id'] == null ) {
			return;
		}

		if ( 'publish' !== get_post_status( $attr['id'] ) ) {
			return;
		}

		$post_id = intval( $attr['id'] );

		$params = [
			'wccs_featured_categories'                => [],
			'wccs_additional_categories'              => [],
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
		];


		$featured_sets = get_post_meta( $post_id, 'wccs_featured_categories', true );
		if ( false !== $featured_sets ) {
			$params['wccs_featured_categories'] = $featured_sets;
		}

		$additional_sets = get_post_meta( $post_id, 'wccs_additional_categories', true );
		if ( false !== $additional_sets ) {
			$params['wccs_additional_categories'] = $additional_sets;
		}
		$show_title = get_post_meta( $post_id, 'wccs_show_block_title', true );
		if ( false !== $show_title ) {
			$params['wccs_show_block_title'] = $show_title;
		}

		$params = apply_filters( 'wccs_showcase_settings', $params, $post_id );

		$featured_categories   = $params['wccs_featured_categories'];
		$additional_categories = (array) $params['wccs_additional_categories'];

		if ( is_array( $additional_categories ) && count( $additional_categories ) > 6 ) {
			$additional_categories = array_slice( $additional_categories, 0, 6 );
		}
		ob_start();

		$additional_cats_width = [];
		$set                   = 0;
		$total                 = 0;

		for ( $i = 0; $i < count( $additional_categories ); $i ++ ) {

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

			$total                                                 += $col;
			$additional_cats_width[ $additional_categories[ $i ] ] = "{$col}";
		}
		$additional_categories = $additional_cats_width;

		$show_additonal_categories = get_post_meta( $post_id, 'wccs_show_additional_categories', true );
		if ( ! empty( $show_additonal_categories ) ) {
			$left_block_classes  = 'col-xs-12 col-sm-12 col-md-5 col-lg-5  woo-cs-left-block';
			$right_block_classes = 'show-lg show-md col-xs-12 col-sm-12 col-md-7 col-lg-7 woo-cs-right-block';
		} else {
			$left_block_classes  = 'col-xs-12 col-sm-12 col-md-12 col-lg-12  woo-cs-left-block';
			$right_block_classes = 'hide';
		}
		?>
        <div class="woo-cs has-border" id="wccs-slider-<?php echo esc_attr( $post_id ); ?>">
			<?php if ( ! empty( $params['wccs_show_block_title'] ) ): ?>
                <h2 class="woo-cs-heading"><?php echo esc_attr( get_the_title(  $post_id ) ); ?></h2>
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
									$html              .= '<a class="woo-cs-slide woo-cs-box-link" href="' . $featured_category['link'] . '">';
									$html              .= '<span class="woo-cs-slide-img-container">';
									$html              .= '<img src="' . $featured_category['image'] . '" alt="' . $featured_category['title'] . '">';
									$html              .= '</a>';
									$html              .= '</span>';

									if ( $params['wccs_featured_show_title'] || $params['wccs_featured_show_desc'] || $params['wccs_featured_show_button'] || $params['wccs_featured_show_custom_message'] ) {

										$html .= '<span class="woo-cs-cat-details">';

										if ( $params['wccs_featured_show_title'] == '1' ) {
											$html .= '<span class="woo-cs-cat-title">' . $featured_category['title'] . '</span>';
										}

										if ( $params['wccs_featured_show_desc'] == '1' ) {
											$html .= '<span class="woo-cs-cat-des">' . $featured_category['desc'] . '</span>';
										}

										if ( $params['wccs_featured_show_custom_message'] == '1' && $params['wccs_featured_show_desc'] != '1' ) {
											$html .= '<span class="woo-cs-cat-des"><p>' . sanitize_textarea_field( $params['wccs_featured_custom_message'] ) . '</p></span>';
										}

										if ( $params['wccs_featured_show_button'] == '1' ) {
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

                    <div class="<?php echo esc_attr( $right_block_classes ); ?>">
                        <div class="row eq-height">

							<?php
							if ( is_plugin_active( 'optimole-wp/optimole-wp.php' ) ):
								echo '<input type="hidden" name="optimole_active" value="1">';
							endif;
							$counter = 0;
							foreach ( $additional_categories as $id => $width ) {
								$additional_category = wccs_get_term_details( $id, $post_id, 'additional' );

								$html  = '<div class="center col-xs-12 col-sm-12 col-md-' . ( $width * 4 ) . ' col-lg-' . ( $width * 4 ) . '">';
								$html  .= '<div class="woo-cs-box">';
								$href  = ! empty( $additional_category ) ? $additional_category['link'] : '#';
								$image = ! empty( $additional_category ) ? $additional_category['image'] : '';;
								$title = ! empty( $additional_category ) ? $additional_category['title'] : '';

								//$html .= '<a class="woo-cs-slide woo-cs-box-link" href="' . $additional_category['link'] . '">';
								$html .= '<a class="woo-cs-slide woo-cs-box-link" href="' . $href . '">';

								$html .= '<span class="woo-cs-thumb-container">';
								//$html .= '<img src="' . $additional_category['image'] . '" alt="' . $additional_category['title'] . '" class="woo-cs-image woo-cs-image-thumb">';
								$html .= '<img src="' . $image . '" alt="' . $title . '" class="woo-cs-image woo-cs-image-thumb">';
								$html .= '</span>';
								if ( $params['wccs_additional_show_title'] ) {
									//$html .= '<span class="woo-cs-cat-name">' . $additional_category['title'] . '</span>';
									$html .= '<span class="woo-cs-cat-name">' . $title . '</span>';
								}

								$html .= '</a>';
								$html .= '</div>';
								$html .= '</div>';
								echo wp_kses_post( $html );
								$counter ++;
							}

							?>

                        </div>       <!--.plvr-grid-noGutter-equalHeight-->
                    </div>
                    <!--.woo-cs-right-block-->
                </div>

            </div>
        </div>

        <style>
            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-right-block .woo-cs-cat-name {
                background: <?php echo esc_attr( $params['wccs_additional_content_bg'] );?>;
                color: <?php echo esc_attr( $params['wccs_additional_title_color'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details {
                background: <?php echo esc_attr( $params['wccs_featured_content_bg'] );?>;
                color: <?php echo esc_attr( $params['wccs_featured_content_color'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details .woo-cs-cat-button {
                color: <?php echo esc_attr( $params['wccs_featured_content_color'] );?>;
                border: 1px solid<?php echo esc_attr( $params['wccs_featured_content_color'] );?>;
                background: transparent;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details .woo-cs-cat-button:hover {
                color: <?php echo esc_attr( $params['wccs_featured_content_bg'] );?>;
                background: <?php echo esc_attr( $params['wccs_featured_content_color'] );?>;
                border: 1px solid<?php echo esc_attr( $params['wccs_featured_content_color'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-cat-details .woo-cs-cat-des {
                border-top: 1px solid<?php echo esc_attr( $params['wccs_featured_content_color'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-heading {
                border-top: 3px solid<?php echo esc_attr( $params['wccs_featured_content_bg'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-heading {
                border-top: 3px solid<?php echo esc_attr( $params['wccs_featured_content_bg'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-prev,
            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-prev:before,
            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-next,
            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-next:before {
                color: <?php echo esc_attr( $params['wccs_featured_content_color'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-prev:hover,
            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .slick-next:hover {
                background: <?php echo esc_attr( $params['wccs_featured_content_bg'] );?>;
            }

            #wccs-slider-<?php echo esc_attr( $post_id ); ?> .woo-cs-right-block .woo-cs-box-link:hover .woo-cs-cat-name {
                background: <?php echo esc_attr( $params['wccs_additional_button_hover_color'] );?>;
                color: <?php echo esc_attr( $params['wccs_additional_button_hover_text_color'] );?>;
            }

            <?php
				$show_slider_navigation = get_post_meta(esc_attr( $post_id ),'wccs_show_navigation',true);
				if(empty($show_slider_navigation)){ ?>
            #wccs-slider-<?php echo esc_attr( $post_id );?> .slick-prev,
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
	 * @param $post_id
	 *
	 * @return void
	 */
	protected function get_slider_config( $post_id ) {
		$config = array(
			'autoplay' => '1' == get_post_meta( $post_id, 'wccs_autoplay_slider', true ) ? true : false,
			'infinite' => '1' == get_post_meta( $post_id, 'wccs_infinite_scroll', true ) ? true : false,
			'speed'    => get_post_meta( $post_id, 'wccs_slider_autoplaySpeed', true ) ? get_post_meta( $post_id, 'wccs_slider_speed', true ) : 500,
		);

		$config = apply_filters( 'wc_slider_config', $config );

		return wp_json_encode( $config );

	}
}
