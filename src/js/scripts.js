'use strict';

import {kleiderordnung_activateAnalyticsTracking} from './inc/activateAnalyticsTracking';
import {kleiderordnung_activateIntroAnimation} from './inc/activateIntroAnimation';
import {kleiderordnung_activateLazyLoadedMailtoLinks} from './inc/activateLazyLoadedMailtoLinks';
import {kleiderordnung_carouselSetup} from './inc/carouselSetup';
import {kleiderordnung_decoratedParagraphsHeightAdjustment} from './inc/decoratedParagraphsHeightAdjustment';
import {kleiderordnung_enhanceNavigationMenu} from './inc/enhanceNavigationMenu';
import {
    kleiderordnung_intersectionCallback,
    kleiderordnung_handleElementsActivatedOnVisibilityAndConsent
} from "./inc/handleElementsActivatedOnVisibilityAndConsent";
import {kleiderordnung_keepAnchorTargetInLanguageSwitcher} from './inc/keepAnchorTargetInLanguageSwitcher';
import {kleiderordnung_observeStickyHeader} from './inc/observeStickyHeader';
import {kleiderordnung_observeWaypointAnchors} from './inc/observeWaypointAnchors';

/* global document, window */
window.kleiderordnung = {
  state: {
    /** @type {number} */                    currentAnimationReplayTimeoutIdNr: 0,
    /** @type {number} */                    feedStyleFetchRetryCount: 0,
    /** @type {number} */                    genericIdCounter: 0,
    /** @type {object|null} LottiePlayer */  introAnimation: null,
    /** @type {boolean} */                   isHeaderStuck: false,
    /** @type {HTMLElement|null} */          menu: null,
    /** @type {HTMLElement|null} */          menuOpenButton: null,
    /** type {number[]} */                   observableTimeoutsByTargetElementId: [],
    /** @type {HTMLElement|null} */          rootElement: null,
  },
  observers: {
    /** @type {IntersectionObserver|null} */ stickyHeaderObserver: null,
    /** @type {IntersectionObserver|null} */ waypointObserver: null,
  },
  config: {
    allowableElementsClassName: 'allowable--on-visibility', // triggers consent before loading external content
    feedCookieKey: 'instafeed', // name of the cookie set to remember consent
    feedCookieValue: 'allow',   // default value
    feedCookieMaxAgeSeconds: 31536000, // 1 year
    feedSectionClassName: 'socialmedia__feed__section',
    feedSectionActiveClassName: 'socialmedia__feed__section--active',
    feedContainerClassName: 'socialmedia__feed__container',
    feedContainerActiveClassName: 'socialmedia__feed__container--active', // set to feed container when allowed
    feedDataKey: 'allow',               // data key to control the expiry / validity when clicking allow
    feedDataValueAlways: 'always',      // data value to always allow (as opposed to the session default)
    feedScriptUrlDataKey: 'scripturl',  // data key which JavaScript to load (absolute or relative to project)
    feedStyleFetchRetryTimeoutMilliseconds: 2000,
    feedStyleMaxFetchRetries: 3,      // max. numbers of retries for loading styles for external feed
    feedStyleUrlDataKey: 'styleurl',  // data key which stylesheet to load (absolute or relative to project)
    introKeyvisualAnimationId: 'intro-keyvisual-animation',
    introKeyvisualMousetrapId: 'intro-keyvisual-mousetrap',
    introKeyvisualTimeoutMilliseconds: 30000,
    introKeyvisualScriptId: 'lottie-player-script',
    introKeyvisualComponentTagName: 'lottie-player',
    mainMenuNavWrapperSelector: 'navigation--main-navigation', // select parent menu from descendant button handler
    menuId: 'primary-menu',
    menuCloseButtonClassName: 'navigation__toggle--close',
    menuOpenButtonClassName: 'navigation__toggle--open',
    menuOpenedClassName: 'navigation__menu-opened', // .target for progressive enhancement of :target
    menuLinksSelector: '#primary-menu a[href]',     // links inside the menu
    noGlobalThisClassName: 'no-globalthis',         // set if special intro animation fallback necessary
    /** @object IntersectionObserver options */
    observerOptions: {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    },
    removableButtonsClassName: 'button__remove', // elements to be removed by consent handling
    socialMediaSectionId: 'socialmedia',
    stickyHeaderId: 'site-header',
    stuckClassName: 'stuck', // emulate ::stuck pseudo class for sticky header styling
    stickyHeaderHeightProperty: '--header-height',
    stickyStuckHeaderHeightProperty: '--header-height--stuck',
    supportsGlobalThis: (typeof globalThis === 'object'),
    supportsIntersectionObserver: (typeof IntersectionObserver === 'function'),
    waypointsQuerySelector: '#menu-main a.menu-item-link-waypoint',
  }
}

if (typeof document.querySelector === 'function') {
  // used to update actual header height to fix anchor positions
  window.kleiderordnung.state.rootElement = document.querySelector(':root');
}

document.addEventListener('DOMContentLoaded', function () {
  /* body.no-js should be handled by WordPress core in php body_class() */
  /* workaround against unreliable default fallback class on custom front page */
  document.body.classList.remove('no-js');
  document.body.classList.add('js');

  if (typeof window.matchMedia === 'function') {
    var isMobileQuery = window.matchMedia('(max-width: 768px)');
    window.kleiderordnung.config.isMobile = (isMobileQuery.matches);

    var prefersReducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    window.kleiderordnung.config.prefersReducedMotion = (prefersReducedMotionQuery.matches);

    var prefersMoreContrastQuery = window.matchMedia('(prefers-contrast: more)');
    window.kleiderordnung.config.prefersMoreContrast = (prefersMoreContrastQuery.matches);
  }

  kleiderordnung_activateIntroAnimation(window.kleiderordnung.config);
  kleiderordnung_observeStickyHeader(window.kleiderordnung.config);
  kleiderordnung_observeWaypointAnchors(window.kleiderordnung.config);
  kleiderordnung_enhanceNavigationMenu(window.kleiderordnung.config);
  kleiderordnung_handleElementsActivatedOnVisibilityAndConsent(
    kleiderordnung_intersectionCallback,
    window.kleiderordnung.config
  );
  kleiderordnung_carouselSetup();
  kleiderordnung_keepAnchorTargetInLanguageSwitcher();
  kleiderordnung_decoratedParagraphsHeightAdjustment(kleiderordnung.rootElement);
  kleiderordnung_activateAnalyticsTracking();

  window.setTimeout(kleiderordnung_activateLazyLoadedMailtoLinks, 9000);
});
