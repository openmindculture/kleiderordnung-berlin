'use strict';
var kleiderordnung = {}; /* TODO prefix all functions and variables with theme prefix ?! */
/* TODO remove unused optional components like contrast-adaption, intersection observer, ... */

kleiderordnung.animateableClassName = 'animate--on-visibility'; // triggers micro animations
kleiderordnung.animatingClassName = 'animate__animated'; // will be added to animateable elements
kleiderordnung.animationClassDataKey = 'animationclass'; // data key to hold animation class name
kleiderordnung.animationClassInColumnDataKey = 'animationclassincolumn'; // dto. if element is inside of vertical layout

kleiderordnung.currentAnimationReplayTimeoutId = null;
kleiderordnung.currentAnimationPauseTimeoutId = null;

kleiderordnung.variableContrastClassName = 'contrast--varies' // triggers automatic contrast adjustment
kleiderordnung.highContrastClassName = 'contrast--more'; // to be removed from .contrast--varies elements

kleiderordnung.allowableClassName = 'allowable--on-visibility'; // triggers consent challenge before external content loading
kleiderordnung.feedCookieKey = 'instafeed'; // name of the cookie set to remember consent
kleiderordnung.feedCookieValue = 'allow'; // default value
kleiderordnung.feedSectionClassName = 'socialmedia__feed__section';
kleiderordnung.feedSectionActiveClassName = 'socialmedia__feed__section--active';
kleiderordnung.feedContainerClassName = 'socialmedia__feed__container';
kleiderordnung.feedContainerActiveClassName = 'socialmedia__feed__container--active'; // set to feed container when allowed and loaded
kleiderordnung.feedDataKey = 'allow'; // data key to control the expiry / validity when clicking allow
kleiderordnung.feedDataValueAlways = 'always'; // data value to always allow (as opposed to the session default)
kleiderordnung.feedScriptUrlDataKey = 'scripturl'; // data key which JavaScript to load (absolute or relative to project)
kleiderordnung.feedStyleUrlDataKey = 'styleurl'; // data key which stylesheet to load (absolute or relative to project)

kleiderordnung.menuId = 'primary-menu';
kleiderordnung.menuOpenButtonClassName = 'navigation__toggle--open';
kleiderordnung.menuCloseButtonClassName= 'navigation__toggle--close';
kleiderordnung.menuOpenedClassName = 'navigation__menu-opened'; // .target for progressive enhancement of :target
kleiderordnung.menuLinksSelector = '#primary-menu a[href]'; // links inside the menu
kleiderordnung.mainMenuNavWrapperSelector = 'navigation--main-navigation'; // select parent menu from descendant button handler

kleiderordnung.stickyHeaderId = 'site-header';
kleiderordnung.stuckClassName = 'stuck'; // emulate ::stuck pseudo class for sticky header styling
kleiderordnung.root = document.querySelector(':root'); // to update actual header height to fix anchor positions

kleiderordnung.introKeyvisualAnimationId = 'intro-keyvisual-animation';
kleiderordnung.introKeyvisualMousetrapId = 'intro-keyvisual-mousetrap'

/** type {number[]} TimeoutID for DOM element ID to prevent redundant checks and involuntary smooth scroll side effect */
kleiderordnung.observableTimeoutsByTargetElementId = [];
kleiderordnung.genericIdCounter = 0;

kleiderordnung.isMobileQuery = window.matchMedia('(max-width: 768px)');
kleiderordnung.isMobile = (kleiderordnung.isMobileQuery && kleiderordnung.isMobileQuery.matches);

kleiderordnung.prefersReducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
kleiderordnung.prefersReducedMotion = (kleiderordnung.prefersReducedMotionQuery && kleiderordnung.prefersReducedMotionQuery.matches);

kleiderordnung.prefersMoreContrastQuery = window.matchMedia('(prefers-contrast: more)');
kleiderordnung.prefersMoreContrast = (kleiderordnung.prefersMoreContrastQuery && kleiderordnung.prefersMoreContrastQuery.matches);

kleiderordnung.supportsIntersectionObserver = (typeof IntersectionObserver === 'function');
kleiderordnung.supportsGlobalThis = (typeof globalThis === 'object');

/** @object IntersectionObserver options */
kleiderordnung.observerOptions = {
  root: null,
  rootMargin: '0px',
  threshold: 0.1
};

/**
 * Observe .animated-on-visibility to add animation class when elements become visible
 * Observe .allowable--on-visibility to activate external feed only if it ever becomes visible
 * @param {IntersectionObserverEntry[]} intersectingEntries
 */
kleiderordnung.intersectionCallback = function(intersectingEntries) {
  for (var j = 0; j < intersectingEntries.length; j++) {
    var intersectingEntry = intersectingEntries[j];
    if (intersectingEntry.isIntersecting && intersectingEntry.intersectionRatio > kleiderordnung.observerOptions.threshold) {
      var targetElement = /** @type {HTMLElement} */ intersectingEntry.target;
      if (targetElement) {
        var targetId = targetElement.id;
        if (!targetId) {
          kleiderordnung.genericIdCounter++;
          targetId = '_observable' + genericIdCounter;
          targetElement.id = targetId;
        }
        if (!kleiderordnung.observableTimeoutsByTargetElementId[targetId]) {
          kleiderordnung.observableTimeoutsByTargetElementId[targetId] = window.setTimeout(function() {
            var debouncedEntry = intersectingEntry;
            var debouncedTarget = /** @type {HTMLElement} */ debouncedEntry.target;
            if (debouncedEntry.isIntersecting && debouncedEntry.intersectionRatio > kleiderordnung.observerOptions.threshold) {
              kleiderordnung.handleAppearedElement(debouncedTarget);
            }
            kleiderordnung.observableTimeoutsByTargetElementId[debouncedTarget.id] = undefined;
          }, 500);
        }
      }
    } else {
      var invisibleTargetElement = intersectingEntries[j].target;
      if (invisibleTargetElement) {
        var invisibleTargetId = invisibleTargetElement.id;
        if (kleiderordnung.observableTimeoutsByTargetElementId[invisibleTargetId]) {
          window.clearTimeout(kleiderordnung.observableTimeoutsByTargetElementId[invisibleTargetId]);
          kleiderordnung.observableTimeoutsByTargetElementId[invisibleTargetId] = undefined;
        }
      }
    }
  }
}

/** @param {HTMLElement} targetElement */
kleiderordnung.handleAppearedElement = function(targetElement) {
  if (targetElement.dataset.animationclass && targetElement.classList) {
    var datakey = kleiderordnung.animationClassDataKey;
    if (kleiderordnung.isMobile) {
      datakey = kleiderordnung.animationClassInColumnDataKey;
    }
    if (datakey) {
      var animationClassName = targetElement.dataset[datakey];
      if (animationClassName && animationClassName !== '') {
        targetElement.classList.add(kleiderordnung.animatingClassName, kleiderordnung.animationClassName);
      }
    }
  }
  if (targetElement.dataset.allowable) {
    kleiderordnung.prepareExternalFeed(targetElement);
  }
}

/**
 * @param {HTMLElement} feedContainerElement
 */
kleiderordnung.prepareExternalFeed = function(feedContainerElement) {
  if (!feedContainerElement) { return; }
  if (
    document.cookie.split(';').some(
      function(item) {
        return item.trim().startsWith(kleiderordnung.feedCookieKey + '=' + kleiderordnung.feedCookieValue);
      }
    )
  ) {
    kleiderordnung.activateExternalFeed(feedContainerElement);
  } else {
    var feedSectionElement = feedContainerElement.closest('.' + kleiderordnung.feedSectionClassName);
    if (!feedSectionElement) { return; }
    var buttonElements = feedSectionElement.querySelectorAll('[data-' + kleiderordnung.feedDataKey + ']');
    for (var i = 0; i < buttonElements.length; i++) {
      var buttonElement = buttonElements[i];
      buttonElement.addEventListener('click', function(buttonEvent) {
        kleiderordnung.allowAndActivateExternalFeed(buttonEvent.currentTarget);
      }, false);
    }
  }
}

/** @param {HTMLElement} buttonElement */
kleiderordnung.allowAndActivateExternalFeed = function(buttonElement) {
  if (!buttonElement) { return; }
  var feedSectionElement = buttonElement.closest('.' + kleiderordnung.feedSectionClassName);
  if (!feedSectionElement) { return; }
  var feedContainerElement = feedSectionElement.querySelector('.' + kleiderordnung.feedContainerClassName);
  if (!feedContainerElement) { return; }
  var consentCookie = kleiderordnung.feedCookieKey + '=' + kleiderordnung.feedCookieValue + ';samesite=strict;secure';
  if (buttonElement.dataset[kleiderordnung.feedDataKey].allow === kleiderordnung.feedDataValueAlways) {
    var maxAgeSeconds = 31536000; // 1 year
    consentCookie += ';max-age=' + maxAgeSeconds +  ';';
  } // If neither expires nor max-age specified it will expire at the end of session.
  document.cookie = consentCookie;
  if (feedContainerElement) {
    kleiderordnung.activateExternalFeed(feedContainerElement);
  }
}

/** @param {HTMLElement} feedContainerElement */
kleiderordnung.activateExternalFeed = function(feedContainerElement) {
  if (!feedContainerElement) { return; }
  var styleFileUrl = feedContainerElement.dataset[kleiderordnung.feedStyleUrlDataKey];
  if (styleFileUrl) {
    fetch(styleFileUrl)
      .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        var style = document.head.appendChild(document.createElement('style'));
        style.textContent = text;
      }).catch(function(err) {
      // TODO schedule retry? or rather insert <style> element instead of fetching?
    });
  }
  var scriptFileUrl = feedContainerElement.dataset[kleiderordnung.feedScriptUrlDataKey];
  if (scriptFileUrl) {
    var scriptElement = document.createElement('script');
    scriptElement.src = scriptFileUrl;
    document.head.append(scriptElement);
  }
  if (feedContainerElement && feedContainerElement.classList) {
    feedContainerElement.classList.add(kleiderordnung.feedContainerActiveClassName);
    var feedSectionElement = feedContainerElement.closest('.' + kleiderordnung.feedSectionClassName);
    if (feedSectionElement && feedSectionElement.classList) {
      feedSectionElement.classList.add(kleiderordnung.feedSectionActiveClassName);
    }
  }
}

// TODO obsolete?
kleiderordnung.decoratedParagraphsHeightAdjustment = function() {
// find decorated section to update their parallax background min height according to its foreground
// TODO we might want to make this a more generic solution
  kleiderordnung.decoratedOfferSection = document.getElementById('angebot');
  if (!kleiderordnung.decoratedOfferSection) { return; }
  var contentLayer = kleiderordnung.decoratedOfferSection.querySelector('.offers__layer--content');
  if (!contentLayer) { return; }
  if (typeof contentLayer.offsetHeight !== 'number') { return; }
  var contentLayerHeightInRem = contentLayer.offsetHeight / 16;
  var currentMinHeight = getComputedStyle(document.documentElement, null).getPropertyValue('--parallax-min-height-offers');
  if (!currentMinHeight || typeof currentMinHeight !== 'string' || !currentMinHeight.endsWith('rem')) {
    return;
  }
  var currentMinHeightInRem = parseInt(currentMinHeight.substring(0, currentMinHeight.length - 3));
  if (contentLayerHeightInRem > currentMinHeightInRem) {
    kleiderordnung.root.style.setProperty('--parallax-min-height-offers', '' + contentLayerHeightInRem + 'rem');
  }
}

/** Matomo Analytics */
kleiderordnung.activateAnalyticsTracking = function() {
  var _paq = window._paq = window._paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  _paq.push(['alwaysUseSendBeacon']);
  _paq.push(['setTrackerUrl', kleiderordnung_wpurl + '/wp-content/plugins/matomo/app/matomo.php']);
  _paq.push(['setSiteId', '1']);
  var g = document.createElement('script');
  var s = document.getElementsByTagName('script')[0];
  g.type = 'text/javascript';
  g.async = true;
  g.src = kleiderordnung_wpurl + '/wp-content/uploads/matomo/matomo.js';
  s.parentNode.insertBefore(g,s);
}

/** progressive enhancement for language switcher links */
kleiderordnung.keepAnchorTargetInLanguageSwitcher = function() {
  kleiderordnung.languageLinkElements = document.querySelectorAll('#menu-main-item-language a[hreflang]');
  for (var i = 0; i < kleiderordnung.languageLinkElements.length; i++) {
    if (!kleiderordnung.languageLinkElements[i]) { return;     }
    kleiderordnung.languageLinkElements[i].addEventListener('click', function (e) {
      if (!e.currentTarget || !e.currentTarget.href) { return; }
      var currentTargetHref = e.currentTarget.href;
      if (currentTargetHref.includes('#')) {
        currentTargetHref = currentTargetHref.split('#')[0];
      }
      if (window.location.hash.startsWith('#')) {
        currentTargetHref += window.location.hash;
        e.currentTarget.href = currentTargetHref;
      }
    });
  }
}

/** Revert Initial Spam Protection */
kleiderordnung.activateLazyLoadedMailtoLinks = function() {
  kleiderordnung.lazyLoadableLinkElements = document.querySelectorAll('a[data-mailing="lazy"]');
  for (var i = 0; i < kleiderordnung.lazyLoadableLinkElements.length; i++) {
    if (!kleiderordnung.lazyLoadableLinkElements[i]
      || !kleiderordnung.lazyLoadableLinkElements[i].dataset
      || !kleiderordnung.lazyLoadableLinkElements[i].dataset.user
      || !kleiderordnung.lazyLoadableLinkElements[i].dataset.domain) {
      return;
    }
    kleiderordnung.lazyLoadableLinkElements[i].href = 'mailto:'
      + kleiderordnung.lazyLoadableLinkElements[i].dataset.user
      + '@'
      + kleiderordnung.lazyLoadableLinkElements[i].dataset.domain;
  }
  kleiderordnung.hiddenSpamProtectionElements = document.querySelectorAll('#kontakt .blockspam');
  for (var j = 0; j < kleiderordnung.hiddenSpamProtectionElements.length; j++) {
    kleiderordnung.hiddenSpamProtectionElements[j].remove();
  }
}

document.addEventListener('DOMContentLoaded', function() {

  /* body.no-js is handled by WordPress core in php body_class() */
  /* workaround against unreliable default fallback class on custom front page */
  document.body.classList.remove('no-js');
  document.body.classList.add('js');

  /* Lottie player has no fallback / polyfill for missing globalThis object */
  /* which seems hard to polyfill so let's activate our no-JS fallback instead */
  if (!kleiderordnung.supportsGlobalThis && document.body && document.body.classList) {
    document.body.classList.add('no-globalthis');
    var lottiePlayerScript = document.getElementById('lottie-player-script');
    if (lottiePlayerScript) {
      lottiePlayerScript.remove();
    }
    var lottieAnimations = document.getElementsByTagName('lottie-player');
    for (var la = 0; la < lottieAnimations.length; la++) {
      if (lottieAnimations[la]) {
        lottieAnimations[la].remove();
      }
    }
  }

  /* Key Visual Lottie Animation Control */
  if (!kleiderordnung.prefersReducedMotion) {
    /** TODO add JSDoc for player object */
    kleiderordnung.introAnimation = document.getElementById(kleiderordnung.introKeyvisualAnimationId);
    if (kleiderordnung.introAnimation) {
      kleiderordnung.introAnimation.addEventListener('ready', function() {
        kleiderordnung.introAnimation.play();
        kleiderordnung.currentAnimationReplayTimeoutId = window.setTimeout(function(){
          kleiderordnung.introAnimation.play();
        }, 30000);
      });
      /** @var {HTMLElement|null} */
      kleiderordnung.introAnimationMousetrap = document.getElementById(kleiderordnung.introKeyvisualMousetrapId);
      if (kleiderordnung.introAnimationMousetrap) {
        kleiderordnung.introAnimationMousetrap.addEventListener('mouseenter', function() {
          window.clearTimeout(kleiderordnung.currentAnimationReplayTimeoutId);
          kleiderordnung.introAnimation.play();
          kleiderordnung.currentAnimationReplayTimeoutId = window.setTimeout(function(){
            kleiderordnung.introAnimation.play();
          }, 30000);
        });
      }
    }
  }


  if (kleiderordnung.supportsIntersectionObserver) {
    /* Header / Navigation control */
    kleiderordnung.stickyHeader = document.getElementById(kleiderordnung.stickyHeaderId);
    if (kleiderordnung.stickyHeader) {
      kleiderordnung.root.style.setProperty('--header-height', '' + kleiderordnung.stickyHeader.offsetHeight + 'px');
      kleiderordnung.stickyObserver = new IntersectionObserver(
        function(intersectingEntries) {
          kleiderordnung.isStuck = intersectingEntries[0].intersectionRatio < 1;
          intersectingEntries[0].target.classList.toggle(kleiderordnung.stuckClassName, kleiderordnung.isStuck);
          if (kleiderordnung.isStuck) {
            kleiderordnung.root.style.setProperty('--header-height--stuck', '' + kleiderordnung.stickyHeader.offsetHeight + 'px');
          }
        },
        { threshold: [1] }
      );
      kleiderordnung.stickyObserver.observe(kleiderordnung.stickyHeader);
    }

    /* Waypoint effect: visible link target (section) adds .active to matching main navigation item */
    kleiderordnung.waypointObserver = new IntersectionObserver(
      function(intersectingEntries) {
        for (var j = 0; j < intersectingEntries.length; j++) {
          var intersectingEntry = intersectingEntries[j];
          if (intersectingEntry.isIntersecting && intersectingEntry.intersectionRatio > kleiderordnung.observerOptions.threshold) {
            var targetElement = /** @type {HTMLElement} */ intersectingEntry.target;
            if (targetElement) {
              var targetId = targetElement.id;
              if (targetId) {
                var previousCorrespondingNavigationItem = document.querySelector('#menu-main .active');
                if (previousCorrespondingNavigationItem && previousCorrespondingNavigationItem.classList) {
                  previousCorrespondingNavigationItem.classList.remove('active');
                }
                var currentCorrespondingNavigationItem = document.querySelector('#menu-main-item-' + targetId + ' a');
                if  (currentCorrespondingNavigationItem && currentCorrespondingNavigationItem.classList) {
                  currentCorrespondingNavigationItem.classList.add('active');
                }
              }
            }
          }
        }
      },
      kleiderordnung.observerOptions
    );
    var correnspodingNavigationItems = document.querySelectorAll('#menu-main a.menu-item-link-waypoint');
    if (correnspodingNavigationItems) {
      for (var cni=0; cni < correnspodingNavigationItems.length; cni++) {
        if (correnspodingNavigationItems[cni] && correnspodingNavigationItems[cni].href) {
          var correspondingWayPointUrl = new URL(correnspodingNavigationItems[cni].href);
          var correspondingWayPointId = correspondingWayPointUrl.hash.substring(1);
          var correspondingWayPoint = document.getElementById(correspondingWayPointId);
          if (correspondingWayPoint) {
            kleiderordnung.waypointObserver.observe(correspondingWayPoint);
          }
        }
      }
    }
    /* observe top or key visual (which has no active menu item) to disable item below when scrolling to top */
    var topItem = document.getElementById(kleiderordnung.introKeyvisualMousetrapId);
    if (topItem)  {
      kleiderordnung.waypointObserver.observe(topItem);
    }
  }

  // progressive enhancement for navigation menu behavior
  kleiderordnung.menu = document.getElementById(kleiderordnung.menuId);
  kleiderordnung.menuOpenButton = document.getElementsByClassName(kleiderordnung.menuOpenButtonClassName)[0];
  kleiderordnung.menuOpenButton.addEventListener('click', function(event) {
    event.preventDefault();
    kleiderordnung.menuOpenButton = /** @type {HTMLElement} */ event.currentTarget;
    kleiderordnung.menu = document.getElementById(kleiderordnung.menuId);
    kleiderordnung.menu.classList.add(kleiderordnung.menuOpenedClassName);
    kleiderordnung.menuOpenButton.classList.add(kleiderordnung.menuOpenedClassName);
  });
  kleiderordnung.menuCloseButton = document.getElementsByClassName(kleiderordnung.menuCloseButtonClassName)[0];
  kleiderordnung.menuCloseButton.addEventListener('click', function(event) {
    event.preventDefault();
    kleiderordnung.menu.classList.remove(kleiderordnung.menuOpenedClassName);
    kleiderordnung.menuOpenButton.classList.remove(kleiderordnung.menuOpenedClassName);
  });
  kleiderordnung.navLinks = document.querySelectorAll(kleiderordnung.menuLinksSelector);
  for (var o = 0; o < kleiderordnung.navLinks.length; o++) {
    kleiderordnung.navLinks[o].addEventListener('click', function(event) {
      kleiderordnung.menu.classList.remove(kleiderordnung.menuOpenedClassName);
      kleiderordnung.menuOpenButton.classList.remove(kleiderordnung.menuOpenedClassName);
    });
  }

  kleiderordnung.elementsActivatedOnVisibilityAndConsent = document.getElementsByClassName(kleiderordnung.allowableClassName);
  /* Animate on Visibility, Respect Reduced Motion Preference */
  if (kleiderordnung.supportsIntersectionObserver) {
    kleiderordnung.observer = new IntersectionObserver(kleiderordnung.intersectionCallback, kleiderordnung.observerOptions);
    for (var i = 0; i < kleiderordnung.elementsActivatedOnVisibilityAndConsent.length; i++) {
      kleiderordnung.observer.observe(kleiderordnung.elementsActivatedOnVisibilityAndConsent[i]);
    }
    if (!kleiderordnung.prefersReducedMotion) {
      kleiderordnung.elementsAnimatedOnVisibility = document.getElementsByClassName(kleiderordnung.animateableClassName);
      for (var j = 0; j < kleiderordnung.elementsAnimatedOnVisibility.length; j++) {
        kleiderordnung.observer.observe(kleiderordnung.elementsAnimatedOnVisibility[j]);
      }
    }
    kleiderordnung.prefersMoreContrastQuery = window.matchMedia('(prefers-contrast: more)');
    if (!kleiderordnung.prefersMoreContrast) {
      window.setTimeout(function () {
        kleiderordnung.moreContrastElements = document.getElementsByClassName(kleiderordnung.variableContrastClassName);
        for (var k = 0; k < kleiderordnung.moreContrastElements.length; k++) {
          kleiderordnung.moreContrastElements[k].classList.remove(kleiderordnung.highContrastClassName);
        }
      }, 5000);
    }
  } else { /* activate allowable elements directly if no intersection observer available like in old Safari */
    for (var i = 0; i < kleiderordnung.elementsActivatedOnVisibilityAndConsent.length; i++) {
      var activateableElement = kleiderordnung.elementsActivatedOnVisibilityAndConsent[i];
      if (activateableElement.dataset.allowable) {
        kleiderordnung.prepareExternalFeed(activateableElement);
      }
    }
  }

  /**
   * @param {HTMLElement} eventTarget DOM welement inside carousel wrapper
   * @param {Number} carouselSlideStep pixels to scroll by
   */
  kleiderordnung.carouselDoSlide = function (eventTarget, carouselSlideStep) {
    if (!eventTarget) { return; }
    var carouselWrapper = eventTarget.closest('.carousel__wrapper');
    if (!carouselWrapper || !carouselWrapper.querySelector) { return; }
    var carouselViewport = carouselWrapper.querySelector('.carousel__viewport');
    if (!carouselViewport || !carouselViewport.getBoundingClientRect()) { return; }
    carouselViewport.scrollBy({ left: carouselSlideStep, top: 0, behavior: 'smooth' });
    return;
  }

  kleiderordnung.carouselWrappers = document.getElementsByClassName('carousel__wrapper');
  for (var l=0; l < kleiderordnung.carouselWrappers.length; l++) {
    var carouselWrapper = kleiderordnung.carouselWrappers[l];
    var carouselSlideWidth = 644; // fallback: expected width of 1 image + 1 quote on desktop
    var carouselFirstSlideItem = carouselWrapper.querySelector('.carousel__item:first-child');
    if (carouselFirstSlideItem && carouselFirstSlideItem.getBoundingClientRect()) {
      carouselSlideWidth = carouselFirstSlideItem.getBoundingClientRect().width;
    }
    var carouselNextButton = carouselWrapper.querySelector('.carousel__navigation__next');
    if (carouselNextButton) {
      carouselNextButton.addEventListener('click', function(event){
        event.preventDefault();
        kleiderordnung.carouselDoSlide(event.currentTarget, carouselSlideWidth);
      })
    }
    var carouselPrevButton = carouselWrapper.querySelector('.carousel__navigation__prev');
    if (carouselPrevButton) {
      carouselPrevButton.addEventListener('click', function(event){
        event.preventDefault();
        kleiderordnung.carouselDoSlide(event.currentTarget, (-1 * carouselSlideWidth));
      })
    }
    if (carouselNextButton && carouselPrevButton) {
      carouselWrapper.classList.add('carousel__wrapper--js-controls-initialized');
    }
  }

  kleiderordnung.decoratedParagraphsHeightAdjustment();
  kleiderordnung.activateAnalyticsTracking();
  kleiderordnung.keepAnchorTargetInLanguageSwitcher();
  window.setTimeout(kleiderordnung.activateLazyLoadedMailtoLinks, 9000);
});
