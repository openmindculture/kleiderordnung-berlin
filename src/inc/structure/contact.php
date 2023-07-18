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
      <!-- BEGIN vcard imprint contact information - TODO: update using rel=me etc. -->
      <div class="contact__calltoactiontext contact__calltoactiontext--primary">
        <?php echo get_field('page_contact_teaser_text', KLEIDERORDNUNG_FRONT_PAGE_ID) ?>
      </div>
      <div class="contact__vcard">
        <address class="vcard contact__vcard__address">
          <div class="contact__vcard__company" itemprop="company"><?php _e( 'Kleiderordnung', 'kleiderordnung' ) ?></div>
          <div class="contact__vcard__fullname fn" itemprop="name">Tina Steinke</div>
          <div class="contact__vcard__jobtitle jobtitle role" itemprop="jobTitle"><?php echo get_field('page_contact_job_title', KLEIDERORDNUNG_FRONT_PAGE_ID) ?></div>
          <div class="contact__vcard__phone">Tel. <a class=telephone itemprop=telephone href=tel:+491636823820><span class=visually-spaced>0</span><span class="visually-spaced dot-after">163</span><span class=visually-spaced>682</span><span class=visually-spaced>382</span><span class=visually-spaced>0</span></a>
          </div>
          <div class="contact__vcard__email">
            <a class="contact__vcard__email__mailto email" itemprop="email" itemscope href=mailto:martinasteinke@posteo.de>martinasteinke@posteo.de</a>
          </div>
        </address>
        <div class="contact__calltoactiontext contact__calltoactiontext--secondary">
          <?php _e( 'Folge mir', 'kleiderordnung' ) ?>
        </div>
        <div class="contact__socialmedia__links__wrapper">
          <a href="https://www.instagram.com/tina_steinke_kleiderordnung/" target="_blank" rel="me noopener" title="@tina_steinke_kleiderordnung <?php _e( 'auf Instagram', 'kleiderordnung' ) ?>" tabindex="0"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--instagram"></figure></a>
          <a href="https://www.linkedin.com/in/martina-steinke-6810aa111/" target="_blank" rel="me noopener" title="<?php _e( 'Martina Steinke auf LinkedIn', 'kleiderordnung' ) ?>"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--linkedin" tabindex="0"></figure></a>
          <a href="https://www.pinterest.de/martinasteinke0050/" target="_blank" rel="me noopener" title="<?php _e( 'Tina Steinke auf Pinterest', 'kleiderordnung' ) ?>"><figure class="socialmedia__icon socialmedia__icon--inverted socialmedia__icon--inverted--pinterest" tabindex="0"></figure></a>
        </div>
      </div>
      <!-- END vcard imprint contact information -->
    </div>

    <div class="contact__columns__column contact__columns__column--50">
      <!-- contact 7 form using fixed shortcode (TODO: dynamic first available by language? -->
      <?php echo do_shortcode( '[contact-form-7 id="16" title="Kontaktformular deutsch"]' ); ?>

    </div>
  </div>
</div>
