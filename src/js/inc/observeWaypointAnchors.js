/** Waypoint effect: visible link target (section) adds .active to matching main navigation item */
import {kleiderordnung_observeWaypointAnchorCallback} from './observeWaypointAnchorCallback';
/** @param {object} config configuration object
 *  @property {boolean} supportsIntersectionObserver
 *  @property {object} observerOptions
 *  @property {string} waypointsQuerySelector e.g. '#menu-main a.menu-item-link-waypoint'
 *  @property {string} introKeyvisualMousetrapId e.g. 'intro-keyvisual-mousetrap'
 *  @property {string} socialMediaSectionId e.g. 'socialmedia'
 *
 *  @property {string} introKeyvisualAnimationId e.g. 'intro-keyvisual-animation'
 *  @property {string} introKeyvisualMousetrapId e.g. 'intro-keyvisual-mousetrap'
 *  @property {string} introKeyvisualScriptId e.g. 'lottie-player-script'
 *  @property {string} introKeyvisualComponentTagName e.g. 'lottie-player'
 *  @property {string} noGlobalThisClassName e.g. 'no-globalthis'
 *  @property {number} introKeyvisualTimeoutMilliseconds 30000
 */
export function kleiderordnung_observeWaypointAnchors(config) {
  console.log('kleiderordnung_observeWaypointAnchors');
  if (!config.supportsIntersectionObserver) { return; }
  window.kleiderordnung.observers.waypointObserver = new IntersectionObserver(
    kleiderordnung_observeWaypointAnchorCallback,
    config.observerOptions
  );
  var correnspodingNavigationItems = document.querySelectorAll(config.waypointsQuerySelector);
  if (correnspodingNavigationItems) {
    console.log('ready to observe correnspodingNavigationItems:', correnspodingNavigationItems);
    for (var i = 0; i < correnspodingNavigationItems.length; i++) {
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
  var topItem = document.getElementById(config.introKeyvisualMousetrapId);
  if (topItem) {
    kleiderordnung.observers.waypointObserver.observe(topItem);
  }
  /* observe social media section (not linked from the menu) as a waypoint for more consistent waypoint effect */
  var socialMediaSection = document.getElementById(config.socialMediaSectionId);
  if (socialMediaSection) {
    kleiderordnung.observers.waypointObserver.observe(socialMediaSection);
  }
}
