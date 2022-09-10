Feature('Homepage');

Scenario('Test website content and navigation', ({ I }) => {

  I.amOnPage('/');
  I.see('Mode');

  I.saveScreenshot('Homepage_Screenshot.png');
  I.seeVisualDiff('Homepage_Screenshot.png', {
    tolerance: 2,
    prepareBaseImage: false
  });
});
