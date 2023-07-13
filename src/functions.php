<?php

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! defined ( 'KLEIDERORDNUNG_DIR' ) ){
  define( 'KLEIDERORDNUNG_DIR', get_template_directory() );
}

if ( ! defined ( 'KLEIDERORDNUNG_URI' ) ){
  define( 'KLEIDERORDNUNG_URI', get_template_directory_uri() );
}

if ( ! defined ( 'KLEIDERORDNUNG_THEME_VERSION' ) ){
  define( 'KLEIDERORDNUNG_THEME_VERSION', '2.3.2' );
}

add_theme_support('post-thumbnails', array(
  'post',
  'page',
  /* custom post types must also declare thumbnail support explicitly */
  'story',
));

add_filter('use_block_editor_for_post_type', function ($current_status, $post_type){
  if ($post_type === 'post') return false;
  if ($post_type === 'story') return false;
  return $current_status;
}, 10, 2);

add_action( 'admin_init', function () {
  add_editor_style( 'editor-style.css');
  if (is_admin()) {
    wp_enqueue_style( 'kleiderordnung_admin_style', 'admin-style.css', array(), KLEIDERORDNUNG_THEME_VERSION, 'all');
  }
});

// reminder that actions wrap filter calls
// so there is any order preference despite the declarative approach
// I would rather put filter hooks before action hooks

add_filter( 'body_class', function( $classes = '' ) {
  $classes[] = 'theme-kleiderordnung';
  return $classes;
} );

// dequeue svg filters above page header
add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'global-styles' );
} );

add_action('after_setup_theme', function() {
  remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
  remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
}, 10, 0);

// if still necessary:
// remove_action( 'wp_head', 'wp_generator' ); // goes into functions.php
// remove_action( 'wp_head', 'wp_generator' );

require_once( KLEIDERORDNUNG_DIR.'/inc/functions/customizer.php' );
