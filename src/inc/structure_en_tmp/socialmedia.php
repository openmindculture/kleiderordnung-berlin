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
    <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung auf Instagram" class="socialmedia__link socialmedia__link--instagram"><figure class="socialmedia__icon socialmedia__icon--primary socialmedia__icon--primary--instagram" tabindex="0"></figure> Follow me on Instagram</a>
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
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463702903.jpg" width="480" height="600" alt="Instagram Picture" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-1">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463645330.jpg" width="480" height="600" alt="Instagram Picture" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-2">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/463598174.jpg" width="480" height="600" alt="Instagram Picture" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-3">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/462380797.jpg" width="480" height="600" alt="Instagram Picture" loading="lazy">
              </div>
            </div>
            <div class="j-stack galcolumn socialmedia__feed__embed__column column-4">
              <div class="feed-item socialmedia__feed__embed__cell">
                <img src="<?php echo get_template_directory_uri() ?>/img/instagram/462341945.jpg" width="480" height="600" alt="Instagram Picture" loading="lazy">
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
      <button class="button__allow button__allow--once" data-allow="once" tabindex="0">Einmal erlauben</button>
      <button class="button__allow button__allow--always" data-allow="always" tabindex="0">Immer erlauben</button>
    </div>
  </aside>
</div>
