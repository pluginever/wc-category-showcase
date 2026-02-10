/**
 * External dependencies
 */
const baseConfig = require( '@byteever/scripts/config/webpack.config' );

module.exports = {
	...baseConfig,

	entry: {
		...baseConfig.entry,
		// Styles
		'styles/admin': './assets/src/styles/admin.scss',
		'styles/tailwind': './assets/src/styles/tailwind.scss',
		'styles/frontend': './assets/src/styles/frontend.scss',
		'styles/vendor': './assets/src/styles/vendor.scss',

		// Scripts
		'scripts/admin': './assets/src/scripts/admin.js',
		'scripts/frontend': './assets/src/scripts/frontend.js',
		'scripts/vendor': './assets/src/scripts/vendor.js',
	},
};
