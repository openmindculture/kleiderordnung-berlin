<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 */

add_filter( 'body_class', function ( $classes = '' ) {
  $classes[] = 'theme-kleiderordnung';
  return $classes;
} );

// remove svg filters above page header
add_action( 'wp_enqueue_scripts', function () {
  wp_dequeue_style( 'global-styles' );
} );

add_action( 'after_setup_theme', function () {
  load_theme_textdomain( 'kleiderordnung', get_template_directory() . '/languages' );
  remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
  remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
}, 10, 0 );
