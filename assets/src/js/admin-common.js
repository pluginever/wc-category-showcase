/**
 * WC Category Showcase
 * https://www.pluginever.com
 *
 * Copyright (c) 2018 pluginever
 * Licensed under the GPLv2+ license.
 */

/*jslint browser: true */
/*global jQuery:false */
import './_common';

jQuery(document).ready(function ($) {
	'use strict';
	$.wccs_category_showcase = {
		init: function () {
			$('#wccs_additional_categories, #wccs_featured_categories').select2({
				ajax: {
					cache: true,
					delay: 500,
					url: category_showcase_admin_vars.ajaxurl,
					method: 'POST',
					dataType: 'json',
					data(params) {
						return {
							action: 'wccs_search_categories',
							nonce: category_showcase_admin_vars.security,
							term: params.term,
							page: params.page,
						};
					},
					processResults(data, params) {
						params.page = params.page || 1;
						return {
							results: data.results,
							pagination: {
								more: data.pagination.more,
							},
						};
					},
				},
				placeholder: category_showcase_admin_vars.i18n.search_categories,
				minimumInputLength: 1,
				allowClear: true,
			});
		},
	};

	$.wccs_category_showcase.init();
});
