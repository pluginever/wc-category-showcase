/**
 * WooCommerce Category Showcase Admin
 * http://pluginever.com
 *
 * Copyright (c) 2017 PluginEver
 * Licensed under the GPLv2+ license.
 */

/*jslint browser: true */
/*global jQuery:false */
window.WC_Category_Showcase_Admin = (function (window, document, $, undefined) {
    'use strict';

    var app = {};
    app.init = function () {
        console.log(jsobject);
        $('.featured-categories-list').on('click', '#add-featured-category', app.featuredCategories.add);
        $('.featured-categories-list').on('click', '.wccs-remove-item', app.featuredCategories.remove);

        $('.additional-categories').on('click', '#add-additional-category', app.additionalCategories.add);
        $('.additional-categories').on('click', '.wccs-remove-item', app.additionalCategories.remove);
        $('.wccs-modal-window').on('click', 'img.category-image', app.featuredCategories.handleCustomImage);

    };

    app.featuredCategories = {
        add: function (e) {
            var parentLi = $(e.target).closest('li');
            var term_id = parentLi.find('.selected-term-id').val();
            parentLi.addClass('adding-item');
            console.log(term_id);
            $.ajax({
                type: "post",
                dataType: "json",
                url: jsobject.ajaxurl,
                data: {
                    action: "wccs_add_term",
                    term_id: term_id,
                    scope: 'featured',
                    post_id: jsobject.post_id,
                    nonce: jsobject.nonce
                },
                success: function (response) {
                    parentLi.removeClass('adding-item');
                    if(undefined !== response.success && response.success === true ){
                        var html = '<li>';
                        html += '<img src="'+response.data.category.image+'" alt="">';
                        html += '<span class="category-details">';
                        html += '<span class="category-name">'+response.data.category.name+'</span>';
                        html += '<span class="category-description"><p>'+response.data.category.desc.substr(0, 100)+'</p></span>';
                        html += '</span>';
                        html += '<a href="#" class="tool-link tool-link-settings wccs-edit-item" data-term-id="'+term_id+'"><i class="dashicons dashicons-admin-generic"></i></a>';
                        html += '<a href="#" class="tool-link tool-link-edit wccs-remove-item" data-term-id="'+term_id+'"><i class="dashicons dashicons-trash"></i></a>';
                        html += '</li>';

                        $(html).insertBefore(parentLi);

                    }

                }
            });

            return false;
        },

        remove: function (e) {
            var term_id = $(e.currentTarget).data('term-id');
            $.ajax({
                type: "post",
                dataType: "json",
                url: jsobject.ajaxurl,
                data: {
                    action: "wccs_remove_term",
                    term_id: term_id,
                    scope: 'featured',
                    post_id: jsobject.post_id,
                    nonce: jsobject.nonce
                },
                success: function (response) {
                    if(undefined !== response.success && response.success === true ){
                        $(e.currentTarget).closest('li').remove();
                    }

                }
            });

            return false;
        },


        handleCustomImage:function (e) {
            e.preventDefault();
            var image_frame;
            if(image_frame){
                image_frame.open();
            }
            // Define image_frame as wp.media object
            image_frame = wp.media({
                title: 'Select Media',
                multiple : false,
                library : {
                    type : 'image',
                }
            });

            image_frame.on('close',function() {
                // On close, get selections and save to the hidden input
                // plus other AJAX stuff to refresh the image preview
                var selection =  image_frame.state().get('selection');
                var gallery_ids = new Array();
                var gallery_urls = new Array();
                var my_index = 0;
                selection.each(function(attachment) {
                    gallery_ids[my_index] = attachment['id'];
                    gallery_urls[my_index] = attachment['url'];
                    my_index++;
                });

                console.log(gallery_ids);
                console.log(gallery_urls);
                var ids = gallery_ids.join(",");
                jQuery('input#wccs-category-imageid').val(ids);
                // Refresh_Image(ids);
            });

            image_frame.on('open',function() {
                // On open, get the id from the hidden input
                // and select the appropiate images in the media manager
                var selection =  image_frame.state().get('selection');
                var ids = jQuery('input#wccs-category-imageid').val().split(',');
                ids.forEach(function(id) {
                   var attachment = wp.media.attachment(id);
                    attachment.fetch();
                    selection.add( attachment ? [ attachment ] : [] );
                });

            });

            image_frame.open();
        }


    };

    app.additionalCategories = {
        add: function (e) {
            var parentLi = $(e.target).closest('li');
            var term_id = parentLi.find('.selected-term-id').val();
            parentLi.addClass('adding-item');
            console.log(term_id);
            $.ajax({
                type: "post",
                dataType: "json",
                url: jsobject.ajaxurl,
                data: {
                    action: "wccs_add_term",
                    term_id: term_id,
                    scope: 'additional',
                    post_id: jsobject.post_id,
                    nonce: jsobject.nonce
                },
                success: function (response) {
                    parentLi.removeClass('adding-item');
                    if(undefined !== response.success && response.success === true ){
                        var html = '<li>';
                        html += '<img src="'+response.data.category.image+'" alt="">';
                        html += '<a href="#" class="tool-link tool-link-settings wccs-edit-item"  data-term-id="'+term_id+'"><i class="dashicons dashicons-admin-generic"></i></a>';
                        html += '<a href="#" class="tool-link tool-link-edit wccs-remove-item"  data-term-id="'+term_id+'"><i class="dashicons dashicons-trash"></i></a>';
                        html += '</li>';

                        $(html).insertBefore(parentLi);

                    }

                }
            });

            return false;
        },
    },

    app.controller = {

        add: function (data) {

        },


        remove: function (data) {

        },

        update: function (data) {

        }


    };

    $(document).ready(app.init);


    return app;

})(window, document, jQuery);
