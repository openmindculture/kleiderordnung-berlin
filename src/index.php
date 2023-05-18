<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <!-- ?php echo get_wp_head(); ? -->
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
  <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/lottie-player.js?v=1.7.1" ></script>
  <meta name="description" content="Stilberatung, Shoppingbegleitung und Kleiderschrank-Check in Berlin">
  <meta name="keywords" content="Slow Fashion,Circular Fashion,nachhaltige Mode, Nachhaltigkeit,Stilberatung,Stil,Beratung,Mode,Shopping,einkaufen,kombinieren,aussehen,aufräumen,aussortieren,Kleiderschrank,Check,Begleitung,Berlin">
  <!-- TODO check and adapt all header and social attribute values! -->
  <meta name="robots" content="index,follow">
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
  <!-- TODO HTML with JSON-LD & schema.org schema markup -->
<script type="application/ld+json">
    {
      "@context" : "http://schema.org",
      "@type" : "Organization",
      "name" : "KleiderOrdnung Berlin",
      "url" : "https://kleiderordnung.berlin/",
      "sameAs" : [
        "https://kleiderordnung-berlin.de/",
        "https://www.instagram.com/tina_steinke_kleiderordnung/",
        "https://www.linkedin.com/in/martina-steinke-6810aa111/"
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
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>

<div id="cmplz-cookiebanner-container"></div>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kleiderordnung' ); ?></a>
<header id="site-header" class="header header--site-header has-inline-mobile-toggle" aria-label="Site" itemtype="https://schema.org/WPHeader" itemscope>
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
          <a href="#angebote-outfit-consulting">Outfit Consulting</a>
        </li>
        <li>
          <a href="#angebote-kleiderordnung">Kleiderordnung</a>
        </li>
      </ul>
    </nav>

    <div class="offers__cards">
      <!-- Offer 1/5 -->
      <article id="angebote-style-visit" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung.jpg" width="560" height="560"
            srcset="<?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung@2x.jpg 2x"
            loading="lazy"
            alt="Tina Steinke betrachtet lächelnd Kleidung am Kleiderständer"
          >
        </figure>
        <div class="offers__offer__card">
          <figure class="offers__offer__icon"></figure>
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

      <!-- Offer 2/5 -->
      <article id="angebote-shopping-tour" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung.jpg" width="560" height="560"
            srcset="<?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung@2x.jpg 2x"
            loading="lazy"
            alt="Tina Steinke am Kleiderständer"
          >
        </figure>
        <div class="offers__offer__card">
          <figure class="offers__offer__icon"></figure>
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

      <!-- Offer 3/5 -->
      <article id="angebote-online-styling-beratung" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/onlinestyling-beratung-kleiderordnung.jpg" width="560" height="560"
            srcset="<?php echo get_template_directory_uri() ?>/img/onlinestyling-beratung-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/onlinestyling-beratung-kleiderordnung@2x.jpg 2x"
            loading="lazy"
            alt="Symbolbild"
          >
        </figure>
        <div class="offers__offer__card">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__offer__headline">Online Styling Beratung</h3>
          <p class="offers__offer__paragraph">
            Deine zeitlichen Kapazitäten sind begrenzt? Du brauchst kurzfristig Rat? Du wohnst nicht in der Region Berlin? Als follow-up nach einer bereits erfolgten Styling-Session? Keine Sorge, ich stehe Dir mit meiner Erfahrungen und Ideenreichtum auch online zur Verfügung! Nach einer Vorbesprechung Deines Anliegens treffen wir uns virtuell und Du zeigst mir via Kamera die Kleidungsstücke, zu denen Du Fragen hast: sei es generell zu Farbe und Schnitt, ein Event, oder für eine finale Kaufentscheidung bei online gekauften Kleidungsstücken.
          </p>
          <strong class="offers__offer__features__headline">Was Du erhältst:</strong>
          <ul class="offers__offer__features__list">
            <li>Kostenloses Vorgespräch</li>
            <li>Virtuelle Beratung via Videoanruf</li>
            <li>Beratung zu Farbe und Schnitt der Kleidungsstücke</li>
            <li>Hilfe bei Kaufentscheidungen von online gekauften Kleidungsstücken</li>
          </ul>
          <div class="offers__offer__price">
            <span class="offers__offer__price__prefix">ab</span>
            <span class="offers__offer__price__amount">85,-</span>
            <span class="offers__offer__price__currency">&euro;</span>
          </div>
          <ul class="offers__offer__price__annotations">
            <li>Minimum = 85 Euro</li>
          </ul>
          <a class="button button--primary" href="#kontakt">Termin buchen</a>
        </div>
      </article>

      <!-- Offer 4/5 -->
      <article id="angebote-outfit-consulting" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/outfit-consulting-kleiderordnung.jpg" width="560" height="560"
            srcset="<?php echo get_template_directory_uri() ?>/img/outfit-consulting-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/outfit-consulting-kleiderordnung@2x.jpg 2x"
            loading="lazy"
            alt="Tina Steinke am Kleiderständer"
          >
        </figure>
        <div class="offers__offer__card">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__offer__headline">Outfit Consulting für Start-ups mit nachhaltigem Fokus</h3>
          <p class="offers__offer__paragraph">
            Kleider machen Leute, auch im nachhaltigen Sektor. Das Erscheinungsbild beeinflusst den ersten Eindruck, den Betrachter:innen von Dir haben. Überlasse dies nicht dem Zufall und lass uns zusammenarbeiten, denn Präsentationen und Treffen mit Entscheidern, Sponsoren und Businessangeln sind enorm wichtige Auftritte zum Erreichen Deiner Ziele.<br>
            Das richtige Outfit strahlt Kompetenz und Authentizität aus, macht Dich stark, selbstbewusst und verleiht dir einen emotionalen Boost.
          </p>
          <strong class="offers__offer__features__headline">Was Du erhältst:</strong>
          <ul class="offers__offer__features__list">
            <li>Kostenloses Vorgespräch</li>
            <li>Individuelle Outfit-Empfehlungen</li>
            <li>Outfit-Zusammenstellung aus dem Vorhandenen (nach erfolgtem Style-Visit oder Online Styling Beratung)</li>
            <li>Ausarbeiten eines Corporate Designs als Branding zur optimalen Visualisierung Deines Businesses</li>
          </ul>
          <div class="offers__offer__price">
            <span class="offers__offer__price__prefix">ab</span>
            <span class="offers__offer__price__amount">190,-</span>
            <span class="offers__offer__price__currency">&euro;</span>
          </div>
          <ul class="offers__offer__price__annotations">
            <li>Minimum 2 h = 190 Euro</li>
            <li>jede weitere Stunde = 90 Euro</li>
          </ul>
          <a class="button button--primary" href="#kontakt">Termin buchen</a>
        </div>
      </article>

      <!-- Offer 5/5 -->
      <article id="angebote-kleiderordnung" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/kleiderordnung.jpg" width="560" height="560"
            srcset="<?php echo get_template_directory_uri() ?>/img/kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/kleiderordnung.jpg 2x"
            loading="lazy"
            alt="Tina Steinke am Kleiderständer"
          >
        </figure>
        <div class="offers__offer__card">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__offer__headline">Kleiderordnung</h3>
          <p class="offers__offer__paragraph">
            Schluss mit Chaos in Deinem Schrank, Kommode oder Kleiderstange und dem ewigen „Struggle“ der Outfit-Zusammenstellung am Morgen! Durch eine sinnvolle Struktur und Sortierung Deiner Kleidung, Schuhe und Accessoires gewinnst Du nicht nur mehr Übersicht Deiner schönen Stücke, sondern auch mehr Wertschätzung, Freude und Kreativität für neue Looks!
          </p>
          <strong class="offers__offer__features__headline">Was Du erhältst:</strong>
          <ul class="offers__offer__features__list">
            <li>Kostenloses Vorgespräch</li>
            <li>Strukturieren und Gruppieren des Vorhandenen</li>
            <li>Sinnvolle Sortiersysteme integrieren</li>
            <li>Nerven- und Zeit sparenden Zugang zur Garderobe</li>
            <li>weniger „hab nix anzuziehen“-Feeling!</li>
          </ul>
          <div class="offers__offer__price">
            <span class="offers__offer__price__prefix">ab</span>
            <span class="offers__offer__price__amount">90,-</span>
            <span class="offers__offer__price__currency">&euro;</span>
          </div>
          <ul class="offers__offer__price__annotations">
            <li>Minimum 2 h = 90 Euro</li>
            <li>jede weitere Stunde = 40 Euro</li>
          </ul>
          <a class="button button--primary" href="#kontakt">Termin buchen</a>
        </div>
      </article>
    </div>

    <div class="offers__additional">
      <h2 class="offers__additional__headline">Weitere Angebote</h2>
      <div class="offers__additional__articles">

        <article id="angebote-styling-abo" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
            <h3 class="offers__offer__headline">Styling-Abo</h3>
            <p class="offers__offer__paragraph">
              Du wünscht Dir regelmäßigen Support in Stylingfragen oder nachhaltigen Kaufentscheidungen? Dann sichere Dir meine Aufmerksamkeit durch Dein monatliches Styling-Abo! Beinhaltet sind 5-6 individuelle Anfragen online pro Monat.
            </p>
            <div class="offers__offer__price">
              30,–€ monatl.
            </div>
        </article>

        <article id="angebote-meet-the-special-places" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__offer__headline">Meet the Special-Places</h3>
          <p class="offers__offer__paragraph">
            Du möchtest gezielt besondere Fashion-Locations kennenlernen? Vintage-Stores, Designerateliers, Fairfashion-Boutiquen? Ich biete Gruppen-Walks zu Berlins besten Adressen in Sachen Mode!
          </p>
          <div class="offers__offer__price">
            3h = 35,- € pro Person
          </div>
        </article>

        <article id="angebote-gutscheine" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__offer__headline">Gutscheine</h3>
          <p class="offers__offer__paragraph">
            Mach Dir und Deinen Herzensmenschen<br
            >eine Freude mit Sustainable Styling als Geschenk-Gutschein!
          </p>
          <div class="offers__offer__price">
            ab 30,–€
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

  <div class="calltoaction">
    <p class="calltoaction__text">
      Habe ich Dich neugierig gemacht?
      Dann buche gern einen kostenlosen Kennenlerntermin!
    </p>
    <div class="calltoaction__buttonwrapper">
      <a class="button button--primary" href="#kontakt">
        Kontakt
      </a>
    </div>
  </div>

  <section id="stories" class="stories target-offset">
    <h2 class="stories__headline">Stories</h2>
      <div class="stories__wrapper carousel__wrapper">
        <div class="stories__viewport carousel__viewport">

        <!-- Story 1 -->
        <div class="stories__story carousel__item">
          <figure class="stories__story__image">
            <img
              src="<?php echo get_template_directory_uri() ?>/img/maxi.jpg" width="319" height="567"
              srcset="<?php echo get_template_directory_uri() ?>/img/maxi.jpg 1x, <?php echo get_template_directory_uri() ?>/img/maxi@2x.jpg 2x"
              loading="lazy"
              alt="Foto der Kundin Maxi"
            >
          </figure>
          <figure class="stories__story__quote">
            <figcaption class="stories__story__quote__author">
              Maxi, Künstlerin, Berlin:
            </figcaption>
            <blockquote class="stories__story__quote__text">
  Die Styling-Session mit Tina hat mir gezeigt, wie wandelbar ich bin und in mir große Lust ausgelöst, mich durch Mode mehr auszudrücken. Auf meiner Vernissage fühlte ich mich mutig und stark.
            </blockquote>
          </figure>
        </div>

        <!-- Story 2 -->
        <div class="stories__story carousel__item">
          <figure class="stories__story__image">
            <img
              src="<?php echo get_template_directory_uri() ?>/img/jackie.jpg" width="321" height="570"
              srcset="<?php echo get_template_directory_uri() ?>/img/jackie.jpg 1x, <?php echo get_template_directory_uri() ?>/img/jackie@2x.jpg 2x"
              loading="lazy"
              alt="Foto der Kundin Jackie"
            >
          </figure>
          <figure class="stories__story__quote">
            <figcaption class="stories__story__quote__author">
              Jackie, Marketing Lead @ Impact Hub Berlin:
            </figcaption>
            <blockquote class="stories__story__quote__text">
              I really enjoyed doing a tour of my closet with Tina. She helped me see my clothes with fresh eyes and provided practical tips on how to come up with combinations and accessories that enhance my style and personality. I recommend her services if you are looking to refine your fashion style. Thank you so much, Tina!
            </blockquote>
          </figure>
        </div>

        <!-- Story 3 -->
        <div class="stories__story carousel__item">
          <figure class="stories__story__image">
            <img
              src="<?php echo get_template_directory_uri() ?>/img/jackie.jpg" width="321" height="570"
              srcset="<?php echo get_template_directory_uri() ?>/img/maik.jpg 1x, <?php echo get_template_directory_uri() ?>/img/maik@2x.jpg 2x"
              loading="lazy"
              alt="Foto des Kunden Mike"
            >
          </figure>
          <figure class="stories__story__quote">
            <figcaption class="stories__story__quote__author">
              Mike, Freelance Translator, Berlin:
            </figcaption>
            <blockquote class="stories__story__quote__text">
              Tina brings enthusiasm and positive energy to fashion and styling. It's clear that she's good at what she does, and loves it too. She's given me clear advice on how to make the most of my existing wardrobe, and also how to make small changes that can make a big difference for my appearance. I look forward to working with Tina more!
            </blockquote>
          </figure>
        </div>

        <!-- Story 4 - absichtlich ohne Bild -->
        <div class="stories__story carousel__item">
          <!-- einige Testimonials haben eventuell kein Bild -->
          <figure class="stories__story__quote">
            <figcaption class="stories__story__quote__author">
              Someone, without a picture:
            </figcaption>
            <blockquote class="stories__story__quote__text">
              Ut denim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </blockquote>
          </figure>
        </div>
      </div>
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
          <img width="440" height="248" alt="" src="<?php echo get_template_directory_uri() ?>/img/news-example-1.jpg">
        </figure>
        <div class="news__post__content">
          <h3 class="news__post__title">Kategoriename</h3>
          <p class="news__post__text">
            Gute Gespräche und viel zu sehen – unterwegs auf der Green Fashion Fair Berlin
            </p>
        </div>
      </article>

      <!-- News 2 -->
      <article class="news__post">
        <figure class="news__post__image">
          <img width="440" height="248" alt="" src="<?php echo get_template_directory_uri() ?>/img/news-example-2.jpg">
        </figure>
        <div class="news__post__content">
          <h3 class="news__post__title">Workshops & Events</h3>
          <p class="news__post__text">
            Second Hand Shopping am 12. Mai auf dem Flowmarkt Nowkoelln
          </p>
        </div>
      </article>

      <!-- News 3 -->
      <article class="news__post">
        <figure class="news__post__image">
          <img width="440" height="248" alt="" src="<?php echo get_template_directory_uri() ?>/img/news-example-3.jpg">
        </figure>
        <div class="news__post__content">
          <h3 class="news__post__title">Impulse</h3>
          <p class="news__post__text">
            Neue Studie zu Fast Fashion schockiert
          </p>
        </div>
      </article>

    </div>

    <div class="news__footer">
      <!-- TODO disable "all news" link in single page mode: -->
      <a class="news__link news__link--more" href="#">alle Neuigkeiten</a>
    </div>

  </section>

  <div class="socialmedia target-offset">
    <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung auf Instagram"><figure class="socialmedia__icon socialmedia__icon--primary socialmedia__icon--primary--instagram"></figure> Kleiderordnung auf instagram</a>

    <!-- TODO show content skeleton to be replaced with actual content -->
    <!-- always start with "skeleton" placeholder, allowed content will only replace on visibility -->
    <!-- content skeleton will be valid markup, same visual layout, prevent layout shift by ensuring height -->
    <aside class="socialmedia__feed__placeholder">
      <div class="socialmedia__feed__embed socialmedia__feed__embed--skeleton" data-per="5" data-columns="5" pages="1">
        <div class="j-stacker-wrapper">
          <div class="j-stacker">
            <div class="j-stack galcolumn column-0">
              <div class="feed-item"></div>
            </div>
            <div class="j-stack galcolumn column-1">
              <div class="feed-item"></div>
            </div>
            <div class="j-stack galcolumn column-2">
              <div class="feed-item"></div>
            </div>
            <div class="j-stack galcolumn column-3">
              <div class="feed-item"></div>
            </div>
            <div class="j-stack galcolumn column-4">
              <div class="feed-item"></div>
            </div>
    </aside>

    <aside id="juicer-feed-container"
           label="Instagram Galerie"
           class="socialmedia__feed__container socialmedia__feed__container--juicer feed__container allowable--on-visibility"
           data-allowable="allowable"
           data-styleurl="<?php echo get_template_directory_uri() ?>/css/juicer-embed-min.css"
           data-scripturl="https://assets.juicer.io/embed.js"
    >
      <div class="socialmedia__feed__consent feed__consent socialmedia__feed__consent--juicer">
        <p>Dürfen externe Inhalte von Instagram geladen werden?</p>
        <button class="button__allow button__allow--once" data-allow="once">Einmal erlauben</button>
        <button class="button__allow button__allow--always" data-allow="always">Immer erlauben</button>
      </div>

      <ul class="socialmedia__feed__embed socialmedia__feed__embed--juicer juicer-feed" data-feed-id="kleider-ordnung" data-origin="embed-code" data-per="5" data-columns="5" pages="1">
        <!-- TODO insert (hidden) h1 only before activating external content -->
        <!-- <h1 class="referral"><a href="https://www.juicer.io">Social Media Feed von Juicer.io</a></h1> -->
      </ul>
    </aside>
  </div>

  <div id="kontakt" class="contact target-offset">
    <div class="contact__headline">
      Kontakt
    </div>
    <div class="contact__columns__column-wrapper contact__columns__column-wrapper--lg">

      <div class="contact__columns__column contact__columns__column-50">
        <!-- BEGIN vcard imprint contact information - TODO: update using rel=me etc. -->
        <div class="contact__calltoactiontext contact__calltoactiontext--primary">Habe ich Dich neugierig gemacht oder hast du Fragen? Melde dich gern bei mir!</div>
        <div class="contact__vcard">

          <address class="vcard contrast--varies contrast--more">
               <div class="" itemprop="company">Kleiderordnung</div>
              <div class=fn itemprop=name>Tina Steinke</div>
              <div class="role jobtitle" itemprop="jobTitle">
                Personal sustainable Stylist</div>

              <div>Tel. <a class=telephone itemprop=telephone href=tel:+491636823820><span class=visually-spaced>0</span><span class="visually-spaced dot-after">163</span><span class=visually-spaced>682</span><span class=visually-spaced>382</span><span class=visually-spaced>0</span></a>
              </div>
            <div>
              <a class=email itemprop=email itemscope href=mailto:martinasteinke@posteo.de>martinasteinke@posteo.de</a>
            </div>
                <div class="contact__calltoactiontext contact__calltoactiontext--secondary">
                  Folge mir
                </div>
            <div class="social">
              <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung auf Instagram"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--instagram"></figure></a>
              <a href="https://www.linkedin.com/in/martina-steinke-6810aa111/" target="_blank" rel="me noopener" title="Martina Steinke auf LinkedIn"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--linkedin"></figure></a>

            </div></address></div>
        <!-- END vcard imprint contact information -->
      </div>

      <div class="contact__columns__column contact__columns__column-50">
        <!-- contact 7 form using fixed shortcode (TODO: dynmic first available by language? -->
        <?php echo do_shortcode( '[contact-form-7 id="16" title="Kontaktformular deutsch"]' ); ?>

      </div>
    </div>
  </div>
</main>

<footer id="footer" class="site-footer">
  <div class="footer__columns__column-wrapper">
    <div class="footer__columns__column footer__columns__column-50">
      2023 © Kleiderordnung Martina Steinke  – All rights reserved
      Impressum Datenschutz
    </div>
    <div class="footer__columns__column footer__columns__column-50">
      Mitglied bei
      <a href=https://www.sustainable-stylists.com/tina-steinke target="_blank" rel="me noopener">
        <img
          src="<?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists.png" width="203" height="61"
          srcset="<?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists@2x.png 2x"
          loading="lazy"
          alt="Sustainable Stylists"
        >
      </a>
      <a href="https://fashionchangers.de/" target="_blank" rel="noopener">
        <img
          src="<?php echo get_template_directory_uri() ?>/img/logos/fashion-changers.png" width="178" height="65"
          srcset="<?php echo get_template_directory_uri() ?>/img/logos/fashion-changers.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/fashion-changers@2x.png 2x"
          loading="lazy"
          alt="reflecta"
        >
      </a>
      <a href="https://www.reflecta.network/changemaker/martina-steinke" target=_blank rel=noopener">
        <img
          src="<?php echo get_template_directory_uri() ?>/img/logos/reflecta.png" width="127" height="61"
          srcset="<?php echo get_template_directory_uri() ?>/img/logos/reflecta.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/reflecta@2x.png 2x"
          loading="lazy"
          alt="reflecta network"
        >
      </a>
      <a href="https://berlin.impacthub.net/" target="_blank" rel="noopener">
        <img
          src="<?php echo get_template_directory_uri() ?>/img/logos/impact-hub.png" width="61" height="61"
          srcset="<?php echo get_template_directory_uri() ?>/img/logos/impact-hub.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/impact-hub@2x.png 2x"
          loading="lazy"
          alt="Impact Hub Berlin"
        >
      </a>
    </div>
  </div>
</footer>

</body>
</html>
