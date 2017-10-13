/**
 * WooCommerce Category Showcase Admin
 * http://pluginever.com
 *
 * Copyright (c) 2017 PluginEver
 * Licensed under the GPLv2+ license.
 */

/*jslint browser: true */
/*global jQuery:false */
window.WC_Category_Showcase_Admin = (function(window, document, $, undefined){
    'use strict';

    var app = {};
    app.init = function() {
        $('.add-new-slide a').on('click', function () {

            return false;
        });
    };

    $(document).ready( app.init );

    return app;

})(window, document, jQuery);
