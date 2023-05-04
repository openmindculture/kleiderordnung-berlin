<?php
/**
 * Theme options stub to override and disable template parts / full site editing
 *
 * @package KleiderOrdnung
 * @author openmindculture
 *
 */

class KleiderOrdnung_Customize {

  public static function register ( $wp_customize ) {}
}

add_action( 'customize_register' , 		array( 'KleiderOrdnung_Customize' , 'register' ) );
