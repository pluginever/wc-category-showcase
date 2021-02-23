/**
 * Babel Config.
 *
 * @param {Object} api The bable API
 * @return {{presets: {Object}}} The babel configuration.
 */
module.exports = ( api ) => {
	/**
	 * @see https://babeljs.io/docs/en/config-files#apicache
	 */
	api.cache.using( () => process.env.NODE_ENV === 'development' );

	/**
	 * Presets
	 *
	 * @see https://babeljs.io/docs/en/presets
	 * @type {Array}
	 */
	const presets = [ '@wordpress/babel-preset-default' ];

	/**
	 * Plugins
	 *
	 * @see https://babeljs.io/docs/en/plugins
	 * @type {Array}
	 */
	const plugins = [
		/**
		 * This allows arrow functions as class methods so that binding
		 * methods to `this` in the constructor isn't required.
		 */
		'@babel/plugin-proposal-class-properties',
		'@babel/plugin-transform-runtime',
	];

	/**
	 * Env
	 *
	 * @see https://babeljs.io/docs/en/env
	 * @type {Object}
	 */
	const env = {
		production: {
			plugins: [
				[
					'@wordpress/babel-plugin-makepot',
					{
						output: 'languages/wc-category-showcase.po',
					},
				],
			],
		},
	};

	return {
		presets,
		plugins,
		env,
	};
};
