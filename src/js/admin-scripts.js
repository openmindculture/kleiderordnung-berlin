if (acf) {
  acf.add_filter( 'wysiwyg_tinymce_settings', function( mceInit, id ) {
    var myCurrentEditor = document.getElementById(id);
    var myClosestWrapper = myCurrentEditor.closest('div.acf-field');
    if (myClosestWrapper && myClosestWrapper.classList) {
      var myClassesArray = Array.from(myClosestWrapper.classList);
      var myClassName = myClassesArray.find( className => { return className.startsWith('acf-field-page') });
      myCurrentEditor.classList.add('acf_content_' + myClassName);
    }
    return mceInit;
  });
}
