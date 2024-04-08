<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! defined( 'KLEIDERORDNUNG_THEME_VERSION' ) ) {
  define( 'KLEIDERORDNUNG_THEME_VERSION', '3.4.3' );
}

if ( ! defined( 'KLEIDERORDNUNG_DIR' ) ) {
  define( 'KLEIDERORDNUNG_DIR', get_template_directory() );
}

if ( ! defined( 'KLEIDERORDNUNG_URI' ) ) {
  define( 'KLEIDERORDNUNG_URI', get_template_directory_uri() );
}

if ( ! defined( 'KLEIDERORDNUNG_is_stage' ) ) {
  define( 'KLEIDERORDNUNG_is_stage', str_contains(KLEIDERORDNUNG_URI, 'stage') );
}

if ( ! defined( 'KLEIDERORDNUNG_is_localhost' ) ) {
  define( 'KLEIDERORDNUNG_is_localhost',
    str_contains(KLEIDERORDNUNG_URI, '/localhost') ||
    str_contains(KLEIDERORDNUNG_URI, '/bs-local.com')
  );
}

if ( ! defined( 'KLEIDERORDNUNG_CALENDY_URI' ) ) {
  define( 'KLEIDERORDNUNG_CALENDY_URI', 'https://calendly.com/tina-steinke-kleiderordnung' );
}

require_once( KLEIDERORDNUNG_DIR . '/inc/functions/add-theme-support.php' );
require_once( KLEIDERORDNUNG_DIR . '/inc/functions/customize-admin-ui.php' );
require_once( KLEIDERORDNUNG_DIR . '/inc/functions/customize-frontend.php' );
require_once( KLEIDERORDNUNG_DIR . '/inc/functions/customizer.php' );
require_once( KLEIDERORDNUNG_DIR . '/inc/functions/settings.php' );

function kleiderordnung_enqueue_localized_scripts(){
  wp_enqueue_script(
    'scripts',
    get_template_directory_uri() . '/js/scripts.js',
    array(),
    KLEIDERORDNUNG_THEME_VERSION,
    array(
      'strategy'=> 'defer',
    ));

  require_once( KLEIDERORDNUNG_DIR . '/inc/functions/localize-js.php' );
}

add_action( 'wp_enqueue_scripts', 'kleiderordnung_enqueue_localized_scripts' );
