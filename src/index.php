<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>

<div id="cmplz-cookiebanner-container"></div>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kleiderordnung' ); ?></a>
<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php') ?>
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
            <h3 class="offers__additional__articles__headline">Styling-Abo</h3>
            <p class="offers__offer__paragraph">
              Du wünscht Dir regelmäßigen Support in Stylingfragen oder nachhaltigen Kaufentscheidungen? Dann sichere Dir meine Aufmerksamkeit durch Dein monatliches Styling-Abo! Beinhaltet sind 5-6 individuelle Anfragen online pro Monat.
            </p>
            <div class="offers__offer__price offers__additional__articles__price">
              30,–€ monatl.
            </div>
        </article>

        <article id="angebote-meet-the-special-places" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__additional__articles__headline">Meet the Special-Places</h3>
          <p class="offers__offer__paragraph">
            Du möchtest gezielt besondere Fashion-Locations kennenlernen? Vintage-Stores, Designerateliers, Fairfashion-Boutiquen? Ich biete Gruppen-Walks zu Berlins besten Adressen in Sachen Mode!
          </p>
          <div class="offers__offer__price offers__additional__articles__price">
            3h = 35,- € pro Person
          </div>
        </article>

        <article id="angebote-gutscheine" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__additional__articles__headline">Gutscheine</h3>
          <p class="offers__offer__paragraph">
            Mach Dir und Deinen Herzensmenschen<br
            >eine Freude mit Sustainable Styling als Geschenk-Gutschein!
          </p>
          <div class="offers__offer__price offers__additional__articles__price">
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
    <div class="socialmedia__links__wrapper">
      <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung auf Instagram" class="socialmedia__link socialmedia__link--instagram"><figure class="socialmedia__icon socialmedia__icon--primary socialmedia__icon--primary--instagram"></figure> Kleiderordnung auf instagram</a>
    </div>


    <aside class="socialmedia__feed__section">
      <!-- show content skeleton to be replaced with actual content -->
      <!-- always start with "skeleton" placeholder, allowed content will only replace on visibility -->
      <!-- content skeleton will be valid markup, same visual layout, prevent layout shift by ensuring height -->
      <div class="socialmedia__feed__placeholder">
        <div class="socialmedia__feed__embed socialmedia__feed__embed--skeleton" data-per="5" data-columns="5" pages="1">
          <div class="j-stacker-wrapper">
            <div class="j-stacker socialmedia__feed__embed__table">
              <div class="j-stack galcolumn socialmedia__feed__embed__column column-0">
                <div class="feed-item socialmedia__feed__embed__cell">
                  <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463702903.jpg" width="480" height="600">
                </div>
              </div>
              <div class="j-stack galcolumn socialmedia__feed__embed__column column-1">
                <div class="feed-item socialmedia__feed__embed__cell">
                  <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463645330.jpg" width="480" height="600">
                </div>
              </div>
              <div class="j-stack galcolumn socialmedia__feed__embed__column column-2">
                <div class="feed-item socialmedia__feed__embed__cell">
                  <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463598174.jpg" width="480" height="600">
                </div>
              </div>
              <div class="j-stack galcolumn socialmedia__feed__embed__column column-3">
                <div class="feed-item socialmedia__feed__embed__cell">
                  <img src="<?php echo get_template_directory_uri() ?>/img/instagram/462380797.jpg" width="480" height="600">
                </div>
              </div>
              <div class="j-stack galcolumn socialmedia__feed__embed__column column-4">
                <div class="feed-item socialmedia__feed__embed__cell">
                  <img src="<?php echo get_template_directory_uri() ?>/img/instagram/462341945.jpg" width="480" height="600">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="juicer-feed-container"
           label="Instagram Galerie"
           class="socialmedia__feed__container socialmedia__feed__container--juicer feed__container allowable--on-visibility"
           data-allowable="allowable"
           data-styleurl="<?php echo get_template_directory_uri() ?>/css/juicer-embed-min.css"
           data-scripturl="https://assets.juicer.io/embed.js"
      >

        <ul class="socialmedia__feed__embed socialmedia__feed__embed--juicer juicer-feed" data-feed-id="kleider-ordnung" data-origin="embed-code" data-per="5" data-columns="5" pages="1">
          <!-- TODO insert (hidden) h1 only before activating external content -->
          <!-- <h1 class="referral"><a href="https://www.juicer.io">Social Media Feed von Juicer.io</a></h1> -->
        </ul>
      </div>


      <div class="socialmedia__feed__consent feed__consent socialmedia__feed__consent--juicer">
        <p>Dürfen externe Inhalte von Instagram geladen werden?</p>
        <button class="button__allow button__allow--once" data-allow="once">Einmal erlauben</button>
        <button class="button__allow button__allow--always" data-allow="always">Immer erlauben</button>
      </div>
    </aside>
  </div>

  <div id="kontakt" class="contact target-offset">
    <div class="contact__headline">
      Kontakt
    </div>
    <div class="contact__columns__column-wrapper contact__columns__column-wrapper--lg">

      <div class="contact__columns__column contact__columns__column--50">
        <!-- BEGIN vcard imprint contact information - TODO: update using rel=me etc. -->
        <div class="contact__calltoactiontext contact__calltoactiontext--primary">Habe ich Dich neugierig gemacht oder hast du Fragen? Melde dich gern bei mir!</div>
        <div class="contact__vcard">
          <address class="vcard contact__vcard__address">
            <div class="contact__vcard__company" itemprop="company">Kleiderordnung</div>
            <div class="contact__vcard__fullname fn" itemprop="name">Tina Steinke</div>
            <div class="contact__vcard__jobtitle jobtitle role" itemprop="jobTitle">Personal sustainable Stylist</div>
            <div class="contact__vcard__phone">Tel. <a class=telephone itemprop=telephone href=tel:+491636823820><span class=visually-spaced>0</span><span class="visually-spaced dot-after">163</span><span class=visually-spaced>682</span><span class=visually-spaced>382</span><span class=visually-spaced>0</span></a>
            </div>
            <div class="contact__vcard__email">
              <a class="contact__vcard__email__mailto email" itemprop="email" itemscope href=mailto:martinasteinke@posteo.de>martinasteinke@posteo.de</a>
            </div>
          </address>
          <div class="contact__calltoactiontext contact__calltoactiontext--secondary">
            Folge mir
          </div>
          <div class="contact__socialmedia__links__wrapper">
            <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung auf Instagram"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--instagram"></figure></a>
            <a href="https://www.linkedin.com/in/martina-steinke-6810aa111/" target="_blank" rel="me noopener" title="Martina Steinke auf LinkedIn"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--linkedin"></figure></a>
            <a href="https://www.pinterest.de/martinasteinke0050/" target="_blank" rel="me noopener" title="Tina Steinke auf Pinterest"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--pinterest"></figure></a>
          </div>
        </div>
        <!-- END vcard imprint contact information -->
      </div>

      <div class="contact__columns__column contact__columns__column--50">
        <!-- contact 7 form using fixed shortcode (TODO: dynmic first available by language? -->
        <?php echo do_shortcode( '[contact-form-7 id="16" title="Kontaktformular deutsch"]' ); ?>

      </div>
    </div>
  </div>
</main>

<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php') ?>

</body>
</html>
