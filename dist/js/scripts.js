'use strict';

var animateableClassName = 'animate--on-visibility'; // triggers micro animations
var animatingClassName = 'animate__animated'; // will be added to animateable elements
var animationClassDataKey = 'animationclass'; // data key to hold animation class name
var animationClassInColumnDataKey = 'animationclassincolumn'; // dto. if element is inside of vertical layout

var variableContrastClassName = 'contrast--varies' // triggers automatic contrast adjustment
var highContrastClassName = 'contrast--more'; // to be removed from .contrast--varies elements

var allowableClassName = 'allowable--on-visibility'; // triggers consent challenge before external content loading
var feedCookieKey = 'instafeed'; // name of the cookie set to remember consent
var feedCookieValue = 'allow'; // default value
var feedContainerClassName = 'feed__container';
var feedContainerActiveClassName = 'feed__container--active'; // set to feed container when allowed and loaded
var feedDataKey = 'allow'; // data key to control the expiry / validity when clicking allow
var feedDataValueAlways = 'always'; // data value to always allow (as opposed to the session default)
var feedScriptUrlDataKey = 'scripturl'; // data key which JavaScript to load (absolute or relative to project)
var feedStyleUrlDataKey = 'styleurl'; // data key which stylesheet to load (absolute or relative to project)

var sliderWrapperClassName = 'testimonials__sliderwrapper';
var sliderWrapperShowingTeaserClassName = 'testimonials__sliderwrapper--has-teaser';

var menuOpenButtonClassName = 'main-menu__button--open';
var menuCloseButtonClassName = 'main-menu__button--close';
var menuOpenClassName = 'target'; // .target for progressive enhancement of :target
var mainMenuNavWrapperSelector = 'main-menu__nav-wrapper'; // select parent menu from descendant button handler

/** type {number[]} TimeoutID for DOM element ID to prevent redundant checks and involuntary smooth scroll side effect */
var observableTimeoutsByTargetElementId = [];
var genericIdCounter = 0;

var isMobileQuery = window.matchMedia('(max-width: 768px)');
var isMobile = (isMobileQuery && isMobileQuery.matches);

/** @object tiny-slider options */
var tinySliderOptions = {
  container: '',
  items: 1,
  controls: false,
  nav: false,
  mouseDrag: true,
  gutter: 5,
  slideBy: 'page',
  swipeAngle: false,
  speed: 500,
  autoplay: false,
  animateDelay: 2000,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  autoplayResetOnVisibility: true,
  autoplayButtonOutput: false,
  preventActionWhenRunning: false,
  preventScrollOnTouch: 'force',
  loop: true
}

/** @object IntersectionObserver options */
var observerOptions = {
  root: null,
  rootMargin: '0px',
  threshold: 0.2
};

/**
 * Observe .animated-on-visibility to add animation class when elements become visible
 * Observe .allowable--on-visibility to activate external feed only if it ever becomes visible
 * @param {IntersectionObserverEntry[]} intersectingEntries
 */
function intersectionCallback(intersectingEntries) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    var intersectingEntry = intersectingEntries[j];
    if (intersectingEntry.isIntersecting && intersectingEntry.intersectionRatio > observerOptions.threshold) {
      var targetElement = /** @type {HTMLElement} */ intersectingEntry.target;
      if (targetElement) {
        var targetId = targetElement.id;
        if (!targetId) {
          genericIdCounter++;
          targetId = '_observable' + genericIdCounter;
          targetElement.id = targetId;
        }
        if (!observableTimeoutsByTargetElementId[targetId]) {
          observableTimeoutsByTargetElementId[targetId] = window.setTimeout(function() {
            var debouncedEntry = intersectingEntry;
            var debouncedTarget = /** @type {HTMLElement} */ debouncedEntry.target;
            if (debouncedEntry.isIntersecting && debouncedEntry.intersectionRatio > observerOptions.threshold) {
              handleAppearedElement(debouncedTarget);
            }
            observableTimeoutsByTargetElementId[debouncedTarget.id] = undefined;
          }, 1000);
        }
      }
    } else {
      var invisibleTargetElement = intersectingEntries[j].target;
      if (invisibleTargetElement) {
        var invisibleTargetId = invisibleTargetElement.id;
        if (observableTimeoutsByTargetElementId[invisibleTargetId]) {
          window.clearTimeout(observableTimeoutsByTargetElementId[invisibleTargetId]);
          observableTimeoutsByTargetElementId[invisibleTargetId] = undefined;
        }
      }
    }
  }
}

/** @param {HTMLElement} targetElement */
function handleAppearedElement(targetElement) {
  if (targetElement.dataset.animationclass && targetElement.classList) {
    var datakey = animationClassDataKey;
    if (isMobile) {
      datakey = animationClassInColumnDataKey;
    }
    if (datakey) {
      var animationClassName = targetElement.dataset[datakey];
      if (animationClassName && animationClassName !== '') {
        targetElement.classList.add(animatingClassName, animationClassName);
      }
    }
  }
  if (targetElement.dataset.allowable) {
    prepareExternalFeed(targetElement);
  }
}

/**
 * @param {HTMLElement} feedContainerElement
 */
function prepareExternalFeed(feedContainerElement) {
  if (
    document.cookie.split(';').some(
      function(item) {
        return item.trim().startsWith(feedCookieKey + '=' + feedCookieValue);
      }
    )
  ) {
    activateExternalFeed(feedContainerElement);
  } else {
    var buttonElements = feedContainerElement.querySelectorAll('[data-' + feedDataKey + ']');
    for (var i = 0; i < buttonElements.length; i++) {
      var buttonElement = buttonElements[i];
      buttonElement.addEventListener('click', function() {
        allowAndActivateExternalFeed(buttonElement);
      }, false);
    }
  }
}

/** @param {HTMLElement} buttonElement */
function allowAndActivateExternalFeed(buttonElement) {
  var feedContainerElement = buttonElement.closest('.' + feedContainerClassName);
  var consentCookie = feedCookieKey + '=' + feedCookieValue + ';samesite=strict;secure';
  if (buttonElement.dataset[feedDataKey].allow === feedDataValueAlways) {
    var maxAgeSeconds = 31536000; // 1 year
    consentCookie += ';max-age=' + maxAgeSeconds +  ';';
  } // If neither expires nor max-age specified it will expire at the end of session.
  document.cookie = consentCookie;
  if (feedContainerElement) {
    activateExternalFeed(feedContainerElement);
  }
}

/** @param {HTMLElement} feedContainerElement */
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

  var sliderContainers = document.getElementsByClassName(sliderWrapperClassName);
  for (var l=0; l < sliderContainers.length; l++) {
    var currentTinySliderOptions = tinySliderOptions;
    currentTinySliderOptions.container = sliderContainers[l];
    tns(currentTinySliderOptions);
    sliderContainers[l].addEventListener('mousedown', function(event) {
      var target = /** @type {HTMLElement} */ event.currentTarget;
      target.classList.remove(sliderWrapperShowingTeaserClassName);
    }, { once: true });

    /* mousedown event seems to be prevented by slider library touch handler */
    sliderContainers[l].addEventListener('touchmove', function(event) {
      var eventTarget =  /** @type {HTMLElement} */ event.target;
      var target = eventTarget.closest('.' + sliderWrapperClassName);
      target.classList.remove(sliderWrapperShowingTeaserClassName);
    }, { once: true });
  }

  var stickyHeaderId = 'header';
  var stuckClassName = 'stuck'; // emulate ::stuck pseudo class for sticky header styling

  var stickyHeader = document.getElementById(stickyHeaderId);
  if (stickyHeader) {
    var stickyObserver = new IntersectionObserver(
      function(intersectingEntries) {
        intersectingEntries[0].target.classList.toggle(stuckClassName, intersectingEntries[0].intersectionRatio < 1);
      },
      { threshold: [1] }
    );
    stickyObserver.observe(stickyHeader);
  }

  // progressive enhancement for navigation menu behavior
  var menuOpenButtons = document.getElementsByClassName(menuOpenButtonClassName);
  for (var m = 0; m < menuOpenButtons.length; m++) {
    menuOpenButtons[m].addEventListener('click', function(event) {
      event.preventDefault();
      var menuOpenButton = /** @type {HTMLElement} */ event.currentTarget;
      var menuId = /** @type {String} */ menuOpenButton.hash.substring(1);
      var menu = document.getElementById(menuId);
      menu.classList.add(menuOpenClassName);
    });
  }
  var menuCloseButtons = document.getElementsByClassName(menuCloseButtonClassName);
  for (var n = 0; n < menuCloseButtons.length; n++) {
    menuCloseButtons[n].addEventListener('click', function(event) {
      event.preventDefault();
      var menu = event.currentTarget.closest('.' + mainMenuNavWrapperSelector);
      menu.classList.remove(menuOpenClassName);
      var navLinks = menu.querySelectorAll('nav a[href]');
      for (var o = 0; o < navLinks.length; o++) {
        navLinks[o].addEventListener('click', function(event) {
          menu.classList.remove(menuOpenClassName);
        });
      }
    });
  }
});
