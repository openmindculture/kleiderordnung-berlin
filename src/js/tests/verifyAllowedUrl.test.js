const kleiderordnung_verifyAllowedUrl = require ('./verifyAllowedUrl');
const {kleiderordnung_initializeGlobalWindow, kleiderordnung_clearGlobalWindow} = require ('./_testFunctions');

/* global window */
let window = {};

beforeEach(() => {
  window = kleiderordnung_initializeGlobalWindow();
});

afterEach(() => {
  window = kleiderordnung_clearGlobalWindow();
});

test('allowed to embed juicer feed script', () => {
  expect(kleiderordnung_verifyAllowedUrl('https://assets.juicer.io/embed.js')).toBeTruthy();
});

test('forbidden to embed instagram script', () => {
  expect(kleiderordnung_verifyAllowedUrl('https://static.cdn.example.com/v3/y0/r/Foo23-Bar42.js')).toBeFalsy();
});

test('allowed to embed same domain theme script', () => {
  window.location.protocol = 'https:';
  window.location.host = 'preview.kleiderordnung-berlin.de';
  expect(kleiderordnung_verifyAllowedUrl('https://preview.kleiderordnung-berlin.de/wp-content/themes/kleiderordnung/example.js')).toBeTruthy();
});

test('forbidden to embed same domain theme script but mixed protocol', () => {
  window.location.protocol = 'http:';
  expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/kleiderordnung/example.js')).toBeFalsy();
});

test('forbidden to embed theme script from subdomain', () => {
  window.location.host = 'preview.kleiderordnung-berlin.de';
  expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/kleiderordnung/example.js')).toBeFalsy();
});

test('forbidden to embed script from another theme', () => {
  expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/themes/untrusted/example.js')).toBeFalsy();
});

test('forbidden to embed script from another plugin', () => {
  expect(kleiderordnung_verifyAllowedUrl('https://www.kleiderordnung-berlin.de/wp-content/plugins/untrusted/example.js')).toBeFalsy();
});
