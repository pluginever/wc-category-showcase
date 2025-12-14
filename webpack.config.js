/**
 * External dependencies
 */
const baseConfig = require( '@byteever/scripts/config/webpack.config' );
const CopyWebpackPlugin = require( 'copy-webpack-plugin' );

module.exports = {
	...baseConfig,

	entry: {
		...baseConfig.entry,
		// Styles
		'styles/admin': './assets/src/styles/admin.scss',
		'styles/tailwind': './assets/src/styles/tailwind.scss',
		'styles/frontend': './assets/src/styles/frontend.scss',

		// Scripts
		'scripts/admin': './assets/src/scripts/admin.js',
		'scripts/frontend': './assets/src/scripts/frontend.js',
	},

	optimization: {
		...baseConfig.optimization,
		splitChunks: {
			...baseConfig.optimization.splitChunks,
			cacheGroups: {
				...baseConfig.optimization.splitChunks.cacheGroups,
				styles: {
					...baseConfig.optimization.splitChunks.cacheGroups.styles,
					// Disable automatic CSS chunk splitting to prevent numbered files like 34.css
					name: false,
					minChunks: 999, // Effectively disable shared CSS extraction
				},
			},
		},
	},

	plugins: [
		...( baseConfig.plugins || [] ),

		new CopyWebpackPlugin( {
			patterns: [
				{
					from: 'node_modules/@splidejs/splide/dist/css/splide.min.css',
					to: 'styles/splide.min.css',
				},
				{
					from: 'node_modules/@splidejs/splide/dist/js/splide.js',
					to: 'scripts/splide.js',
				},
				{
					from: 'node_modules/@splidejs/splide-extension-grid/dist/js/splide-extension-grid.js',
					to: 'scripts/splide-extension-grid.js',
				},
				{
					from: 'node_modules/@splidejs/splide-extension-auto-scroll/dist/js/splide-extension-auto-scroll.js',
					to: 'scripts/splide-extension-auto-scroll.js',
				},
			],
		} ),
	],
};
