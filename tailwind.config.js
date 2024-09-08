/** @type {import('tailwindcss').Config} */
const {join} = require('path');
module.exports = {
	prefix: 'tw-',
	corePlugins: {
		preflight: false,
	},
	content: [
		join(__dirname, 'includes/Admin/views/**/*.php'),
		join(__dirname, 'templates/**/*.php'),
	],
	media: false,
	darkMode: 'class',
	theme: {
		extend: {
			colors: {
				'fade-blue-600': '#2270B1',
				'dark-purple-800':'#5E2CA5',
				'accent-green-500': '#2ECC71',
				'accent-red-500': '#E74C3C',
				'accent-orange-500': '#FF7F0E',
				'accent-cyan-500': '#17A2B8',
				'accent-grey-200':'#D4D4D4',
				'divider-grey-100':'#E2E8F0',
				'input-grey-50': '#F1F5F9',
				'text-black-950': '#020617',
				'text-grey-500': '#64748B',
				'text-light-grey-500':'#939EAE',
				'text-light-grey-300':'#d3d9df',
				'dark-blue-900':'#003366',
				'green-500':'#37C372',
				'orange-600':'#F57300',
				'button-bg-color': '#130F31',
				'pro-toggle-bg': '#F0E9E2',
				'pro-btn-bg':'#F57300',
			},
			content: {
				'check-circle': '', //'url("/assets/images/check-circle.svg")',
				'pro-badge': '' // 'url("/assets/images/pro-badge.svg")',
			},
		},
		screens: {
			'2xl': {'max': '1920px'},
			'xl': {'max': '1440px'},
			'lg': {'max': '1023px'},
			'md': {'max': '767px'},
			'sm': {'max': '576px'},
		},
	},
	plugins: [
		require("tailwindcss-inner-border"),
	],
}

