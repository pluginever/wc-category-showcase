let tabsContainer = document.querySelector("#tabs");
let tabTogglers = tabsContainer.querySelectorAll("#tabs a");
tabTogglers.forEach(function (toggler) {
	toggler.addEventListener("click", function (e) {
		e.preventDefault();
		let tabName = this.getAttribute("href");
		let tabContents = document.querySelector("#tab-contents");
		for (let i = 0; i < tabContents.children.length; i++) {
			tabContents.children[i].classList.remove("tw-hidden");
			tabTogglers[i].classList.remove( "wccs-tabs-active", "wccs-tabs" );
			if ("#" + tabContents.children[i].id === tabName) {
				tabTogglers[i].classList.add( "wccs-tabs-active" );
				continue;
			}
			tabContents.children[i].classList.add("tw-hidden");
			tabTogglers[i].classList.add( "wccs-tabs" );
		}
	});
});
