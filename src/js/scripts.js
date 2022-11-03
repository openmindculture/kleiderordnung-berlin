'use strict';

var animateableClassName = 'animate--on-visibility'; // triggers micro animations
var animatingClassName = 'animate__animated'; // will be added to animateable elements
var animationClassDataKey = 'animationclass'; // data key to hold animation class name
var animationClassInColumnDataKey = 'animationclassincolumn'; // dto. if element is inside of vertical layout

var variableContrastClassName = 'contrast--varies' // triggers automatic contrast adjustment
var highContrastClassName = 'contrast--more'; // to be removed from .contrast--varies elements

var allowableClassName = 'allowable--on-visibility'; // triggers consent challenge before external content loading
var feedCookieKey = 'instafeed'; // name of the cookie set to remember consent
var feedContainerActiveClassName = 'feed__container--active'; // set to feed container when allowed and loaded
var feedScriptUrlDataKey = 'scripturl'; // data key which JavaScript to load (absolute or relative to project)
var feedStyleUrlDataKey = 'styleurl'; // data key which stylesheet to load (absolute or relative to project)

/** @object IntersectionObserver options */
var observerOptions = {
  root: null,
  rootMargin: '0px',
  threshold: 0.2
};

/**
 * Observe .animated-on-visibility to add animation class when elements become visible
 * Observe .allowable--on-visibility to activate external feed only if it ever becomes visible
 * @param {Array} intersectingEntries
 */
function intersectionCallback(intersectingEntries) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    if (intersectingEntries[j].isIntersecting && intersectingEntries[j].intersectionRatio > observerOptions.threshold) {
      var targetElement = intersectingEntries[j].target;
      if (targetElement) {
        if (targetElement.dataset.animationclass && targetElement.classList) {
          var datakey = animationClassDataKey;
          var flexContainer = targetElement.parentElement;
          if (flexContainer) {
            var flexDirection = window.getComputedStyle(flexContainer).flexDirection;
            if (flexDirection === 'column') {
              datakey = animationClassInColumnDataKey;
            }
          }
          var animationClassName = targetElement.dataset[datakey];
          targetElement.classList.add(animatingClassName, animationClassName);
        }
      }
      if (targetElement.dataset.allowable) {
        prepareExternalFeed(targetElement);
      }
    }
  }
}

/**
 * @param feedContainerElement
 */
function prepareExternalFeed(feedContainerElement) {
  if (
    document.cookie.split(';').some(
      function(item) {
        return item.trim().startsWith(feedCookieKey + '=allow');
      }
    )
  ) {
    activateExternalFeed(feedContainerElement);
  } else {
    var buttonElements = feedContainerElement.querySelectorAll('[data-allow]');
    for (var i = 0; i < buttonElements.length; i++) {
      var buttonElement = buttonElements[i];
      buttonElement.addEventListener('click', function() {
        allowAndActivateExternalFeed(buttonElement);
      }, false);
    }
  }
}

/**
 *
 * @param buttonElement
 */
function allowAndActivateExternalFeed(buttonElement) {
  var feedContainerElement = buttonElement.closest('.feed__container');
  var consentCookie = feedCookieKey + '=allow;samesite=strict;secure';
  if (buttonElement.dataset.allow === 'always') {
    var maxAgeSeconds = 31536000; // 1 year
    consentCookie += ';max-age=' + maxAgeSeconds +  ';';
  } // If neither expires nor max-age specified it will expire at the end of session.
  document.cookie = consentCookie;
  if (feedContainerElement) {
    activateExternalFeed(feedContainerElement);
  }
}

/**
 *
 * @param feedContainerElement
 */
function activateExternalFeed(feedContainerElement) {
  if (!feedContainerElement) { return; }
  var styleFileUrl = feedContainerElement.dataset[feedStyleUrlDataKey];
  if (styleFileUrl) {
    fetch(styleFileUrl)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var style = document.head.appendChild(document.createElement('style'));
        style.textContent = text;
      }).catch(function(err) {
      // TODO schedule retry? or rather insert <style> element instead of fetching?
    });
  }
  var scriptFileUrl = feedContainerElement.dataset[feedScriptUrlDataKey];
  if (scriptFileUrl) {
    var scriptElement = document.createElement('script');
    scriptElement.src = scriptFileUrl;
    document.head.append(scriptElement);
  }
  if (feedContainerElement && feedContainerElement.classList) {
    feedContainerElement.classList.add(feedContainerActiveClassName);
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var observer = new IntersectionObserver(intersectionCallback, observerOptions);
  var elementsActivatedOnVisibilityAndConsent = document.getElementsByClassName(allowableClassName);
  for (var i = 0; i < elementsActivatedOnVisibilityAndConsent.length; i++) {
    observer.observe(elementsActivatedOnVisibilityAndConsent[i]);
  }
  var prefersReducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (prefersReducedMotionQuery && !prefersReducedMotionQuery.matches) {
    var elementsAnimatedOnVisibility = document.getElementsByClassName(animateableClassName);
    for (var j = 0; j < elementsAnimatedOnVisibility.length; j++) {
      observer.observe(elementsAnimatedOnVisibility[j]);
    }
  }
  var prefersMoreContrastQuery = window.matchMedia('(prefers-contrast: more)');
  if (prefersMoreContrastQuery && !prefersMoreContrastQuery.matches) {
    window.setTimeout(function() {
      var moreContrastElements = document.getElementsByClassName(variableContrastClassName);
      for (var k = 0; k < moreContrastElements.length; k++) {
        moreContrastElements[k].classList.remove(highContrastClassName);
      }
    }, 5000);
  }
});
