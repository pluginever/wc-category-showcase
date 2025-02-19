/**
 * WC Category Showcase
 * https://www.pluginever.com
 *
 * Copyright (c) 2018-2025 PluginEver
 * Licensed under the GPLv2+ license.
 */

jQuery(document).ready(function ($) {
	$('.splide').each(function() {
		var grid_value = $(this).data( 'grid' );
		var grid_ticker = $(this).data( 'ticker' );
		var tickerSpeed;
		var gap;
		var autoScroll = false;
		if( false === grid_ticker.tickerDirection ){
			tickerSpeed = grid_ticker.tickerSpeed * -1;
		}else{
			tickerSpeed = grid_ticker.tickerSpeed;
		}
		if( true === grid_ticker.isTicker ) {
			autoScroll = {
				speed: tickerSpeed,
			}
		}
		gap = grid_value.gap / 16;

		// Create a new Splide instance for this current element.
		new Splide( this, {
			autoScroll: autoScroll,
			gap: gap+'rem',
			grid: {
				dimensions: [ [grid_value.rows, grid_value.columns] ],
				gap : {
					row: '1rem',
					col: gap+'rem',
				},
			},
			breakpoints: {
				1200: {
					grid: {
						dimensions: [ [ grid_value.rows, grid_value.laptop ] ],
						gap: {
							row: '.5em',
							col: '.5em'
						}
					}
				},
				768: {
					grid: {
						dimensions: [ [ grid_value.rows, grid_value.tablet ] ],
						gap: {
							row: '.5em',
							col: '.5em'
						}
					}
				},
				576: {
					grid: {
						dimensions: [ [ 1, grid_value.mobile ] ],
						gap: {
							row: '.5em',
							col: '.5em'
						}
					}
				}
			}
		}).mount( window.splide.Extensions );
	});
});
