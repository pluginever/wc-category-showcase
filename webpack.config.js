/**
 * WordPress dependencies
 */
const defaultConfig = require('@wordpress/scripts/config/webpack.config');
/**
 * External dependencies
 */
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const path = require("path");

module.exports = {
	...defaultConfig,
	entry: {
		...defaultConfig.entry(),
		'styles/admin': './resources/styles/admin.scss',
		'styles/tailwind': './resources/styles/tailwind.scss',
		'styles/frontend': './resources/styles/frontend.scss',
		'scripts/admin': './resources/scripts/admin.js',
		'scripts/frontend': './resources/scripts/frontend.js',
	},
	resolve: {
		...defaultConfig.resolve,
		modules: ['node_modules'],
	},
	plugins: [
		...defaultConfig.plugins,

		/**
		 * Copy source files/directories to a build directory.
		 *
		 * @see https://www.npmjs.com/package/copy-webpack-plugin
		 */
		new CopyWebpackPlugin({
			patterns: [
				{
					from: 'images/*.{jpg,jpeg,png,gif,svg}',
					to: 'images/[name][ext]',
					context: 'resources',
					noErrorOnMissing: true,
				},
				// Fonts in the src/fonts directory to the assets/fonts directory.
				{
					from: 'fonts/**/*.{woff,woff2,eot,ttf,otf}',
					context: 'resources',
					noErrorOnMissing: true,
				},
				{
					from: './@splidejs/splide/dist/js/splide.js',
					to: 'scripts/splide.js',
					context: 'node_modules',
					noErrorOnMissing: true,
				},
				{
					from: './@splidejs/splide-extension-grid/dist/js/splide-extension-grid.js',
					to: 'scripts/splide-extension-grid.js',
					context: 'node_modules',
					noErrorOnMissing: true,
				},
				{
					from: './@splidejs/splide-extension-auto-scroll/dist/js/splide-extension-auto-scroll.js',
					to: 'scripts/splide-extension-auto-scroll.js',
					context: 'node_modules',
					noErrorOnMissing: true,
				}
			],
		}),

		/**
		 * Remove empty scripts.
		 *
		 * @see https://www.npmjs.com/package/webpack-remove-empty-scripts
		 */
		new RemoveEmptyScriptsPlugin({
			stage: RemoveEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS,
			remove: /\.(js)$/,
		}),
	],
};
