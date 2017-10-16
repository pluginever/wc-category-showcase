<?php

namespace Pluginever\WCCS;

class Shortcode {

    public function __construct() {
        add_shortcode( 'wccs_showcase', array( $this, 'shortcode_render_callback' ) );
    }

    public function shortcode_render_callback( $attr ) {
        $attr = wp_parse_args( $attr, array( 'id' => null ) );

        if ( $attr['id'] == null ) {
            return;
        }
        if ( false === get_post_status( $attr['id'] ) ) {
            return;
        }
        $featured_categories = get_post_meta( $attr['id'], '_wccs_featured_categories', true );
        $additional_categories = get_post_meta( $attr['id'], '_wccs_additional_categories', true );
        $title_enabled = get_post_meta( $attr['id'], 'wcss_show_title', true);
        ob_start();
        ?>
        <div class="woo-cs has-border">
            <?php if ('yes' === $title_enabled ): ?>
            <h2 class="woo-cs-heading"><?php echo get_the_title($attr['id']); ?></h2>
            <?php endif; ?>
            <div class="plvr-grid-noGutter-equalHeight woo-cs-inner">

                <div class="plvr-column-5  woo-cs-left-block">
                    <div class="woo-cs-slider-block">
                        <div class="woo-cs-slider">

                            <?php
                            foreach ( $featured_categories as $featured_category ){
                                $category_link = get_term_link($featured_category['term_id'], 'product_cat');
                                $html = '<div>';
                                $html .= '<a class="woo-cs-slide woo-cs-box-link" href="'.$category_link.'">';
                                $html .= '<span class="woo-cs-slide-img-container">';
                                $html .= '<img src="'.$featured_category['image'].'" alt="">';
                                $html .= '</span>';
                                $html .= '<span class="woo-cs-cat-details">';
                                $html .= '<span class="woo-cs-cat-title">'.$featured_category['name'].'</span>';
                                $html .= '<span class="woo-cs-cat-des">'.$featured_category['desc'].'</span>';
                                $html .= '</span>';
                                $html .= '</a>';
                                $html .= '</div>';
                                echo $html;
                            }
                            ?>

                        </div>

                    </div>
                    <!--.woo-cs-slider-block-->

                </div>
                <!--.woo-cs-left-block-->

                <div class="plvr-column-7 woo-cs-right-block">
                    <div class="plvr-grid-noGutter-equalHeight">

                        <?php
                        foreach ( $additional_categories as $additional_category ){
                            $image = $additional_category['image'];
                            $category_link = get_term_link($additional_category['term_id'], 'product_cat');

                            $html = '<div class="plvr-column-4-middle">';
                            $html .= '<div class="woo-cs-box">';
                            $html .= '<a class="woo-cs-slide woo-cs-box-link" href="'.$category_link.'">';

                            $html .= '<span class="woo-cs-thumb-container img-middle">';
                            $html .= '<img src="'.$image.'" alt="" class="woo-cs-image woo-cs-image-thumb">';
                            $html .= '</span>';
                            $html .= '<span class="woo-cs-cat-name">'.$additional_category['name'].'</span>';

                            $html .= '</a>';
                            $html .= '</div>';
                            $html .= '</div>';
                            echo $html;
                        }
                        ?>

                    </div>       <!--.plvr-grid-noGutter-equalHeight-->
                </div>
                <!--.woo-cs-right-block-->
            </div>
        </div>
        <?php
        $output = ob_get_contents();
        ob_get_clean();

        return $output;
    }
}
