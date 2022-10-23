'use strict';

/** integrate social media in compliance with privacy law using https://heyklaro.com */
window.klaroConfig = {
  services : [
    {
      name : 'instagram',
      default: true,
      title : 'Instagram',
      purposes : ['statistics'],
      cookies : [/^instagram/i]
    }
  ]
}

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
 * @param {Array} intersectingEntries
 * param {IntersectionObserver=} observer @optional= TODO how to note optional?
 */
function intersectionCallback(intersectingEntries) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    if (intersectingEntries[j].isIntersecting && intersectingEntries[j].intersectionRatio > observerOptions.threshold) {
      if (intersectingEntries[j].target && intersectingEntries[j].target.classList) {
        var datakey = 'animationclass';
        var flexContainer = intersectingEntries[j].target.parentElement;
        if (flexContainer) {
          var flexDirection = window.getComputedStyle(flexContainer).flexDirection;
          if (flexDirection === 'column') {
            datakey = 'animationclassincolumn';
          }
        }
        var animationClassName = intersectingEntries[j].target.dataset[datakey];
        intersectingEntries[j].target.classList.add(animatingClassName, animationClassName);
      }
    }
  }
}

document.addEventListener('DOMContentLoaded', function() {
  var prefersReducedMotionQuery = window.matchMedia("(prefers-reduced-motion: reduce)");
  if (prefersReducedMotionQuery && !prefersReducedMotionQuery.matches) {
    var observer = new IntersectionObserver(intersectionCallback, observerOptions);
    var elementsAnimatedOnVisibility = document.getElementsByClassName("animate--on-visibility");
    for (var i = 0; i < elementsAnimatedOnVisibility.length; i++) {
      observer.observe(elementsAnimatedOnVisibility[i]);
    }
  }
  var prefersMoreContrastQuery = window.matchMedia("(prefers-contrast: more)");
  if (prefersMoreContrastQuery && !prefersMoreContrastQuery.matches) {
    window.setTimeout(function() {
      var moreContrastElements = document.getElementsByClassName("contrast--varies");
      for (var i = 0; i < moreContrastElements.length; i++) {
        moreContrastElements[i].classList.remove("contrast--more");
        console.log("removed high contrast class");
      }
    }, 5000);
  }
});
