/** Revert Initial Spam Protection */
export function kleiderordnung_activateLazyLoadedMailtoLinks() {
  /* global document */
  var lazyLoadableLinkElements = document.querySelectorAll('a[data-mailing="lazy"]');
  for (var i = 0; i < lazyLoadableLinkElements.length; i++) {
    if (!lazyLoadableLinkElements[i]
      || !lazyLoadableLinkElements[i].dataset
      || !lazyLoadableLinkElements[i].dataset.user
      || !lazyLoadableLinkElements[i].dataset.domain) {
      return;
    }
    lazyLoadableLinkElements[i].href = 'mailto:'
      + lazyLoadableLinkElements[i].dataset.user
      + '@'
      + lazyLoadableLinkElements[i].dataset.domain;
  }
  var hiddenSpamProtectionElements = document.querySelectorAll('#kontakt .blockspam');
  for (var j = 0; j < hiddenSpamProtectionElements.length; j++) {
    hiddenSpamProtectionElements[j].remove();
  }
}
