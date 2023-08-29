Feature('Homepage');

/** @var {boolean} prepareBaseImages set to true to (re)generate all base screenshots for regression testing */
const prepareBaseImages = false; // TODO use ENV so we can make a build target out of it

const defaultTimeout = 5000;

const ensureMainMenuOnAnyDevice = (I) => {
  if (process.env.MOBILE) {
    I.click('#site-navigation .navigation__toggle--open');
    I.waitForElement('ul#menu-main');
  }
}

Scenario('Test website content and navigation', ({ I }) => {

  I.amOnPage('/');
  I.see('Tina Steinke');

  I.saveScreenshot('Homepage_Screenshot.png');
  I.seeVisualDiff('Homepage_Screenshot.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  ensureMainMenuOnAnyDevice(I);
  I.click('DE');
  I.see('Meine Angebote');
  I.saveScreenshot('Homepage_Screenshot_DE.png');
  I.seeVisualDiff('Homepage_Screenshot_DE.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  ensureMainMenuOnAnyDevice(I);
  I.click('EN');
  I.see('My Services');
  I.saveScreenshot('Homepage_Screenshot_EN.png');
  I.seeVisualDiff('Homepage_Screenshot_EN.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  ensureMainMenuOnAnyDevice(I);
  I.click('Contact');
  I.seeElement('#socialmedia-feed-consent-juicer');
  I.see('load content from Instagram?');
  I.dontSee('View on Instagram');
  I.dontSeeElement('.j-initialized');

  // skip Instagram integration until it's finally fixed
  // I.click('button[data-allow="always"]');
  // I.waitForElement('.j-initialized', defaultTimeout);

  ensureMainMenuOnAnyDevice(I);
  I.click('Contact');
  I.seeElement('a[href="tel:+491636823820"]');
  I.click('Submit');
  I.waitForText('Please fill this field', defaultTimeout)

  I.click('Imprint');
  // skip DE/EN content check until it's final
  // I.waitForText('Imprint', defaultTimeout);
  I.see('Martina');
  I.see('Donaustr');

  // ensureMainMenuOnAnyDevice(I);
  // I.click('DE');
  // I.waitForText('Impressum', defaultTimeout);
  // I.see('Martina');
  // I.see('Donaustr');
  // I.saveScreenshot('Imprint_Screenshot_DE.png');
  // I.seeVisualDiff('Imprint_Screenshot_DE.png', {
  //   tolerance: 2,
  //   prepareBaseImage: prepareBaseImages
  // });

  I.see('Datenschutz');
  I.click('Datenschutz');
  I.waitForText('Datenschutzerklärung', defaultTimeout);
  I.see('Widerruf');
  I.see('Rechtsgrundlage');
  I.see('Personenbezogene Daten');
  I.saveScreenshot('Privacy_Screenshot_DE.png');
  I.seeVisualDiff('Privacy_Screenshot_DE.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  ensureMainMenuOnAnyDevice(I);
  I.click('News');
  I.waitForText('alle Neuigkeiten', defaultTimeout);

  I.click('alle Neuigkeiten');
  I.waitForElement('body.blog', defaultTimeout);
  I.dontSee('alle Neuigkeiten');
  I.saveScreenshot('All_News_Screenshot_DE.png');
  I.seeVisualDiff('All_News_Screenshot_DE.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  I.click('.news__post__link');
  I.waitForElement('body.single', defaultTimeout);
  I.seeElement('.news__post__text');
  I.saveScreenshot('First_News_Screenshot_DE.png');
  I.seeVisualDiff('First_News_Screenshot_DE.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  ensureMainMenuOnAnyDevice(I);
  I.click('Angebot');
  I.waitForText('Meine Angebote', defaultTimeout);
  I.see('Was Du erhältst');
  I.seeElement('.offers__offer__buttonwrapper a.button--primary');
  I.click('Termin buchen');

  /** load another page */
  I.amOnPage('/offer_section/angebot/');
  I.waitForElement('body.archive', defaultTimeout);
  I.saveScreenshot('Overview_Offers_Screenshot_DE.png');
  I.seeVisualDiff('Overview_Offers_Screenshot_DE.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  I.see('AGB');
  I.click('AGB');
  I.waitForText('Allgemeine Geschäftsbedingungen', defaultTimeout);
  I.see('Widerrufsformular');
  I.see('Schlussbestimmungen');
  I.see('Gerichtsstand');
  I.saveScreenshot('AGB_Screenshot_DE.png');
  I.seeVisualDiff('AGB_Screenshot_DE.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

  /* load another page */
  I.amOnPage('/?s=kleider');
  I.waitForElement('body.search', defaultTimeout);
  I.saveScreenshot('Search_Screenshot_DE.png');
  I.seeVisualDiff('Search_Screenshot_DE.png', {
    tolerance: 2,
    prepareBaseImage: prepareBaseImages
  });

});
