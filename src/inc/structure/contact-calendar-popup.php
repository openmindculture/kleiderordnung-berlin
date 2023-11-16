<?php
/*
 * Contact Calendar Popup Replacement
 * for dynamically generated wrapper around Calendly iframe
 * to be inserted before closing /body tag
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<aside class="calendly-overlay">
    <div class="calendly-close-overlay"></div>
    <div class="calendly-popup">
      <h2><?php _e( 'Buche einen Termin', 'kleiderordnung' ) ?></h2>
      <div class="calendly-popup-content" data-url="https://calendly.com/ingo-steinke/30min">
        <div
          id="socialmedia-feed-consent-calendly"
          class="socialmedia__feed__consent feed__consent socialmedia__feed__consent--calendly"
        >
          <p class="socialmedia__feed__consent__question">
            <?php _e( 'Dürfen externe Inhalte von Calendly geladen werden?', 'kleiderordnung' ) ?>
          </p>
          <div class="socialmedia__feed__consent__answers">
            <button
              class="button__allow button__allow--calendly-once"
              tabindex="0"
              title="<?php _e( 'erlauben', 'kleiderordnung' ) ?>"
            ><?php _e( 'ja, gerne!', 'kleiderordnung' ) ?>
            </button>
            <button
              class="button__remove button__allow button__allow--cancel button__allow--cancel-calendly "
              tabindex="0"
              title="<?php _e( 'Dialogfeld schließen', 'kleiderordnung' ) ?>"
            ><?php _e( 'nein, ich möchte zurück zum Kontaktformular!', 'kleiderordnung' ) ?></button>
          </div>
        </div>
        <div class="calendly-spinner calendly-spinner--animated">
          <div class="calendly-bounce1"></div>
          <div class="calendly-bounce2"></div>
          <div class="calendly-bounce3"></div>
        </div>
        <div class="calendly-spinner calendly-spinner--static" id="socialmedia-feed-spinner-calendly">
          <?php _e( 'lade Kalender...', 'kleiderordnung' ) ?>
        </div>
        <iframe
          src="about:blank"
          data-src="https://calendly.com/ingo-steinke/30min?embed_domain=<?php
          $urlparts = explode('/', get_site_url());
          echo urlencode($urlparts[2]);
?>&amp;embed_type=PopupText"
          id="calendlyFrame"
          width="100%"
          height="100%"
          frameborder="0"
          title="Select a Date and Time - Calendly">
        </iframe>
      </div>
    </div>
    <div class="calendly-popup-close">
      <button
        class="button__close button__close--calendly"
        onClick="kleiderordnung_closeCalendlyWidget()"
      >X</button>
    </div>
  </div>
</aside>
