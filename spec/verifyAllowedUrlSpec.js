import { kleiderordnung_verifyAllowedUrl } from '../src/js/inc/verifyAllowedUrl.js';
import { kleiderordnung_initializeGlobalWindowLocation } from './helpers/_testFunctions.js';

describe("unit test kleiderordnung_verifyAllowedUrl", function() {
  /* global window */
  let windowLocation = {};
  beforeEach(function() {
    windowLocation = kleiderordnung_initializeGlobalWindowLocation();
  });

  it('assert allowed to embed juicer feed script', function() {
    expect(kleiderordnung_verifyAllowedUrl('https://assets.juicer.io/embed.js',windowLocation)).toBeTruthy();
  });
  it('assert forbidden to embed instagram script', function() {
    expect(kleiderordnung_verifyAllowedUrl('https://static.cdn.example.com/v3/y0/r/Foo23-Bar42.js',windowLocation)).toBeFalsy()
  });
  it('assert allowed to embed same domain theme script', function() {
    windowLocation.protocol = 'https:';
    windowLocation.host = 'preview.kleiderordnung-berlin.de';
    expect(kleiderordnung_verifyAllowedUrl('https://assets.juicer.io/embed.js',windowLocation)).toBeTruthy();
  });
  it('assert forbidden to embed same domain theme script but mixed protocol', function() {
    windowLocation.protocol = 'http:';
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/kleiderordnung/example.js',windowLocation)).toBeFalsy();
  });
  it('assert forbidden to embed theme script from subdomain', function() {
    windowLocation.host = 'preview.kleiderordnung-berlin.de';
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/kleiderordnung/example.js',windowLocation)).toBeFalsy();
  });
  it('assert forbidden to embed script from another theme', function() {
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/untrusted/example.js',windowLocation)).toBeFalsy();
  });
  it('assert forbidden to embed script from another plugin', function() {
    windowLocation.protocol = 'http:';
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/plugins/untrusted/example.js',windowLocation)).toBeFalsy();
  });
});
