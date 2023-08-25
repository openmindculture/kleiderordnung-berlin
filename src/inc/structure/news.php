<?php
/*
 * News / Blog Posts
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */

$args = array(
  'post_type' => 'post',
  'posts_per_page' => isset($isNewsTeaser) ? 3 : -1
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<section id="news" class="news target-offset<?php if (isset($isNewsTeaser)) { echo ' news--is-teaser'; } ?>"><!-- post-type post -->
  <?php if (isset($isNewsTeaser)) : ?>
  <h2 class="news__headline"><?php _e( 'News', 'kleiderordnung' ) ?></h2>
  <?php else : ?>
    <h1 class="news__headline"><?php _e( 'News', 'kleiderordnung' ) ?></h1>
  <?php endif ?>
  <div class="news__wrapper">
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <article class="news__post">
      <figure class="news__post__image">
        <picture>
          <?php the_post_thumbnail() ?>
        </picture>
      </figure>
      <div class="news__post__content">
        <h3 class="news__post__title">
          <?php
            $category = get_the_category();
            if($category && $category[0]) {
              echo $category[0]->cat_name;
            }
          ?>
        </h3>
        <p class="news__post__text">
          <?php the_title() ?>
        </p>
      </div>
    </article>
  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

  </div>

  <?php if (!isset($isNewsTeaser) || !$isNewsTeaser) : ?>
    <div class="news__footer">
      <a class="news__link news__link--more" href="<?php
        echo pll_home_url('de');
        if (!empty(pll_current_language('slug')) && pll_current_language('slug') !== pll_default_language('slug')) {
          echo '/' . pll_current_language('slug');
        }
        echo '/news';
      ?>" tabindex="0"><?php _e( 'alle Neuigkeiten', 'kleiderordnung' ) ?></a>
    </div>
  <?php endif; ?>

</section>
<?php endif; ?>
