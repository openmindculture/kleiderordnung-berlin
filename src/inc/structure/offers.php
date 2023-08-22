<?php
/*
 * Offers (Angebote) Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<section id="angebot" class="offers target-offset">
  <div class="offers__layer offers__layer--content">
<?php
$args = array(
  'post_type'      => 'offer',
  'lang'           => pll_current_language(),
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'offer_section',
      'field'    => 'slug',
      'terms'    => array( 'angebot' )
    )
  )
);
$the_query = new WP_Query( $args );
$resorted_post_ids = array();
if ( $the_query->have_posts() ) : ?>
    <h2 class="offers__headline"><?php _e( 'Meine Angebote', 'kleiderordnung' ) ?></h2>
    <nav class="offers__navigation">
      <ul>
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
  wp_reset_query();

  ksort($resorted_post_ids);
  $loop_index = 0;
  foreach ($resorted_post_ids as $resorted_post_position_number => $resorted_post_id) {
  ?>
        <li>
          <a href="#<?php echo get_field('offer_id', $resorted_post_id); ?>" tabindex="0"><?php
            if (!empty(get_field('offer_short_title', $resorted_post_id))) {
              echo get_field('offer_short_title', $resorted_post_id);
            } else {
              echo get_the_title($resorted_post_id);
            }
          ?></a>
        </li>
    <?php
  }
        ?>
      </ul>
    </nav>

    <div class="offers__cards">
      <?php foreach ($resorted_post_ids as $resorted_post_position_number => $resorted_post_id) {
        setup_postdata($resorted_post_id);
        include( KLEIDERORDNUNG_DIR . '/inc/structure/offers-single-angebot.php');
      }
      ?>
    </div>
<?php endif;?>
    <?php
    $args = array(
      'post_type'      => 'offer',
      'lang'           => pll_current_language(),
      'posts_per_page' => -1,
      'tax_query' => array(
        array(
          'taxonomy' => 'offer_section',
          'field'    => 'slug',
          'terms'    => array( 'weitere' )
        )
      )
    );
    $the_additional_query = new WP_Query( $args );
    $resorted_additional_post_ids = array();
    if ( $the_additional_query->have_posts() ) : ?>
      <div class="offers__additional">
        <h2 class="offers__additional__headline"><?php _e( 'Weitere Angebote', 'kleiderordnung' ) ?></h2>
        <div class="offers__additional__articles">
    <?php
      $loop_index = 0;
      while ( $the_additional_query->have_posts() ) {
        $the_additional_query->the_post();
        $unique_additional_post_position_number = get_field('position_number', get_the_ID());
        if (isset($resorted_additional_post_ids[$unique_additional_post_position_number])) {
          $unique_additional_post_position_number .= $loop_index;
        }
        $resorted_additional_post_ids[$unique_additional_post_position_number] = get_the_ID();
        $loop_index++;
      }
      wp_reset_query();

      ksort($resorted_additional_post_ids);
      $loop_index = 0;
      foreach ($resorted_additional_post_ids as $resorted_post_position_number => $resorted_post_id) {
        setup_postdata($resorted_post_id);
    ?>
        <article id="<?php echo get_field('offer_id', $resorted_post_id); ?>" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__additional__articles__headline"><?php echo get_the_title($resorted_post_id) ?></h3>
          <p class="offers__offer__paragraph">
            <?php echo get_the_content($resorted_post_id) ?>
          </p>
          <div class="offers__offer__price offers__additional__articles__price">
            <?php echo get_field('offer_price', $resorted_post_id); ?>
          </div>
        </article>
        <?php
        }
        ?>
      </div>
    </div>
    <?php endif;?>
  </div>
</section>

