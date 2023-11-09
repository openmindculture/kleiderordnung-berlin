import {kleiderordnung_activateExternalFeed} from './handleElementsActivatedOnVisibilityAndConsent';
export function kleiderordnung_handleActivateCalendlyWidget() {

  var calendlyButtons = document.querySelectorAll('.button--calendly');
  for (var i=0; i<calendlyButtons.length; i++) {
    calendlyButtons[i].addEventListener('click', kleiderordnung_activateCalendlyWidget)
  }
}

export function kleiderordnung_activateCalendlyWidget() {
  var calendlyWidgetContainer = document.querySelector('.calendly.allowable--on-click');
  if (!calendlyWidgetContainer) { return; }
  kleiderordnung_activateExternalFeed(
    calendlyWidgetContainer,
    kleiderordnung_initializeCalendlyWidgetCallback,
  );
}

export function kleiderordnung_initializeCalendlyWidgetCallback() {
  if (Calendly) {
    Calendly.initPopupWidget({url: 'https://calendly.com/ingo-steinke/30min'});
    return false;
  } else {
    console.log('Calendly is not defined (yet)');
    return true;
  }
}
