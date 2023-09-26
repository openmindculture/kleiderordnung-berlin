<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! defined( 'KLEIDERORDNUNG_THEME_VERSION' ) ) {
  define( 'KLEIDERORDNUNG_THEME_VERSION', '3.1.0' );
}

if ( ! defined( 'KLEIDERORDNUNG_DIR' ) ) {
  define( 'KLEIDERORDNUNG_DIR', get_template_directory() );
}

if ( ! defined( 'KLEIDERORDNUNG_URI' ) ) {
  define( 'KLEIDERORDNUNG_URI', get_template_directory_uri() );
}

require_once( KLEIDERORDNUNG_DIR . '/inc/functions/add-theme-support.php' );
require_once( KLEIDERORDNUNG_DIR . '/inc/functions/customize-admin-ui.php' );
require_once( KLEIDERORDNUNG_DIR . '/inc/functions/customize-frontend.php' );
require_once( KLEIDERORDNUNG_DIR . '/inc/functions/customizer.php' );
