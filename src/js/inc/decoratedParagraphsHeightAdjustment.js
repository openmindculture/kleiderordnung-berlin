// TODO obsolete?
// TODO we might want to make this a more generic solution
/** find decorated section to update their parallax background min height according to its foreground */

/**
 * @param {HTMLElement} rootElement HTML DOM element holding root style properties
 */
export function kleiderordnung_decoratedParagraphsHeightAdjustment( rootElement ) {
  if (!rootElement || typeof getComputedStyle !== 'function') { return; }
  var decoratedOfferSection = document.getElementById('angebot');
  if (!decoratedOfferSection) { return; }
  var contentLayer = decoratedOfferSection.querySelector('.offers__layer--content');
  if (!contentLayer) { return; }
  if (typeof contentLayer.offsetHeight !== 'number') { return; }
  var contentLayerHeightInRem = contentLayer.offsetHeight / 16;
  var currentMinHeight = getComputedStyle(document.documentElement, null).getPropertyValue('--parallax-min-height-offers');
  if (!currentMinHeight || typeof currentMinHeight !== 'string' || !currentMinHeight.endsWith('rem')) {
    return;
  }
  var currentMinHeightInRem = parseInt(currentMinHeight.substring(0, currentMinHeight.length - 3));
  if (contentLayerHeightInRem > currentMinHeightInRem) {
    rootElement.style.setProperty('--parallax-min-height-offers', '' + contentLayerHeightInRem + 'rem');
  }
}
