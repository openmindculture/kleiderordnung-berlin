<?php

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! defined ( 'KLEIDERORDNUNG_DIR' ) ){
  define( 'KLEIDERORDNUNG_DIR', get_template_directory() );
}

if ( ! defined ( 'KLEIDERORDNUNG_URI' ) ){
  define( 'KLEIDERORDNUNG_URI', get_template_directory_uri() );
}

define('DISABLE_FSE', true); // disable site editing features like editable template parts

// TODO dequeue third party styles like contact form 7
// dequeue svg filters above page header
// if still necessary:
// remove_action( 'wp_head', 'wp_generator' ); // goes into functions.php
// remove_action( 'wp_head', 'wp_generator' );

require_once( KLEIDERORDNUNG_DIR.'/inc/customizer.php' ); //customizer
