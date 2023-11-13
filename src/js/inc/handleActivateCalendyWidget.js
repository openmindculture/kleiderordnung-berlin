import {kleiderordnung_activateExternalFeed} from './handleElementsActivatedOnVisibilityAndConsent';
export function kleiderordnung_handleActivateCalendlyWidget() {
  var calendlyButtons = document.querySelectorAll('.button--calendly');
  for (var i=0; i<calendlyButtons.length; i++) {
    calendlyButtons[i].addEventListener('click', kleiderordnung_activateCalendlyWidget)
  }
}

export function kleiderordnung_activateCalendlyWidget(event) {
  event.preventDefault();
  var calendlyWidgetContainer = document.querySelector('.calendly-overlay');
  if (!calendlyWidgetContainer) { return; }
  calendlyWidgetContainer.classList.add('active');
  document.body.classList.add('popup-visible');
  calendlyWidgetContainer.addEventListener('click', kleiderordnung_closeCalendlyWidget);
  var calendlyAllowButton = document.querySelector('.button__allow--calendly-once');
  calendlyAllowButton.addEventListener('click', kleiderordnung_initializeCalendlyWidgetCallback);
}

export function kleiderordnung_initializeCalendlyWidgetCallback() {
  var calendlyFrame = document.getElementById('calendlyFrame');
  if (!calendlyFrame) { return; }
  calendlyFrame.src = calendlyFrame.dataset.src;
}

export function kleiderordnung_closeCalendlyWidget() {
  var calendlyWidgetContainer = document.querySelector('.calendly-overlay');
  if (!calendlyWidgetContainer) { return; }
  calendlyWidgetContainer.classList.remove('active');
  document.body.classList.remove('popup-visible');
}
