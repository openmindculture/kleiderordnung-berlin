const postcssCustomProperties = require('postcss-custom-properties');
module.exports = {
  plugins: [
  require('postcss-preset-env'),
  require('postcss-import'),
  postcssCustomProperties({
    preserve: false,
  }),
    require("postcss-minify"),
  ]
}
