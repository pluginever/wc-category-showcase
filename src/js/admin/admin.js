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


// set the dropdown menu element
const $targetEl = document.getElementById('dropdownMenu');

// set the element that trigger the dropdown menu on click
const $triggerEl = document.getElementById('dropdownButton');

// options with default values
const options = {
	placement: 'bottom',
	triggerType: 'click',
	offsetSkidding: 0,
	offsetDistance: 10,
	delay: 300,
	ignoreClickOutsideClass: false,
	onHide: () => {
		console.log('dropdown has been hidden');
	},
	onShow: () => {
		console.log('dropdown has been shown');
	},
	onToggle: () => {
		console.log('dropdown has been toggled');
	},
};

// instance options object
const instanceOptions = {
	id: 'dropdownMenu',
	override: true
};
