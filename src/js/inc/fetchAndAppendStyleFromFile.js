import {kleiderordnung_verifyAllowedUrl} from './verifyAllowedUrl';
/** @param {object} config configuration object
 *  @property {number} feedStyleMaxFetchRetries
 *  @property {number} feedStyleFetchRetryTimeoutMilliseconds
 */
export function kleiderordnung_fetchAndAppendStyleFromFile(styleFileUrl, config) {
  console.log('kleiderordnung_fetchAndAppendStyleFromFile');
  console.log('styleFileUrl ' + styleFileUrl);
  console.log('config ', config);
  if (!config || !styleFileUrl || !kleiderordnung_verifyAllowedUrl(styleFileUrl)) { return; }
  console.log('try to fetch styleFileUrl ' + styleFileUrl);
  fetch(styleFileUrl)
    .then(function(response) {
      return response.text();
    })
    .then(function(text) {
      var style = document.head.appendChild(document.createElement('style'));
      style.textContent = text;
      console.log('done: applied style from file');
    }).catch(function(err) {
      console.log('failed to load or apply style from file');
      if (window.kleiderordnung.state.feedStyleFetchRetryCount < config.feedStyleMaxFetchRetries) {
        window.kleiderordnung.state.feedStyleFetchRetryCount++;
        window.setTimeout(config.feedStyleFetchRetryTimeoutMilliseconds, function(){
        kleiderordnung_fetchAndAppendStyleFromFile(styleFileUrl, config);
      });
    }
  });
}
