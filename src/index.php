<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>
<head>
  <meta charset="utf-8">
  <!-- ?php echo get_wp_head(); ? -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>KleiderOrdnung Berlin: nachhaltige Modeberatung von Tina Steinke</title>
  <meta name=language content="de">
  <link rel="canonical" href="https://kleiderordnung.berlin/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Henderson webfonts -->
  <!-- preload project font files -->
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/1be57243-bc0a-482e-a7f4-0c95f5fd6930.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/23c3a7e2-fd1b-4416-8d19-bf7e93f3c50c.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/1abe8255-18cb-4cb2-8d6c-f6973e71dda4.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Ivy Mode webfonts -->
  <!-- preload project font files -->
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/17af_vdef_emp_883a.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/17ae_vdef_emp_8839.woff2?45711c4b8486ec30fae30fb185b8d8b9bb1d822f" as="font" type="font/woff2" crossorigin>
  <!-- load licensed font styles from TypeNetwork / Fastly CDN server -->
  <!--
  <link href="https://fastly-cloud.typenetwork.com/projects/7215/fontface.css?64529db9" rel="stylesheet" type="text/css">
  -->
  <style>
    /** include critical CSS' */
    <?php include( KLEIDERORDNUNG_DIR . '/css/0_critical.css') ?>
    <?php include( KLEIDERORDNUNG_DIR . '/css/0_typography.css.php') ?>
  </style>

  <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri() ?>/style.css?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" type="text/css">
  <!-- defer loading of optional components as shown on web.dev -->
  <link rel="preload" media="print" href="<?php echo get_template_directory_uri() ?>/css/print.css?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.min.css?v=4.1.1">
  </noscript>
  <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/lottie-player.js?v=1.7.1" type="text/javascript"></script>
  <meta name="description" content="Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin">
  <meta name="keywords" content="Slow Fashion,Circular Fashion,nachhaltige Mode, Nachhaltigkeit,Stilberatung,Stil,Beratung,Mode,Shopping,einkaufen,kombinieren,aussehen,aufräumen,aussortieren,Kleiderschrank,Check,Begleitung,Berlin">
  <!-- TODO check and adapt all header and social attribute values! -->
  <meta name="google-site-verification" content="google123todo">
  <meta name="robots" content="noindex,nofollow"><!-- temporary block on preview site TODO remove finally -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="true">
  <meta name="google" content="notranslate">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/kleider-ordnung-logo.png">
  <meta property="og:title" content="Kleiderordnung Berlin: nachhaltige Modeberatung von Tina Steinke">
  <meta property="og:description" content="Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin">
  <meta property="og:url" content="https://www.kleiderordnung-berlin.de/">
  <meta property="og:site_name" content="">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#f3ebde">
  <!-- TODO link rel="me" -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#f3ebde">
  <meta name="msapplication-TileColor" content="#f3ebde">
</head>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>

<div id="cmplz-cookiebanner-container"></div>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kleiderordnung' ); ?></a>
<header id="site-header" class="header header--site-header has-inline-mobile-toggle" aria-label="Site" role="banner" itemtype="https://schema.org/WPHeader" itemscope>
  <div class="header__contentwrapper">
    <div class="header__site-logo">
      <a href="<?php echo get_template_directory_uri() ?>/" rel="home">
        <svg width="269" height="37" viewBox="0 0 269 37" fill="none">
          <title>kleiderordnung</title>
          <path d="M121.13 18.89C121.13 21.37 122.07 23.63 123.61 25.34C131.86 22.07 136.08 12.17 136.08 12.17C136.08 12.17 134.36 19.57 125.67 26.51C123.33 28.18 120.88 29.91 119.8 30.58V30.65H122.83C123.61 29.48 124.48 28.49 125.88 27.19C127.3 28.02 128.96 28.5 130.73 28.5C136.04 28.5 140.34 24.2 140.34 18.89V9.28H130.73C125.42 9.28 121.12 13.58 121.12 18.89H121.13ZM52.95 10.46V28.1H59.31V9.07H59.17L52.94 10.46H52.95ZM52.34 3.79L56.13 7.58L59.92 3.79L56.13 0L52.34 3.79ZM43.54 26.07C40.09 26.07 37.82 23.67 37.75 17.78H49.53C49.8 13.51 47.67 9.28 41.44 9.28C35.21 9.28 31.18 13.14 31.18 19.37C31.18 25.06 35.18 28.51 40.52 28.51C43.84 28.51 47.05 27.29 49.59 23.53L49.18 23.29C47.42 25.32 45.46 26.07 43.53 26.07H43.54ZM41.14 9.82C43.17 9.82 44.66 12.73 44.05 17.23H37.75C37.82 13.17 38.93 9.82 41.14 9.82ZM9.96 14.86L6.95 17.5L17.65 29.52H17.85V20.92L11.79 14.15C13.82 12.42 15.62 11.17 17.92 9.75V9.68H14.94C13.86 11.31 12.6 12.56 9.96 14.86ZM21.3 2.4V28.1H27.66V0.68H27.52L21.29 2.41L21.3 2.4ZM0 2.4V28.1H6.36V0.68H6.22L0 2.4ZM267.98 11.98L268.45 7.99C265.44 7.99 264.32 9.72 263.74 11.1C262.22 9.95 260.05 9.31 257.54 9.31C252.56 9.31 248.77 11.88 248.77 15.81C248.77 18.35 250.26 20.28 252.63 21.33L252.26 21.53C250.2 22.75 249.11 23.83 249.11 25.46C249.11 27.09 250.02 28.74 253.14 28.91L259.34 29.25C263.13 29.45 264.25 30.27 264.25 31.76C264.25 34.1 260.97 35.69 256.23 35.69C252.84 35.69 250.98 34.1 250.98 31.53C250.98 30.89 251.12 30.18 251.35 29.4H251.21L247.86 30.35C247.66 30.89 247.56 31.37 247.56 31.81C247.56 34.89 251.93 36.24 256.23 36.24C262.05 36.24 267.64 33.8 267.64 29.13C267.64 26.15 265.44 24.63 260.97 24.39L254.03 24.02C252.47 23.95 252.2 23.24 252.2 22.9C252.2 22.49 252.34 22.16 252.81 21.85L253.22 21.58C254.4 21.99 255.79 22.22 257.28 22.22C262.22 22.22 266.01 19.65 266.01 15.72C266.01 13.99 265.33 12.57 264.22 11.52C264.56 11.32 264.93 11.25 265.47 11.25C266.25 11.25 267.2 11.59 267.98 11.99V11.98ZM257.45 21.7C255.35 21.7 254.47 19.4 254.47 15.71C254.47 12.02 255.08 9.82 257.38 9.82C259.44 9.82 260.36 12.16 260.36 15.85C260.36 19.54 259.68 21.71 257.45 21.71V21.7ZM222.64 9.07H222.5L216.27 10.46V24.85C215.19 26.07 214.27 26.68 213.29 26.68C210.78 26.68 210.75 23.9 210.75 22.72V9.08H210.61L204.38 10.47V21.98C204.38 26.45 206.68 28.51 210.51 28.51C213.35 28.51 215.01 27.16 216.3 25.56L217.28 28.51L223.37 27.02L222.63 24.79V9.08L222.64 9.07ZM177.82 0.68H177.68L171.45 2.41V10.5C170.37 9.76 169.01 9.28 167.35 9.28C162.14 9.28 157.97 13.48 157.97 19.34C157.97 24.76 161.49 28.51 165.86 28.51C168.26 28.51 170.02 27.36 171.51 25.67L172.46 28.51L178.55 27.02L177.81 24.79V0.68H177.82ZM171.45 24.89C170.23 26.31 169.28 26.75 168.13 26.75C165.9 26.75 164.68 25.19 164.68 18.9C164.68 13.18 165.7 9.86 168.24 9.86C169.9 9.86 171.05 11.35 171.46 13.38V24.89H171.45ZM194.24 9.28C191.53 9.28 189.87 10.43 188.48 11.95V9.07H188.34L182.11 10.46V28.1H188.47V12.63C189.55 11.48 190.47 11.11 191.45 11.11C193.96 11.11 193.99 13.89 193.99 15.07V28.1H200.36V15.81C200.36 11.34 198.06 9.28 194.23 9.28H194.24ZM239.1 9.28C236.39 9.28 234.73 10.43 233.34 11.95V9.07H233.2L226.97 10.46V28.1H233.33V12.63C234.41 11.48 235.33 11.11 236.31 11.11C238.82 11.11 238.85 13.89 238.85 15.07V28.1H245.22V15.81C245.22 11.34 242.92 9.28 239.09 9.28H239.1ZM98.49 26.07C95.04 26.07 92.77 23.67 92.7 17.78H104.48C104.75 13.51 102.62 9.28 96.39 9.28C90.16 9.28 86.13 13.14 86.13 19.37C86.13 25.06 90.13 28.51 95.47 28.51C98.79 28.51 102 27.29 104.54 23.53L104.13 23.29C102.37 25.32 100.41 26.07 98.48 26.07H98.49ZM96.09 9.82C98.12 9.82 99.61 12.73 99 17.23H92.7C92.77 13.17 93.88 9.82 96.09 9.82ZM82.68 0.68H82.54L76.31 2.41V10.5C75.23 9.76 73.87 9.28 72.21 9.28C67 9.28 62.83 13.48 62.83 19.34C62.83 24.76 66.35 28.51 70.72 28.51C73.12 28.51 74.88 27.36 76.37 25.67L77.32 28.51L83.41 27.02L82.67 24.79V0.68H82.68ZM76.31 24.89C75.09 26.31 74.14 26.75 72.99 26.75C70.76 26.75 69.54 25.19 69.54 18.9C69.54 13.18 70.56 9.86 73.1 9.86C74.76 9.86 75.91 11.35 76.32 13.38V24.89H76.31ZM119.31 9.28C116.81 9.28 114.6 11.75 114.13 15.71H114.06V9.07H113.92L107.89 10.46V28.1H114.25V16.93C114.45 14.83 115.74 13.58 117.36 13.58C117.9 13.58 118.51 13.75 119.12 14.02L120.74 9.48C120.6 9.45 119.96 9.28 119.28 9.28H119.31ZM151 15.71H150.93V9.07H150.79L144.76 10.46V28.1H151.12V16.93C151.32 14.83 152.61 13.58 154.23 13.58C154.77 13.58 155.38 13.75 155.99 14.02L157.61 9.48C157.47 9.45 156.83 9.28 156.15 9.28C153.65 9.28 151.44 11.75 150.97 15.71H151Z" fill="currentColor"/>
        </svg>
      </a>
    </div>
    <nav id="site-navigation" class="navigation navigation--main-navigation main-navigation" aria-label="Primary"  itemtype="https://schema.org/SiteNavigationElement" itemscope>
      <div class="inside-navigation grid-container">
        <a href="#primary-menu" class="navigation__toggle navigation__toggle--open" aria-controls="primary-menu" aria-expanded="false" title="Menü öffnen">
          <svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z" fill="currentColor"/></svg>
          <span class="sr-only">Menü</span>
        </a>

        <div id="primary-menu" class="navigation__list-wrapper navigation__list-wrapper--main">
          <a href="#" class="navigation__toggle navigation__toggle--close" aria-controls="primary-menu" aria-expanded="false" title="Menü schließen">
            <svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z" fill="currentColor"/></svg>
            <span class="sr-only">Menü schließen</span>
          </a>
          <ul id="menu-main-menu" class="navigation__list navigation__list--main">
            <li id="menu-item-1857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1857"><a href="#angebot">Angebot</a></li>
            <li id="menu-item-1856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1856"><a href="#mission">Mission</a></li>
            <li id="menu-item-1855" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1855"><a href="#stories">Stories</a></li>
            <li id="menu-item-1854" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1854"><a href="#news">News</a></li>
            <li id="menu-item-1853" class="menu-item menu-item--has-button menu-item-type-post_type menu-item-object-page menu-item-1853"><a class="button button--primary" href="#kontakt">Kontakt</a></li>
            <li id="menu-item-1859-de" class="lang-item lang-item-8 lang-item-de current-lang lang-item-first menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-1859-de">
              <a href="/" hreflang="de" lang="de" title="Deutsch">DE</a>/<a href="/en/" hreflang="en" lang="en" title="English">EN</a>
            </li>
          </ul>
        </div>
        <div class="menu-bar-items"></div>
      </div>
    </nav>
  </div>
</header>
<!-- TODO remove all of the default WordPress utility classes to prevent compatibility issues with WP core -->


<main id="wp--skip-link--target">
  <!-- start stopped and activate on JS only -->
  <section class="intro">
    <div id="intro-keyvisual-wrapper" class="intro__keyvisual">
      <div id="intro-keyvisual-mousetrap" class="intro__keyvisual__mousetrap"></div>
      <lottie-player
        class="intro__keyvisual__animation"
        id="intro-keyvisual-animation"
        mode="normal"
        loop
        count="2"
        src="<?php echo get_template_directory_uri() ?>/lottie/data.json"
        style="width: 90%"
      >
      </lottie-player>
      <!-- Fallback for users without Lottie Capability or Prefers Reduced Motion: Hero Banner Key Visual Image -->
      <div class="intro__keyvisual__animation--motionless-fallback">
        <img
          src="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg" width="1160" height="581"
          srcset="<?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/keyvisual-kleiderordnung@2x.jpg 2x"
          loading="eager"
          alt="Tina Steinke Photography"
        >
      </div>
    </div>

    <div class="intro__keytext">
      <h1 class="intro__keytext__headline">Goodbye fast-fashion –
        <br>
        erlebe Kreativität und Freude mit nachhaltigem Modekonsum!</h1>
      <p class="intro__keytext__paragraph">
        Ich bin <strong>Tina Steinke</strong>, begeisterte Second Hand und Vintage Fashionista und helfe Dir dabei, Deine Schönheit und die Deiner Kleidungsstücke im Schrank zur Geltung und Dich zum Strahlen zu bringen!
      </p><p class="intro__keytext__paragraph">
        Ich habe selbst einen starken Stil und ein ausgeprägtes Gespür für die besonderen Perlen in der Fülle von Gewöhnlichem! Ob minimalistisch, bunt, mutig, modern, stark, mädchenhaft, androgyn, selbstbewusst – ich kreiere für Dich den Stil, die Ausstrahlung, das Statement, was Du mit Deiner Kleidung ausdrücken möchtest.
      </p>
    </div>

  </section>

  <section id="angebot" class="offers target-offset">
    <h2 class="offers__headline">Meine Angebote</h2>
    <nav class="offers__navigation">
      <ul>
        <li>
          <a href="#angebote-style-visit">Style Visit</a>
        </li>
        <li>
          <a href="#angebote-shopping-tour">Shopping-Tour</a>
        </li>
        <li>
          <a href="#angebote-online-styling-beratung">Online-Styling-Beratung</a>
        </li>
        <li>
          <a href="#outfit-consulting">Outfit Consulting</a>
        </li>
      </ul>
    </nav>

    <article class="offers__offer has-secondary-background">
      <figure class="offers__offer__image">
        <img
          src="<?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung.jpg" width="560" height="560"
          srcset="<?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung@2x.jpg 2x"
          loading="lazy"
          alt="Tina Steinke betrachtet lächelnd Kleidung am Kleiderständer"
        >
      </figure>
      <div class="offers__offer__card">
        <figure class="offers__offer__icon">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 4.75C7 3.09314 8.34315 1.75 10 1.75H46C47.6569 1.75 49 3.09315 49 4.75V47.75C49 49.4069 47.6569 50.75 46 50.75H10C8.34315 50.75 7 49.4069 7 47.75V4.75Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.5 50.75V54.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M45.5 50.75V54.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M28 50.75V1.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 25.375C21.4832 25.375 21.875 25.7668 21.875 26.25C21.875 26.7332 21.4832 27.125 21 27.125C20.5168 27.125 20.125 26.7332 20.125 26.25C20.125 25.7668 20.5168 25.375 21 25.375" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M35 25.375C35.4832 25.375 35.875 25.7668 35.875 26.25C35.875 26.7332 35.4832 27.125 35 27.125C34.5168 27.125 34.125 26.7332 34.125 26.25C34.125 25.7668 34.5168 25.375 35 25.375" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </figure>
        <h3 class="offers__offer__headline">Style Visit</h3>
        <p class="offers__offer__paragraph">
          Wir treffen uns bei Dir zu Hause und wir gehen gemeinsam Deine Garderobe entsprechend nach Deinen Zielen und Anforderungen durch und mit viel Spaß und Ideenreichtum betrachte ich jedes Stück als Chance und wertvolle Ressource und füge sie zu überraschenden Kombinationen zusammen! Als Ergebnis kannst Du Dich auf eine neue Kollektion im Schrank erfreuen und dies ganz ohne Konsum!
        </p>
        <strong class="offers__offer__features__headline">Was Du erhältst:</strong>
        <ul class="offers__offer__features__list">
          <li>Kostenloses Vorgespräch</li>
          <li>tolle Kombinationen, auf die Du so nicht gekommen wärst</li>
          <li>eine neue Kollektion aus dem eigenen Schrank</li>
          <li>Definition von Stücken, die besonders gut zu Dir und Deiner Silhouette passen</li>
          <li>Fotos von Dir und deinen neuen Looks mit anschließendem Stylebook</li>
          <li>Kleidungsstücke gezielt aussortieren, die Deiner Persönlichkeit nicht entsprechen</li>
          <li>Wegweiser für Dich, wie du die gewonnenen Erkenntnisse eigenständig umsetzten kannst</li>
          <li>Empfehlungen für Ergänzungen, wenn sinnvoll</li>
        </ul>
        <div class="offers__offer__price">
          <span class="offers__offer__price__prefix">ab</span>
          <span class="offers__offer__price__amount">190,-</span>
          <span class="offers__offer__price__currency">&euro;</span>
        </div>
        <ul class="offers__offer__price__annotations">
          <li>Minimum 2h = 190 Euro</li>
          <li>jede weitere Stunde = 90 Euro</li>
        </ul>
        <a class="button button--primary" href="#kontakt">Termin buchen</a>
      </div>
    </article>

    <!-- TODO replace the example(s) below with dynamic content from data loop -->
    <article class="offers__offer has-secondary-background">
      <figure class="offers__offer__image">
        <img
          src="<?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung.jpg" width="560" height="560"
          srcset="<?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung@2x.jpg 2x"
          loading="lazy"
          alt="Tina Steinke am Kleiderständer"
        >
      </figure>
      <div class="offers__offer__card">
        <figure class="offers__offer__icon">
          <svg width="57" height="56" viewBox="0 0 57 56" fill="none">
            <path d="M22 54.8334H1.02002C1.02002 54.8334 1.02002 43.6081 1.02002 43.251C1.02002 43.251 0.974976 41.7351 1.02002 40.8336V19.033V16.3334H41.8333V19.033" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M30.5374 9.46637C29.7468 5.33694 26.1411 2.34659 21.9367 2.33337V2.33337C17.7542 2.35172 14.1652 5.31781 13.3594 9.42204" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M50.6359 32.7195H31.7242C30.7849 32.6812 29.9623 33.344 29.7999 34.2699L27.1199 52.9163C27.0918 53.434 27.2861 53.9391 27.6538 54.3046C28.0216 54.6701 28.5279 54.8612 29.0455 54.8299H53.3146C53.8321 54.8612 54.3383 54.6701 54.7058 54.3046C55.0734 53.939 55.2674 53.4339 55.2389 52.9163L52.5589 34.2699C52.3965 33.3445 51.5747 32.6819 50.6359 32.7195Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M46.0957 28.776C45.6417 26.4045 43.571 24.6872 41.1564 24.6796V24.6796C38.7544 24.6901 36.6932 26.3935 36.2305 28.7506" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </figure>
        <h3 class="offers__offer__headline">Shopping-Tour</h3>
        <p class="offers__offer__paragraph">
          In 3-4 ausgesuchten Läden suchen wir gezielt nach den fehlenden Puzzlestücken, die aus deiner Garderobe ein stimmiges Ganzes machen! Im Fokus stehen Fair-Fashion Boutiquen, Second Hand & Vintage-Stores. Die Berliner Designer-Szene bietet zudem zahlreiche unabhängige Brands mit ausdrucksstarken Kollektionen und Einzelstücken ebenso wie puristischen Schnitten. Ich werde das Richtige für Dich finden, denn viel Erfahrung und Kreativität lässt mich das Potential eines Kleidungsstücks und dessen Einsatzfähigkeit schnell erkennen!
        </p>
        <strong class="offers__offer__features__headline">Was Du erhältst:</strong>
        <ul class="offers__offer__features__list">
          <li>Kostenloses Vorgespräch</li>
          <li>gezielte Auswahl an passenden Ergänzungen</li>
          <li>Zeit- und Nerven sparendes Einkaufen</li>
          <li>Vermeidung von Fehlkäufen</li>
          <li>Kennenlernen von besonderen Stores & Designern</li>
          <li>1 zu 1 Styling-Beratung vor Ort</li>
        </ul>
        <div class="offers__offer__price">
          <!-- TODO possibly better offer 1 free form text line? -->
          <span class="offers__offer__price__prefix">ab</span>
          <span class="offers__offer__price__amount">120,-</span>
          <span class="offers__offer__price__currency">&euro;</span>
        </div>
        <ul class="offers__offer__price__annotations">
          <li>Minimum 3 Stunden = 290 Euro</li>
          <li>jede weitere Stunde = 90 Euro</li>
        </ul>
        <a class="button button--primary" href="#kontakt">Termin buchen</a>
      </div>
    </article>

    <div class="offers__additional">
      <h2 class="offers__additional__headline">Weitere Angebote</h2>
      <div class="offers__additional__articles">

        <article class="offers__additional__articles__offer">
          <figure class="offers__offer__icon">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M40.25 18.4811L38.444 11.6715C38.1863 10.7301 37.2972 10.0757 36.2833 10.0811H31.3413C31.3413 11.8526 29.8454 13.2888 28 13.2888C26.1546 13.2888 24.6587 11.8526 24.6587 10.0811H19.7167C18.7028 10.0757 17.8137 10.7301 17.556 11.6715L15.75 18.4811H21V26.8811H35V18.4811H40.25Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.5 52.0811H38.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M1.75 33.6011H54.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.75 4.68018C1.75 3.02332 3.09315 1.68018 4.75 1.68018H51.25C52.9069 1.68018 54.25 3.02332 54.25 4.68018V39.0002C54.25 40.657 52.9069 42.0002 51.25 42.0002H4.75C3.09315 42.0002 1.75 40.657 1.75 39.0002V4.68018Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M28 52.08V42" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </figure>
            <h3 class="offers__offer__headline">Styling-Abo</h3>
            <p class="offers__offer__paragraph">
              Du wünscht Dir regelmäßigen Support in Stylingfragen oder nachhaltigen Kaufentscheidungen? Dann sichere Dir meine Aufmerksamkeit durch Dein monatliches Styling-Abo! Beinhaltet sind 5-6 individuelle Anfragen online pro Monat.
            </p>
            <div class="offers__offer__price">
              30,–€ monatl.
            </div>
        </article>

        <article class="offers__additional__articles__offer">
          <figure class="offers__offer__icon">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
              <path d="M1.75 53.083H54.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M54.25 21.583H1.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M38.5 14.5832L30.8 4.3165C30.139 3.43518 29.1017 2.9165 28 2.9165C26.8983 2.9165 25.861 3.43518 25.2 4.3165L17.5 14.5832" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.5 46.0811V28.5811" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.5 28.5811H19.25C22.1495 28.5811 24.5 30.9316 24.5 33.8311C24.5 36.7305 22.1495 39.0811 19.25 39.0811H17.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7 28.583C5.067 28.583 3.5 30.15 3.5 32.083V42.583C3.5 44.516 5.067 46.083 7 46.083C8.933 46.083 10.5 44.516 10.5 42.583V32.083C10.5 30.15 8.933 28.583 7 28.583Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M38.5 46.0811H35C33.067 46.0811 31.5 44.5141 31.5 42.5811V32.0811C31.5 30.1481 33.067 28.5811 35 28.5811H38.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M31.5 39.0811H38.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M45.5 46.0811V28.5811L52.5 46.0811V28.5811" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </figure>
          <h3 class="offers__offer__headline">Meet the Special-Places</h3>
          <p class="offers__offer__paragraph">
            Du möchtest gezielt besondere Fashion-Locations kennenlernen? Vintage-Stores, Designerateliers, Fairfashion-Boutiquen? Ich biete Gruppen-Walks zu Berlins besten Adressen in Sachen Mode!
          </p>
          <div class="offers__offer__price">
            3h = 35,- € pro Person
          </div>
        </article>

        <article class="offers__additional__articles__offer">
          <figure class="offers__offer__icon">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
              <path d="M35 1.75C36.933 1.75 38.5 3.317 38.5 5.25C38.5 7.183 36.933 8.75 35 8.75V12.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M1.75 5.25H26.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M54.25 5.25H47.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M33.25 33.25H5.25C3.317 33.25 1.75 34.817 1.75 36.75V54.25H36.75V36.75C36.75 34.817 35.183 33.25 33.25 33.25Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M19.25 40.25V54.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M1.75 40.25H36.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M8.75 47.25H12.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M26.25 47.25H29.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M22.75 22.75C22.75 16.9517 28.2357 12.25 35 12.25C41.7643 12.25 47.25 16.9517 47.25 22.75H22.75Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </figure>
          <h3 class="offers__offer__headline">Ordnung im Schrank</h3>
          <p class="offers__offer__paragraph">
            Schluss mit Chaos im Schrank und dem ewigen „Struggle“ der Outfitsuche am Morgen! Ich strukturiere Deine Garderobe sinnvoll und Du erfreust Dich umso mehr an Deinen Stücken
          </p>
          <div class="offers__offer__price">
            ab 65,–€
          </div>
        </article>

      </div>
    </div>

  </section>

  <section id="mission" class="mission target-offset">
      <h2 class="mission__headline">Meine Mission</h2>
      <p class="mission__text">
        Durch individuelle Stilberatung und den Einsatz fairer Mode möchte ich dazu beitragen, dass Du deiner Persönlichkeit Ausdruck verleihen kannst. Mein Ziel ist es, Kleidung auf eine kreative Art und Weise erlebbar zu machen und dich dabei zu unterstützen, dein Selbstbewusstsein zu stärken.
      </p>
  </section>

  <section class="calltoaction">
    <p class="calltoaction__text">
      Habe ich Dich neugierig gemacht?
      Dann buche gern einen kostenlosen Kennenlerntermin!
    </p>
    <div class="calltoaction__buttonwrapper">
      <a class="button button--primary" href="#kontakt">
        Kontakt
      </a>
    </div>
  </section>

  <section id="stories" class="stories target-offset">
    <h2 class="stories__headline">Stories</h2>
    <div class="stories__wrapper carousel__wrapper">
      <div class="stories__viewport carousel__viewport">

      <!-- Story 1 -->
      <article class="stories__story carousel__item">
        <figure class="stories__story__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/maxi.jpg" width="319" height="567"
            srcset="<?php echo get_template_directory_uri() ?>/img/maxi.jpg 1x, <?php echo get_template_directory_uri() ?>/img/maxi@2x.jpg 2x"
            loading="lazy"
            alt="Foto der Kundin Maxi"
          >
        </figure>
        <blockquote class="stories__story__quote">
          <author class="stories__story__quote__author">
            Maxi, Künstlerin, Berlin:
          </author>
          <span class="stories__story__quote__text">
Die Styling-Session mit Tina hat mir gezeigt, wie wandelbar ich bin und in mir große Lust ausgelöst, mich durch Mode mehr auszudrücken. Auf meiner Vernissage fühlte ich mich mutig und stark.
          </span>
        </blockquote>
      </article>

      <!-- Story 2 -->
      <article class="stories__story carousel__item">
        <figure class="stories__story__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/jackie.jpg" width="321" height="570"
            srcset="<?php echo get_template_directory_uri() ?>/img/jackie.jpg 1x, <?php echo get_template_directory_uri() ?>/img/jackie@2x.jpg 2x"
            loading="lazy"
            alt="Foto der Kundin Jackie"
          >
        </figure>
        <blockquote class="stories__story__quote">
          <author class="stories__story__quote__author">
            Jackie, Marketing Lead @ Impact Hub Berlin:
          </author>
          <span class="stories__story__quote__text">
I really enjoyed doing a tour of my closet with Tina. She helped me see my clothes with fresh eyes and provided practical tips on how to come up with combinations and accessories that enhance my style and personality. I recommend her services if you are looking to refine your fashion style. Thank you so much, Tina!
          </span>
        </blockquote>
      </article>

      <!-- Story 3 -->
      <article class="stories__story carousel__item">
        <figure class="stories__story__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/jackie.jpg" width="321" height="570"
            srcset="<?php echo get_template_directory_uri() ?>/img/maik.jpg 1x, <?php echo get_template_directory_uri() ?>/img/maik@2x.jpg 2x"
            loading="lazy"
            alt="Foto des Kunden Mike"
          >
        </figure>
        <blockquote class="stories__story__quote">
          <author class="stories__story__quote__author">
            Mike, Freelance Translator, Berlin::
          </author>
          <span class="stories__story__quote__text">
 Tina brings enthusiasm and positive energy to fashion and styling. It's clear that she's good at what she does, and loves it too. She's given me clear advice on how to make the most of my existing wardrobe, and also how to make small changes that can make a big difference for my appearance. I look forward to working with Tina more!
          </span>
        </blockquote>
      </article>

      <!-- Story 4 - absichtlich ohne Bild -->
      <article class="stories__story carousel__item">
        <!-- einige Testimonials haben eventuell kein Bild -->
        <blockquote class="stories__story__quote">
          <author class="stories__story__quote__author">
            Someone, without a picture:
          </author>
          <span class="stories__story__quote__text">
Ut denim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </span>
        </blockquote>
      </article>

    </div>

    <nav class="stories__navigation carousel__navigation">
      <a class="stories__navigation__link stories__navigation__link--prev carousel__navigation__prev" href="#prev">
        <svg width="70" height="42" viewBox="0 0 70 42" fill="none">
          <title>zurück</title>
          <path d="M-1.36497e-06 21C11.598 21 21 11.598 21 0" stroke="currentColor" stroke-width="2"/>
          <path d="M4.70904e-07 21C11.598 21 21 30.402 21 42" stroke="currentColor" stroke-width="2"/>
          <line y1="21" x2="70" y2="21" stroke="currentColor" stroke-width="2"/>
        </svg>
      </a>
      <a class="stories__navigation__link stories__navigation__link--next carousel__navigation__next" href="#next">
        <svg width="70" height="42" viewBox="0 0 70 42" fill="none">
          <title>vor</title>
          <path d="M70 21C58.402 21 49 30.402 49 42" stroke="currentColor" stroke-width="2"/>
          <path d="M70 21C58.402 21 49 11.598 49 0" stroke="currentColor" stroke-width="2"/>
          <line x1="70" y1="21" x2="8.74224e-08" y2="21" stroke="currentColor" stroke-width="2"/>
        </svg>
      </a>
    </nav>
  </section>

  <section id="news" class="news target-offset"><!-- post-type post -->
    <h2 class="news__headline">News</h2>
    <div class="news__wrapper">

      <!-- News 1 -->
      <article class="news__post">
        <figure class="news__post__image">
          <img alt>
        </figure>
        <h3 class="news__post__title">Kategoriename</h3>
        <p class="stories__story__quote__text">
          Gute Gespräche und viel zu sehen – unterwegs auf der Green Fashion Fair Berlin
          </p>
      </article>

      <!-- News 2 -->
      <h2 class="news__headline">News</h2>
      <div class="news__wrapper">
        <article class="news__post">
          <figure class="news__post__image">
            <img alt>
          </figure>
          <h3 class="news__post__title">Kategoriename</h3>
          <p class="stories__story__quote__text">
            Gute Gespräche und viel zu sehen – unterwegs auf der Green Fashion Fair Berlin
          </p>
        </article>


        <!-- News 3 -->
        <h2 class="news__headline">News</h2>
        <div class="news__wrapper">
          <article class="news__post">
            <figure class="news__post__image">
              <img alt>
            </figure>
            <h3 class="news__post__title">Kategoriename</h3>
            <p class="stories__story__quote__text">
              Gute Gespräche und viel zu sehen – unterwegs auf der Green Fashion Fair Berlin
            </p>
          </article>
        </div>

          <!-- TODO disable "all news" link in single page mode: -->
          <a class="news__link" href="#">alle Neuigkeiten</a>
    </div>
  </section>

  <section class="socialmedia target-offset">
    <a rel="me" href=""><figure><svg></svg></figure> Kleiderordnung auf instagram</a>
    <aside id="juicer-feed-container"
           label="Instagram Galerie"
           class="feed__container allowable--on-visibility"
           data-allowable="allowable"
           data-styleurl="css/juicer.io/202210/embed.css"
           data-scripturl="https://assets.juicer.io/embed.js"
    >
      <h2 id="bilder" class="target-offset">Meine Bilder bei Instagram</h2>
      <div class="feed__consent">
        <p>Dürfen externe Inhalte von Instagram geladen werden?</p>
        <button class="button__allow button__allow--once" data-allow="once">Einmal erlauben</button>
        <button class="button__allow button__allow--always" data-allow="always">Immer erlauben</button>
      </div>
      <h1 class="referral"><a href="https://www.juicer.io">Social Media Feed von Juicer.io</a></h1>
      <ul class="juicer-feed" data-feed-id="kleider-ordnung" data-origin="embed-code" data-per="9" pages="1"></ul>
      <a class="follow" target="_blank" rel="noopener" href="https://www.instagram.com/kleider.ordnung">jetzt folgen</a>
    </aside>
  </section>

  <section id="kontakt" class="contact target-offset">

    <div class="columns__column-wrapper columns__column-wrapper--lg">

      <div class="columns__column columns__column-50">
        <!-- BEGIN vcard imprint contact information - TODO: update using rel=me etc. -->
        <article class="contact__vcard">
          <address class="vcard contrast--varies contrast--more">
            <div>
              <div class=fn itemprop=name>Martina Steinke</div><div class=street-address>Donaustr. 83, <span class=postal-code>12043</span> Berlin</div><div>Tel. <a class=telephone itemprop=telephone href=tel:+491636823820><span class=visually-spaced>0</span><span class="visually-spaced dot-after">163</span><span class=visually-spaced>682</span><span class=visually-spaced>382</span><span class=visually-spaced>0</span></a></div><div><a class=email itemprop=email itemscope href=mailto:martinasteinke@posteo.de>martinasteinke@posteo.de</a></div><div><a itemscope class=url rel=author href="https://www.kleiderordnung-berlin.de/">www.kleiderordnung-berlin.de</a></div><br><div>Mitglied bei <a href="https://fashionchangers.de/" target=_blank rel=noopener&quot;>Fashion Changers</a> und <span class="role jobtitle" itemprop=jobTitle>nachhaltige Modeberaterin</span> bei <a href=https://www.sustainable-stylists.com target=_blank rel=noopener>Sustainable Stylists</a>.</div></div><div class=social><a href="https://www.instagram.com/kleider.ordnung/" target=_blank rel=noopener title="kleider.ordnung auf Instagram"><svg x=0px y=0px width=25 height=25 viewbox="0 0 512 512"><path style=fill:currentColor d=M256,49.471c67.266,0,75.233.257,101.8,1.469,24.562,1.121,37.9,5.224,46.778,8.674a78.052,78.052,0,0,1,28.966,18.845,78.052,78.052,0,0,1,18.845,28.966c3.45,8.877,7.554,22.216,8.674,46.778,1.212,26.565,1.469,34.532,1.469,101.8s-0.257,75.233-1.469,101.8c-1.121,24.562-5.225,37.9-8.674,46.778a83.427,83.427,0,0,1-47.811,47.811c-8.877,3.45-22.216,7.554-46.778,8.674-26.56,1.212-34.527,1.469-101.8,1.469s-75.237-.257-101.8-1.469c-24.562-1.121-37.9-5.225-46.778-8.674a78.051,78.051,0,0,1-28.966-18.845,78.053,78.053,0,0,1-18.845-28.966c-3.45-8.877-7.554-22.216-8.674-46.778-1.212-26.564-1.469-34.532-1.469-101.8s0.257-75.233,1.469-101.8c1.121-24.562,5.224-37.9,8.674-46.778A78.052,78.052,0,0,1,78.458,78.458a78.053,78.053,0,0,1,28.966-18.845c8.877-3.45,22.216-7.554,46.778-8.674,26.565-1.212,34.532-1.469,101.8-1.469m0-45.391c-68.418,0-77,.29-103.866,1.516-26.815,1.224-45.127,5.482-61.151,11.71a123.488,123.488,0,0,0-44.62,29.057A123.488,123.488,0,0,0,17.3,90.982C11.077,107.007,6.819,125.319,5.6,152.134,4.369,179,4.079,187.582,4.079,256S4.369,333,5.6,359.866c1.224,26.815,5.482,45.127,11.71,61.151a123.489,123.489,0,0,0,29.057,44.62,123.486,123.486,0,0,0,44.62,29.057c16.025,6.228,34.337,10.486,61.151,11.71,26.87,1.226,35.449,1.516,103.866,1.516s77-.29,103.866-1.516c26.815-1.224,45.127-5.482,61.151-11.71a128.817,128.817,0,0,0,73.677-73.677c6.228-16.025,10.486-34.337,11.71-61.151,1.226-26.87,1.516-35.449,1.516-103.866s-0.29-77-1.516-103.866c-1.224-26.815-5.482-45.127-11.71-61.151a123.486,123.486,0,0,0-29.057-44.62A123.487,123.487,0,0,0,421.018,17.3C404.993,11.077,386.681,6.819,359.866,5.6,333,4.369,324.418,4.079,256,4.079h0Z></path><path style=fill:currentColor d=M256,126.635A129.365,129.365,0,1,0,385.365,256,129.365,129.365,0,0,0,256,126.635Zm0,213.338A83.973,83.973,0,1,1,339.974,256,83.974,83.974,0,0,1,256,339.973Z></path><circle style=fill:currentColor cx=390.476 cy=121.524 r=30.23></circle></svg></a> <a href=https://www.reflecta.network/changemaker/martina-steinke target=_blank rel=noopener title="reflecta network"><svg width=36 height=32 viewbox="0 0 36 32"><g fill=none fill-rule=evenodd><g fill-rule=nonzero><g><path fill=currentColor d="M11.515 21.8v-6.794c0-.588.133-1.079.398-1.473.265-.394.648-.591 1.15-.591.53 0 .917.161 1.161.484.244.322.365.706.365 1.15v.494h2.623c.015-.086.033-.236.054-.451.022-.215.033-.43.033-.645 0-1.018-.27-1.835-.807-2.451-.537-.616-1.3-.925-2.29-.925-.616 0-1.15.122-1.601.366-.452.244-.796.509-1.032.795-.237.287-.384.51-.441.667l-.387-1.613H8.419V21.8h3.096zm12.144.215c.889 0 1.71-.154 2.462-.462.753-.308 1.358-.789 1.817-1.44.458-.653.688-1.46.688-2.42h-3.01c0 .717-.19 1.258-.57 1.624-.38.365-.9.548-1.559.548-.73 0-1.308-.24-1.73-.72-.423-.48-.635-1.079-.635-1.796v-.516h7.525V15.2c0-.946-.229-1.766-.688-2.461-.458-.695-1.068-1.226-1.827-1.591-.76-.366-1.584-.549-2.473-.549h-.344c-1.017 0-1.931.215-2.74.645-.81.43-1.452 1.054-1.925 1.871-.473.817-.71 1.777-.71 2.881v.623c0 1.118.233 2.082.7 2.892.465.81 1.106 1.43 1.923 1.86.817.43 1.735.645 2.752.645h.344zm1.806-6.902h-4.343c.058-.688.283-1.254.678-1.698.394-.444.906-.667 1.537-.667.745 0 1.286.212 1.623.635.337.423.505 1 .505 1.73z" transform="translate(-16 -12) translate(16 12)"></path><path fill=currentColor d="M9 0c.552 0 1 .448 1 1 0 .527-.408.96-.925.997L9 2H2v28h7c.527 0 .96.408.997.925L10 31c0 .527-.408.96-.925.997L9 32H1c-.527 0-.96-.408-.997-.925L0 31V1C0 .473.408.04.925.003L1 0h8z" transform="translate(-16 -12) translate(16 12)"></path><path fill=currentColor d="M34.5 0c.552 0 1 .448 1 1 0 .527-.408.96-.925.997L34.5 2h-7v28h7c.527 0 .96.408.997.925L35.5 31c0 .527-.408.96-.925.997L34.5 32h-8c-.527 0-.96-.408-.997-.925L25.5 31V1c0-.527.408-.96.925-.997L26.5 0h8z" transform="translate(-16 -12) translate(16 12) matrix(-1 0 0 1 61 0)"></path></g></g></g></svg></a> <a href=https://www.xing.com/profile/Martina_Steinke11 target=_blank rel=noopener title=XING><svg height=25 width=25 x=0px y=0px viewbox="0 0 400 400" style="enable-background:new 0 0 455.731 455.731"><g><rect x=0 y=0 style=fill:currentColor width=455.731 height=455.731></rect><g><polygon style=fill:#c3cfbb points="161.915,124.199 89.249,124.199 129.915,200.199 74.582,291.532 147.249,291.532 202.582,200.199"></polygon><polygon style=fill:#c3cfbb points="304.582,66.199 381.149,66.199 268.482,264.199 342.382,389.532 265.916,389.532 191.916,264.199"></polygon></g></g></svg></a></div></address></article>
        <!-- END vcard imprint contact information -->
      </div>

      <div class="columns__column columns__column-50">
        <!-- contact 7 form using fixed shortcode (TODO: dynmic first available by language? -->
        <?php echo do_shortcode( '[contact-form-7 id="16" title="Kontaktformular deutsch"]' ); ?>

      </div>
    </div>
  </section>
  </div>
</main>

<footer id="footer" class="site-footer" role="contentinfo">
  Footer Content
</footer>
</div>

</body>
</html>
