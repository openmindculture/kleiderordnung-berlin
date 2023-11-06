<?php
/*
 * HTML Head
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<head>
  <meta charset="utf-8">
  <title><?php
    if (defined('KLEIDERORDNUNG_PAGE_TITLE') && !empty(KLEIDERORDNUNG_PAGE_TITLE)) {
      echo KLEIDERORDNUNG_PAGE_TITLE;
      echo '-';
      echo 'KleiderOrdnung Berlin';
    } else {
      wp_title('-');
    } ?></title>
  <meta name=language content="<?php echo /** @var string */ pll_current_language() ?>">
  <link rel="canonical" <?php
    echo 'href="';
    if (is_front_page()):
      if (pll_current_language() === 'en'):
        echo 'https://kleiderordnung.berlin/en/';
      else:
        echo 'https://kleiderordnung.berlin/';
      endif;
    else:
      echo get_permalink();
    endif;
    echo '"';
    ?>
  >
  <?php
    /** @var Array */
    if (is_front_page()):
      if (pll_current_language() === 'en'):
        echo '<link rel="alternate" hreflang="de-DE" href="' . get_site_url() . '/">';
      else:
        echo '<link rel="alternate" hreflang="en-US" href="' . get_site_url() . '/en">';
      endif;
    elseif (!is_single() && get_post_type() === 'post'):
      if (pll_current_language() === 'en'):
        echo '<link rel="alternate" hreflang="de-DE" href="' . get_site_url() . '/news">';
      else:
        echo '<link rel="alternate" hreflang="en-US" href="' . get_site_url() . '/en/news">';
      endif;
    elseif (isset($post_id)):
      $post_translations = pll_get_post_translations($post_id);
      if (pll_current_language() === 'en'):
        echo '<link rel="alternate" hreflang="de-DE" href="';
        echo get_permalink($post_translations['de']);
        echo '" />';
      else:
        echo '<link rel="alternate" hreflang="en-US" href="';
        echo get_permalink($post_translations['en']);
        echo '" />';
      endif;
    endif;
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Henderson webfonts -->
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/1be57243-bc0a-482e-a7f4-0c95f5fd6930.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/23c3a7e2-fd1b-4416-8d19-bf7e93f3c50c.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/1abe8255-18cb-4cb2-8d6c-f6973e71dda4.woff2" as="font" type="font/woff2" crossorigin>
  <!-- Ivy Mode webfonts -->
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/17af_vdef_emp_883a.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/17ae_vdef_emp_8839.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f" as="font" type="font/woff2" crossorigin>
  <style>
    <?php include( KLEIDERORDNUNG_DIR . '/css/0_critical.css') ?>
    <?php include( KLEIDERORDNUNG_DIR . '/css/0_typography.css.php') ?>
  </style>

  <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri() ?>/style.css?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" type="text/css">
  <link rel="stylesheet" media="print" href="<?php echo get_template_directory_uri() ?>/css/print.css?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" type="text/css">
  <noscript>
    <!-- TODO remove the following stylesheet when no longer needed -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.min.css?v=4.1.1">
  </noscript>
  <script type="text/javascript">
    window.kleiderordnung_wpurl = '<?php echo get_bloginfo("wpurl"); ?>';
    window.kleiderordnung_template_url = '<?php echo get_bloginfo("template_url"); ?>';
  </script>
  <script defer src="<?php echo get_template_directory_uri() ?>/js/scripts.js?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>"></script>
  <script defer src="<?php echo get_template_directory_uri() ?>/js/lottie-player.js?v=1.7.1" id="lottie-player-script"></script>
  <meta name="description" content="<?php _e( 'Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin (Meta Description frei übersetzen)', 'kleiderordnung' ) ?>">
  <meta name="keywords" content="<?php _e( 'Slow Fashion,Circular Fashion,nachhaltige Mode, Nachhaltigkeit (Meta Keywords frei übersetzen)', 'kleiderordnung' ) ?>">
<?php if (KLEIDERORDNUNG_is_stage || KLEIDERORDNUNG_is_localhost) { ?>
  <meta name="robots" content="noindex,nofollow">
<?php } else { ?>
  <meta name="robots" content="index,follow">
<?php } ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="true">
  <meta name="google" content="notranslate">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta property="og:title" content="<?php _e( 'Kleiderordnung Berlin: nachhaltige Modeberatung von Tina Steinke', 'kleiderordnung' ) ?>">
  <meta property="og:description" content="<?php _e( 'Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin', 'kleiderordnung' ) ?>">
  <meta property="og:url" content="https://kleiderordnung.berlin/">
  <meta property="og:site_name" content="">
  <meta property="og:type" content="website">
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/preview.png"
  <meta name="theme-color" content="#f5f1ed">
  <script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "KleiderOrdnung Berlin",
      "image": "https://kleiderordnung.berlin/img/keyvisual-kleiderordnung.jpg",
      "logo": "https://kleiderordnung.berlin/img/kleiderordnung-logo-square-blue.png",
      "description": "<?php _e( 'Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin', 'kleiderordnung' ) ?>",
      "url" : "https://kleiderordnung.berlin/",
      "sameAs" : [
        "https://kleiderordnung-berlin.de/",
        "https://www.instagram.com/tina_steinke_kleiderordnung/",
        "https://www.linkedin.com/in/martina-steinke-6810aa111/",
        "https://www.pinterest.de/martinasteinke0050/",
        "https://www.reflecta.network/changemaker/martina-steinke"
      ]
    }
  </script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#f3ebde">
  <meta name="msapplication-TileColor" content="#f3ebde">
</head>
