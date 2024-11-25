<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 */

add_filter( 'body_class', function ( $classes = '' ) {
  $classes[] = 'theme-kleiderordnung';
  $classes[] = 'no-js'; /* workaround against missing default fallback class on custom front page */
  if (KLEIDERORDNUNG_is_stage) {
    $classes[] = 'stage';
  }
  if (KLEIDERORDNUNG_is_localhost) {
    $classes[] = 'localhost';
  }
  return $classes;
} );

add_action( 'after_setup_theme', function () {
  load_theme_textdomain( 'kleiderordnung', get_template_directory() . '/languages' );
  remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
  remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
}, 10, 0 );

add_filter('post_rewrite_rules', 'kleiderordnung_add_custom_redirect_rule');
function kleiderordnung_add_custom_redirect_rule($post_rewrite) {
  $post_rewrite['news$'] = 'index.php?post_type=post';
  $post_rewrite['en/news$'] = 'en/index.php?post_type=post';
  return $post_rewrite;
}

function kleiderordnung_remove_autop_by_posttype( $content )
{
  # keep autop behavior for news posts to prevent unintended concatenation
  if (get_post_type() != 'post') {
    remove_filter('the_content', 'wpautop');
  }
  return $content;
}

add_filter( 'the_content', 'kleiderordnung_remove_autop_by_posttype', 0 );

