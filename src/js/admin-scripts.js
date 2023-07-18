if (acf) {
  acf.add_filter( 'wysiwyg_tinymce_settings', function( mceInit, id ) {
    try { /* optional backend styles */
      var mceInitElement = document.getElementById(id);
      var acfFieldWrapper = mceInitElement.closest('div.acf-field');
      if (acfFieldWrapper && acfFieldWrapper.classList) {
        var /** @var {String[]} */ myClassesArray = Array.from(acfFieldWrapper.classList);
        var myClassName = myClassesArray.find( className => { return className.startsWith('acf-field-page') });
        console.log('undestroyed mceInit object ', mceInit);
        mceInit.body_class += ' acf_content_' + myClassName;
      }
    } catch {} /* no catch: END optional backend styles */
    return mceInit;
  });
}
