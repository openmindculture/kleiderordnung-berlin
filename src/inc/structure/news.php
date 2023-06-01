<?php
/*
 * News / Blog Posts
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<section id="news" class="news target-offset"><!-- post-type post -->
  <h2 class="news__headline">News</h2>
  <div class="news__wrapper">

    <!-- News 1 -->
    <article class="news__post">
      <figure class="news__post__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri() ?>/img/news-example-1.webp"  type="image/webp">
          <source srcset="<?php echo get_template_directory_uri() ?>/img/news-example-1.jpg"  type="image/jpeg">
          <img width="440" height="248" alt="1" loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/news-example-1.jpg">
        </picture>
      </figure>
      <div class="news__post__content">
        <h3 class="news__post__title">Kategoriename</h3>
        <p class="news__post__text">
          Gute Gespräche und viel zu sehen – unterwegs auf der Green Fashion Fair Berlin
        </p>
      </div>
    </article>

    <!-- News 2 -->
    <article class="news__post">
      <figure class="news__post__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri() ?>/img/news-example-2.webp"  type="image/webp">
          <source srcset="<?php echo get_template_directory_uri() ?>/img/news-example-2.jpg"  type="image/jpeg">
          <img width="440" height="248" alt="2" loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/news-example-2.jpg">
        </picture>
      </figure>
      <div class="news__post__content">
        <h3 class="news__post__title">Workshops & Events</h3>
        <p class="news__post__text">
          Second Hand Shopping am 12. Mai auf dem Flowmarkt Nowkoelln
        </p>
      </div>
    </article>

    <!-- News 3 -->
    <article class="news__post">
      <figure class="news__post__image">
        <picture>
          <source srcset="<?php echo get_template_directory_uri() ?>/img/news-example-3.webp"  type="image/webp">
          <source srcset="<?php echo get_template_directory_uri() ?>/img/news-example-3.jpg"  type="image/jpeg">
          <img width="440" height="248" alt="3" loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/news-example-3.jpg">
        </picture>
      </figure>
      <div class="news__post__content">
        <h3 class="news__post__title">Impulse</h3>
        <p class="news__post__text">
          Neue Studie zu Fast Fashion schockiert
        </p>
      </div>
    </article>

  </div>

  <div class="news__footer">
    <!-- TODO disable "all news" link in single page mode: -->
    <a class="news__link news__link--more" href="#" tabindex="0">alle Neuigkeiten</a>
  </div>

</section>
