<?php
/*
 * Header Sticker Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */

$posts_per_page   = 1;
$args = array(
  'post_type'      => 'sticker',
  'lang'           => pll_current_language(),
  'post_status'    => 'publish',
  'orderby'        => 'post_date',
  'order'          => 'DESC',
  'posts_per_page' => $posts_per_page
);
$the_sticker_query = new WP_Query( $args );
if ( $the_sticker_query->have_posts() ) {
  $loop_index = 0;
  while ( $the_sticker_query->have_posts() ) {
    $the_sticker_query->the_post();
    ?>
    <div class="header__sticker">id:<?php get_the_ID() ?>
      <a
        href="<?php echo get_field('sticker_url', get_the_ID() ); ?>"
        target="_blank"
        tabindex="0"
      ><?php get_the_title( get_the_ID() ) ?></a>
    </div>
  <?php
    $loop_index++;
    if ($loop_index >= $posts_per_page) {
      break;
    }
  }
}
wp_reset_query();

