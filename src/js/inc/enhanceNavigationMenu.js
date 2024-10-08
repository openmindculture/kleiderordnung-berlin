// progressive enhancement for navigation menu behavior


export function kleiderordnung_enhanceNavigationMenu(config) {
    /* global window, document */
    window.kleiderordnung.state.menu = document.getElementById(config.menuId);
    window.kleiderordnung.state.menuOpenButton = document.getElementsByClassName(config.menuOpenButtonClassName)[0];
    if (window.kleiderordnung.state.menuOpenButton) {
        window.kleiderordnung.state.menuOpenButton.addEventListener('click', function (event) {
            event.preventDefault();
            var currentMenuOpenButton = /** @type {HTMLElement} */ event.currentTarget;
            currentMenuOpenButton.classList.add(config.menuOpenedClassName);
            window.kleiderordnung.state.menu.classList.add(config.menuOpenedClassName);
        });
    }

    var menuCloseButton = document.getElementsByClassName(config.menuCloseButtonClassName)[0];
    if (menuCloseButton) {
        menuCloseButton.addEventListener('click', function (event) {
            event.preventDefault();
            window.kleiderordnung.state.menu.classList.remove(config.menuOpenedClassName);
            window.kleiderordnung.state.menuOpenButton.classList.remove(config.menuOpenedClassName);
        });
        if (typeof(menuCloseButton.closest)==='function') {
            var menuWrapper = menuCloseButton.closest(config.menuWrapperSelector);
            if (menuWrapper) {
                menuWrapper.addEventListener('click', function (event) {
                    if (event.target instanceof HTMLAnchorElement) { return; }
                    window.kleiderordnung.state.menu.classList.remove(config.menuOpenedClassName);
                    window.kleiderordnung.state.menuOpenButton.classList.remove(config.menuOpenedClassName);
                });
            }
        }
    }

    var navLinks = document.querySelectorAll(config.menuLinksSelector);
    for (var o = 0; o < navLinks.length; o++) {
        navLinks[o].addEventListener('click', function (event) {
            window.kleiderordnung.state.menu.classList.remove(config.menuOpenedClassName);
            window.kleiderordnung.state.menuOpenButton.classList.remove(config.menuOpenedClassName);
        });
    }

  var animationToggles = document.querySelectorAll(config.animationToggleSelector);
  for (var t = 0; t < animationToggles.length; t++) {
    animationToggles[t].addEventListener('click', function (event) {
      window.kleiderordnung.config.prefersReducedTransparency = true;
      window.kleiderordnung.config.prefersReducedMotion = true;
      document.body.classList.add(config.prefersReducedMotionClassName);
      if (window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr) {
        window.clearTimeout(window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr);
      }
      if (window.kleiderordnung.state.introAnimation) {
        window.kleiderordnung.state.introAnimation.stop();
      }
    });
  }
}
