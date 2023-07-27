<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 */

add_theme_support( 'post-thumbnails', array(
  'post',
  'page',
  /* custom post types must also declare thumbnail support explicitly */
  'story',
  'offer',
) );
