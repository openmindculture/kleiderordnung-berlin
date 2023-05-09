const { setHeadlessWhen, setWindowSize } = require('@codeceptjs/configure');
exports.config = require ('./codecept.common.conf.js');
exports.config.helpers.Puppeteer.url = 'http://localhost:1234'; // or 'http://localhost:1234';

// turn on headless mode when running with HEADLESS=true environment variable
// export HEADLESS=true && npx codeceptjs run
setHeadlessWhen(process.env.HEADLESS);

if (process.env.MOBILE) {
  exports.config.output = './codecept/output/mobile/';
  exports.config.helpers.Puppeteer.windowSize = '375x667';
  exports.config.helpers.ResembleHelper.screenshotFolder = './codecept/output/mobile/';
  exports.config.helpers.ResembleHelper.baseFolder = './codecept/screenshots/base/mobile/';
  exports.config.helpers.ResembleHelper.diffFolder = './codecept/screenshots/diff/mobile/';
}
