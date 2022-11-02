'use strict';

/** @type {String} */
var animatingClassName = 'animate__animated';

/** @type {Object} */
var observerOptions = {
  root: null,
  /** @type {String} */
  rootMargin: '0px',
  /** @type {Number} */
  threshold: 0.2
};

/**
 * Observe .animated-on-visibility to add animation class when elements become visible
 * Observe .allowable--on-visibility to activate external feed only if it ever becomes visible
 * @param {Array} intersectingEntries
 * param {IntersectionObserver=} observer @optional= TODO how to note optional?
 */
function intersectionCallback(intersectingEntries) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    if (intersectingEntries[j].isIntersecting && intersectingEntries[j].intersectionRatio > observerOptions.threshold) {
      var targetElement = intersectingEntries[j].target;
      if (targetElement) {
        if (targetElement.dataset.animationclass && targetElement.classList) {
          var datakey = 'animationclass';
          var flexContainer = targetElement.parentElement;
          if (flexContainer) {
            var flexDirection = window.getComputedStyle(flexContainer).flexDirection;
            if (flexDirection === 'column') {
              datakey = 'animationclassincolumn';
            }
          }
          var animationClassName = targetElement.dataset[datakey];
          targetElement.classList.add(animatingClassName, animationClassName);
        }
      }
      if (targetElement.dataset.allow) {
        prepareExternalFeed(targetElement);
      }
    }
  }
}

function prepareExternalFeed(buttonWrapperElement) {
  if (
    document.cookie.split(';').some(
      function(item) {
        return item.trim().startsWith('instafeed=allow');
      }
    )
  ) {
    allowAndActivateExternalFeed();
  } else {
    var buttonElements = buttonWrapperElement.querySelectorAll('[data-allow]');
    for (var i = 0; i < buttonElements.length; i++) {
      var buttonElement = buttonElements[i];
      buttonElement.addEventListener('click', function() {
        allowAndActivateExternalFeed(buttonElement);
      }, false);
    }
  }
}

function allowAndActivateExternalFeed(buttonElement) {
  var feedContainerElement = buttonElement.closest('.feed__container');
  var consentCookie = 'instafeed=allow;samesite=strict;secure';
  if (buttonElement.dataset.allow === 'always') {
    var maxAgeSeconds = 31536000; // 1 year
    consentCookie += ';max-age=' + maxAgeSeconds +  ';';
  } // If neither expires nor max-age specified it will expire at the end of session.
  document.cookie = consentCookie;
  if (feedContainerElement) {
    activateExternalFeed(feedContainerElement);
  }
}

function activateExternalFeed(feedContainerElement) {
  if (!feedContainerElement) { return; }
  var styleFileUrl = feedContainerElement.dataset.styleurl;
  if (styleFileUrl) {
    fetch(styleFileUrl)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var style = document.head.appendChild(document.createElement('style'));
        style.textContent = text;
        console.log('juicerFeedContainer', feedContainerElement);
        if (feedContainerElement && feedContainerElement.classList) {
          feedContainerElement.classList.remove('initially-hidden');
        }
      }).catch(function(err) {
      console.error('style load failed with error', err);
    });
  }
  var scriptFileUrl = feedContainerElement.dataset.scripturl;
  if (scriptFileUrl) {
    var scriptElement = document.createElement('script');
    scriptElement.src = scriptFileUrl;
    document.head.append(scriptElement);
  }
  feedContainerElement.classList.add('feed__container--active');
}

document.addEventListener('DOMContentLoaded', function() {
  var observer = new IntersectionObserver(intersectionCallback, observerOptions);
  var elementsActivatedOnVisibilityAndConsent = document.getElementsByClassName('allowable--on-visibility');
  for (var i = 0; i < elementsActivatedOnVisibilityAndConsent.length; i++) {
    observer.observe(elementsActivatedOnVisibilityAndConsent[i]);
  }
  var prefersReducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (prefersReducedMotionQuery && !prefersReducedMotionQuery.matches) {
    var elementsAnimatedOnVisibility = document.getElementsByClassName('animate--on-visibility');
    for (var j = 0; j < elementsAnimatedOnVisibility.length; j++) {
      observer.observe(elementsAnimatedOnVisibility[j]);
    }
  }
  var prefersMoreContrastQuery = window.matchMedia('(prefers-contrast: more)');
  if (prefersMoreContrastQuery && !prefersMoreContrastQuery.matches) {
    window.setTimeout(function() {
      var moreContrastElements = document.getElementsByClassName('contrast--varies');
      for (var k = 0; k < moreContrastElements.length; k++) {
        moreContrastElements[k].classList.remove('contrast--more');
        console.log('removed high contrast class');
      }
    }, 5000);
  }
});
