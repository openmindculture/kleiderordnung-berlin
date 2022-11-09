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

var isMobileQuery = window.matchMedia('(max-width: 768px)');
var isMobile = (isMobileQuery && isMobileQuery.matches);

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
          if (isMobile) {
            datakey = animationClassInColumnDataKey;
          }
          if (datakey) {
            var animationClassName = targetElement.dataset[datakey];
            if (animationClassName && animationClassName !== "") {
              targetElement.classList.add(animatingClassName, animationClassName);
            }
          }
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
  window.setTimeout(ensureScrolledToAnchorPosition(), 1000);
  // ^ happens to early, how to wait until feed is loaded?
  // or else do we know the expected container height?
  // but we do not want to make an empty placeholder in that height
  //
  // IntersectionObserver vs. SmoothScroll: bypass scroll triggers visibility
  //
  // Workaround: debounce handler
  // https://stackoverflow.com/questions/69292201/how-to-prevent-intersection-observer-from-firing-when-passing-over-elements-quic
  // adapt:
  // - debounce activating external image feed causing layout shift
  // - debounce micro animations to prevent firing them too early
  // - (no need to debounce adding click handlers to allow buttons)
}

/**
 * loading external content might trigger layout shift, so
 * we might need to jump back to a navigation trigger explicitly
 */
function ensureScrolledToAnchorPosition() {
  if (window.location.hash) {
    var target = document.querySelector(window.location.hash);
    if (target) {
      target.scrollIntoView();
      console.log('smoothly scrolled to target ' + window.location.hash + ' (again)');
    }
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

  /** @object tiny-slider options */
  var tinySliderOptions_default = {
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

  var sliders=[];
  var sliderContainers = document.getElementsByClassName('testimonials__sliderwrapper');
  for (var l=0; l < sliderContainers.length; l++) {
    var tinySliderOptions = tinySliderOptions_default;
    tinySliderOptions.container = sliderContainers[l];
    sliders[l] = tns(tinySliderOptions);
    sliderContainers[l].addEventListener('mousedown', function(event) {
      var target = /** @type {HTMLElement} */ event.currentTarget;
      target.classList.remove('testimonials__sliderwrapper--has-teaser');
    }, { once: true });

    /* mousedown event seems to be prevented by slider library touch handler */
    sliderContainers[l].addEventListener('touchmove', function(event) {
      var eventTarget =  /** @type {HTMLElement} */ event.target;
      var target = eventTarget.closest('.testimonials__sliderwrapper');
      target.classList.remove('testimonials__sliderwrapper--has-teaser');
    }, { once: true });
  }
});
