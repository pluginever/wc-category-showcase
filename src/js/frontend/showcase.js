/**
 * WC Category Showcase
 * https://www.pluginever.com
 *
 * Copyright (c) 2018 pluginever
 * Licensed under the GPLv2+ license.
 */

jQuery(document).ready(function ($) {
	var splide = new Splide( '.splide', {
		loop: true,
		autoplay:true,
		perPage: 1,
		grid: {
			dimensions: [ [2,2] ],
			gap : {
				row: '1rem',
				col: '1rem',
			},
		},
		breakpoints: {
			600: {
				height: '10rem',
				perPage: 1,
				grid: {
					dimensions: [ [ 2, 2 ] ],
					gap: {
						row: '.5em',
						col: '.5em'
					}
				}
			}
		}
	});
	splide.mount( window.splide.Extensions );
});
