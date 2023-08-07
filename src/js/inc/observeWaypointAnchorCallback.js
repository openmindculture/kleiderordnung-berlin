export function kleiderordnung_observeWaypointAnchorCallback(intersectingEntries) {
    for (var j = 0; j < intersectingEntries.length; j++) {
        var intersectingEntry = intersectingEntries[j];
        if (!intersectingEntry.isIntersecting) { continue; }
        if (intersectingEntry.intersectionRatio <= window.kleiderordnung.config.observerOptions.threshold) { continue; }
        var targetElement = /** @type {HTMLElement} */ intersectingEntry.target;
        if (!targetElement) { continue; }
        var targetId = targetElement.id;
        if (!targetId) { continue; }
        var previousCorrespondingNavigationItem = document.querySelector('#menu-main .active');
        if (!previousCorrespondingNavigationItem || !previousCorrespondingNavigationItem.classList) { continue; }
        previousCorrespondingNavigationItem.classList.remove('active');
        var currentCorrespondingNavigationItem = document.querySelector('#menu-main-item-' + targetId + ' a');
        if (!currentCorrespondingNavigationItem || !currentCorrespondingNavigationItem.classList) { continue; }
        currentCorrespondingNavigationItem.classList.add('active');
        if (history.pushState) {
            history.pushState(null, null, '#' + targetId);
        } else {
            window.location.hash = '#' + targetId;
        }
    }
}
