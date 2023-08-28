import { kleiderordnung_verifyAllowedUrl } from '../src/js/inc/verifyAllowedUrl.js';
import { kleiderordnung_initializeGlobalWindow, kleiderordnung_clearGlobalWindow } from './helpers/_testFunctions.js';

/* global window */
let window = {};

describe("unit test kleiderordnung_verifyAllowedUrl", function() {
  beforeEach(function() {
    window = kleiderordnung_initializeGlobalWindow();
  });

  it('assert allowed to embed juicer feed script', function() {
    expect(kleiderordnung_verifyAllowedUrl('https://assets.juicer.io/embed.js')).toBeTruthy();
  });
  it('assert forbidden to embed instagram script', function() {
    expect(kleiderordnung_verifyAllowedUrl('https://static.cdn.example.com/v3/y0/r/Foo23-Bar42.js')).toBeFalsy()
  });
  it('assert allowed to embed same domain theme script', function() {
    window.location.protocol = 'https:';
    window.location.host = 'preview.kleiderordnung-berlin.de';
    expect(kleiderordnung_verifyAllowedUrl('https://assets.juicer.io/embed.js')).toBeTruthy();
  });
  it('assert forbidden to embed same domain theme script but mixed protocol', function() {
    window.location.protocol = 'http:';
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/kleiderordnung/example.js')).toBeFalsy();
  });
  it('assert forbidden to embed theme script from subdomain', function() {
    window.location.host = 'preview.kleiderordnung-berlin.de';
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/kleiderordnung/example.js')).toBeFalsy();
  });
  it('assert forbidden to embed script from another theme', function() {
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/untrusted/example.js')).toBeFalsy();
  });
  it('assert forbidden to embed script from another plugin', function() {
    window.location.protocol = 'http:';
    expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/plugins/untrusted/example.js')).toBeFalsy();
  });
});
