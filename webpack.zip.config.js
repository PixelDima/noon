// eslint-disable-next-line @typescript-eslint/no-var-requires
const path = require('path');
// eslint-disable-next-line @typescript-eslint/no-var-requires
const CopyPlugin = require('copy-webpack-plugin');
// eslint-disable-next-line @typescript-eslint/no-var-requires
const ZipPlugin = require('zip-webpack-plugin');

module.exports = (env) => {
	return {
		entry: {},
		output: {
			path: path.resolve(__dirname, `zip`),
		},
		plugins: [
			new CopyPlugin({
				patterns: [
					{
						from: './**',
						to: './noon',
						globOptions: {
							dot: false,
							gitignore: false,
							ignore: [
								'**/.git/**',
								'**/*.pcss',
								'**/*.asset.php',
								'**/node_modules/**',
								'**/assets/bundle/css/**/*.js',
								'**/src/**',
								'**/vendor/**',
								'**/vendor-wpcs-php8-bugfix/**',
								'**/zip/**',
								'**/*.env',
								'**/.eslintrc.json',
								'**/composer.*',
								'**/package*.json',
								'**/yarn-*.log',
								'**/yarn*.lock',
								'**/*.code-workspace',
								'**/webpack.*',
								'**/tsconfig.*',
								'**/phpcs.xml',
								'**/pnpm-lock.yaml',
								'**/postcss.config.js',
								'**/*.zip',
							],
						},
					},
				],
			} ),
			new ZipPlugin( {
				// Defaults to the Webpack output path.
				path: './',
				filename: 'noon.zip',
				extension: 'zip',
				pathPrefix: '',
				fileOptions: {
					mtime: new Date(),
					mode: 0o100664,
					compress: true,
					forceZip64Format: false,
				},
				zipOptions: {
					forceZip64Format: false,
				},
			} ),
		],
	};
};
