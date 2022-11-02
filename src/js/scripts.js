'use strict';

/** integrate social media in compliance with privacy law using https://heyklaro.com */
window.klaroConfig = {
  storageMethod: 'localStorage',
  services : [
    {
      name : 'instagram',
      default: true,
      title : 'Instagram',
      purposes : ['Instagram-Bilder-Anzeige'],
      contextualConsentOnly: true,
      translations: {
        de: {
          description: 'Instagram ist ein Social-Media-Netzwerk. Unsere aktuellen Instagram-Fotos möchten wir gerne auf dieser Webseite anzeigen.'
        },
      },
    }
  ]
}

/** @type {String} */
var animatingClassName = 'animate__animated';

/** @type {Object} */
var observerOptions = {
  root: null,
  /** @type {String} */
  rootMargin: '0px',
  /** @type {Number} */
  threshold: 0.2
};

/**
 * Observe .animated-on-visibility to add animation class when elements become visible
 * @param {Array} intersectingEntries
 * param {IntersectionObserver=} observer @optional= TODO how to note optional?
 */
function intersectionCallback(intersectingEntries) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    if (intersectingEntries[j].isIntersecting && intersectingEntries[j].intersectionRatio > observerOptions.threshold) {
      if (intersectingEntries[j].target && intersectingEntries[j].target.classList) {
        // switch animation or insta feed prepareExternalFeed(intersectingEntries[j])
        var datakey = 'animationclass';
        var flexContainer = intersectingEntries[j].target.parentElement;
        if (flexContainer) {
          var flexDirection = window.getComputedStyle(flexContainer).flexDirection;
          if (flexDirection === 'column') {
            datakey = 'animationclassincolumn';
          }
        }
        var animationClassName = intersectingEntries[j].target.dataset[datakey];
        intersectingEntries[j].target.classList.add(animatingClassName, animationClassName);
      }
    }
  }
}

// callback insta feed visible:
// mit Visibility prüfen wir ob es schon Consent gibt
//   consent && load external scripts
//   else add event handlers to button to set cookies and load external scripts

function prepareExternalFeed(buttonWrapperElement) {
  if (document.cookie.split(';').some((item) => item.trim().startsWith('reader='))) {
    allowAndActivateExternalFeed();
  } else {
    // add button handlers
    buttonWrapperElement.querySelectorAll("[data-allow]");
    // onclick = function(buttonElement) { allowAndActivateExternalFeed(buttonElement)
  }
}

// callback allowAndLoad(allowanceDuration)

function allowAndActivateExternalFeed(buttonElement) {
  var feedContainerElement = buttonElement.closest(".feed__container");
  var consentCookie = "instafeed=allow; SameSite=strict; secure";
  if (buttonElement.dataset.allow === "always") {
    // ;max-age=max-age-in-seconds (e.g., 60*60*24*365 or 31536000 for a year)
    consentCookie += "expires=Fri, 31 Dec 9999 23:59:59 GMT;";
  } // If neither expires nor max-age specified it will expire at the end of session.
  document.cookie = consentCookie;
  if (feedContainerElement) {
    activateExternalFeed(feedContainerElement);
  }
}

function activateExternalFeed(feedContainerElement) {
  if (!feedContainerElement) { return; }
  var styleFileUrl = feedContainerElement.dataset.styleurl;
  if (styleFileUrl) {
    fetch(styleFileUrl)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var style = document.head.appendChild(document.createElement('style'));
        style.textContent = text;
        console.log("juicerFeedContainer", feedContainerElement);
        if (feedContainerElement && feedContainerElement.classList) {
          feedContainerElement.classList.remove("initially-hidden");
        }
      }).catch(function(err) {
      console.error('style load failed with error', err);
    });
  }
  var scriptFileUrl = feedContainerElement.dataset.scripturl;
  if (scriptFileUrl) {
    var scriptElement = document.createElement('script')
    scriptElement.src = scriptFileUrl;
    document.head.append(scriptElement);
  }
  feedContainerElement.classList.add('feed__container--active');
}

document.addEventListener('DOMContentLoaded', function() {
  var observer = new IntersectionObserver(intersectionCallback, observerOptions);
  var elementsActivatedOnVisibilityAndConsent = {};
  // ohne visibility passiert nichts mit dem Markup

  var prefersReducedMotionQuery = window.matchMedia("(prefers-reduced-motion: reduce)");
  if (prefersReducedMotionQuery && !prefersReducedMotionQuery.matches) {
    var elementsAnimatedOnVisibility = document.getElementsByClassName("animate--on-visibility");
    for (var i = 0; i < elementsAnimatedOnVisibility.length; i++) {
      observer.observe(elementsAnimatedOnVisibility[i]);
    }
  }
  var prefersMoreContrastQuery = window.matchMedia("(prefers-contrast: more)");
  if (prefersMoreContrastQuery && !prefersMoreContrastQuery.matches) {
    window.setTimeout(function() {
      var moreContrastElements = document.getElementsByClassName("contrast--varies");
      for (var i = 0; i < moreContrastElements.length; i++) {
        moreContrastElements[i].classList.remove("contrast--more");
        console.log("removed high contrast class");
      }
    }, 5000);
  }
});
