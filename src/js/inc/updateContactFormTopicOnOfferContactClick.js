/**
 * @return void
 */
export function kleiderordnung_updateContactFormTopicOnOfferContactClick() {
  var updatedTopicOptionsDropdown = document.createElement('select');
  var offerContactButtons = document.querySelectorAll('.offers__offer__contactbutton');
  for (var i=0; i < offerContactButtons.length; i++) {
    offerContactButtons[i].addEventListener('click', kleiderordnung_updateContactFormTopic);
    var textDescription = offerContactButtons[i].dataset.parentName;
    if (textDescription) {
      var currentTopicOption = document.createElement('option');
      currentTopicOption.value = textDescription;
      var parentArticle = offerContactButtons[i].closest('.offers__offer');
      if (parentArticle) {
        var articleHeadline = parentArticle.querySelector('.offers__offer__headline');
        if (articleHeadline && articleHeadline.innerHTML) {
          currentTopicOption.innerHTML = articleHeadline.innerHTML;
        }
      }
      if (!currentTopicOption.innerHTML) {
        currentTopicOption.innerText = textDescription;
      }
      var verboseTopicHeadline = offerContactButtons[i].closest('.offers__offer');
      updatedTopicOptionsDropdown.add(currentTopicOption);
    }
  }
  if (updatedTopicOptionsDropdown && updatedTopicOptionsDropdown instanceof HTMLSelectElement) {
    if (typeof updatedTopicOptionsDropdown.classList === 'function') {

    }
    updatedTopicOptionsDropdown.classList.add(
      'wpcf7-form-control',
      'wpcf7-select',
      'contact__selectline',
      'contact__selectline--updated-using-headlines'
    );
    updatedTopicOptionsDropdown.id = 'anfrage-interesse';
    updatedTopicOptionsDropdown.name = 'anfrage-interesse';
    updatedTopicOptionsDropdown.ariaInvalid = 'false';
    var contactSelect = document.querySelector('#kontakt form select');
    if (contactSelect) {
      var contactSelectWrapper = contactSelect.parentElement;
      if (contactSelectWrapper) {
        contactSelect.remove();
        contactSelectWrapper.appendChild(updatedTopicOptionsDropdown);
      }
    }
   }
}
export function kleiderordnung_updateContactFormTopic(event) {
  var currentId= event.currentTarget.dataset.parentId;
  var currentName= event.currentTarget.dataset.parentName;
  var contactOptions = document.querySelectorAll('#kontakt form select option');
  if (contactOptions) {
    for (var j=0; j < contactOptions.length; j++) {
      if (contactOptions[j].value === currentId || contactOptions[j].value === currentName) {
        contactOptions[j].selected = true;
        break;
      }
    }
  }
}

