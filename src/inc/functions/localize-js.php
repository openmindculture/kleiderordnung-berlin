<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 */

$kleiderordnung_localize_js = array(
'für' => __( 'für', 'kleiderordnung' ),
'über' => __( 'über', 'kleiderordnung' ),
);

wp_localize_script( 'scripts',
  'kleiderordnung_translations',
  $kleiderordnung_localize_js
);
