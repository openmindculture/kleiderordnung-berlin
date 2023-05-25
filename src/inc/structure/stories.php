<?php
/*
 * Stories / Testimonials Carousel / Slider
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<section id="stories" class="stories target-offset">
  <h2 class="stories__headline">Stories</h2>
  <div class="stories__wrapper carousel__wrapper">
    <div class="stories__viewport carousel__viewport">

      <!-- Story 1 -->
      <div class="stories__story carousel__item">
        <figure class="stories__story__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/maxi.jpg" width="319" height="567"
            srcset="<?php echo get_template_directory_uri() ?>/img/maxi.jpg 1x, <?php echo get_template_directory_uri() ?>/img/maxi@2x.jpg 2x"
            loading="lazy"
            alt="Foto der Kundin Maxi"
          >
        </figure>
        <figure class="stories__story__quote">
          <figcaption class="stories__story__quote__author">
            Maxi, Künstlerin, Berlin:
          </figcaption>
          <blockquote class="stories__story__quote__text">
            Die Styling-Session mit Tina hat mir gezeigt, wie wandelbar ich bin und in mir große Lust ausgelöst, mich durch Mode mehr auszudrücken. Auf meiner Vernissage fühlte ich mich mutig und stark.
          </blockquote>
        </figure>
      </div>

      <!-- Story 2 -->
      <div class="stories__story carousel__item">
        <figure class="stories__story__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/jackie.jpg" width="321" height="570"
            srcset="<?php echo get_template_directory_uri() ?>/img/jackie.jpg 1x, <?php echo get_template_directory_uri() ?>/img/jackie@2x.jpg 2x"
            loading="lazy"
            alt="Foto der Kundin Jackie"
          >
        </figure>
        <figure class="stories__story__quote">
          <figcaption class="stories__story__quote__author">
            Jackie, Marketing Lead @ Impact Hub Berlin:
          </figcaption>
          <blockquote class="stories__story__quote__text">
            I really enjoyed doing a tour of my closet with Tina. She helped me see my clothes with fresh eyes and provided practical tips on how to come up with combinations and accessories that enhance my style and personality. I recommend her services if you are looking to refine your fashion style. Thank you so much, Tina!
          </blockquote>
        </figure>
      </div>

      <!-- Story 3 -->
      <div class="stories__story carousel__item">
        <figure class="stories__story__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/jackie.jpg" width="321" height="570"
            srcset="<?php echo get_template_directory_uri() ?>/img/maik.jpg 1x, <?php echo get_template_directory_uri() ?>/img/maik@2x.jpg 2x"
            loading="lazy"
            alt="Foto des Kunden Mike"
          >
        </figure>
        <figure class="stories__story__quote">
          <figcaption class="stories__story__quote__author">
            Mike, Freelance Translator, Berlin:
          </figcaption>
          <blockquote class="stories__story__quote__text">
            Tina brings enthusiasm and positive energy to fashion and styling. It's clear that she's good at what she does, and loves it too. She's given me clear advice on how to make the most of my existing wardrobe, and also how to make small changes that can make a big difference for my appearance. I look forward to working with Tina more!
          </blockquote>
        </figure>
      </div>

      <!-- Story 4 - absichtlich ohne Bild -->
      <div class="stories__story carousel__item">
        <!-- einige Testimonials haben eventuell kein Bild -->
        <figure class="stories__story__quote">
          <figcaption class="stories__story__quote__author">
            Someone, without a picture:
          </figcaption>
          <blockquote class="stories__story__quote__text">
            Ut denim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </blockquote>
        </figure>
      </div>
    </div>
  </div>

  <nav class="stories__navigation carousel__navigation">
    <a class="stories__navigation__link stories__navigation__link--prev carousel__navigation__prev" href="#prev">
      <svg width="70" height="42" viewBox="0 0 70 42" fill="none">
        <title>zurück</title>
        <path d="M-1.36497e-06 21C11.598 21 21 11.598 21 0" stroke="currentColor" stroke-width="2"/>
        <path d="M4.70904e-07 21C11.598 21 21 30.402 21 42" stroke="currentColor" stroke-width="2"/>
        <line y1="21" x2="70" y2="21" stroke="currentColor" stroke-width="2"/>
      </svg>
    </a>
    <a class="stories__navigation__link stories__navigation__link--next carousel__navigation__next" href="#next">
      <svg width="70" height="42" viewBox="0 0 70 42" fill="none">
        <title>vor</title>
        <path d="M70 21C58.402 21 49 30.402 49 42" stroke="currentColor" stroke-width="2"/>
        <path d="M70 21C58.402 21 49 11.598 49 0" stroke="currentColor" stroke-width="2"/>
        <line x1="70" y1="21" x2="8.74224e-08" y2="21" stroke="currentColor" stroke-width="2"/>
      </svg>
    </a>
  </nav>
</section>
