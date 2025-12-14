(function( $ ) {
	// trigger change event on load.
	jQuery(document).ready(function ($) {
		// Copy the key.
		$(document).on('click', '.wccs_shortcode .wccs_shortcode__copy', function (e) {
			e.preventDefault();
			e.stopPropagation();
			var $this = $(this);
			var key = $this.data('key');
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val(key).select();
			document.execCommand("copy");
			$temp.remove();
			$this.addClass('is--copied');
			setTimeout(function () {
				$this.removeClass('is--copied');
			}, 1000);
		});
		$(document).on('click', '.wccs_shortcode', function (e) {
			e.preventDefault();
			var $this = $(this);
			$this.toggleClass('is--masked');
		} );

	});

})(jQuery);
