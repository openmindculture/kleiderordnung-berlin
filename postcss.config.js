const postcssCustomProperties = require(
  'postcss-custom-properties'
);

module.exports = {
	plugins: [
		require('postcss-import'),
    require('postcss-mixins'),
		postcssCustomProperties({
			preserve: false,
		}),
		require('postcss-nesting'),
		require('postcss-minify'),
	],
}
