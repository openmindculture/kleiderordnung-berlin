export function kleiderordnung_activateIntroAnimation(config) {
  /* global window, document */
  /* Lottie player has no fallback / polyfill for missing globalThis object */
  /* which seems hard to polyfill so let's activate our no-JS fallback instead */
  if (!window.kleiderordnung.config.supportsGlobalThis && document.body && document.body.classList) {
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
  if (!window.kleiderordnung.config.prefersReducedMotion) {
    window.kleiderordnung.state.introAnimation = document.getElementById(kleiderordnung.config.introKeyvisualAnimationId);
    if (window.kleiderordnung.state.introAnimation) {
      window.kleiderordnung.state.introAnimation.addEventListener('ready', function() {
        window.kleiderordnung.state.introAnimation.play();
        window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr = window.setTimeout(function(){
          window.kleiderordnung.state.introAnimation.play();
        }, config.introKeyvisualTimeoutMilliseconds);
      });
      /** @var {HTMLElement|null} */
      var introAnimationMousetrap = document.getElementById(window.kleiderordnung.config.introKeyvisualMousetrapId);
      if (introAnimationMousetrap) {
        introAnimationMousetrap.addEventListener('mouseenter', function() {
          window.clearTimeout(window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr);
          window.kleiderordnung.state.introAnimation.play();
          window.kleiderordnung.state.currentAnimationReplayTimeoutIdNr = window.setTimeout(function(){
            window.kleiderordnung.state.introAnimation.play();
          }, config.introKeyvisualTimeoutMilliseconds);
        });
      }
    }
  }
}
