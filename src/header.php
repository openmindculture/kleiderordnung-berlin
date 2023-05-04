<?php
/**
 * Theme header
 *
 * @package KleiderOrdnung
 * @author openmindculture
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); //added backward compatibility for this function in functions/theme.php ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kleiderordnung' ); ?></a>
<div class="overlay"></div>
<div class="site-grid"><!-- start .site-grid -->
  <header id="theme-header" role="banner"><!-- header#theme-header -->
    <!-- TODO ?php kleiderordnung_display_header(); ? -->
  </header><!-- end header#theme-header -->
  <?php if ( has_header_image() ) { ?>
    <img src="<?php header_image(); ?>" class="header-image" alt="<?php esc_attr_e( 'Header image','kleiderordnung' ); ?>" />
  <?php } ?>
  <div class="site-grid-inner"><!-- start .site-grid-inner -->
