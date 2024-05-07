export function kleiderordnung_growWidthToPreventOverflow() {
  var growables = document.getElementsByClassName('grow-x');
  for (var i=0; i < growables.length; i++) {
    var growable = growables[i];
    var growableStyle = getComputedStyle(growable);
    var parentStyle = getComputedStyle(growable.parentElement);
    var parentPixelHeight = parseInt(parentStyle.height);
    var growableOriginalCSSlHeight = growable.style.height;
    growable.style.height = 'auto';
    var growablePixelHeight = growable.scrollHeight;
    growable.style.height = growableOriginalCSSlHeight;
    var topHeightOverflow = growablePixelHeight - parentPixelHeight;
    if (topHeightOverflow > 0) {
      var growableWidth = parseInt(growableStyle.width);
      // TODO add linear offset or factor for an even greater width increase, if necessary
      growable.style.width = growableWidth + topHeightOverflow + 'px';
    }
  }
}
