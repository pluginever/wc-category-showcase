(function ($, window, document, wp, undefined) {
	window.wccshowcase_admin = {
		bindEvents: function () {

			// Sabbir May 2, 2024//
			$('.wccshowcase_layout_select').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccshowcase_layout_select').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wccshowcase-layout-active').removeClass('wccshowcase-layout-primary');
						$(this).parent().addClass('wccshowcase-layout-active-before-content-2');
						if ( 'block' === $(this).val() ){
							$('.wccshowcase-block-selection').removeClass('tw-hidden');
							$('.wccshowcase-grid-selection').addClass('tw-hidden');
							if( 'slider' === $('input[name="wccshowcase_display_mode"]:checked').val() ) {
								$('.wccshowcase-block-slider-category-selection').removeClass('tw-hidden');
							}
						}
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wccshowcase-layout-primary').removeClass('wccshowcase-layout-active');
						$(this).parent().removeClass('wccshowcase-layout-active-before-content-2');
						$('.wccshowcase-block-selection').addClass('tw-hidden');
						$('.wccshowcase-grid-selection').removeClass('tw-hidden');
						$('.wccshowcase-block-slider-category-selection').addClass('tw-hidden');
					}
				});
			});

			$('.wccshowcase-display-mode').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccshowcase-display-mode').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wccshowcase-group-button-active-icon').removeClass('wccshowcase-group-button-icon');
						$(this).parent().addClass('wccshowcase-group-button-active').removeClass('wccshowcase-group-button');
						if( 'slider' === $(this).val() && 'block' === $('input[name="wccshowcase_showcase_layout"]:checked').val() ){
							$('.wccshowcase-block-slider-category-selection').removeClass('tw-hidden');
						} else {
							$('.wccshowcase-block-slider-category-selection').addClass('tw-hidden');
						}
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wccshowcase-group-button-icon').removeClass('wccshowcase-group-button-active-icon');
						$(this).parent().addClass('wccshowcase-group-button').removeClass('wccshowcase-group-button-active');
					}
				});
			});

			$('.wccshowcase-number-of-column').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccshowcase-number-of-column').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wccshowcase-layout-active').removeClass('wccshowcase-layout-primary');
						$(this).siblings('div').addClass('wccshowcase-layout-active-before-content-2');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wccshowcase-layout-primary').removeClass('wccshowcase-layout-active');
						$(this).siblings('div').removeClass('wccshowcase-layout-active-before-content-2');
					}
				});
			});

			$('.wccshowcase-number-of-block-column').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccshowcase-number-of-block-column').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wccshowcase-layout-active').removeClass('wccshowcase-layout-primary');
						$(this).siblings('div').addClass('wccshowcase-layout-active-before-content-2');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wccshowcase-layout-primary').removeClass('wccshowcase-layout-active');
						$(this).siblings('div').removeClass('wccshowcase-layout-active-before-content-2');
					}
				});
			});

			$('.wccshowcase-category-filter').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccshowcase-category-filter').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wccshowcase-group-button-active-icon').removeClass('wccshowcase-group-button-icon');
						$(this).parent().addClass('wccshowcase-group-button-active').removeClass('wccshowcase-group-button');
						if( 'specific' === $(this).val() ){
							$('.wccshowcase-category-selection').removeClass('tw-hidden');
						}
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wccshowcase-group-button-icon').removeClass('wccshowcase-group-button-active-icon');
						$(this).parent().addClass('wccshowcase-group-button').removeClass('wccshowcase-group-button-active');
						$('.wccshowcase-category-selection').addClass('tw-hidden');
					}
				});
			});

			// Slide up down start.
			$(document).on('click', '.wccshowcase-category-details-hide', function (e) {
				e.preventDefault();
				$(this).addClass('tw-hidden');
				$(this).siblings('.wccshowcase-category-details-show').removeClass('tw-hidden');
				$(this).parent().parent().siblings('.wccshowcase-category-custom-details').slideUp(500);
			});
			$(document).on('click', '.wccshowcase-category-details-show', function (e) {
				e.preventDefault();
				$('.wccshowcase-selected-category-list').find('.wccshowcase-category-custom-details').each(function() {
					$(this).slideUp(500);
					$(this).siblings().children().children('.wccshowcase-category-details-hide').addClass('tw-hidden');
					$(this).siblings().children().children('.wccshowcase-category-details-show').removeClass('tw-hidden');
				});
				$(this).addClass('tw-hidden');
				$(this).siblings('.wccshowcase-category-details-hide').removeClass('tw-hidden');
				$(this).parent().parent().siblings('.wccshowcase-category-custom-details').slideDown(500);
			});
			// Slide up down end.

			$('#wccshowcase_specific_category_select, #wccshowcase_block_slider_category').select2({
				ajax: {
					cache: true,
					delay: 500,
					url: wccshowcase_admin_js_vars.ajax_url,
					method: 'POST',
					dataType: 'json',
					data(params) {
						return {
							action: 'wc_category_showcase_search_categories',
							nonce: wccshowcase_admin_js_vars.search_nonce,
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
				placeholder: wccshowcase_admin_js_vars.i18n.search_category,
				minimumInputLength: 1,
				allowClear: true,
			});

			$(document).on('click', '.wccshowcase-custom-des-show-hide', function (e) {
				$(this).parent().parent().siblings('textarea').toggleClass('tw-hidden');
			});

			$(document).on('click', '.wccshowcase-label-show-hide', function (e) {
				$('.wccshowcase-label-selection').toggleClass('tw-hidden');
			});

			$(document).on('click', '.wccshowcase-icon-show-hide', function (e) {
				$('.wccshowcase-icon-selection').toggleClass('tw-hidden');
			});

			// custom select option start
			$(document).on('click', '#wccshowcase-select-sort-by, #wccshowcase-select-sort, .wccshowcase-select-category-list-update, #wccshowcase-select-interactive-hover-style, .wccshowcase-select-font-family', function (e) {
				$(this).children().children('.custom-options').toggleClass('tw-hidden');
			});

			$(document).on('click', '#wccshowcase-select-sort-by .custom-options .custom-option, #wccshowcase-select-sort .custom-options .custom-option, .wccshowcase-select-category-list-update .custom-options .custom-option, #wccshowcase-select-interactive-hover-style .custom-options .custom-option, .wccshowcase-select-font-family .custom-options .custom-option', function (e) {
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
			$(document).on('click', '.wccshowcase-show-hide-section-title, .wccshowcase-show-hide-section-description', function (e) {
				$(this).parent().siblings('textarea, input').toggleClass('tw-hidden');
			});

			$(document).on('click', '.wccshowcase-content-margin-is-all, .wccshowcase-border-is-all', function (e) {
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
			$(document).on('click', '.wccshowcase-choose-style-tag', function (e) {
				var currentOption = $(this).children('p').data('value');
				$($(this).parent()).find('.wccshowcase-choose-style-tag').each(function() {
					$(this).children('p').removeClass('active');
					if( currentOption === $(this).children('p').data('value') ){
						$(this).children('p').addClass('active');
						$(this).siblings('input').val( $(this).children('p').data('value') );
					}
				});
			});

			$('.wccshowcase-focus-color').focus(function() {
				$(this).siblings('span').addClass('tw-text-fade-blue-600').removeClass('tw-text-text-grey-500');
			}).blur(function() {
				$(this).siblings('span').removeClass('tw-text-fade-blue-600').addClass('tw-text-text-grey-500');
			});
		}
	};

	$(function () {
		wccshowcase_admin.bindEvents();
	});

})(jQuery, window, document, wp);


// Category Sorting.
jQuery(document).ready(function($) {
	// Attribute ordering drag
	var tabs = $( '.wccshowcase-selected-category-list' );
	if ( tabs.length ) {
		tabs.sortable({
			items:'.wccshowcase-category-list-item',
			cursor:'move',
			axis:'y',
			handle: '.wccshowcase-move',
			scrollSensitivity:40,
			forcePlaceholderSize: true,
			helper: 'clone',
			opacity: 0.65,
			placeholder: 'wccshowcase-sortable-placeholder',
			start:function(event,ui){
				ui.item.css('background-color','#f6f6f6');
			},
			stop:function(event,ui){
				ui.item.removeAttr('style');
				wccshowcase_auto_index();
			}
		});
	}
	function wccshowcase_auto_index() {
		$('.wccshowcase-selected-category-list .wccshowcase-category-list-item').each(function(index, el){
			$('.wccshowcase_category_position', el).val( parseInt( $(el).index('.wccshowcase-selected-category-list .wccshowcase-category-list-item'), 10 ) );
		});
	}

	$(document).on('change', '.select2-selection__rendered', function() {
		var catIdArrayList = [];
		var myInterval = setInterval(function () {
			$('#wccshowcase_specific_category_select option').each(function() {
				catIdArrayList.push($(this).val());
			});
			if( catIdArrayList.length > $('.wccshowcase-selected-category-list').length ){
				$.ajax({
					type: 'post',
					url: wccshowcase_admin_js_vars.ajax_url,
					data: {
						action: 'wc_category_showcase_get_category_details',
						nonce: wccshowcase_admin_js_vars.search_nonce,
						term_id: catIdArrayList.pop(),
					},
					beforeSend: function(){
						$('.wccshowcase-loader').removeClass('tw-hidden');
					},
					success: function(result) {
						$('.wccshowcase-loader').addClass('tw-hidden');
						$('.wccshowcase-selected-category-list').append(result);
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
