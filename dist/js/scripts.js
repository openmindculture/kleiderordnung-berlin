'use strict';

/** @type {String} */
var animatingClassName = 'animate__animated';

/**
 * Observe .animated-on-visibility adding animation class when they become visible
 * @param {Array} intersectingEntries
 * @param {IntersectionObserver=} observer
 */
function intersectionCallback(intersectingEntries) {
  console.log('intersection has happened');
  // ^ fucking bullshit, why does this always trigger immediately on page load already?!
  for (var j = 0; j < intersectingEntries.length; j++) {
    console.log('add animation class to intersecting entry ' + j, intersectingEntries[j]);
    if (intersectingEntries[j].target && intersectingEntries[j].target.classList) {
      var animationClassName = intersectingEntries[j].target.dataset.animationclass;
      intersectingEntries[j].target.classList.add(animatingClassName, animationClassName);
      console.log(`added animated class names to intersectingEntries[j].target: animatingClassName: ${animatingClassName}, animationClassName: ${animationClassName}`);
      console.log(intersectingEntries[j].target);
    }
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const observerRoot = document;
  console.log('using observerRoot', observerRoot);
  var observer = new IntersectionObserver(intersectionCallback, {
    root: observerRoot,
    rootMargin: '0px',
    threshold: 0.9
  });
  console.log('initialize intersection observer (0px, 0.9 threshold)');
  var elementsAnimatedOnVisibility = document.getElementsByClassName("animate--on-visibility");
  for (var i = 0; i < elementsAnimatedOnVisibility.length; i++) {
    console.log('must observer element ' + i, elementsAnimatedOnVisibility[i]);
    observer.observe(elementsAnimatedOnVisibility[i]);
  }
});


