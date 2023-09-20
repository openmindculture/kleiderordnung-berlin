/** progressive enhancement for decoration effect
 * ugly JavaScript boilerplate workaround using IntersectionObserver API
 * due to missing CSS support for :scrolling state pseudo class
 */

import {kleiderordnung_observeWaypointAnchorCallback} from "./observeWaypointAnchorCallback.js";

/** @param {object} config configuration object
 *  @property {boolean} supportsIntersectionObserver
 *  @property {object} observerOptions
 *  @property {string} decoratedForegroundContainerClassName e.g. 'offers__cards'
 *  @property {string} mediaMatchMobile e.g. '(max-width: 767px)'
 *  @property {string} scrollingClassName e.g. 'scrolling'
 *  @property {number} scrollingClassTimeout e.g. 1000
 */
export function kleiderordnung_enhanceDecorationEffect(config) {
  /* global window, document */
  console.log('enhance decoration effect function start');
  if (config.prefersReducedMotion || !config.supportsIntersectionObserver) { return; }
  var decoratedForegroundElements = document.getElementsByClassName(config.decoratedForegroundElementsClassName);
  console.log('no prefers reduced motion, supports intersection observer, decoratedForegroundElements:', decoratedForegroundElements);
  if (decoratedForegroundElements.length === 0 || !(decoratedForegroundElements[0] instanceof HTMLElement)) { return; }
  console.log('trying to match config.mediaMatchMobile ' + config.mediaMatchMobile);
  if (!window.matchMedia(config.mediaMatchMobile).matches) { return; }
  console.log('all criteria fulfilled, now define callback function and setup observer');

  function kleiderordnung_enhanceDecorationEffectObservationCallback(intersectingEntries) {
    console.log('kleiderordnung_enhanceDecorationEffectObservationCallback');
    // stop the effect if window has been resized:
    if (!window.matchMedia(config.mediaMatchMobile).matches) {
      if (window.kleiderordnung.observers.decorationObserver) {
        window.kleiderordnung.observers.decorationObserver.unobserve(decoratedForegroundContainerElement);
      }
      return;
    }
      for (var i = 0; i < intersectingEntries.length; i++) {
        var intersectingEntry = intersectingEntries[i];
        if (!intersectingEntry.isIntersecting) { continue; }
        console.log('enhanceDeocrationEffect intersection');
        var targetElement = /** @type {HTMLElement} */ intersectingEntry.target;
        if (!targetElement || !(targetElement instanceof HTMLElement) || !targetElement.id) { continue; }
        console.log('target element exists and is an HTMLElement', targetElement);
        // skip element that is still scrolling && already marked as .scrolling
        if (targetElement.classList.contains(window.kleiderordnung.config.scrollingClassName)) {
          console.log('skip still "scrolling" element');
          return;
        }
        // and if element is visible === intersecting
        // and if element has moved recently
        //     that probably implies the observer has been called at all, or would we compare time + scroll position?
        if (window.kleiderordnung.state.resetEnhancedDecorationTimeoutsByElementId[targetElement.id]) {
          console.log('clear previous timeout resetEnhancedDecorationTimeoutsByElementId[targetElement.id], ' +
            'targetElement.id:', targetElement.id);
          window.clearTimeout(window.kleiderordnung.state.resetEnhancedDecorationTimeoutsByElementId[targetElement.id]);
        }
        console.log('add scrollingClassName ' + window.kleiderordnung.config.scrollingClassName + ' to targetElement ', targetElement);
        targetElement.classList.add(window.kleiderordnung.config.scrollingClassName);
        window.kleiderordnung.state.resetEnhancedDecorationTimeoutsByElementId[targetElement.id] = window.setTimeout(
          function(/** @type {HTMLElement} */ resetElement){
            resetElement.classList.remove(window.kleiderordnung.config.scrollingClassName);
          },
          config.scrollingClassTimeout,
          targetElement
          );
        //
      }
  }

  var observerOptions = config.observerOptions;
  observerOptions.threshold = [];

  for (var i = 5; i < 1000; i+=5) {
    var step = i / 1000;
    observerOptions.threshold.push(step);
  }
  console.log('observerOptions.threshold', observerOptions.threshold);

  window.kleiderordnung.observers.decorationObserver = new IntersectionObserver(
    kleiderordnung_enhanceDecorationEffectObservationCallback,
    observerOptions
  );
  console.log('initialized kleiderordnung.observers.decorationObserver', kleiderordnung.observers.decorationObserver);
  for (var j=0; j < decoratedForegroundElements.length; j++) {
    window.kleiderordnung.observers.decorationObserver.observe(decoratedForegroundElements[j]);
    console.log('explicitly actively observing the observed element decoratedForegroundContainerElement',
      decoratedForegroundElements[j]);
  }
}
