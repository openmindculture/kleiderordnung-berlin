import {kleiderordnung_verifyAllowedUrl} from './verifyAllowedUrl';
/** @param {object} config configuration object
 *  @property {number} feedStyleMaxFetchRetries
 *  @property {number} feedStyleFetchRetryTimeoutMilliseconds
 */
export function kleiderordnung_fetchAndAppendStyleFromFile(styleFileUrl, config) {
  if (!config || !styleFileUrl || !kleiderordnung_verifyAllowedUrl(styleFileUrl, window.location)) { return; }
  fetch(styleFileUrl)
    .then(function(response) {
      return response.text();
    })
    .then(function(text) {
      var style = document.head.appendChild(document.createElement('style'));
      style.textContent = text;
    }).catch(function(err) {
      if (window.kleiderordnung.state.feedStyleFetchRetryCount < config.feedStyleMaxFetchRetries) {
        window.kleiderordnung.state.feedStyleFetchRetryCount++;
        window.setTimeout(config.feedStyleFetchRetryTimeoutMilliseconds, function(){
        kleiderordnung_fetchAndAppendStyleFromFile(styleFileUrl, config);
      });
    }
  });
}
