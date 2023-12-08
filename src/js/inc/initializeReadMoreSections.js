// initialize read-more sections

export function kleiderordnung_initializeReadMoreSections() {
  var readMoreButtonWrappers = document.getElementsByClassName('offers__offer__features__list__readmore');
  for (var i=0; i < readMoreButtonWrappers.length; i++) {
    readMoreButtonWrappers[i].classList.add('visible');
    var moreListItems = readMoreButtonWrappers[i].parentElement.querySelectorAll('.offers__offer__features__list__readmore ~ li');
    for (var j=0; j < moreListItems.length; j++) {
      moreListItems[j].classList.add('hidden');
    }
    var readMoreButton = readMoreButtonWrappers[i].querySelector('button');
    if (readMoreButton) {
      readMoreButton.addEventListener('click', function(event){
        var currentList =  event.currentTarget.closest('ul');
        if (currentList) {
          var currentMoreListItems = currentList.querySelectorAll('.offers__offer__features__list__readmore ~ li');
          for (var k=0; k < currentMoreListItems.length; k++) {
            currentMoreListItems[k].classList.remove('hidden');
          }
          event.currentTarget.parentElement.classList.remove('visible');
        }
      });
    }
  }
}

