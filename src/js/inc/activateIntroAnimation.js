/** @param {object} config configuration object
 *  @property {object} observerOptions
 *  @property {boolean} prefersReducedMotion
 *  @property {string} introKeyvisualAnimationId e.g. 'intro-keyvisual-animation'
 *  @property {string} introKeyvisualMousetrapId e.g. 'intro-keyvisual-mousetrap'
 *  @property {string} introKeyvisualScriptId e.g. 'lottie-player-script'
 *  @property {string} introKeyvisualComponentTagName e.g. 'lottie-player'
 *  @property {string} noGlobalThisClassName e.g. 'no-globalthis'
 *  @property {number} introKeyvisualTimeoutMilliseconds 30000
 */
export function kleiderordnung_activateIntroAnimation(config) {
  /* global window, document */
  /* Lottie player has no fallback / polyfill for missing globalThis object */
  /* which seems hard to polyfill so let's activate our no-JS fallback instead */
  if (!config.supportsGlobalThis && document.body && document.body.classList) {
    document.body.classList.add(config.noGlobalThisClassName);
    var lottiePlayerScript = document.getElementById(config.introKeyvisualScriptId);
    if (lottiePlayerScript) {
      lottiePlayerScript.remove();
    }
    var lottieAnimations = document.getElementsByTagName(config.introKeyvisualComponentTagName);
    for (var la = 0; la < lottieAnimations.length; la++) {
      if (lottieAnimations[la]) {
        lottieAnimations[la].remove();
      }
    }
  }

  /* Key Visual Lottie Animation Control */
  if (!config.prefersReducedMotion) {
    console.log('initialize key visual lottie animation control');
    window.kleiderordnung.state.introAnimation = document.getElementById(config.introKeyvisualAnimationId);
    if (window.kleiderordnung.state.introAnimation) {
      console.log('add event listener');
      window.kleiderordnung.state.introAnimation.addEventListener('ready', function() {
        console.log('animation event ready triggered');
        if (typeof window.kleiderordnung.state.introAnimation.play === 'function') {
          console.log('introAnimation.play()');
          window.kleiderordnung.state.introAnimation.play();
          console.log('set timeout for another play');
          window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr = window.setTimeout(function(){
            console.log('timeout handler function');
            window.kleiderordnung.state.introAnimation.play();
          }, config.introKeyvisualTimeoutMilliseconds);
        }
      });
      /** @var {HTMLElement|null} */
      var introAnimationMousetrap = document.getElementById(config.introKeyvisualMousetrapId);
      if (introAnimationMousetrap) {
        console.log('add introAnimationMousetrap listener mouseenter');
        // does not trigger replay once it has been over?!
        introAnimationMousetrap.addEventListener('mouseenter', function() {
          console.log('handle introAnimationMousetrap mouseenter: clear replay timeout');
          window.clearTimeout(window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr);
          if (typeof window.kleiderordnung.state.introAnimation.play === 'function') {
            console.log('handle introAnimationMousetrap mouseenter: introAnimation.play()');
            window.kleiderordnung.state.introAnimation.play();
            console.log('handle introAnimationMousetrap mouseenter: set replay timeout');
            window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr = window.setTimeout(function(){
              window.kleiderordnung.state.introAnimation.play();
            }, config.introKeyvisualTimeoutMilliseconds);
          }
        });
      }
    }
  }
}
