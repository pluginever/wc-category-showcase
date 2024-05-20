/**
 * WC Category Showcase
 * https://www.pluginever.com
 *
 * Copyright (c) 2018 pluginever
 * Licensed under the GPLv2+ license.
 */

jQuery(document).ready(function ($) {
	var splide = new Splide( '.splide', {
		// autoplay:true,
		perPage: 2,
		rewind : true,
		padding: '2%',
	} );

	splide.mount();
});
