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
        $('.wccs-admin-builder').on('click', '.add-new-category', app.controller.add);
        $('.wccs-admin-builder').on('click', '.wccs-remove-item', app.controller.remove);

    };
    app.storage = {
      additionalMax : wccs.additional_max,
      additionalSelected:wccs.additional_selected,
    },
    app.controller = {

        add: function (e) {
            var toolBox = $(e.currentTarget).closest('li');
            var term_id = toolBox.find('.selected-term-id').val();
            var scope =  $(e.currentTarget).data('scope');

            if( toolBox === undefined || term_id === undefined || scope === undefined ) return;

            $.ajax({
                type: "post",
                dataType: "json",
                url: wccs.ajaxurl,
                data: {
                    action: "wccs_add_term",
                    term_id: term_id,
                    scope: scope,
                    post_id: wccs.post_id,
                    nonce: wccs.nonce
                },
                success: function (response) {
                    toolBox.removeClass('adding-item');
                    if(undefined !== response.success && response.success === true ){
                        var html = '<li>';
                        html += '<img src="'+response.data.category.image+'" alt="">';
                        if( scope === 'featured'){
                            html += '<span class="category-details">';
                            html += '<span class="category-name">'+response.data.category.name+'</span>';
                            html += '<span class="category-description"><p>'+response.data.category.desc.substr(0, 100)+'</p></span>';
                            html += '</span>';

                            // html += '<a href="#" class="tool-link tool-link-settings wccs-edit-item" data-scope="'+scope+'" data-term-id="'+term_id+'"><i class="dashicons dashicons-admin-generic"></i></a>';
                        }
                        html += '<a href="#" class="tool-link tool-link-edit wccs-remove-item" data-scope="'+scope+'" data-term-id="'+term_id+'"><i class="dashicons dashicons-trash"></i></a>';
                        if( scope === 'additional') {
                            html += '<span class="name">'+response.data.category.name+'</span>';
                        }
                        html += '</li>';

                        $(html).insertBefore(toolBox);

                    }else{
                        alert(response.data.msg);
                    }

                }
            });


            return false;

        },


        remove: function (e) {
            var term_id = $(e.currentTarget).data('term-id');
            var scope =  $(e.currentTarget).data('scope');

            $.ajax({
                type: "post",
                dataType: "json",
                url: wccs.ajaxurl,
                data: {
                    action: "wccs_remove_term",
                    term_id: term_id,
                    scope: scope,
                    post_id: wccs.post_id,
                    nonce: wccs.nonce
                },
                success: function (response) {
                    if(undefined !== response.success && response.success === true ){
                        $(e.currentTarget).closest('li').remove();
                    }

                }
            });

            return false;
        },

        update: function (data) {

        }


    };

    $(document).ready(app.init);


    return app;

})(window, document, jQuery);
