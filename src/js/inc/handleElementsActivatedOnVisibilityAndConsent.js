/** handle various interactive effects */

import {kleiderordnung_fetchAndAppendStyleFromFile} from './fetchAndAppendStyleFromFile';
import {kleiderordnung_verifyAllowedUrl} from './verifyAllowedUrl';

/* global window, document */
/** @param {HTMLElement} targetElement */
var kleiderordnung_handleAppearedElement = function(targetElement) {
  if (targetElement.dataset.allowable) {
    kleiderordnung_prepareExternalFeed(targetElement);
  }
}

/**
 * @param {HTMLElement} feedContainerElement
 */
var kleiderordnung_prepareExternalFeed = function(feedContainerElement) {
  /* global document, window.kleiderordnung.config */
  if (!feedContainerElement) { return; }
  if (
    document.cookie.split(';').some(
      function(item) {
        return item.trim().startsWith(window.kleiderordnung.config.feedCookieKey + '=' + window.kleiderordnung.config.feedCookieValue);
      }
    )
  ) {
    kleiderordnung_activateExternalFeed(feedContainerElement);
  } else {
    var feedSectionElement = feedContainerElement.closest('.' + window.kleiderordnung.config.feedSectionClassName);
    if (!feedSectionElement) { return; }
    var buttonElements = feedSectionElement.querySelectorAll(
      '[data-' + window.kleiderordnung.config.feedDataKey + ']'
    );
    for (var i = 0; i < buttonElements.length; i++) {
      var buttonElement = buttonElements[i];
      buttonElement.addEventListener('click', function(buttonEvent) {
        kleiderordnung_allowAndActivateExternalFeed(buttonEvent.currentTarget);
      }, false);
    }
  }
}

/**
 * @param {HTMLElement} buttonElement
 */
var kleiderordnung_allowAndActivateExternalFeed = function(buttonElement) {
  if (!buttonElement) { return; }
  var feedSectionElement = buttonElement.closest('.' + window.kleiderordnung.config.feedSectionClassName);
  if (!feedSectionElement) { return; }
  var feedContainerElement = feedSectionElement.querySelector('.' + window.kleiderordnung.config.feedContainerClassName);
  if (!feedContainerElement) { return; }
  var consentCookie = window.kleiderordnung.config.feedCookieKey + '=' + window.kleiderordnung.config.feedCookieValue + ';samesite=strict;secure';
  if (buttonElement.dataset[window.kleiderordnung.config.feedDataKey].allow === window.kleiderordnung.config.feedDataValueAlways) {
    consentCookie += ';max-age=' + window.kleiderordnung.config.feedCookieMaxAgeSeconds +  ';';
  } // If neither expires nor max-age specified it will expire at the end of session.
  document.cookie = consentCookie;
  if (feedContainerElement) {
    kleiderordnung_activateExternalFeed(feedContainerElement);
  }
}

/** @param {HTMLElement} feedContainerElement */
var kleiderordnung_activateExternalFeed = function(feedContainerElement) {
  if (!feedContainerElement) { return; }
  var styleFileUrl = feedContainerElement.dataset[window.kleiderordnung.config.feedStyleUrlDataKey];
  kleiderordnung_fetchAndAppendStyleFromFile(styleFileUrl, window.kleiderordnung.config);
  var scriptFileUrl = feedContainerElement.dataset[window.kleiderordnung.config.feedScriptUrlDataKey];
  if (scriptFileUrl && kleiderordnung_verifyAllowedUrl(scriptFileUrl)) {
    var scriptElement = document.createElement('script');
    scriptElement.src = scriptFileUrl;
    document.head.append(scriptElement);
  }
  if (feedContainerElement && feedContainerElement.classList) {
    feedContainerElement.classList.add(window.kleiderordnung.config.feedContainerActiveClassName);
    var feedSectionElement = feedContainerElement.closest('.' + window.kleiderordnung.config.feedSectionClassName);
    if (feedSectionElement && feedSectionElement.classList) {
      feedSectionElement.classList.add(window.kleiderordnung.config.feedSectionActiveClassName);
    }
  }
}

/**
 * Observe .animated-on-visibility to add animation class when elements become visible
 * Observe .allowable--on-visibility to activate external feed only if it ever becomes visible
 * @param {IntersectionObserverEntry[]} intersectingEntries
 */
var kleiderordnung_intersectionCallback = function(intersectingEntries) {
  /* global window */
  for (var j = 0; j < intersectingEntries.length; j++) {
    var intersectingEntry = intersectingEntries[j];
    if (intersectingEntry.isIntersecting && intersectingEntry.intersectionRatio > window.kleiderordnung.config.observerOptions.threshold) {
      var targetElement = /** @type {HTMLElement} */ intersectingEntry.target;
      if (!targetElement) { continue; }
      var targetId = targetElement.id;
      if (!targetId) {
        window.kleiderordnung.state.genericIdCounter++;
        targetId = '_observable' + window.kleiderordnung.state.genericIdCounter;
        targetElement.id = targetId;
      }
      // TimeoutID for DOM element ID to prevent redundant checks and involuntary smooth scroll side effect */
      if (!window.kleiderordnung.state.observableTimeoutsByTargetElementId[targetId]) {
        window.kleiderordnung.state.observableTimeoutsByTargetElementId[targetId] = window.setTimeout(function() {
          var debouncedEntry = intersectingEntry;
          var debouncedTarget = /** @type {HTMLElement} */ debouncedEntry.target;
          if (debouncedEntry.isIntersecting && debouncedEntry.intersectionRatio > window.kleiderordnung.config.observerOptions.threshold) {
            kleiderordnung_handleAppearedElement(debouncedTarget);
          }
          window.kleiderordnung.state.observableTimeoutsByTargetElementId[debouncedTarget.id] = undefined;
        }, 500);
      }
    } else {
      var invisibleTargetElement = intersectingEntries[j].target;
      if (invisibleTargetElement) {
        var invisibleTargetId = invisibleTargetElement.id;
        if (window.kleiderordnung.state.observableTimeoutsByTargetElementId[invisibleTargetId]) {
          window.clearTimeout(window.kleiderordnung.state.observableTimeoutsByTargetElementId[invisibleTargetId]);
          window.kleiderordnung.state.observableTimeoutsByTargetElementId[invisibleTargetId] = undefined;
        }
      }
    }
  }
}

/**
 * @param {function} kleiderordnung_intersectionCallback
 * @param {object} config configuration object
 * @property {object} observerOptions
 * @property {string} allowableElementsClassName e.g. 'allowable--on-visibility'
 * @property {string} removeableButtonsClassName e.g. 'button__remove',
 * @property {string} sectionClassName e.g. 'socialmedia__feed__section'
 * @property {string} containerClassName e.g. 'socialmedia__feed__container'
 * @property {string} cookieKey e.g. 'instafeed'
 * @property {string} cookieValue e.g. 'allow'
 * @property {string} dataValueAlways e.g. 'always'
 * @property {number} cookieMaxAgeSeconds e.g. 31536000 = 1 year
 */
var kleiderordnung_handleElementsActivatedOnVisibilityAndConsent = function(kleiderordnung_intersectionCallback, config) {
  var elementsActivatedOnVisibilityAndConsent = document.getElementsByClassName(config.allowableElementsClassName);
  var elementsActivatedOnVisibilityAndConsentCount = elementsActivatedOnVisibilityAndConsent.length;
  /* Activate on Visibility, Respect Reduced Motion Preference */
  if (typeof IntersectionObserver === 'function') {
    var activateableObserver = new IntersectionObserver(kleiderordnung_intersectionCallback, config.observerOptions);
    for (var ei = 0; ei < elementsActivatedOnVisibilityAndConsentCount; ei++) {
      activateableObserver.observe(elementsActivatedOnVisibilityAndConsent[ei]);
    }
  } else { /* activate allowable elements directly if no intersection observer available like in old Safari */
    for (var pi = 0; pi < elementsActivatedOnVisibilityAndConsentCount; pi++) {
      var activateableElement = elementsActivatedOnVisibilityAndConsent[pi];
      if (activateableElement.dataset.allowable) {
        kleiderordnung_prepareExternalFeed(activateableElement);
      }
    }
  }

  var removableButtonElements = document.getElementsByClassName(config.removableButtonsClassName);
  var removableButtonElementsCount = removableButtonElements.length;
  for (var k = 0; k < removableButtonElementsCount; k++) {
    var removingElement = removableButtonElements[k];
    if (!removingElement.dataset.removes) { continue; }
      removingElement.addEventListener('click', function(event) {
        event.preventDefault();
        var removableElement = document.getElementById(removingElement.dataset.removes);
        if (removableElement) {
          removableElement.remove();
        }
      });
  }
}

export { kleiderordnung_intersectionCallback, kleiderordnung_handleElementsActivatedOnVisibilityAndConsent };
