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

// remove unused WP core svg filters above page header
add_action( 'wp_enqueue_scripts', function () {
  wp_dequeue_style( 'global-styles' );
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
