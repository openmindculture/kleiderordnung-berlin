/**
 * @param {string} urlToVerify
 */
export function kleiderordnung_verifyAllowedUrl(urlToVerify) {
  console.log('urlToVerify' + urlToVerify);
  var feedResourcesAllowedAbsoluteUrls = [
    'https://assets.juicer.io/embed.js'
  ];
  for (var i=0; i < feedResourcesAllowedAbsoluteUrls.length; i++) {
    if (urlToVerify === feedResourcesAllowedAbsoluteUrls[i]) {
      console.log('allowed as feedResourcesAllowedAbsoluteUrl');
      return true;
    }
  }
  var sameUrlPrefix = window.location.protocol + '//' + window.location.host + '/wp-content/themes/kleiderordnung/';
  if (urlToVerify.indexOf(sameUrlPrefix) === 0) {
    console.log('allowed by sameUrlPrefix');
    return true;
  }
  console.log('disallowed! sameUrlPrefix: ' + sameUrlPrefix);
  return false;
}
