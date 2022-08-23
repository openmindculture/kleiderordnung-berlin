/* Scripts */


/* Observe .animated-on-visibility adding animation class when they become visible */

function intersectionCallback(intersectingEntries, observer) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    /* var txt = entry.target.id + " visibility: " + entry.isIntersecting; */
    console.log('add animation class to intersecting entry ' + j, intersectingEntries[j]);
    if (intersectingEntries[j].target && intersectingEntries[j].target.classList) {
      intersectingEntries[j].target.classList.add('animate__animated');
      console.log('added animated class to intersectingEntries[j].target');
      console.log(intersectingEntries[j].target);
    }
  }
}

var options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.3
};

document.addEventListener('DOMContentLoaded', function() {
  var observer = new IntersectionObserver(intersectionCallback, options);
  console.log('initialize intersection observer ...');
  var elementsAnimatedOnVisibility = document.getElementsByClassName("animate--on-visibility");
  for (var i = 0; i < elementsAnimatedOnVisibility.length; i++) {
    console.log('must observer element ' + i, elementsAnimatedOnVisibility[i]);
    observer.observe(elementsAnimatedOnVisibility[i]);
  }
});


