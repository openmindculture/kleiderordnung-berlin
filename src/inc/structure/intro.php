<?php
/*
 * Intro (Key Visual / Hero Banner) Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<section class="intro">
  <div id="intro-keyvisual-wrapper" class="intro__keyvisual">
    <div id="intro-keyvisual-mousetrap" class="intro__keyvisual__mousetrap"></div>
    <lottie-player
      class="intro__keyvisual__animation"
      id="intro-keyvisual-animation"
      mode="normal"
      loop
      count="2"
      src="<?php echo get_template_directory_uri() ?>/lottie/data.json"
      style="width: 90%"
    >
    </lottie-player>
    <!-- Fallback for users without Lottie Capability or Prefers Reduced Motion: Hero Banner Key Visual Image -->
    <div class="intro__keyvisual__animation--motionless-fallback">
      <img
        src="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg" width="1160" height="581"
        srcset="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung@2x.jpg 2x"
        loading="lazy"
        alt="Tina Steinke Photography"
      >
    </div>
  </div>

  <div class="intro__keytext">
    <h1 class="intro__keytext__headline">Goodbye fast-fashion –
      <br>
      erlebe Kreativität und Freude mit nachhaltigem Modekonsum!</h1>
    <p class="intro__keytext__paragraph">
      Ich bin <strong>Tina Steinke</strong>, begeisterte Second Hand und Vintage Fashionista und helfe Dir dabei, Deine Schönheit und die Deiner Kleidungsstücke im Schrank zur Geltung und Dich zum Strahlen zu bringen!
    </p><p class="intro__keytext__paragraph">
      Ich habe selbst einen starken Stil und ein ausgeprägtes Gespür für die besonderen Perlen in der Fülle von Gewöhnlichem! Ob minimalistisch, bunt, mutig, modern, stark, mädchenhaft, androgyn, selbstbewusst – ich kreiere für Dich den Stil, die Ausstrahlung, das Statement, was Du mit Deiner Kleidung ausdrücken möchtest.
    </p>
  </div>
</section>
