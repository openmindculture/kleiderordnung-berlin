Feature('Homepage');

Scenario('Test website content and navigation', ({ I }) => {

  I.amOnPage('/');
  I.see('Mode');

  /* TODO
    I see the page.
    I see text rendered in one of the expected font families.
    I scroll down and see animated feature boxes.
   */

  I.saveScreenshot('Homepage_Screenshot.png');
  I.seeVisualDiff('Homepage_Screenshot.png', {
    tolerance: 2,
    prepareBaseImage: false
  });
});
