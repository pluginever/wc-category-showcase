let tabsContainer = document.querySelector("#tabs");
let tabTogglers = tabsContainer.querySelectorAll("#tabs a");
tabTogglers.forEach(function (toggler) {
	toggler.addEventListener("click", function (e) {
		e.preventDefault();
		let tabName = this.getAttribute("href");
		let tabContents = document.querySelector("#tab-contents");

		for (let i = 0; i < tabContents.children.length; i++) {

			tabTogglers[i].parentElement.classList.remove("border-indigo-500", "text-indigo-600" );
			tabContents.children[i].classList.remove("hidden");
			if ("#" + tabContents.children[i].id === tabName) {
				continue;
			}
			tabContents.children[i].classList.add("hidden");

		}
		e.target.parentElement.classList.add("border-indigo-500", "text-indigo-600");
	});
});

const radios = document.querySelectorAll('input[name="wccs_showcase_layout"]')
radios.forEach((radio) => {
	radio.addEventListener('click', e => {
		if (e.target.checked) {
			e.target.parentElement.classList.add('border-green-700')
		}
	})
})
