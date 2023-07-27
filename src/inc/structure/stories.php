<?php
/*
 * Stories / Testimonials Carousel / Slider
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<?php
  $args = array(
    'post_type'      => 'story',
    'lang'           => pll_current_language(),
    'posts_per_page' => -1
  );
  $the_query = new WP_Query( $args );
  $resorted_post_ids = array();
  if ( $the_query->have_posts() ) : ?>

  <section id="stories" class="stories target-offset">
    <h2 class="stories__headline"><?php _e( 'Stories', 'kleiderordnung' ) ?></h2>
    <div class="stories__wrapper carousel__wrapper">
      <div class="stories__viewport carousel__viewport">

<?php
    $loop_index = 0;
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      $unique_post_position_number = get_field('position_number', get_the_ID());
      if (isset($resorted_post_ids[$unique_post_position_number])) {
        $unique_post_position_number .= $loop_index; // random order is better than losing data
      }
      $resorted_post_ids[$unique_post_position_number] = get_the_ID();
      $loop_index++;
    }

    ksort($resorted_post_ids);
    $last_index = count($resorted_post_ids) - 1;
    $loop_index = 0;
    foreach ($resorted_post_ids as $resorted_post_position_number => $resorted_post_id) {
      ?>
        <div class="stories__story carousel__item carousel__item--index-<?php echo $loop_index?>"<?php if ($loop_index == 0) { echo 'id="stories-items-first"';} elseif ($loop_index == $last_index) { echo 'id="stories-items-last"'; } ?>>
          <figure class="stories__story__image">
            <?php echo get_the_post_thumbnail($resorted_post_id) ?>
          </figure>
          <figure class="stories__story__quote">
            <figcaption class="stories__story__quote__author">
              <?php echo get_the_title($resorted_post_id) ?>
            </figcaption>
            <blockquote class="stories__story__quote__text">
              <?php echo get_the_content($resorted_post_id) ?>
            </blockquote>
          </figure>
        </div>
      <?php
      $loop_index++;
    }
    ?>
      </div>

      <nav class="stories__navigation carousel__navigation">
        <a class="stories__navigation__link stories__navigation__link--prev carousel__navigation__prev" href="#stories-items-first">
          <svg width="70" height="42" viewBox="0 0 70 42" fill="none">
            <title><?php _e( 'zurück', 'kleiderordnung' ) ?></title>
            <path d="M-1.36497e-06 21C11.598 21 21 11.598 21 0" stroke="currentColor" stroke-width="2"/>
            <path d="M4.70904e-07 21C11.598 21 21 30.402 21 42" stroke="currentColor" stroke-width="2"/>
            <line y1="21" x2="70" y2="21" stroke="currentColor" stroke-width="2"/>
          </svg>
        </a>
        <a class="stories__navigation__link stories__navigation__link--next carousel__navigation__next" href="#stories-items-last">
          <svg width="70" height="42" viewBox="0 0 70 42" fill="none">
            <title><?php _e( 'vor', 'kleiderordnung' ) ?></title>
            <path d="M70 21C58.402 21 49 30.402 49 42" stroke="currentColor" stroke-width="2"/>
            <path d="M70 21C58.402 21 49 11.598 49 0" stroke="currentColor" stroke-width="2"/>
            <line x1="70" y1="21" x2="8.74224e-08" y2="21" stroke="currentColor" stroke-width="2"/>
          </svg>
        </a>
      </nav>
    </div>
  </section>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
