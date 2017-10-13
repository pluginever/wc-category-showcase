<?php

namespace Pluginever\WCCCS;

class Admin {
    public function __construct() {
        add_action( 'admin_enqueue_scripts', array( $this, 'load_admin_scripts' ) );
        add_action( 'add_meta_boxes', array( $this, 'builder_metabox' ) );
    }

    public function load_admin_scripts() {
        $suffix = ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ? '' : '.min';
        wp_register_style( 'wc-category-showcase-admin', PLVR_WCCS_ADMIN_ASSETS . "/css/wc-category-showcase-admin{$suffix}.css", [], date( 'i' ) );
        wp_register_script( 'wc-category-showcase-admin', PLVR_WCCS_ADMIN_ASSETS . "/js/wc-category-showcase-admin{$suffix}.js", [ 'jquery' ], date( 'i' ), true );
        wp_localize_script( 'wc-category-showcase-admin', 'jsobject', [ 'ajaxurl' => admin_url( 'admin-ajax.php' ) ] );
        wp_enqueue_style( 'wc-category-showcase-admin' );
        wp_enqueue_script( 'wc-category-showcase-admin' );
        wp_enqueue_script( 'thickbox' );
        wp_enqueue_style( 'thickbox' );
    }

    public function builder_metabox() {
        add_meta_box( 'wccs-builder-metabox', __( 'Showcase Builder', 'textdomain' ), array(
            $this,
            'wcss_builder_metabox_callback'
        ), 'wccs_showcase' );
    }

    public function wcss_builder_metabox_callback() {

        add_thickbox();
        ?>
        <div class="wccs-admin-builder plvr">
            <div class="form-group">
                <label class="control-label" for="email">Select Layout:</label>
                <select name="_layout" id="" class="form-control">
                    <option value="layout-1">Layout 1</option>
                    <option value="layout-2">Layout 2</option>
                    <option value="layout-3">Layout 3</option>
                </select>
            </div>
            <h3>Featured Categories</h3>
            <div class="featured-categories">
                <ul class="featured-categories-list">
                    <li>
                        <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                       <span class="category-details">
                           <span class="category-name">Category Name</span>
                           <span class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid commodi cum excepturi facilis ipsam maxime quod ratione totam, veniam.</span>
                       </span>

                        <a href="#" class="tool-link tool-link-settings"><i class="dashicons dashicons-admin-generic"></i></a>
                        <a href="#" class="tool-link tool-link-edit"><i class="dashicons dashicons-admin-customizer"></i></a>

                    </li>

                    <li>
                        <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                        <span class="category-details">
                           <span class="category-name">Category Name</span>
                           <span class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid commodi cum excepturi facilis ipsam maxime quod ratione totam, veniam.</span>
                       </span>

                        <a href="#" class="tool-link tool-link-settings"><i class="dashicons dashicons-admin-generic"></i></a>
                        <a href="#" class="tool-link tool-link-edit"><i class="dashicons dashicons-admin-customizer"></i></a>

                    </li>


                    <li>
                        <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                        <span class="category-details">
                           <span class="category-name">Category Name</span>
                           <span class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid commodi cum excepturi facilis ipsam maxime quod ratione totam, veniam.</span>
                       </span>

                        <a href="#" class="tool-link tool-link-settings"><i class="dashicons dashicons-admin-generic"></i></a>
                        <a href="#" class="tool-link tool-link-edit"><i class="dashicons dashicons-admin-customizer"></i></a>

                    </li>


                    <li>
                        <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                        <span class="category-details">
                           <span class="category-name">Category Name</span>
                           <span class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid commodi cum excepturi facilis ipsam maxime quod ratione totam, veniam.</span>
                       </span>

                        <a href="#" class="tool-link tool-link-settings"><i class="dashicons dashicons-admin-generic"></i></a>
                        <a href="#" class="tool-link tool-link-edit"><i class="dashicons dashicons-admin-customizer"></i></a>

                    </li>

                    <li>
                        <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                        <span class="category-details">
                           <span class="category-name">Category Name</span>
                           <span class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid commodi cum excepturi facilis ipsam maxime quod ratione totam, veniam.</span>
                       </span>

                        <a href="#" class="tool-link tool-link-settings"><i class="dashicons dashicons-admin-generic"></i></a>
                        <a href="#" class="tool-link tool-link-edit"><i class="dashicons dashicons-admin-customizer"></i></a>

                    </li>


                    <li>
                        <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                        <span class="category-details">
                           <span class="category-name">Category Name</span>
                           <span class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid commodi cum excepturi facilis ipsam maxime quod ratione totam, veniam.</span>
                       </span>

                        <a href="#" class="tool-link tool-link-settings"><i class="dashicons dashicons-admin-generic"></i></a>
                        <a href="#" class="tool-link tool-link-edit"><i class="dashicons dashicons-admin-customizer"></i></a>

                    </li>

                    <li>
                        <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                        <span class="category-details">
                           <span class="category-name">Category Name</span>
                           <span class="category-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid commodi cum excepturi facilis ipsam maxime quod ratione totam, veniam.</span>
                       </span>

                        <a href="#" class="tool-link tool-link-settings"><i class="dashicons dashicons-admin-generic"></i></a>
                        <a href="#" class="tool-link tool-link-edit"><i class="dashicons dashicons-admin-customizer"></i></a>

                    </li>


                    <li class="add-new-slide">
                        <div class="tools">
                            <div class="form-group">
                                <label class="control-label" for="email">Select Category:</label>
                                <select name="" id="" class="form-control">
                                    <option value=""> Cat 1</option>
                                </select>
                            </div>
                            <a href="#" class="button button-secondary">Add</a>
                        </div>
                    </li>
                </ul>
            </div>


            <h3>Additional Categories</h3>
                <div class="additional-categories">
                    <ul class="featured-categories-list">
                        <li>
                            <img src="//ae01.alicdn.com/kf/HTB1mb3QSpXXXXcSXXXXq6xXFXXXo.jpg" alt="">
                        </li>

                        <li class="add-new-slide">
                            <div class="tools">
                                <div class="form-group">
                                    <label class="control-label" for="email">Select Category:</label>
                                    <select name="" id="" class="form-control">
                                        <option value=""> Cat 1</option>
                                    </select>
                                </div>
                                <a href="#" class="button button-secondary">Add</a>
                            </div>
                        </li>

                    </ul>
                </div>
        </div>

        <div id="my-content-id" style="display:none;">
            <p>
                This is my hidden content! It will appear in ThickBox when the link is clicked.
            </p>
        </div>
        <a href="http://example.com?TB_iframe=true&width=600&height=550" class="thickbox">View the WordPress Codex!</a>
        <?php
    }
}

new Admin();
