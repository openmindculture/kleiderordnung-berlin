/* Scripts */


/* Observe .animated-on-visibility adding animation class when they become visible */

function intersectionCallback(intersectingEntries, observer) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    /* var txt = entry.target.id + " visibility: " + entry.isIntersecting; */
    entry.classList.add('animate__animated');
  }
}

var options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.3
};

document.addEventListener('DOMContentLoaded', function() {
  var observer = new IntersectionObserver(intersectionCallback, options);
  var elementsAnimatedOnVisibility = document.getElementsByClassName("animated-on-visibility");
  for (var i = 0; i < elementsAnimatedOnVisibility.length; i++) {
    observer.observe(elementsAnimatedOnVisibility[i]);
  }
});


