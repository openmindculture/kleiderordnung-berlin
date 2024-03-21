<?php
/*
 * Social Media
 * Allowable Instagram Feed with Local Placeholder / Fallback Content
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<div class="socialmedia target-offset">
  <div class="socialmedia__links__wrapper">
    <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung <?php _e( 'auf Instagram', 'kleiderordnung' ) ?>" class="socialmedia__link socialmedia__link--instagram"><figure class="socialmedia__icon socialmedia__icon--primary socialmedia__icon--primary--instagram" tabindex="0"></figure> <?php _e( 'Kleiderordnung auf instagram', 'kleiderordnung' ) ?></a>
  </div>

  <aside class="socialmedia__feed__section">
    <div id="juicer-feed-container"
         label="<?php _e( 'Instagram Galerie', 'kleiderordnung' ) ?>"
         class="socialmedia__feed__container socialmedia__feed__container--juicer feed__container allowable--on-visibility"
         data-allowable="allowable"
         data-styleurl="<?php echo get_template_directory_uri() ?>/css/juicer-embed-min.css"
         data-scripturl="https://assets.juicer.io/embed.js"
    >

      <ul class="socialmedia__feed__embed socialmedia__feed__embed--juicer juicer-feed" data-feed-id="kleider-ordnung" data-origin="embed-code" data-per="5" data-columns="5" data-overlay="false" pages="1">
      </ul>
    </div>

    <div class="socialmedia__feed__placeholder">
      <div class="socialmedia__feed__embed socialmedia__feed__embed--skeleton" data-per="5" data-columns="5" pages="1">
        <div class="j-stacker-wrapper">
          <div class="j-stacker socialmedia__feed__embed__table">
            <div class="j-stack socialmedia__feed__embed__row socialmedia__feed__embed__row--preview">
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/img/instagram/preview5xinsta-20240320.webp" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri() ?>/img/instagram/preview5xinsta-20240320.jpg" type="image/jpeg">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/preview5xinsta-20240320.jpg" width="1857" height="463" alt="<?php esc_attr_e( 'Instagram Picture Preview', 'kleiderordnung' ) ?>: doubt kills more dreams than failure ever will" class="socialmedia__feed__placeholder__image socialmedia__feed__placeholder__image--5x" loading="lazy">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="socialmedia-feed-consent-juicer" class="socialmedia__feed__consent feed__consent socialmedia__feed__consent--juicer">
      <p class="socialmedia__feed__consent__question"><?php _e( 'Dürfen externe Inhalte von Instagram geladen werden?', 'kleiderordnung' ) ?></p>
      <div class="socialmedia__feed__consent__answers">
        <button class="button__remove button__allow button__allow--cancel" data-removes="socialmedia-feed-consent-juicer" tabindex="0" title="<?php _e( 'Dialogfeld schließen', 'kleiderordnung' ) ?>"><?php _e( 'nein, danke!', 'kleiderordnung' ) ?></button>
        <button class="button__allow button__allow--once" data-allow="once" tabindex="0" title="<?php _e( 'Einmal erlauben', 'kleiderordnung' ) ?>"><?php _e( 'nur diesmal', 'kleiderordnung' ) ?></button>
        <button class="button button--primary button__allow button__allow--always" data-allow="always" tabindex="0" title="<?php _e( 'Immer erlauben', 'kleiderordnung' ) ?>"><?php _e( 'ja, immer!', 'kleiderordnung' ) ?></button>
      </div>
    </div>
  </aside>
</div>

