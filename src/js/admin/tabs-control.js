let tabsContainer = document.querySelector("#tabs");
let tabTogglers = tabsContainer.querySelectorAll("#tabs a");
tabTogglers.forEach(function (toggler) {
	toggler.addEventListener("click", function (e) {
		e.preventDefault();
		let tabName = this.getAttribute("href");
		let tabContents = document.querySelector("#tab-contents");
		for (let i = 0; i < tabContents.children.length; i++) {
			tabContents.children[i].classList.remove("tw-hidden");
			tabTogglers[i].classList.remove( "wccshowcase-tabs-active", "wccshowcase-tabs" );
			if ("#" + tabContents.children[i].id === tabName) {
				tabTogglers[i].classList.add( "wccshowcase-tabs-active" );
				continue;
			}
			tabContents.children[i].classList.add("tw-hidden");
			tabTogglers[i].classList.add( "wccshowcase-tabs" );
		}
	});
});

// window.addEventListener("DOMContentLoaded", function() {
// 	// const select = document.querySelectorAll('.custom-option');
// 	for (const option of document.querySelectorAll(".custom-option")) {
// 		if (option.classList.contains('selected')) {
// 			option.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
// 			option.classList.add('selected');
// 			document.getElementById("wccshowcase_category_sort_order").value = option.dataset.value;
// 			option.closest('.select').querySelector('.select__trigger span').innerHTML = option.innerHTML;
// 		}
// 	}
// }, false);

