const minmax = require('postcss-media-minmax');

module.exports = () => {
	return {
		syntax: 'postcss-scss',
		parser: 'postcss-scss',
		plugins: [
			require('@wordpress/postcss-plugins-preset'),
			minmax(),
			require('postcss-calc'),
			require( 'postcss-jit-props' )( require( 'open-props' ) ),
			require('postcss-dima-rtl'),
			require('postcss-simple-vars'),
			require('postcss-nested'),
			require('postcss-mixins'),
			require('postcss-import'),
			require('postcss-inline-svg'),
			require('autoprefixer'),
			require('postcss-preset-env')({
				/* use stage 3 features + css nesting rules */
				stage: 2,
				features: {
					'nesting-rules': true,
				},
			}),
		],
	};
};
