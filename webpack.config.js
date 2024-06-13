const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const path = require('path');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
module.exports = [
	{
		...defaultConfig,
		entry: {
			...defaultConfig.entry(),
			'css/admin': './src/css/admin/admin.scss',
			'css/showcase': './src/css/frontend/showcase.scss',
			'js/admin': './src/js/admin/admin.js',
			'js/showcase': './src/js/frontend/showcase.js',
			'js/admin-aesthetic': './src/assets/js/aesthetic-icon-picker.js',
		},
		output: {
			...defaultConfig.output,
			filename: '[name].js',
			path: __dirname + '/assets/',
		},
		module: {
			rules: [
				...defaultConfig.module.rules,
				{
					test: /\.svg$/,
					issuer: /\.(j|t)sx?$/,
					use: ['@svgr/webpack', 'url-loader'],
					type: 'javascript/auto',
				},
				{
					test: /\.svg$/,
					issuer: /\.(sc|sa|c)ss$/,
					type: 'asset/inline',
				},
				{
					test: /\.(bmp|png|jpe?g|gif)$/i,
					type: 'asset/resource',
					generator: {
						filename: 'images/[name].[hash:8][ext]',
					},
				},
			],
		},
		plugins: [
			...defaultConfig.plugins,
			// Copy images to the build folder.
			new CopyWebpackPlugin({
				patterns: [
					{
						from: path.resolve(__dirname, 'src/images'),
						to: path.resolve(__dirname, 'assets/images'),
					},
					{
						from: path.resolve( __dirname, './node_modules/@splidejs/splide/dist/js/splide.js'),
						to: path.resolve(__dirname, 'assets/js'),
					},
					{
						from: path.resolve(__dirname, './node_modules/@splidejs/splide-extension-grid/dist/js/splide-extension-grid.js'),
						to: path.resolve(__dirname, 'assets/js'),
					},
					{
						from: path.resolve(__dirname, './node_modules/@splidejs/splide-extension-auto-scroll/dist/js/splide-extension-auto-scroll.js'),
						to: path.resolve(__dirname, 'assets/js'),
					}
				]
			}),

			new RemoveEmptyScriptsPlugin({
				stage: RemoveEmptyScriptsPlugin.STAGE_AFTER_PROCESS_PLUGINS,
				remove: /\.(js)$/,
			}),
		],
	},
];
