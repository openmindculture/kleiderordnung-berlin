<?php
/*
 * Contact Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<div id="kontakt" class="contact target-offset">
  <div class="contact__headline">
    <?php _e( 'Kontakt', 'kleiderordnung' ) ?>
  </div>
  <div class="contact__columns__column-wrapper contact__columns__column-wrapper--lg">

    <div class="contact__columns__column contact__columns__column--50">
      <div class="contact__calltoactiontext contact__calltoactiontext--primary">
        <?php echo get_field('page_contact_teaser_text', KLEIDERORDNUNG_FRONT_PAGE_ID) ?>
      </div>
      <div class="contact__vcard">
        <address class="vcard contact__vcard__address">
          <div class="contact__vcard__company" itemprop="company"><?php _e( 'Kleiderordnung', 'kleiderordnung' ) ?></div>
          <div class="contact__vcard__fullname fn" itemprop="name">Tina Steinke</div>
          <div class="contact__vcard__jobtitle jobtitle role" itemprop="jobTitle"><?php echo get_field('page_contact_job_title', KLEIDERORDNUNG_FRONT_PAGE_ID) ?></div>
          <div class="contact__vcard__phone">Tel. <a class=telephone itemprop=telephone href=tel:+491636823820><span class="visually-spaced dot-after">0163</span><span class=visually-spaced>682</span><span class=visually-spaced>382</span><span class=visually-spaced>0</span></a>
          </div>
          <div class="contact__vcard__email">
            <a class="contact__vcard__email__mailto email" itemprop="email" itemscope href="#" data-mailing="lazy" data-user="martinasteinke" data-domain="posteo.de"><span class="spamprotected">mar</span><span class="blockspam" aria-hidden="true">[...]</span><span class="spamprotected">tinasteinke</span><span class="blockspam" aria-hidden="true">[...]</span><span class="spamprotected">@</span><span class="spamprotected">posteo</span><span class="blockspam" aria-hidden="true">[...]</span><span class="spamprotected">.</span><span class="spamprotected">de</span></a>
          </div>
        </address>
        <div class="contact__calltoactiontext contact__calltoactiontext--secondary">
          <?php _e( 'Folge mir', 'kleiderordnung' ) ?>
        </div>
        <div class="contact__socialmedia__links__wrapper">
          <a class="socialmedia__link" href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung <?php _e( 'auf Instagram', 'kleiderordnung' ) ?>" tabindex="0"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--instagram">
              <svg viewBox="0 0 44 44" fill="none" width="44" height="44">
                <title>Instagram icon</title>
                <rect width='43.2' height='43.2' rx='21.6' fill="currentColor"/><path fill="#0014d1" fill-rule="evenodd" clip-rule="evenodd" d="M22.05 12.5996C19.7276 12.5996 19.4364 12.6092 18.5247 12.6509C17.6147 12.6926 16.9932 12.8369 16.4497 13.0485C15.8871 13.267 15.4104 13.5593 14.9353 14.0349C14.4597 14.51 14.1674 14.9867 13.9489 15.5494C13.7373 16.0928 13.593 16.7143 13.5518 17.6243C13.5102 18.5365 13.5 18.8272 13.5 21.1496C13.5 23.4715 13.5102 23.7627 13.5518 24.6749C13.593 25.5849 13.7373 26.2064 13.9489 26.7499C14.1674 27.3126 14.4597 27.7892 14.9353 28.2643C15.4104 28.7399 15.8871 29.0322 16.4497 29.2507C16.9932 29.4623 17.6147 29.6066 18.5247 29.6483C19.4364 29.6895 19.7276 29.6996 22.05 29.6996C24.3724 29.6996 24.6636 29.6895 25.5753 29.6483C26.4853 29.6066 27.1068 29.4623 27.6503 29.2507C28.2129 29.0322 28.6896 28.7399 29.1647 28.2643C29.6403 27.7892 29.9326 27.3126 30.1511 26.7499C30.3627 26.2064 30.507 25.5849 30.5482 24.6749C30.5898 23.7627 30.6 23.4715 30.6 21.1496C30.6 18.8272 30.5898 18.5365 30.5482 17.6243C30.507 16.7143 30.3627 16.0928 30.1511 15.5494C29.9326 14.9867 29.6403 14.51 29.1647 14.0349C28.6896 13.5593 28.2129 13.267 27.6503 13.0485C27.1068 12.8369 26.4853 12.6926 25.5753 12.6509C24.6636 12.6092 24.3724 12.5996 22.05 12.5996ZM22.05 14.1402C24.3329 14.1402 24.6032 14.1488 25.5053 14.1899C26.3384 14.2279 26.791 14.3673 27.0929 14.4843C27.4921 14.6393 27.7764 14.8247 28.0756 15.124C28.3749 15.4232 28.5603 15.7081 28.7153 16.1067C28.8323 16.4081 28.9718 16.8612 29.0092 17.6949C29.0508 18.5964 29.0594 18.8668 29.0594 21.1496C29.0594 23.4325 29.0508 23.7029 29.0092 24.6043C28.9718 25.438 28.8323 25.8911 28.7153 26.1925C28.5603 26.5912 28.3749 26.876 28.0756 27.1752C27.7764 27.4745 27.4921 27.6599 27.0929 27.8149C26.791 27.9319 26.3384 28.0714 25.5053 28.1093C24.6032 28.1505 24.3329 28.159 22.05 28.159C19.7671 28.159 19.4968 28.1505 18.5947 28.1093C17.7616 28.0714 17.309 27.9319 17.0071 27.8149C16.6079 27.6599 16.3236 27.4745 16.0244 27.1752C15.7251 26.876 15.5397 26.5912 15.3847 26.1925C15.2677 25.8911 15.1282 25.438 15.0908 24.6043C15.0492 23.7029 15.0406 23.4325 15.0406 21.1496C15.0406 18.8668 15.0492 18.5964 15.0908 17.6949C15.1282 16.8612 15.2677 16.4081 15.3847 16.1067C15.5397 15.7081 15.7251 15.4232 16.0244 15.124C16.3236 14.8247 16.6079 14.6393 17.0071 14.4843C17.309 14.3673 17.7616 14.2279 18.5947 14.1899C19.4968 14.1488 19.7671 14.1402 22.05 14.1402ZM22.05 23.9997C20.4763 23.9997 19.2002 22.7236 19.2002 21.1499C19.2002 19.5756 20.4763 18.2995 22.05 18.2995C23.6237 18.2995 24.8998 19.5756 24.8998 21.1499C24.8998 22.7236 23.6237 23.9997 22.05 23.9997ZM22.05 16.7589C19.625 16.7589 17.6596 18.7249 17.6596 21.1499C17.6596 23.5743 19.625 25.5403 22.05 25.5403C24.475 25.5403 26.4404 23.5743 26.4404 21.1499C26.4404 18.7249 24.475 16.7589 22.05 16.7589ZM26.614 17.6115C27.181 17.6115 27.64 17.1525 27.64 16.5855C27.64 16.0185 27.181 15.5595 26.614 15.5595C26.0476 15.5595 25.588 6.0185 25.588 16.5855C25.588 17.1525 26.0476 17.6115 26.614 17.6115Z" />
              </svg>
            </figure></a>
          <a class="socialmedia__link" href="https://www.linkedin.com/in/martina-steinke-6810aa111/" target="_blank" rel="me noopener" title="<?php _e( 'Martina Steinke auf LinkedIn', 'kleiderordnung' ) ?>"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--linkedin" tabindex="0">
              <svg viewBox="0 0 44 44" fill="none" width="44" height="44">
                <title>LinkedIn icon</title>
                <rect x="0.200195" width="43.2" height="43.2" rx="21.6" fill="currentColor"/><path fill="#0014d1" fill-rule="evenodd" clip-rule="evenodd" d="M27.9321 12H14.6691C13.0844 12 11.7998 13.2846 11.7998 14.8693V28.1308C11.7998 29.7155 13.0844 31 14.6691 31H27.932C29.5167 31 30.8013 29.7154 30.8013 28.1308V14.8694C30.8014 13.2847 29.5167 12 27.9321 12ZM17.5473 19.3572V27.9498H14.6915V19.3572H17.5473ZM17.7341 16.6994C17.7341 17.5241 17.1137 18.1839 16.1185 18.1839H16.0996C15.1409 18.1839 14.5213 17.5241 14.5213 16.6994C14.5213 15.8564 15.1599 15.2149 16.1372 15.2149C17.1137 15.2149 17.7156 15.8564 17.7341 16.6994ZM21.9827 27.9498H19.1264C19.1264 27.9498 19.1643 20.1634 19.1264 19.3573H21.9827V20.573C22.3622 19.9876 23.0418 19.1555 24.5563 19.1555C26.4356 19.1555 27.8442 20.3835 27.8442 23.0228V27.9498H24.9885V23.3528C24.9885 22.1979 24.5754 21.4097 23.5418 21.4097C22.7531 21.4097 22.2828 21.9409 22.0768 22.4543C22.0013 22.6378 21.9827 22.8945 21.9827 23.1514V27.9498Z" />
              </svg>
            </figure></a>
          <a class="socialmedia__link" href="https://www.pinterest.de/martinasteinke0050/" target="_blank" rel="me noopener" title="<?php _e( 'Tina Steinke auf Pinterest', 'kleiderordnung' ) ?>"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--pinterest" tabindex="0">
              <svg viewBox="0 0 44 44" fill="none" width="44" height="44">
                <title>Pinterest icon</title>
                <rect x="0.400391" width="43.2" height="43.2" rx="21.6" fill="currentColor"/><path fill="#0014d1" fill-rule="evenodd" clip-rule="evenodd" d="M17.3544 35.75C17.2937 35.4625 17.2449 35.2914 17.2217 35.1167C16.9238 32.9153 16.9855 30.743 17.5342 28.5733C18.1429 26.1655 18.66 23.733 19.1986 21.3076C19.2491 21.0774 19.2148 20.8013 19.1429 20.572C18.7037 19.1794 18.6395 17.792 19.1866 16.4197C19.5239 15.5712 20.0632 14.8938 20.9262 14.5569C22.2275 14.0489 23.4998 14.7465 23.6744 16.1612C23.76 16.8509 23.6693 17.5944 23.5109 18.2771C23.1993 19.6186 22.7446 20.9239 22.4236 22.2628C22.0084 23.9932 23.1436 25.4547 24.8738 25.3744C25.4894 25.3462 26.1829 25.1548 26.6777 24.7976C27.3087 24.3416 27.8917 23.7154 28.2864 23.0336C29.5774 20.8013 29.9593 18.3318 29.6177 15.7855C29.3283 13.6352 28.0955 12.1597 26.1127 11.395C22.8919 10.1523 19.1232 11.2266 17.1841 13.9686C15.9555 15.7052 15.4855 17.6659 15.9264 19.7782C16.06 20.4177 16.4452 21.0165 16.7843 21.5916C16.9709 21.9082 17.0796 22.1825 16.9795 22.5415C16.8793 22.9022 16.8065 23.2709 16.7046 23.6298C16.5591 24.1405 16.322 24.256 15.8485 24.0426C15.0532 23.6836 14.4136 23.1227 13.9522 22.3704C13.0507 20.8983 12.6346 19.249 12.8178 17.553C13.102 14.9097 14.2227 12.6457 16.2363 10.9073C17.8416 9.52081 19.7088 8.77554 21.761 8.42627C24.5006 7.96059 27.0758 8.39981 29.4002 9.95651C32.026 11.7152 33.4257 14.2438 33.4 17.508C33.3769 20.3409 32.7237 22.993 30.9344 25.2236C29.3351 27.216 27.2633 28.2108 24.7343 28.023C23.4073 27.9233 22.2935 27.3244 21.3971 26.0659C20.63 29.6052 19.9066 33.0203 17.3544 35.75Z"/>
              </svg>
            </figure></a>
          <a class="socialmedia__link" href="https://calendly.com/ingo-steinke" target="_blank" rel="me noopener" title="<?php _e('Tina Steinke bei Calendly', 'kleiderordnung') ?>"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--calendly" tabindex="0"
            >
              <img src="<?php echo get_template_directory_uri() ?>/img/icons/calendar.png" width="150" height="150" alt="calendar icon" loading="lazy">
            </figure>
          </a>
        </div>
        <aside class="initially-hidden">
          <div class="socialmedia__link--printable">
            <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="noopener">
              https://www.instagram.com/tina_steinke_kleiderordnung
            </a>
          </div>
          <div class="socialmedia__link--printable">
            <a href="https://www.linkedin.com/in/martina-steinke-6810aa111/" target="_blank" rel="noopener">
              https://www.linkedin.com/in/martina-steinke-6810aa111
            </a>
          </div>
          <div class="socialmedia__link--printable">
            <a href="https://www.pinterest.de/martinasteinke0050/" target="_blank" rel="noopener">
              https://www.pinterest.de/martinasteinke0050
            </a>
          </div>
          <div class="socialmedia__link--printable">
            <a href="https://www.calendly/TODO" target="_blank" rel="noopener">
              https://www.calendly-link-TODO-!!!!!!!!!!!!!!!!!!!!!!!!!!!
            </a>
          </div>
        </aside>
      </div>
      <!-- END vcard imprint contact information -->
    </div>

    <div class="contact__columns__column contact__columns__column--50">
      <div class="contact__ctaalternatives">
        <a
          href="https://calendly.com/ingo-steinke"
          target="_blank"
          rel="noopener"
          class="button button--inverted contact__ctaalternatives__button button--calendly"
        >
          <?php _e('Buche einen Termin', 'kleiderordnung'); ?>
          <small>
            <?php _e('über Calendly *', 'kleiderordnung'); ?>
          </small>
        </a> <?php _e('oder schreibe mir eine Nachricht:', 'kleiderordnung'); ?>
      </div>
      <?php
      $kleiderordnung_contact_form_id = 16;
      $kleiderordnung_contact_form_title = __('Kontaktformular deutsch (de_DE)' , 'kleiderordnung');
      $args = array(
        'post_type' => 'wpcf7_contact_form',
        'posts_per_page' => -1
      );
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          if (str_contains(get_the_title(), pll_current_language()) ) {
            $kleiderordnung_contact_form_id = get_the_ID();
          }
        }
      }
      echo do_shortcode(
        '[contact-form-7 id="'
        . $kleiderordnung_contact_form_id
        . '" title="'
        . $kleiderordnung_contact_form_title
        . '"]'
      );
      ?>
    </div>
  </div>

  <aside class="socialmedia__feed__section">
    <div id="calendly-widget-container"
         label="<?php _e( 'Calendly Terminbuchung', 'kleiderordnung' ) ?>"
         class="contact__calendar__container contact__calendar__container--calendly calendly allowable--on-click"
         data-allowable="allowable"
         data-styleurl="<?php echo get_template_directory_uri() ?>/css/calendly-widget-min.css"
         data-scripturl="https://assets.calendly.com/assets/external/widget.js"
    >
      <!-- Calendly link widget begin -->
      <!-- This is not necessary! Container could be anywhere (near button),
           div.calendly-overlay will be created before closing /body tag
           but styles must be adapted! Calendly interferes with global body scroll and positioning,
           it isn't visible, and the close button asset could not be loaded.
           Maybe we swap the css for our own CSS completely.
      <!-- Calendly link widget end -->
    </div>
  </aside>
</div>
