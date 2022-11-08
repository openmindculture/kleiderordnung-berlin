Feature('Homepage');

Scenario('Test website content and navigation', ({ I }) => {

  I.amOnPage('/');
  I.see('Mode');

  /* TODO
    I see the page.
    I see text rendered in one of the expected font families.
    I scroll down and see animated feature boxes.
    I verify there is no instagram content without consent.
    I click on the allow buttton and wait for instagram content to appear.
    I verify all outgoing links.
    I verify the contact phone number.
   */

  I.saveScreenshot('Homepage_Screenshot.png');
  I.seeVisualDiff('Homepage_Screenshot.png', {
    tolerance: 2,
    prepareBaseImage: false
  });
});
