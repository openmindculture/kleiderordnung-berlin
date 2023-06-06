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
    <h1 class="intro__keytext__headline">Say goodbye to fast fashion –
      <br>
      and say hello to the creativity and joy of sustainable wear!</h1>
    <p class="intro__keytext__paragraph">
      Welcome to my website! I’m <strong>Tina Steinke</strong>, and I’m passionate about secondhand and vintage fashion. I’m here to help you and your wardrobe shine your brightest!
    </p><p class="intro__keytext__paragraph">
      I have an eye for spotting pearls where they’re least expected. Minimalist, colourful, bold, modern, strong, feminine, androgynous, or assertive—I love working with all kinds of styles, most of all yours!
    </p>
    <p>
      Your clothes can help make a statement, express your charisma, or show off your personal style. Let’s create your signature look!
    </p>
  </div>
</section>
