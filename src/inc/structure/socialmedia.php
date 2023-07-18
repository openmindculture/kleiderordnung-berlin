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
    <!-- show content skeleton to be replaced with actual content -->
    <!-- always start with "skeleton" placeholder, allowed content will only replace on visibility -->
    <!-- content skeleton will be valid markup, same visual layout, prevent layout shift by ensuring height -->
    <!-- TODO update placeholder images before going live -->
    <!--
Weiteres TODO: wenn Insta Platzhalter durch aktuellen Inhalt ersetzt
         wird, verschwinden die Bilder zu früh!
         Solange Loading Platzhalter zu sehen ist,
         möchte ich stattdessen die alten Platzhalterbilder sehen!
         Falls das nicht praktikabel ist,
         zumindest eine Mindesthöhe für den Bereich definieren
         um Springen (Layout Shift) zu vermeiden.
    -->
    <div class="socialmedia__feed__placeholder">
      <div class="socialmedia__feed__embed socialmedia__feed__embed--skeleton" data-per="5" data-columns="5" pages="1">
        <div class="j-stacker-wrapper">
          <div class="j-stacker socialmedia__feed__embed__table">
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-0">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463702903.jpg" width="480" height="600" alt="<?php esc_attr_e( 'Instagram Picture', 'kleiderordnung' ) ?>" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-1">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463645330.jpg" width="480" height="600" alt="<?php esc_attr_e( 'Instagram Picture', 'kleiderordnung' ) ?>" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-2">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463598174.jpg" width="480" height="600" alt="<?php esc_attr_e( 'Instagram Picture', 'kleiderordnung' ) ?>" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-3">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/462380797.jpg" width="480" height="600" alt="<?php esc_attr_e( 'Instagram Picture', 'kleiderordnung' ) ?>" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-4">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/462341945.jpg" width="480" height="600" alt="<?php esc_attr_e( 'Instagram Picture', 'kleiderordnung' ) ?>" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="juicer-feed-container"
         label="<?php _e( 'Instagram Galerie', 'kleiderordnung' ) ?>"
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
      <p><?php _e( 'Dürfen externe Inhalte von Instagram geladen werden?', 'kleiderordnung' ) ?></p>
      <button class="button__allow button__allow--once" data-allow="once" tabindex="0"><?php _e( 'Einmal erlauben', 'kleiderordnung' ) ?></button>
      <button class="button__allow button__allow--always" data-allow="always" tabindex="0"><?php _e( 'Immer erlauben', 'kleiderordnung' ) ?></button>
    </div>
  </aside>
</div>
