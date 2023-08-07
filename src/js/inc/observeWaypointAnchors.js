/** Waypoint effect: visible link target (section) adds .active to matching main navigation item */
import {kleiderordnung_observeWaypointAnchorCallback} from './observeWaypointAnchorCallback';
export function kleiderordnung_observeWaypointAnchors() {
    if (!window.kleiderordnung.config.supportsIntersectionObserver) { return; }
    window.kleiderordnung.observers.waypointObserver = new IntersectionObserver(
        kleiderordnung_observeWaypointAnchorCallback,
        window.kleiderordnung.config.observerOptions
    );
    /* TODO refactor strings to config */
    var correnspodingNavigationItems = document.querySelectorAll('#menu-main a.menu-item-link-waypoint');
    if (correnspodingNavigationItems) {
        var correnspodingNavigationItemsCount = correnspodingNavigationItems.length;
        for (var i = 0; i < correnspodingNavigationItemsCount; i++) {
            if (!correnspodingNavigationItems[i].href) { continue; }
            var correspondingWayPointUrl = new URL(correnspodingNavigationItems[i].href);
            var correspondingWayPointId = correspondingWayPointUrl.hash.substring(1);
            var correspondingWayPoint = document.getElementById(correspondingWayPointId);
            if (correspondingWayPoint) {
                window.kleiderordnung.observers.waypointObserver.observe(correspondingWayPoint);
            }
        }
    }

    /* observe top or key visual (which has no active menu item) to disable item below when scrolling to top */
    var topItem = document.getElementById(kleiderordnung.introKeyvisualMousetrapId);
    if (topItem) {
        kleiderordnung.observers.waypointObserver.observe(topItem);
    }
    /* observe social media section (not linked from the menu) as a waypoint for more consistent waypoint effect */
    var socialMediaSection = document.getElementById('socialmedia');
    if (socialMediaSection) {
        kleiderordnung.observers.waypointObserver.observe(socialMediaSection);
    }
}
