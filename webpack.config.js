/**
 * WordPress dependencies
 */
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const CustomTemplatedPathPlugin = require( '@wordpress/custom-templated-path-webpack-plugin' );
const DependencyExtractionWebpackPlugin = require( '@wordpress/dependency-extraction-webpack-plugin' );
const ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
/**
 * External dependencies
 */
const ESLintPlugin = require( 'eslint-webpack-plugin' );
const path = require( 'path' );
const { get } = require( 'lodash' );
const webpack = require( 'webpack' );
const { merge } = require( 'webpack-merge' );
const WebpackBar = require( 'webpackbar' );
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' );
const UglifyJS = require( 'uglify-es' );
const FixStyleOnlyEntriesPlugin = require( 'webpack-fix-style-only-entries' );
const WebpackRTLPlugin = require( 'webpack-rtl-plugin' );

/**
 * Internal dependencies
 */
const pkg = require( './package.json' );

/**
 * Settings
 */
const entries = {
	frontend: './assets/js/frontend/frontend.js',
};
const packages = [ 'components' ];
const host = 'http://scaffolding.test';
const isProduction = process.env.NODE_ENV === 'production';

/**
 * Config
 */
const externals = [];
packages.forEach( ( name ) => {
	externals[ `@byteever/${ name }` ] = {
		this: [
			'byteever',
			name.replace( /-([a-z])/g, ( match, letter ) =>
				letter.toUpperCase()
			),
		],
	};
	entries[ name ] = `./packages/${ name }`;
} );

// eslint-disable-next-line no-unused-vars
const minifyJs = ( content ) => {
	return Promise.resolve(
		Buffer.from( UglifyJS.minify( content.toString() ).code )
	);
};

const config = merge(
	{
		...defaultConfig,
		entry: entries,
		plugins: defaultConfig.plugins.filter(
			( plugin ) => plugin.constructor.name !== 'LiveReloadPlugin'
		),
	},
	{
		output: {
			path: path.resolve( '.', './dist' ),
			library: [ 'byteever', '[modulename]' ],
			libraryTarget: 'this',
		},
		resolve: {
			extensions: [ '.js', '.jsx', '.json', '.scss', '.css' ],
			alias: { '@byteever': path.resolve( __dirname, 'packages' ) },
			modules: [ path.resolve( __dirname, 'packages' ), 'node_modules' ],
		},
		externals,
		module: {
			rules: [
				isProduction && {
					test: /\.js$/,
					loader: 'webpack-remove-debug',
					exclude: /node_modules/,
				},
			].filter( Boolean ),
		},
		plugins: [
			new ESLintPlugin( {
				fix: true,
			} ),

			new WebpackRTLPlugin( {
				filename: [ /(\.css)/i, '-rtl$1' ],
			} ),

			new FixStyleOnlyEntriesPlugin(),
			// Compress images
			// Must happen after CopyWebpackPlugin
			new ImageminPlugin( {
				disable: ! isProduction,
				test: /\.(jpe?g|png|gif|svg)$/i,
			} ),

			//Set plugin information run build
			new webpack.BannerPlugin( pkg.name + ' v' + pkg.version ),
			new webpack.DefinePlugin( {
				'process.env': {
					NODE_ENV: JSON.stringify(
						process.env.NODE_ENV || 'development'
					),
				},
			} ),

			// Process custom modules.
			new CustomTemplatedPathPlugin( {
				modulename( outputPath, data ) {
					const entryName = get( data, [ 'chunk', 'name' ] );
					if ( entryName ) {
						return entryName.replace(
							/-([a-z])/g,
							( match, letter ) => letter.toUpperCase()
						);
					}
					return outputPath;
				},
			} ),

			// Adjust for custom modules.
			new DependencyExtractionWebpackPlugin( {
				injectPolyfill: true,
				requestToExternal: ( request ) => {
					if ( externals[ request ] ) {
						return externals[ request ].this;
					}
				},
				requestToHandle: ( request ) => {
					if ( externals[ request ] ) {
						return request.replace( '@byteever/', 'ea-' );
					}
				},
			} ),

			isProduction &&
				new BrowserSyncPlugin(
					{
						host: 'localhost',
						port: 3000,
						proxy: host,
						open: false,
						files: [
							'**/*.php',
							'dist/js/**/*.js',
							'dist/css/**/*.css',
							'dist/svg/**/*.svg',
							'dist/images/**/*.{jpg,jpeg,png,gif}',
							'dist/fonts/**/*.{eot,ttf,woff,woff2,svg}',
						],
					},
					{
						injectCss: true,
						reload: false,
					}
				),

			// Fancy WebpackBar.
			new WebpackBar(),
		].filter( Boolean ),
		// Performance settings.
		performance: {
			maxAssetSize: 100000,
		},
		stats: {
			all: false,
			assets: true,
			builtAt: true,
			colors: true,
			errors: true,
			hash: true,
			timings: true,
		},
		watchOptions: {
			ignored: [ /node_modules/ ],
		},
	}
);

module.exports = config;
