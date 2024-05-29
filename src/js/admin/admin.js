/**
 * WC Category Showcase
 * https://www.pluginever.com
 *
 * Copyright (c) 2018 pluginever
 * Licensed under the GPLv2+ license.
 */

(function ($, window, document, wp, undefined) {
	window.wcc_showcase_admin = {
		bindEvents: function () {
			// Sabbir May 2, 2024//
			// Modal Show Hide
			$(document).on('click', '.wcc_showcase-pro, .wcc_showcase-pro-close', function (e) {
				e.preventDefault();
				$('#modelConfirm').toggleClass('tw-hidden');
			});

			$('.wcc_showcase_layout_select').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc_showcase_layout_select').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).parent().addClass('wcc_showcase-layout-active-before-content-2');
						if ( 'block' === $(this).val() ){
							$('.wcc_showcase-block-selection').removeClass('tw-hidden');
							$('.wcc_showcase-grid-selection').addClass('tw-hidden');
							$('.wcc_showcase-slider-selection').addClass('tw-hidden');
							$('.wcc_showcase-breakpoint').removeClass('tw-hidden');
						}
						if ( 'slider' === $(this).val() ){
							$('.is-wcc-slider').removeClass('tw-hidden');
							$('.wcc_showcase-block-selection').addClass('tw-hidden');
							$('.wcc_showcase-grid-selection').addClass('tw-hidden');
							$('.wcc_showcase-slider-selection').removeClass('tw-hidden');
							$('.wcc_showcase-breakpoint').removeClass('tw-hidden');
						}else {
							$('.is-wcc-slider').addClass('tw-hidden');
						}

						if( 'grid' === $(this).val() ){
							$('.wcc_showcase-block-selection').addClass('tw-hidden');
							$('.wcc_showcase-grid-selection').removeClass('tw-hidden');
							$('.wcc_showcase-slider-selection').addClass('tw-hidden');
							$('.wcc_showcase-breakpoint').addClass('tw-hidden');
						}
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).parent().removeClass('wcc_showcase-layout-active-before-content-2');
						$('.wcc_showcase-block-slider-category-selection').addClass('tw-hidden');
					}
				});
			});
			$('.wcc_showcase_image_layout_select').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc_showcase_image_layout_select').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).parent().addClass('wcc_showcase-layout-active-before-content-2');
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).parent().removeClass('wcc_showcase-layout-active-before-content-2');
					}
				});
			});

			// Slider Column Row Select.
			$('.wcc-showcase-slider-column').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc-showcase-slider-column').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).siblings('div').addClass('wcc_showcase-layout-active-before-content-3');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).siblings('div').removeClass('wcc_showcase-layout-active-before-content-3');
					}
				});
			});
			$('.wcc-showcase-slider-row').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc-showcase-slider-row').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).siblings('div').addClass('wcc_showcase-layout-active-before-content-3');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).siblings('div').removeClass('wcc_showcase-layout-active-before-content-3');
					}
				});
			});

			// Block Column Row Select.
			$('.wcc-showcase-block-column').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc-showcase-block-column').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).siblings('div').addClass('wcc_showcase-layout-active-before-content-3');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).siblings('div').removeClass('wcc_showcase-layout-active-before-content-3');
					}
				});
			});
			$('.wcc-showcase-block-row').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc-showcase-block-row').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).siblings('div').addClass('wcc_showcase-layout-active-before-content-2');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).siblings('div').removeClass('wcc_showcase-layout-active-before-content-2');
					}
				});
			});

			// Grid Layout Select
			$('.wcc_showcase-number-of-grid-column').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc_showcase-number-of-grid-column').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).siblings('div').addClass('wcc_showcase-layout-active-before-content-2');
						$('.wcc_showcase-choose-layout-option').each(function() {
							if( $(this).hasClass( 'layout-'+current_val+'x' ) ){
								$(this).removeClass('tw-hidden');
							} else {
								$(this).addClass('tw-hidden');
							}
						});
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).siblings('div').removeClass('wcc_showcase-layout-active-before-content-2');
					}
				});
			});
			$('.wcc_showcase-choose-layout-option').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				if( ! $(this).hasClass('wcc_showcase-pro') ) {
					$('.wcc_showcase-choose-layout-option').find('input:radio').each(function () {
						if (current_val === $(this).val()) {
							$(this).attr('checked', true);
							$(this).siblings('div').children().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
							$(this).siblings('div').addClass('wcc_showcase-layout-active-before-content');
						} else {
							$(this).attr('checked', false);
							$(this).siblings('div').children().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
							$(this).siblings('div').removeClass('wcc_showcase-layout-active-before-content');
						}
					});
				}
			});

			$('.wcc_showcase-category-filter').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc_showcase-category-filter').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wcc_showcase-group-button-active-icon').removeClass('wcc_showcase-group-button-icon');
						$(this).parent().addClass('wcc_showcase-group-button-active').removeClass('wcc_showcase-group-button');
						if( 'specific' === $(this).val() ){
							$('.wcc_showcase-category-selection').removeClass('tw-hidden');
						}
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wcc_showcase-group-button-icon').removeClass('wcc_showcase-group-button-active-icon');
						$(this).parent().addClass('wcc_showcase-group-button').removeClass('wcc_showcase-group-button-active');
						$('.wcc_showcase-category-selection').addClass('tw-hidden');
					}
				});
			});

			// Slide up down start.
			$(document).on('click', '.wcc_showcase-category-details-hide', function (e) {
				e.preventDefault();
				$(this).addClass('tw-hidden');
				$(this).siblings('.wcc_showcase-category-details-show').removeClass('tw-hidden');
				$(this).parent().parent().siblings('.wcc_showcase-category-custom-details').slideUp(500);
			});
			$(document).on('click', '.wcc_showcase-category-details-show', function (e) {
				e.preventDefault();
				$('.wcc_showcase-selected-category-list').find('.wcc_showcase-category-custom-details').each(function() {
					$(this).slideUp(500);
					$(this).siblings().children().children('.wcc_showcase-category-details-hide').addClass('tw-hidden');
					$(this).siblings().children().children('.wcc_showcase-category-details-show').removeClass('tw-hidden');
				});
				$(this).addClass('tw-hidden');
				$(this).siblings('.wcc_showcase-category-details-hide').removeClass('tw-hidden');
				$(this).parent().parent().siblings('.wcc_showcase-category-custom-details').slideDown(500);
			});
			// Slide up down end.

			$('#wcc_showcase_specific_category_select, #wcc_showcase_block_slider_category').select2({
				ajax: {
					cache: true,
					delay: 500,
					url: wcc_showcase_admin_js_vars.ajax_url,
					method: 'POST',
					dataType: 'json',
					data(params) {
						return {
							action: 'wc_category_showcase_search_categories',
							nonce: wcc_showcase_admin_js_vars.search_nonce,
							term: params.term,
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
				placeholder: wcc_showcase_admin_js_vars.i18n.search_category,
				minimumInputLength: 1,
				allowClear: true,
			});

			$(document).on('click', '.wcc_showcase-custom-des-show-hide', function (e) {
				$(this).parent().parent().siblings('textarea').toggleClass('tw-hidden');
			});

			$(document).on('click', '.wcc_showcase-label-show-hide', function (e) {
				$('.wcc_showcase-label-selection').toggleClass('tw-hidden');
			});

			$(document).on('click', '.wcc_showcase-icon-show-hide', function (e) {
				$('.wcc_showcase-icon-selection').toggleClass('tw-hidden');
			});

			// custom select option start
			$(document).on('click', '#wcc_showcase-ticker-direction,#wcc_showcase-select-sort-by, #wcc_showcase-select-sort, .wcc_showcase-select-category-list-update, #wcc_showcase-select-interactive-hover-style, .wcc_showcase-select-font-family, #wcc-showcase-navigation-position, #wcc_showcase-overlay-content', function (e) {
				$(this).children().children('.custom-options').toggleClass('tw-hidden');
			});

			$(document).on('click', '#wcc_showcase-ticker-direction .custom-options .custom-option, #wcc_showcase-select-sort-by .custom-options .custom-option, #wcc_showcase-select-sort .custom-options .custom-option, .wcc_showcase-select-category-list-update .custom-options .custom-option, #wcc_showcase-select-interactive-hover-style .custom-options .custom-option, .wcc_showcase-select-font-family .custom-options .custom-option, #wcc-showcase-navigation-position .custom-options .custom-option, #wcc_showcase-overlay-content .custom-options .custom-option', function (e) {
				var currentOption = $(this).data('value');
				$($(this).parent()).find('.custom-option').each(function() {
					$(this).removeClass('selected');
					if( currentOption === $(this).data('value') ){
						$(this).addClass('selected');
						$(this).parent().siblings('.select__trigger').children('span').html($(this).html());
						$(this).parent().parent().siblings('input').val( $(this).data('value') );
					}
				});
			});
			// custom select option end

			// Showcase Tab
			$(document).on('click', '.wcc_showcase-show-hide-section-title, .wcc_showcase-show-hide-section-description', function (e) {
				$(this).parent().siblings('textarea, input').toggleClass('tw-hidden');
			});

			$('.wcc-showcase-heading-alignment').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc-showcase-heading-alignment').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-active').removeClass('wcc_showcase-layout-primary');
						$(this).siblings('div').addClass('wcc_showcase-layout-active-before-content-2');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wcc_showcase-layout-primary').removeClass('wcc_showcase-layout-active');
						$(this).siblings('div').removeClass('wcc_showcase-layout-active-before-content-2');
					}
				});
			});

			$('.wcc_showcase-ticker-mode').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wcc_showcase-ticker-mode').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wcc_showcase-group-button-active-icon').removeClass('wcc_showcase-group-button-icon');
						$(this).parent().addClass('wcc_showcase-group-button-active').removeClass('wcc_showcase-group-button');
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wcc_showcase-group-button-icon').removeClass('wcc_showcase-group-button-active-icon');
						$(this).parent().addClass('wcc_showcase-group-button').removeClass('wcc_showcase-group-button-active');
					}
				});
			});

			$(document).on('click', '.wcc_showcase-content-margin-is-all, .wcc_showcase-border-is-all', function (e) {
				if( 'yes' === $(this).children('input').val() ) {
					$(this).children('input').val('');
					$(this).addClass('tw-text-text-grey-500').removeClass( 'tw-text-fade-blue-600');
					$(this).siblings('label').children('input').attr('disabled', false);
				} else {
					$(this).children('input').val('yes');
					$(this).addClass( 'tw-text-fade-blue-600').removeClass('tw-text-text-grey-500');
					$(this).siblings('label').children('input').attr('disabled', true);
				}
				$(this).parent().siblings().toggleClass('tw-hidden');
				$(this).parent().parent().toggleClass('tw-flex-col');
			});

			// Font Tab
			$(document).on('click', '.wcc_showcase-choose-style-tag', function (e) {
				var currentOption = $(this).children('p').data('value');
				$($(this).parent()).find('.wcc_showcase-choose-style-tag').each(function() {
					$(this).children('p').removeClass('active');
					if( currentOption === $(this).children('p').data('value') ){
						$(this).children('p').addClass('active');
						$(this).siblings('input').val( $(this).children('p').data('value') );
					}
				});
			});

			$('.wcc_showcase-focus-color').focus(function() {
				$(this).siblings('span').addClass('tw-text-fade-blue-600').removeClass('tw-text-text-grey-500');
			}).blur(function() {
				$(this).siblings('span').removeClass('tw-text-fade-blue-600').addClass('tw-text-text-grey-500');
			});
		}
	};

	$(function () {
		wcc_showcase_admin.bindEvents();
	});

})(jQuery, window, document, wp);


// Category Sorting.
jQuery(document).ready(function($) {
	// Attribute ordering drag
	var tabs = $( '.wcc_showcase-selected-category-list' );
	if ( tabs.length ) {
		tabs.sortable({
			items:'.wcc_showcase-category-list-item',
			cursor:'move',
			axis:'y',
			handle: '.wcc_showcase-move',
			scrollSensitivity:40,
			forcePlaceholderSize: true,
			helper: 'clone',
			opacity: 0.65,
			placeholder: 'wcc_showcase-sortable-placeholder',
			start:function(event,ui){
				ui.item.css('background-color','#f6f6f6');
			},
			stop:function(event,ui){
				ui.item.removeAttr('style');
				wcc_showcase_auto_index();
			}
		});
	}
	function wcc_showcase_auto_index() {
		$('.wcc_showcase-selected-category-list .wcc_showcase-category-list-item').each(function(index, el){
			$('.wcc_showcase_category_position', el).val( parseInt( $(el).index('.wcc_showcase-selected-category-list .wcc_showcase-category-list-item'), 10 ) );
		});
	}

	$(document).on('change', '.select2-selection__rendered', function() {
		var catIdArrayList = [];
		var myInterval = setInterval(function () {
			$('#wcc_showcase_specific_category_select option').each(function() {
				catIdArrayList.push($(this).val());
			});
			if( catIdArrayList.length > $('.wcc_showcase-selected-category-list').length ){
				$.ajax({
					type: 'post',
					url: wcc_showcase_admin_js_vars.ajax_url,
					data: {
						action: 'wc_category_showcase_get_category_details',
						nonce: wcc_showcase_admin_js_vars.search_nonce,
						term_id: catIdArrayList.pop(),
					},
					beforeSend: function(){
						$('.wcc_showcase-loader').removeClass('tw-hidden');
					},
					success: function(result) {
						$('.wcc_showcase-loader').addClass('tw-hidden');
						$('.wcc_showcase-selected-category-list').append(result);
						clearInterval(myInterval);
					},
					error: function(result) {
						console.warn(result);
					}
				});
			}
		},1000);
	});
});
import './_common';
import './_tabsControl';
