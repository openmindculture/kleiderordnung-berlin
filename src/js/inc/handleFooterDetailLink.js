/** handle showing more details in footer */

/* global document */
var kleiderordnung_handleFooterDetailLink = function() {
  var footerEcofriendlyInformation = document.getElementById('footer__ecofriendly');
  var footerDetailLink = document.getElementById('footer__link--ecofriendly');
  if (!footerEcofriendlyInformation || !footerDetailLink) { return; }
  footerDetailLink.addEventListener('click', function (event) {
    event.preventDefault();
    footerEcofriendlyInformation.classList.add('footer__ecofriendly--open');
  });
}

export { kleiderordnung_handleFooterDetailLink };
