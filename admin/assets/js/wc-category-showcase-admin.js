/**
 * WooCommerce Category Showcase - v1.0.0 - 2017-10-14
 * http://pluginever.com
 *
 * Copyright (c) 2017;
 * Licensed GPLv2+
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
