<?php
/*
 * Header Sticker Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */

$args = array(
  'post_type'      => 'sticker',
  'lang'           => pll_current_language(),
  'posts_per_page' => 1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : ?>

  <a href="" >

  <div class="header__sticker">
    <a
      href="<?php echo get_field('sticker_url'); ?>"
      target="_blank"
      tabindex="0"
    ><?php the_title() ?></a>
  </div>
<?php
endwhile;
endif;
