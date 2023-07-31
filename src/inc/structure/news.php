<?php
/*
 * News / Blog Posts
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>

<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<section id="news" class="news target-offset"><!-- post-type post -->
  <h2 class="news__headline"><?php _e( 'News', 'kleiderordnung' ) ?></h2>
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

  <div class="news__footer">
    <!-- "all news" link is hidden in default single page / custom front page view -->
    <a class="news__link news__link--more" href="#" tabindex="0"><?php _e( 'alle Neuigkeiten', 'kleiderordnung' ) ?></a>
  </div>

</section>
<?php endif; ?>
