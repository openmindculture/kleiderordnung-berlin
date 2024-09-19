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
  $is_presorted = is_plugin_active('post-types-order/post-types-order.php');
  if ($is_presorted) {
    echo '*** post_types_order plugin is active, ignore position_number ***';
  } else {
    echo '*** use position_number ***';
  }
  if ( $the_query->have_posts() ) : ?>

  <section id="stories" class="stories target-offset">
    <h2 class="stories__headline"><?php _e( 'Stories', 'kleiderordnung' ) ?></h2>
    <div class="stories__wrapper carousel__wrapper">
      <div class="stories__viewport carousel__viewport">
<?php
    $loop_index = 0;
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      if ($is_presorted) {
        $resorted_post_ids[$loop_index] = get_the_ID();
      } else {
        $unique_post_position_number = get_field('position_number', get_the_ID());
        if (isset($resorted_post_ids[$unique_post_position_number])) {
          $unique_post_position_number .= $loop_index; // random order is better than losing data
        }
        $resorted_post_ids[$unique_post_position_number] = get_the_ID();
      }
      $loop_index++;
    }
    wp_reset_query();

    ksort($resorted_post_ids);
    $last_index = count($resorted_post_ids) - 1;
    $loop_index = 0;
    foreach ($resorted_post_ids as $resorted_post_position_number => $resorted_post_id) {
      setup_postdata( $resorted_post_id );
      include( KLEIDERORDNUNG_DIR . '/inc/structure/stories-testimonial-item.php');
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
