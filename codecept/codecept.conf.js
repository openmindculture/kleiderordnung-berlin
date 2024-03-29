const { setHeadlessWhen, setWindowSize } = require('@codeceptjs/configure');
exports.config = require ('./codecept.common.conf.js');
exports.config.helpers.Puppeteer.url = 'http://bs-local.com:1234'; // or 'http://localhost:1234';

// turn on headless mode when running with HEADLESS=true environment variable
// export HEADLESS=true && npx codeceptjs run
setHeadlessWhen(process.env.HEADLESS);

if (process.env.MOBILE) {
  exports.config.output = './output/mobile/';
  exports.config.helpers.Puppeteer.windowSize = '375x667';
  exports.config.helpers.ResembleHelper.screenshotFolder = './output/mobile/';
  exports.config.helpers.ResembleHelper.baseFolder = './screenshots/base/mobile/';
  exports.config.helpers.ResembleHelper.diffFolder = './screenshots/diff/mobile/';
}
