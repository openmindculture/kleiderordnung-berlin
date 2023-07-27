console.log('admin-scripts.js');



document.addEventListener('DOMContentLoaded', function() {
  var loc = window.location.href;
  if (
      (loc.indexOf('//localhost') > -1) ||
      (loc.indexOf('//bs-local.') > -1)
    )
  {
    document.body.classList.add('url-is-local');
  } else if (
      (loc.indexOf('//preview.') > -1) ||
      (loc.indexOf('//stage.') > -1)  ||
      (loc.indexOf('//qa.') > -1)
    )
  {
    document.body.classList.add('url-is-local');
  } else {
    document.body.classList.add('url-is-production');
  }

  if (typeof acf !== 'undefined' && typeof acf.add_filter !== 'undefined') {
    acf.add_filter( 'wysiwyg_tinymce_settings', function( mceInit, id ) {
      try { /* optional backend styles */
        var mceInitElement = document.getElementById(id);
        var acfFieldWrapper = mceInitElement.closest('div.acf-field');
        if (acfFieldWrapper && acfFieldWrapper.classList) {
          var /** @var {String[]} */ myClassesArray = Array.from(acfFieldWrapper.classList);
          var myClassName = myClassesArray.find( function(className) {
            return className.startsWith('acf-field-page')
          });
          console.log('undestroyed mceInit object ', mceInit);
          mceInit.body_class += ' acf_content_' + myClassName;
        }
      } catch (e) {} /* no catch: END optional backend styles */
      return mceInit;
    });
  }
});
