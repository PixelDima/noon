const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');
const glob = require('glob');
const entries = {};

const production = process.env.NODE_ENV === '';

const processPostCss = (folder, prefix) => {
	glob.sync(`assets/entry/css/${folder}/${prefix}*.pcss`).forEach(
		(filePath) => {
			const fileName = path.basename(filePath, '.pcss');
			// eslint-disable-next-line no-undef
			entries[`css/${folder}/${fileName}`] = path.resolve(
				process.cwd(),
				filePath
			);
		}
	);
};
processPostCss('frontend/blocks', 'core-');
processPostCss('frontend', 'front-');
processPostCss('backend/editor', '');

// array of file name:
module.exports = [
	{
		...defaultConfig,
		optimization: {
			minimize: true,
		},
		module: {
			...defaultConfig.module,
			rules: [
				...defaultConfig.module.rules,
				{
					test: /\.pcss$/i,
					use: [
						{
							loader: 'postcss-loader',
							options: {
								postcssOptions: {
									config: path.resolve(
										__dirname,
										'postcss.config.js'
									),
								},
							},
						},
					],
				},
				{
					test: /\.js$/,
					exclude: /\/lib\//,
					use: [
						{
							loader: 'babel-loader',
							options: {
								presets: ['@babel/preset-env'],
								plugins: [
									'@babel/plugin-proposal-class-properties',
									'@babel/plugin-transform-runtime',
								],
							},
						},
					],
				},
				{
					test: /\.ts?$/,
					use: [
						{
							loader: 'ts-loader',
							options: {
								configFile: 'tsconfig.json',
								transpileOnly: true,
							},
						},
					],
				},
			],
		},

		plugins: [
			...defaultConfig.plugins,
			new MiniCssExtractPlugin({
				filename: '[name].css',
				ignoreOrder: true,
			}),
		],

		entry: entries,
		output: {
			filename: '[name].js',
			path: path.resolve(__dirname, './assets/bundle'),
		},
	},
];

if (production) {
	module.exports.devtool = false;
}
