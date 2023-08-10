export function kleiderordnung_observeWaypointAnchorCallback(intersectingEntries) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    var intersectingEntry = intersectingEntries[j];
    if (!intersectingEntry.isIntersecting) { continue; }
    if (intersectingEntry.intersectionRatio <= window.kleiderordnung.config.observerOptions.threshold) { continue; }
    var previousCorrespondingNavigationItem = document.querySelector('#menu-main .active');
    if (previousCorrespondingNavigationItem && previousCorrespondingNavigationItem.classList) {
      previousCorrespondingNavigationItem.classList.remove('active');
    }
    var targetElement = /** @type {HTMLElement} */ intersectingEntry.target;
    if (!targetElement) { continue; }
    var targetId = targetElement.id;
    if (!targetId) { continue; }
    var currentCorrespondingNavigationItem = document.querySelector('#menu-main-item-' + targetId + ' a');
    if (currentCorrespondingNavigationItem && currentCorrespondingNavigationItem.classList) {
      currentCorrespondingNavigationItem.classList.add('active');
    }
  }
}
