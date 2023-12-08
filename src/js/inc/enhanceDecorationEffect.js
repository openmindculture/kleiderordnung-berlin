/** progressive enhancement for decoration effect
 * less ugly JavaScript workaround using debounced scroll event listener
 * due to missing CSS support for :scrolling state pseudo class
 */

import {kleiderordnung_observeWaypointAnchorCallback} from "./observeWaypointAnchorCallback.js";

/** @param {object} config configuration object
 *  @property {string} mediaMatchMobile e.g. '(max-width: 767px)'
 *  @property {string} scrollingClassName e.g. 'scrolling'
 */
export function kleiderordnung_enhanceDecorationEffect(config) {
  /* global window, document */
  if (config.prefersReducedMotion || config.prefersReducedTransparency) { return; }
  if (!window.matchMedia(config.mediaMatchMobile).matches) { return; }

  /* window fires no scrolling events due to parallax decoration perspective body max height tweak */
  document.body.addEventListener('scroll', function() {
    window.kleiderordnung.state.isScrolling = true;
  });

  function removeScrollClassAfterScrolling() {
    if (!window.kleiderordnung.state.isScrolling) {
      document.body.classList.remove(window.kleiderordnung.config.scrollingClassName);
    }
  }

  /* debounced scroll handling to prevent performance problems */
  window.kleiderordnung.state.scrollDetectionIntervalId = window.setInterval(function(){
    if (window.kleiderordnung.state.isScrolling) {
      window.kleiderordnung.state.isScrolling = false;
      document.body.classList.add(window.kleiderordnung.config.scrollingClassName);
      if (window.kleiderordnung.state.scrollDetectionResetTimeoutId) {
        window.clearTimeout(window.kleiderordnung.state.scrollDetectionResetTimeoutId);
      }
      window.kleiderordnung.state.scrollDetectionResetTimeoutId = window.setTimeout(function(){
        removeScrollClassAfterScrolling();
      },300);
    }
  },300);
}
