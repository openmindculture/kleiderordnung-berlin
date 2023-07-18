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
    <!-- Fallback for users without Lottie capabilities or prefers reduced motion: hero banner key visual image -->
    <div class="intro__keyvisual__animation--motionless-fallback">
      <img
        src="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg" width="1160" height="581"
        srcset="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung@2x.jpg 2x"
        loading="lazy"
        alt="<?php _e( 'Portrait von Tina Steinke', 'kleiderordnung' ) ?>"
      >
    </div>
  </div>

  <div class="intro__keytext">
    <h1 class="intro__keytext__headline"><?php echo get_field('page_intro_headline', KLEIDERORDNUNG_FRONT_PAGE_ID) ?></h1>
    <div class="intro__keytext__paragraphs">
      <?php echo get_field('page_intro_text', KLEIDERORDNUNG_FRONT_PAGE_ID) ?>
    </p>
  </div>
</section>
