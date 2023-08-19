/**
 * @param {string} urlToVerify
 * global window
 */
export function kleiderordnung_verifyAllowedUrl(urlToVerify) {
  var feedResourcesAllowedAbsoluteUrls = [
    'https://assets.juicer.io/embed.js'
  ];
  for (var i=0; i < feedResourcesAllowedAbsoluteUrls.length; i++) {
    if (urlToVerify === feedResourcesAllowedAbsoluteUrls[i]) {
      return true;
    }
  }
  var sameUrlPrefix = window.location.protocol + '//' + window.location.host + '/wp-content/themes/kleiderordnung/';
  if (urlToVerify.indexOf(sameUrlPrefix) === 0) {
    return true;
  }
  return false;
}

// TODO add unit test
