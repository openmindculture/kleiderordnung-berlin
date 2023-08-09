import {kleiderordnung_activateLazyLoadedMailtoLinks} from "./activateLazyLoadedMailtoLinks";

/** progressive enhancement for language switcher links */
export function kleiderordnung_keepAnchorTargetInLanguageSwitcher() {
  /* global window, document */
  var languageLinkElements = document.querySelectorAll('#menu-main-item-language a[hreflang]');
  var languageLinkElementsCount = languageLinkElements.length;
  for (var i = 0; i < languageLinkElementsCount; i++) {
    if (!languageLinkElements[i]) { return; }
    languageLinkElements[i].addEventListener('click', function (e) {
      if (!e.currentTarget || !e.currentTarget.href) { return; }
      var currentTargetHref = e.currentTarget.href;
      if (currentTargetHref.includes('#')) {
        currentTargetHref = currentTargetHref.split('#')[0];
      }
      if (window.location.hash.startsWith('#')) {
        currentTargetHref += window.location.hash;
        e.currentTarget.href = currentTargetHref;
      }
    });
  }
}
