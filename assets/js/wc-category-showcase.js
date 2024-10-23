/**
 * WooCommerce Category Showcase
 * http://pluginever.com
 *
 * Copyright (c) 2017 PluginEver
 * Licensed under the GPLv2+ license.
 */

/*jslint browser: true */
/*global jQuery:false */

window.WC_Category_Showcase = (function (window, document, $, undefined) {
	'use strict';
	var app = {};
	app.init = function () {
		function is_mobile() {
			var agents = ['android', 'webos', 'iphone', 'ipad', 'blackberry'];
			for (var i in agents) {
				if (navigator.userAgent.match('/' + agents[i] + '/i')) {
					return true;
				}
			}
			return false;
		}


		var slider = $('.woo-cs-slider');

		slider.on('init', function () {

			if (!is_mobile()) {
				var showcases = $('.woo-cs');

				$.each(showcases, function (index, showcase) {
					var Rheight = $(showcase).find('.woo-cs-right-block>.row').height();
					var Lheight = $(showcase).find('.woo-cs-left-block').height();

					if (Lheight !== Rheight) {
						$(showcases).find('.slick-track').css('max-height', Rheight + 'px');
						$(showcases).find('.woo-cs-slider-block img').css('width', 'auto');
					}
				});
			}

			$(this).closest('.woo-cs').addClass('initialized');
		});

		slider.each(function () {
			var config = $(this).data('slider-config');
			var autoplay = config.autoplay;
			var infiniteloop = config.infinite;
			var speed = config.speed;

			$(this).slick({
				autoplay: autoplay,
				dots: false,
				infinite: infiniteloop,
				speed: speed
			});
		});

		//we modified imgLiquid core for support data-src attr
		var optimole_wp = $('body').find('input[name="optimole_active"]').val();
		if (!optimole_wp) {
			$('.woo-cs-thumb-container').imgLiquid({
				fill: true,
				horizontalAlign: 'center',
				verticalAlign: 'center'
			});
		}
	};

	// var $slick_carousel = $('.woo-cs-slider');
	// $slick_carousel.on('init', function() {
	//     $slick_carousel.css('display', 'block');
	// });

	$(document).ready(app.init);

	return app;

})(window, document, jQuery);
