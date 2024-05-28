let tabsContainer = document.querySelector("#tabs");
let tabTogglers = tabsContainer.querySelectorAll("#tabs a");
tabTogglers.forEach(function (toggler) {
	toggler.addEventListener("click", function (e) {
		e.preventDefault();
		let tabName = this.getAttribute("href");
		let tabContents = document.querySelector("#tab-contents");
		for (let i = 0; i < tabContents.children.length; i++) {
			tabContents.children[i].classList.remove("tw-hidden");
			tabTogglers[i].classList.remove( "wcc_showcase-tabs-active", "wcc_showcase-tabs" );
			if ("#" + tabContents.children[i].id === tabName) {
				tabTogglers[i].classList.add( "wcc_showcase-tabs-active" );
				continue;
			}
			tabContents.children[i].classList.add("tw-hidden");
			tabTogglers[i].classList.add( "wcc_showcase-tabs" );
		}
	});
});

window.addEventListener("DOMContentLoaded", function() {
	// const select = document.querySelectorAll('.wccs-sort-order');
	for (const option of document.querySelectorAll(".wccs-sort-order")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wccs-sort-order.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_category_sort_order").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wccs-sort-order-by'); interactive_hover_style
	for (const option of document.querySelectorAll(".wccs-sort-order-by")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wccs-sort-order-by.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_category_sort_order_by").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wccs-interactive-hover-style');
	for (const option of document.querySelectorAll(".wccs-interactive-hover-style")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wccs-interactive-hover-style.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_interactive_hover_style").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wccs-font_category_title-font-family');
	for (const option of document.querySelectorAll(".wccs-font_category_title-font-family")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wccs-font_category_title-font-family.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_font_category_title_font_family").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wccs-font_category_title-font-weight');
	for (const option of document.querySelectorAll(".wccs-font_category_title-font-weight")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wccs-font_category_title-font-weight.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_font_category_title_text_weight").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wcc_showcase_font_main_title-font-family');
	for (const option of document.querySelectorAll(".wcc_showcase_font_main_title-font-family")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wcc_showcase_font_main_title-font-family.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_font_main_title_font_family").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wcc_showcase_font_main_title-font-weight');
	for (const option of document.querySelectorAll(".wcc_showcase_font_main_title-font-weight")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wcc_showcase_font_main_title-font-weight.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_font_main_title_text_weight").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wcc_showcase_font_main_title-font-weight');
	for (const option of document.querySelectorAll(".wccs-navigation-position-option")) {
		if (option.classList.contains('selected')) {
			option.parentNode.querySelector('.wccs-navigation-position-option.selected').classList.remove('selected');
			option.classList.add('selected');
			document.getElementById("wcc_showcase_slider_navigation_position").value = option.dataset.value;
			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
		}
	}

	// const select = document.querySelectorAll('.wcc_showcase_font_main_title-font-weight');
	for (const option of document.querySelectorAll(".wcc_showcase-choose-layout-option")) {
		let layout_value = document.querySelector('input[name="wcc_showcase_number_of_grid_column"]:checked').value;
		if ( option.classList.contains('layout-'+ layout_value +'x') ) {
			option.classList.remove('tw-hidden');
		} else {
			option.classList.add('tw-hidden');
		}
	}
}, false);

