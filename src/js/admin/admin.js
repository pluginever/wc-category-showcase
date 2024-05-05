(function ($, window, document, wp, undefined) {
	window.wccs_admin = {
		bindEvents: function () {

			// Sabbir May 2, 2024//
			$('.wccs_layout_select').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccs_layout_select').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wccs-layout-active').removeClass('wccs-layout-primary');
						$(this).parent().addClass('wccs-layout-active-before-content-2');
						if ( 'block' === $(this).val() ){
							$('.wccs-block-selection').removeClass('tw-hidden');
							$('.wccs-grid-selection').addClass('tw-hidden');
						}
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wccs-layout-primary').removeClass('wccs-layout-active');
						$(this).parent().removeClass('wccs-layout-active-before-content-2');
						$('.wccs-block-selection').addClass('tw-hidden');
						$('.wccs-grid-selection').removeClass('tw-hidden');
					}
				});
			});

			$('.wccs-display-mode').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccs-display-mode').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wcss-group-button-active-icon').removeClass('wcss-group-button-icon');
						$(this).parent().addClass('wcss-group-button-active').removeClass('wcss-group-button');
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wcss-group-button-icon').removeClass('wcss-group-button-active-icon');
						$(this).parent().addClass('wcss-group-button').removeClass('wcss-group-button-active');
					}
				});
			});

			$('.wccs-number-of-column').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccs-number-of-column').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wccs-layout-active').removeClass('wccs-layout-primary');
						$(this).siblings('div').addClass('wccs-layout-active-before-content-2');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wccs-layout-primary').removeClass('wccs-layout-active');
						$(this).siblings('div').removeClass('wccs-layout-active-before-content-2');
					}
				});
			});

			$('.wccs-number-of-block-column').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccs-number-of-block-column').find('input:radio').each(function() {
					if ( current_val === $(this).val() ) {
						$(this).attr('checked', true);
						$(this).siblings('div').children().addClass('wccs-layout-active').removeClass('wccs-layout-primary');
						$(this).siblings('div').addClass('wccs-layout-active-before-content-2');
					} else {
						$(this).attr('checked', false);
						$(this).siblings('div').children().addClass('wccs-layout-primary').removeClass('wccs-layout-active');
						$(this).siblings('div').removeClass('wccs-layout-active-before-content-2');
					}
				});
			});

			$('.wccs-category-filter').on('click', function (e) {
				var current_val = $(this).find('input:radio').val();
				$('.wccs-category-filter').find('input:radio').each(function() {
					if(current_val === $(this).val()){
						$(this).attr( 'checked', true );
						$(this).siblings().addClass('wcss-group-button-active-icon').removeClass('wcss-group-button-icon');
						$(this).parent().addClass('wcss-group-button-active').removeClass('wcss-group-button');
						if( 'specific' === $(this).val() ){
							$('.wccs-category-selection').removeClass('tw-hidden');
						}
					} else {
						$(this).attr( 'checked', false );
						$(this).siblings().addClass('wcss-group-button-icon').removeClass('wcss-group-button-active-icon');
						$(this).parent().addClass('wcss-group-button').removeClass('wcss-group-button-active');
						$('.wccs-category-selection').addClass('tw-hidden');
					}
				});
			});

			// Slide up down start.
			$(document).on('click', '.wccs-category-details-hide', function (e) {
				e.preventDefault();
				$(this).addClass('tw-hidden');
				$(this).siblings('.wccs-category-details-show').removeClass('tw-hidden');
				$(this).parent().parent().siblings('.wccs-category-custom-details').slideUp(500);
			});
			$(document).on('click', '.wccs-category-details-show', function (e) {
				e.preventDefault();
				$('.wccs-selected-category-list').find('.wccs-category-custom-details').each(function() {
					$(this).slideUp(500);
					$(this).siblings().children().children('.wccs-category-details-hide').addClass('tw-hidden');
					$(this).siblings().children().children('.wccs-category-details-show').removeClass('tw-hidden');
				});
				$(this).addClass('tw-hidden');
				$(this).siblings('.wccs-category-details-hide').removeClass('tw-hidden');
				$(this).parent().parent().siblings('.wccs-category-custom-details').slideDown(500);
			});
			// Slide up down end.

			$('#wccs_specific_category_select').select2({
				ajax: {
					cache: true,
					delay: 500,
					url: wccs_admin_js_vars.ajax_url,
					method: 'POST',
					dataType: 'json',
					data(params) {
						return {
							action: 'wc_category_showcase_search_categories',
							nonce: wccs_admin_js_vars.search_nonce,
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
				placeholder: wccs_admin_js_vars.i18n.search_category,
				minimumInputLength: 1,
				allowClear: true,
			});

			$(document).on('click', '#test-add',function (e) {
				e.preventDefault();
				$.ajax({
					type: 'post',
					url: wccs_admin_js_vars.ajax_url,
					data: {
						action: 'wc_category_showcase_get_category_details',
						nonce: wccs_admin_js_vars.search_nonce,
						term_id: 17,
					},
					success: function(result) {
						$('.wccs-selected-category-list').append(result);
					},
					error: function(result) {
						console.warn(result);
					}
				});
			});

			$(document).on('click', '.wccs-custom-des-show-hide', function (e) {
				$(this).parent().parent().siblings('textarea').toggleClass('tw-hidden');
			});

			$(document).on('click', '.wccs-label-show-hide', function (e) {
				$('.wccs-label-selection').toggleClass('tw-hidden');
			});

			$(document).on('click', '.wccs-icon-show-hide', function (e) {
				$('.wccs-icon-selection').toggleClass('tw-hidden');
			});

			$(document).on('keyup', '.wccs-label-text', function (e) {
				var textfield = $(this);
				$('.wccs-label-text-count-show span').text($(this).value.substring(0, max));
				if (textfield.val().length > 10) {
					console.log('read');
				}
			});
		}
	};

	$(function () {
		wccs_admin.bindEvents();
	});

})(jQuery, window, document, wp);


// Category Sorting.
jQuery(document).ready(function($) {
	// Attribute ordering drag
	var tabs = $( '.wccs-selected-category-list' );
	if ( tabs.length ) {
		tabs.sortable({
			items:'.wcss-category-list-item',
			cursor:'move',
			axis:'y',
			handle: '.wccs-move',
			scrollSensitivity:40,
			forcePlaceholderSize: true,
			helper: 'clone',
			opacity: 0.65,
			placeholder: 'wccs-sortable-placeholder',
			start:function(event,ui){
				ui.item.css('background-color','#f6f6f6');
			},
			stop:function(event,ui){
				ui.item.removeAttr('style');
				wccs_auto_index();
			}
		});
	}
	function wccs_auto_index() {
		$('.wccs-selected-category-list .wcss-category-list-item').each(function(index, el){
			$('.wccs_category_position', el).val( parseInt( $(el).index('.wccs-selected-category-list .wcss-category-list-item'), 10 ) );
		});
	}
});
