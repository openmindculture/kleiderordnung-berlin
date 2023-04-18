const postcssCustomProperties = require(
  'postcss-custom-properties'
);
module.exports = {
	plugins: [
		require('postcss-import'),
		postcssCustomProperties({
			preserve: false,
		}),
    require('postcss-extend-rule'),
		require('postcss-nesting'),
		require('postcss-minify'),
	],
}
