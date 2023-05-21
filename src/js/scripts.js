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

document.addEventListener('DOMContentLoaded', function() {

  /* body.no-js is handled by WordPress core in php body_class() */

  /* Lottie player has no fallback / polyfill for missing globalThis object */
  /* which seems hard to polyfill so let's activate our no-JS fallback instead */
  if (typeof globalThis !== 'object') {
    if (document.body && document.body.classList) {
      document.body.classList.add('no-globalthis');
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

  /* Animate on Visibility, Respect Reduced Motion Preference */

  kleiderordnung.observer = new IntersectionObserver(kleiderordnung.intersectionCallback, kleiderordnung.observerOptions);
  kleiderordnung.elementsActivatedOnVisibilityAndConsent = document.getElementsByClassName(kleiderordnung.allowableClassName);
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
  if (!kleiderordnung.prefersMoreContrast ) {
    window.setTimeout(function() {
      kleiderordnung.moreContrastElements = document.getElementsByClassName(kleiderordnung.variableContrastClassName);
      for (var k = 0; k < kleiderordnung.moreContrastElements.length; k++) {
        kleiderordnung.moreContrastElements[k].classList.remove(kleiderordnung.highContrastClassName);
      }
    }, 5000);
  }

  /* Activate Carousel Slider Controls */
  /* if instagram has no wrap-around, we don't need it here either */
  kleiderordnung.carouselWrappers = document.getElementsByClassName('carousel__wrapper');
  for (var l=0; l < kleiderordnung.carouselWrappers.length; l++) {
    var carouselWrapper = kleiderordnung.carouselWrappers[l];
    var carouselPrevButton = carouselWrapper.querySelector('.carousel__navigation__prev');
    var carouselNextButton = carouselWrapper.querySelector('.carousel__navigation__next');
    if (carouselNextButton) {
      carouselNextButton.addEventListener('click', function(event){
        event.preventDefault();
        var carouselWrapper = event.target.closest('.carousel__wrapper');
        if (carouselWrapper && carouselWrapper.querySelector) {
          var carouselViewport = carouselWrapper.querySelector('.carousel__viewport');
          var carouselActiveChildNumber = carouselViewport.dataset.activeChildNumber || '0';
          var carouselSlides = carouselViewport.children;
          if (!isNaN(Number(carouselActiveChildNumber))) {
            var carouselUpcomingChildIndex = Number(carouselActiveChildNumber) + 1;
            // TODO wrap-around might be counter-intuitive and feel buggy?
            carouselUpcomingChildIndex = carouselUpcomingChildIndex >= carouselSlides.length ? 0 : carouselUpcomingChildIndex;
            var carouselUpcomingItem = carouselSlides[carouselUpcomingChildIndex];
            if (carouselUpcomingItem) {
              /* TODO mobile targets missed completely */
              carouselUpcomingItem.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'end' });
              carouselViewport.dataset.activeChildNumber = '' + carouselUpcomingChildIndex;
            }
          }
        }
      })
    }
    if (carouselPrevButton) {
      carouselPrevButton.addEventListener('click', function(event){
        event.preventDefault();
        var carouselWrapper = event.target.closest('.carousel__wrapper');
        if (carouselWrapper && carouselWrapper.querySelector) {
          var carouselViewport = carouselWrapper.querySelector('.carousel__viewport');
          var carouselActiveChildNumber = carouselViewport.dataset.activeChildNumber || '0';
          var carouselSlides = carouselViewport.children;
          if (!isNaN(Number(carouselActiveChildNumber))) {
            var carouselUpcomingChildIndex = Number(carouselActiveChildNumber) - 1;
            carouselUpcomingChildIndex = carouselUpcomingChildIndex < 0  ? (carouselSlides.length - 1) : carouselUpcomingChildIndex;
            var carouselUpcomingItem = carouselSlides[carouselUpcomingChildIndex];
            if (carouselUpcomingItem) {
              carouselUpcomingItem.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'end' });
              carouselViewport.dataset.activeChildNumber = '' + carouselUpcomingChildIndex;
            }
          }
        }
      })
    }
    if (carouselNextButton && carouselPrevButton) {
      carouselWrapper.classList.add('carousel__wrapper--js-controls-initialized');
    }
  }
});
