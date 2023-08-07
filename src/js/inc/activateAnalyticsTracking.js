/** Matomo Analytics */
export function kleiderordnung_activateAnalyticsTracking() {
  /* global window, document */
  var _paq = window._paq = window._paq || [];
  var kleiderordnung_wpurl = /** @type { string } */ window.kleiderordnung_wpurl;
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  _paq.push(['alwaysUseSendBeacon']);
  _paq.push(['setTrackerUrl', kleiderordnung_wpurl + '/wp-content/plugins/matomo/app/matomo.php']);
  _paq.push(['setSiteId', '1']);
  var g = document.createElement('script');
  var s = document.getElementsByTagName('script')[0];
  g.type = 'text/javascript';
  g.async = true;
  g.src = kleiderordnung_wpurl + '/wp-content/uploads/matomo/matomo.js';
  s.parentNode.insertBefore(g,s);
}
