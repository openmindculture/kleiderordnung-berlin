/**
 * globals and mocks for unit testing
 * global window
 */

export const kleiderordnung_initializeGlobalWindow = () => {
    let window = window || {};
    window.location = {
      hash: '#angebot',
      host: 'www.kleiderordnung-berlin.de',
      hostname: 'preview.kleiderordnung-berlin.de',
      href: 'https://www.kleiderordnung-berlin.de/#angebot',
      origin: 'https://www.kleiderordnung-berlin.de',
      pathname: '/',
      port: '',
      protocol: 'https:',
    };

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
      observers: {},
      config: {
        'foo': 'bar',
        /** @object IntersectionObserver options */
        observerOptions: {
          root: null,
          rootMargin: '0px',
          threshold: 0.1
        },
      }
    }
    return window;
  }

export const kleiderordnung_clearGlobalWindow = () => {
  let window = window || {};
  return window;
}
