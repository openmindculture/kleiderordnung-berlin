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
        /** @type {HTMLElement|null} */ rootElement: null,
        /** @type {HTMLElement|null} */ menu: null,
        /** @type {HTMLElement|null} */ menuOpenButton: null,
        /** type {number[]} */ observableTimeoutsByTargetElementId: [],
        /** @type {number} */ genericIdCounter: 0,
        /** @type {number} */ currentAnimationReplayTimeoutIdNr: 0,
        /** @type {object|null} LottiePlayer instance */ introAnimation: null,
        /** @type {boolean} */ isHeaderStuck: false,
    },
    observers: {
        stickyHeaderObserver: null,
        waypointObserver: null,
    },
    config: {
        allowableElementsClassName: 'allowable--on-visibility', // triggers consent challenge before external content loading
        removableButtonsClassName: 'button__remove',
        feedCookieKey: 'instafeed', // name of the cookie set to remember consent
        feedCookieValue: 'allow', // default value
        feedCookieMaxAgeSeconds: 31536000, // 1 year
        feedSectionClassName: 'socialmedia__feed__section',
        feedSectionActiveClassName: 'socialmedia__feed__section--active',
        feedContainerClassName: 'socialmedia__feed__container',
        feedContainerActiveClassName: 'socialmedia__feed__container--active', // set to feed container when allowed and loaded
        feedDataKey: 'allow', // data key to control the expiry / validity when clicking allow
        feedDataValueAlways: 'always', // data value to always allow (as opposed to the session default)
        feedScriptUrlDataKey: 'scripturl', // data key which JavaScript to load (absolute or relative to project)
        feedStyleUrlDataKey: 'styleurl', // data key which stylesheet to load (absolute or relative to project)
        menuId: 'primary-menu',
        menuCloseButtonClassName: 'navigation__toggle--close',
        menuOpenButtonClassName: 'navigation__toggle--open',
        menuOpenedClassName: 'navigation__menu-opened', // .target for progressive enhancement of :target
        menuLinksSelector: '#primary-menu a[href]', // links inside the menu
        mainMenuNavWrapperSelector: 'navigation--main-navigation', // select parent menu from descendant button handler

        stickyHeaderId: 'site-header',
        stuckClassName: 'stuck', // emulate ::stuck pseudo class for sticky header styling

        introKeyvisualAnimationId: 'intro-keyvisual-animation',
        introKeyvisualMousetrapId: 'intro-keyvisual-mousetrap',
        introKeyvisualTimeoutMilliseconds: 30000,

        supportsIntersectionObserver: (typeof IntersectionObserver === 'function'),
        supportsGlobalThis: (typeof globalThis === 'object'),

        /** @object IntersectionObserver options */
        observerOptions: {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        }
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
    kleiderordnung_observeStickyHeader();
    kleiderordnung_observeWaypointAnchors();

    kleiderordnung_enhanceNavigationMenu(window.kleiderordnung.config);

    kleiderordnung_handleElementsActivatedOnVisibilityAndConsent(kleiderordnung_intersectionCallback, window.kleiderordnung.config);
    kleiderordnung_carouselSetup();
    kleiderordnung_keepAnchorTargetInLanguageSwitcher();
    kleiderordnung_decoratedParagraphsHeightAdjustment(kleiderordnung.rootElement);
    kleiderordnung_activateAnalyticsTracking();

    window.setTimeout(kleiderordnung_activateLazyLoadedMailtoLinks, 9000);
});
