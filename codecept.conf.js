const { setHeadlessWhen, setWindowSize } = require('@codeceptjs/configure');
exports.config = require ('./codecept.common.conf.js');
exports.config.helpers.Puppeteer.url = 'http://localhost:1234'; // or 'https://www.kleiderordnung-berlin.de';

// turn on headless mode when running with HEADLESS=true environment variable
// export HEADLESS=true && npx codeceptjs run
setHeadlessWhen(process.env.HEADLESS);
