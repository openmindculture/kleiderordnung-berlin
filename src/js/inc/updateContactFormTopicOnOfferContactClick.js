/**
 * @return void
 */
export function kleiderordnung_updateContactFormTopicOnOfferContactClick() {
  var contactformTextarea = document.querySelector('#kontakt form textarea');
  if (contactformTextarea && contactformTextarea.dataset && !contactformTextarea.dataset.initialValue) {
    contactformTextarea.dataset.initialValue = contactformTextarea.value;
  }
  var offerContactButtons = document.querySelectorAll('.offers__offer__contactbutton');
  for (var i=0; i < offerContactButtons.length; i++) {
    offerContactButtons[i].addEventListener('click', kleiderordnung_updateContactFormTopic);
  }
}
export function kleiderordnung_updateContactFormTopic(event) {
  var currentId= event.currentTarget.dataset.parentId;
  var currentTitle= event.currentTarget.dataset.parentName;
  var contactformTextarea = document.querySelector('#kontakt form textarea');
  if (contactformTextarea.value === contactformTextarea.dataset.initialValue) {
    contactformTextarea.value += ' ' + kleiderordnung_translations['über'] + ' ' + currentTitle;
  }
}

