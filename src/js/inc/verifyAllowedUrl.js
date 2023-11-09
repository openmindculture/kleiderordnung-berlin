/**
 * @param {string} urlToVerify
 * @param {object} windowLocation like window.location but we actually only use these:
 * @property {string} protocol
 * @property {string} host
 */
export function kleiderordnung_verifyAllowedUrl(urlToVerify, windowLocation) {
  var feedResourcesAllowedAbsoluteUrls = [
    'https://assets.juicer.io/embed.js',
    'https://assets.calendly.com/assets/external/widget.js',
    'https://assets.calendly.com/assets/external/widget.css',
  ];
  for (var i=0; i < feedResourcesAllowedAbsoluteUrls.length; i++) {
    if (urlToVerify === feedResourcesAllowedAbsoluteUrls[i]) {
      return true;
    }
  }
  var sameUrlPrefix = windowLocation.protocol + '//' + windowLocation.host + '/wp-content/themes/kleiderordnung/';
  if (urlToVerify.indexOf(sameUrlPrefix) === 0) {
    return true;
  }
  return false;
}
