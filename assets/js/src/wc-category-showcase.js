/**
 * WooCommerce Category Showcase
 * http://pluginever.com
 *
 * Copyright (c) 2017 PluginEver
 * Licensed under the GPLv2+ license.
 */

/*jslint browser: true */
/*global jQuery:false */

window.WC_Category_Showcase = (function(window, document, $, undefined){
	'use strict';

	var app = {};

	app.init = function() {
        $('.woo-cs-slider').slick({
            autoplay: true,
            dots: true,
            speed: 500
        });
	};

	$(document).ready( app.init );

	return app;

})(window, document, jQuery);

