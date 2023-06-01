<?php
/*
 * Offers (Angebote) Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<section id="angebot" class="offers target-offset">
  <div class="offers__layer offers__layer offers__layer--content">

    <h2 class="offers__headline">Meine Angebote</h2>
    <nav class="offers__navigation">
      <ul>
        <li>
          <a href="#angebote-style-visit" tabindex="0">Style Visit</a>
        </li>
        <li>
          <a href="#angebote-shopping-tour" tabindex="0">Shopping-Tour</a>
        </li>
        <li>
          <a href="#angebote-online-styling-beratung" tabindex="0">Online-Styling-Beratung</a>
        </li>
        <li>
          <a href="#angebote-outfit-consulting" tabindex="0">Outfit Consulting</a>
        </li>
        <li>
          <a href="#angebote-kleiderordnung" tabindex="0">Kleiderordnung</a>
        </li>
      </ul>
    </nav>

    <div class="offers__cards">
      <!-- Offer 1/5 -->
      <article id="angebote-style-visit" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <picture>
            <img
              src="<?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung.jpg" width="560" height="560"
              srcset="<?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/stylevisit-kleiderordnung@2x.jpg 2x"
              loading="lazy"
              alt="Tina Steinke betrachtet lächelnd Kleidung am Kleiderständer"
            >
          </picture>
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
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">ab</span>
                <span class="offers__offer__price__amount">190,-</span>
                <span class="offers__offer__price__currency">&euro;</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 2h = 190 Euro</li>
                <li>jede weitere Stunde = 90 Euro</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Termin buchen</a>
            </div>
          </div>
        </div>
      </article>

      <!-- Offer 2/5 -->
      <article id="angebote-shopping-tour" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <picture>
            <img
              src="<?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung.jpg" width="560" height="560"
              srcset="<?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/shoppingtour-kleiderordnung@2x.jpg 2x"
              loading="lazy"
              alt="Tina Steinke am Kleiderständer"
            >
          </picture>
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
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
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
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Termin buchen</a>
            </div>
          </div>
        </div>
      </article>

      <!-- Offer 3/5 -->
      <article id="angebote-online-styling-beratung" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <picture>
            <img
              src="<?php echo get_template_directory_uri() ?>/img/onlinestyling-beratung-kleiderordnung.jpg" width="560" height="560"
              srcset="<?php echo get_template_directory_uri() ?>/img/onlinestyling-beratung-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/onlinestyling-beratung-kleiderordnung@2x.jpg 2x"
              loading="lazy"
              alt="Symbolbild"
            >
          </picture>
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
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">ab</span>
                <span class="offers__offer__price__amount">85,-</span>
                <span class="offers__offer__price__currency">&euro;</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum = 85 Euro</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Termin buchen</a>
            </div>
          </div>
        </div>
      </article>

      <!-- Offer 4/5 -->
      <article id="angebote-outfit-consulting" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <picture>
            <img
              src="<?php echo get_template_directory_uri() ?>/img/outfit-consulting-kleiderordnung.jpg" width="560" height="560"
              srcset="<?php echo get_template_directory_uri() ?>/img/outfit-consulting-kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/outfit-consulting-kleiderordnung@2x.jpg 2x"
              loading="lazy"
              alt="Tina Steinke am Kleiderständer"
            >
          </picture>
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
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">ab</span>
                <span class="offers__offer__price__amount">190,-</span>
                <span class="offers__offer__price__currency">&euro;</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 2 h = 190 Euro</li>
                <li>jede weitere Stunde = 90 Euro</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Termin buchen</a>
            </div>
          </div>
        </div>
      </article>

      <!-- Offer 5/5 -->
      <article id="angebote-kleiderordnung" class="offers__offer has-secondary-background">
        <figure class="offers__offer__image">
          <picture>
            <img
              src="<?php echo get_template_directory_uri() ?>/img/kleiderordnung.jpg" width="560" height="560"
              srcset="<?php echo get_template_directory_uri() ?>/img/kleiderordnung.jpg 1x, <?php echo get_template_directory_uri() ?>/img/kleiderordnung.jpg 2x"
              loading="lazy"
              alt="Tina Steinke am Kleiderständer"
            >
          </picture>
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
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">ab</span>
                <span class="offers__offer__price__amount">90,-</span>
                <span class="offers__offer__price__currency">&euro;</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 2 h = 90 Euro</li>
                <li>jede weitere Stunde = 40 Euro</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Termin buchen</a>
            </div>
          </div>
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

  </div>
  <div class="offers__layer offers__layer offers__layer--decoration">
    <div class="offers__decoration__item decoration__item offers__decoration__item--pita decoration__item--pita"></div>
    <div class="offers__decoration__item decoration__item offers__decoration__item--salmon decoration__item--salmon"></div>
    <div class="offers__decoration__item decoration__item offers__decoration__item--lilac decoration__item--lilac"></div>
  </div>
</section>
