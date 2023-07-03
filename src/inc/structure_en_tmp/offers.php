<?php
/*
 * Offers (Angebote) Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<section id="angebot" class="offers target-offset">
  <div class="offers__layer offers__layer--decoration"></div>
  <div class="offers__layer offers__layer--content">

    <h2 class="offers__headline">My Services</h2>
    <nav class="offers__navigation">
      <ul>
        <li>
          <a href="#angebote-style-visit" tabindex="0">In-home Styling Session</a>
        </li>
        <li>
          <a href="#angebote-shopping-tour" tabindex="0">Shopping Tour</a>
        </li>
        <li>
          <a href="#angebote-online-styling-beratung" tabindex="0">Online Styling Consultation</a>
        </li>
        <li>
          <a href="#angebote-outfit-consulting" tabindex="0">Professional Outfit Consultation</a>
        </li>
        <li>
          <a href="#angebote-kleiderordnung" tabindex="0">Wardrobe Organising</a>
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
          <h3 class="offers__offer__headline">In-home Styling Session</h3>
          <p class="offers__offer__paragraph">
            Let me come to you and your wardrobe. Every piece of your clothing is a valuable part to complete your fashion puzzle! In the comfort of your home, we’ll take the time to go through your wardrobe based on your styling goals. We’ll come up with fun, creative ideas and combinations for your current pieces. I can help you appreciate your clothes more, find other uses for existing pieces, suggest alterations, or upcycle/sell pieces that don’t match your needs.
          </p>
          <strong class="offers__offer__features__headline">What you get:</strong>
          <ul class="offers__offer__features__list">
            <li>Complimentary pre-visit consultation</li>
            <li>New and exciting outfit combinations from your existing wardrobe</li>
            <li>Organising your clothes to better fit your personality and body type</li>
            <li>Your own style book with photos of your new looks</li>
            <li>Advice on continued use of your wardrobe</li>
            <li>Recommendations for possible additions, if needed</li>
          </ul>
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">Starting at</span>
                <span class="offers__offer__price__currency">&euro;</span>
                <span class="offers__offer__price__amount">190</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 2h</li>
                <li>€90 every additional hour</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Book now</a>
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
          <h3 class="offers__offer__headline">Shopping Tour</h3>
          <p class="offers__offer__paragraph">
            Do you want to sustainably add to your wardrobe, but don’t know where to start? Let’s go on a shopping tour of Berlin’s best fair fashion, second-hand, and vintage boutiques! We’ll visit 3-4 stores that feature various independent local brands, with collections and pieces that are both expressive and unique. With my experience and creative eye, I’ll find pieces with the best potential and fit for you!
          </p>
          <strong class="offers__offer__features__headline">What you get:</strong>
          <ul class="offers__offer__features__list">
            <li>Complimentary pre-tour consultation</li>
            <li>Introduction to some of Berlin’s best sustainable fashion shopping</li>
            <li>Carefully curated selection to supplement your existing wardrobe</li>
            <li>Time-saving, stress-free shopping experience</li>
            <li>1-to-1 styling advice on-site</li>
          </ul>
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <!-- TODO possibly better offer 1 free form text line? -->
                <span class="offers__offer__price__prefix">Starting at</span>
                <span class="offers__offer__price__currency">&euro;</span>
                <span class="offers__offer__price__amount">120</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 3h, €290</li>
                <li>€90 every additional hour</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Book now</a>
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
          <h3 class="offers__offer__headline">Online Styling Consultation</h3>
          <p class="offers__offer__paragraph">
            Don’t have much time? Need quick advice? Don’t live in the Berlin area? Or would you like a follow-up for a past styling session? No worries. My experience and creativity are at your service online!
          </p>
          <p>
            After we talk about your needs, we’ll have a video call. You show me the pieces you have questions for, whether it’s about colour and cut, dressing for an event, or deciding on an online purchase.
          </p>
          <br>
          <strong class="offers__offer__features__headline">What you get:</strong>
          <ul class="offers__offer__features__list">
            <li>Complimentary pre-session consultation</li>
            <li>Online video call session</li>
            <li>Quick advice on your existing wardrobe or possible purchases</li>
          </ul>
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">Starting at</span>
                <span class="offers__offer__price__currency">&euro;</span>
                <span class="offers__offer__price__amount">85</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 1h, €85</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Book now</a>
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
          <h3 class="offers__offer__headline">Professional Outfit Consultation for Sustainability-focused Startups</h3>
          <p class="offers__offer__paragraph">
            Style also matters in the sustainability business! How you dress always makes the first impression. We’ll work together so you look your professional, confident best. A well-selected outfit radiates competence and authenticity, and gives you the emotional and mental boost you need for your meetings.
          </p>
          <strong class="offers__offer__features__headline">What you get:</strong>
          <ul class="offers__offer__features__list">
            <li>Complimentary pre-visit consultation</li>
            <li>Advice on outfit combinations that fit you best n</li>
            <li>Outfit review of your existing wardrobe, after an in-home styling visit or online styling consultation</li>
            <li>Developing a corporate fashion style matching your business’s visual branding</li>
          </ul>
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">Starting at</span>
                <span class="offers__offer__price__currency">&euro;</span>
                <span class="offers__offer__price__amount">190</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 2h, €190</li>
                <li>€90 every additional hour</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Book now</a>
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
          <h3 class="offers__offer__headline">Wardrobe Organising</h3>
          <p class="offers__offer__paragraph">
            Chaos in your closet, drawers, or clothes rail? Struggling every morning with what to wear? I’ll help you bring order to your wardrobe! With thoughtful, structured sorting of your clothes, shoes, and accessories, you’ll not only have a better idea of what pieces fit you best, but also have more appreciation, joy, and awareness of what’s possible with your wardrobe!
          </p>
          <strong class="offers__offer__features__headline">What you get:</strong>
          <ul class="offers__offer__features__list">
            <li>Complimentary pre-visit consultation</li>
            <li>Structured organising of existing wardrobe</li>
            <li>Creating a sorting system that fits your needs</li>
            <li>Improved confidence with outfit selection: no more of that “what to wear” feeling!</li>
          </ul>
          <div class="offers__offer__card__footer">
            <div class="offers__offer__pricingwrapper">
              <div class="offers__offer__price">
                <span class="offers__offer__price__prefix">Starting at</span>
                <span class="offers__offer__price__currency">&euro;</span>
                <span class="offers__offer__price__amount">90</span>
              </div>
              <ul class="offers__offer__price__annotations">
                <li>Minimum 2h, €90</li>
                <li>€40 every additional hour</li>
              </ul>
            </div>
            <div class="offers__offer__buttonwrapper">
              <a class="button button--primary" href="#kontakt" tabindex="0">Book now</a>
            </div>
          </div>
        </div>
      </article>
    </div>

    <div class="offers__additional">
      <h2 class="offers__additional__headline">My Other Services</h2>
      <div class="offers__additional__articles">

        <article id="angebote-styling-abo" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__additional__articles__headline">Styling Subscription</h3>
          <p class="offers__offer__paragraph">
            Would you like quick advice with sustainable styling or shopping when you need it? Get this with a monthly styling subscription! You get up to 5 individual brief online sessions with me per month.
          </p>
          <div class="offers__offer__price offers__additional__articles__price">
            €30/month
          </div>
        </article>

        <article id="angebote-meet-the-special-places" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__additional__articles__headline">Discover Sustainability Hotspots</h3>
          <p class="offers__offer__paragraph">
            Is there a specific vintage store, design studio, or fair fashion boutique you want to find? Come with me on a group walking tour of Berlin’s best places to shop sustainably!
          </p>
          <div class="offers__offer__price offers__additional__articles__price">
            3h, €35/person
          </div>
        </article>

        <article id="angebote-gutscheine" class="offers__additional__articles__offer">
          <figure class="offers__offer__icon"></figure>
          <h3 class="offers__additional__articles__headline">Gift Vouchers</h3>
          <p class="offers__offer__paragraph">
            Give the gift of sustainable, creative fashion styling to those you care about!
          </p>
          <div class="offers__offer__price offers__additional__articles__price">
            Starting at €30
          </div>
        </article>

      </div>
    </div>
  </div>
</section>
