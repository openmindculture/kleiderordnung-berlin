'use strict';

/** @type {String} */
var animatingClassName = 'animate__animated';
// TODO all "magic" strings to variables

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
  console.log('intersectionCallback, intersectingEntries:', intersectingEntries);
  for (var j = 0; j < intersectingEntries.length; j++) {
    if (intersectingEntries[j].isIntersecting && intersectingEntries[j].intersectionRatio > observerOptions.threshold) {
      var targetElement = intersectingEntries[j].target;
      console.log('entry isIntersecting && > treshold, targetElement:', targetElement);
      if (targetElement) {
        if (targetElement.dataset.animationclass && targetElement.classList) {
          console.log('targetElement has data-animationclass');
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
      if (targetElement.dataset.allowable) {
        console.log('targetElement has data-allow, must prepareExternalFeed');
        prepareExternalFeed(targetElement);
      }
    }
  }
}

function prepareExternalFeed(feedContainerElement) {
  console.log('prepareExternalFeed, buttonWrapperElement:', feedContainerElement);
  if (
    document.cookie.split(';').some(
      function(item) {
        return item.trim().startsWith('instafeed=allow');
      }
    )
  ) {
    console.log('detected cookie, now activateExternalFeed(feedContainerElement)');
    activateExternalFeed(feedContainerElement);
  } else {
    var buttonElements = buttonWrapperElement.querySelectorAll('[data-allow]');
    console.log('attach click handlers to buttonElements', buttonElements);
    for (var i = 0; i < buttonElements.length; i++) {
      var buttonElement = buttonElements[i];
      buttonElement.addEventListener('click', function() {
        allowAndActivateExternalFeed(buttonElement);
      }, false);
      console.log('appended to buttonElement', buttonElement);
    }
  }
}

function allowAndActivateExternalFeed(buttonElement) {
  console.log('allowAndActivateExternalFeed, buttonElement:', buttonElement);
  var feedContainerElement = buttonElement.closest('.feed__container');
  console.log('feedContainerElement', feedContainerElement);
  var consentCookie = 'instafeed=allow;samesite=strict;secure';
  if (buttonElement.dataset.allow === 'always') {
    console.log('allow always');
    var maxAgeSeconds = 31536000; // 1 year
    consentCookie += ';max-age=' + maxAgeSeconds +  ';';
  } // If neither expires nor max-age specified it will expire at the end of session.
  document.cookie = consentCookie;
  console.log('set document.cookie = consentCookie', consentCookie);
  if (feedContainerElement) {
    activateExternalFeed(feedContainerElement);
  } else {
    console.log('missing feedContainerElement in allowAndActivateExternalFeed');
  }
}

function activateExternalFeed(feedContainerElement) {
  console.log('activateExternalFeed, feedContainerElement:', feedContainerElement);
  if (!feedContainerElement) { return; }
  var styleFileUrl = feedContainerElement.dataset.styleurl;
  console.log('styleFileUrl', styleFileUrl);
  if (styleFileUrl) {
    console.log('fetch styleFileUrl');
    fetch(styleFileUrl)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var style = document.head.appendChild(document.createElement('style'));
        style.textContent = text;
        console.log('juicerFeedContainer', feedContainerElement);
        if (feedContainerElement && feedContainerElement.classList) {
          feedContainerElement.classList.remove('initially-hidden'); // obsolete?
        }
      }).catch(function(err) {
      console.error('style load failed with error', err);
    });
  }
  var scriptFileUrl = feedContainerElement.dataset.scripturl;
  console.log('scriptFileUrl', scriptFileUrl);
  if (scriptFileUrl) {
    console.log('append script for scriptFileUrl');
    var scriptElement = document.createElement('script');
    scriptElement.src = scriptFileUrl;
    document.head.append(scriptElement);
  }
  if (feedContainerElement && feedContainerElement.classList) {
    feedContainerElement.classList.add('feed__container--active');
    console.log('marked feedContainerElement as .feed__container--active', feedContainerElement);
  } else {
    console.error("failed to mark feedContainerElement as .feed__container--active", feedContainerElement);
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var observer = new IntersectionObserver(intersectionCallback, observerOptions);
  var elementsActivatedOnVisibilityAndConsent = document.getElementsByClassName('allowable--on-visibility');
  console.log('elementsActivatedOnVisibilityAndConsent', elementsActivatedOnVisibilityAndConsent);
  for (var i = 0; i < elementsActivatedOnVisibilityAndConsent.length; i++) {
    observer.observe(elementsActivatedOnVisibilityAndConsent[i]);
    console.log(`observing $i nr. ${i}`, elementsActivatedOnVisibilityAndConsent[i]);
  }
  var prefersReducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (prefersReducedMotionQuery && !prefersReducedMotionQuery.matches) {
    var elementsAnimatedOnVisibility = document.getElementsByClassName('animate--on-visibility');
    for (var j = 0; j < elementsAnimatedOnVisibility.length; j++) {
      observer.observe(elementsAnimatedOnVisibility[j]);
      console.log(`observing $j nr. ${j}`, elementsAnimatedOnVisibility[j]);
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
