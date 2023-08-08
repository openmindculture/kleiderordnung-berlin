Feature('Homepage');

Scenario('Test website content and navigation', ({ I }) => {

  I.amOnPage('/');
  // I.see('Mode');

  /* TODO


    I click on top navi link DE
    I see a certain German text

        */
  I.saveScreenshot('Homepage_Screenshot.png');
  I.seeVisualDiff('Homepage_Screenshot.png', {
    tolerance: 2,
    prepareBaseImage: false
  });

  /*
    I see the page.
    I see text rendered in one of the expected font families.
    I scroll down and see animated feature boxes.
    I verify there is no instagram content without consent.
    I click on the allow buttton and wait for instagram content to appear.
    I verify all outgoing links.
    I verify the contact phone number.
    I verify the contact email.

    I click on bottom navi link Impressum
    I see headline "Impressum"
    I see Donaustr.
    I save screenshot "Impressum_Screenshot"

    I click on top navi link EN
    I see headline "Imprint"
    I see Donaustr.

    I click on bottom navi link Privacy
    I see headline "Privacy"
    I clock on top navi link DE
    I see headline "Datenschutzerklärung"
    I save screenshot "Datenschutzerklärung"

    I clock on bottom navi link AGB
    I see headline "Allgemeine Geschäftsbedingungen"
    I see sub headline "Schlussbestimmungen"
    I save screenshot "AGB"
    I click on top navi link EN
    I see title "Terms of Service"
    I see something from the end of the TOS

    I clock on top navi logo link
    I see intro key visual
   */


});
