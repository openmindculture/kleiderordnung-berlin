module.exports = {
  tests: './codecept/*_test.js',
  output: './codecept/output',
  helpers: {
    Puppeteer: {
      url: '',
      show: true,
      windowSize: '1024x800',
      fullPageScreenshots: true
    },
    "ResembleHelper" : {
      "require": "codeceptjs-resemblehelper",
      "screenshotFolder" : "./codecept/output/",
      "baseFolder": "./codecept/screenshots/base/",
      "diffFolder": "./codecept/screenshots/diff/"
    }
  },
  include: {
    I: './codecept/steps_file.js'
  },
  bootstrap: null,
  mocha: {},
  name: 'kleiderordnung-berlin.de',
  plugins: {
    testomatio: {
      enabled: true,
      require: '@testomatio/reporter/lib/adapter/codecept',
      apiKey: process.env.TESTOMATIO,
    },
    pauseOnFail: {},
    retryFailedStep: {
      enabled: true
    },
    tryTo: {
      enabled: true
    },
    screenshotOnFail: {
      enabled: true
    }
  }
}
