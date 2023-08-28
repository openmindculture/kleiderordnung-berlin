import postcssCustomProperties from 'postcss-custom-properties';
import postcssImport from 'postcss-import';
import postcssMixins from 'postcss-mixins';
import postcssNesting from 'postcss-nesting';
import postcssMinify from 'postcss-minify';

export default {
	plugins: [
    postcssImport,
    postcssMixins,
		postcssCustomProperties({
			preserve: false,
		}),
    postcssNesting,
    postcssMinify,
	],
}
