<?php
/*
 * Page Footer
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<footer id="footer" class="footer site-footer">
  <div class="footer__columns__column-wrapper">
    <div class="footer__columns__column footer__columns__column--50">
      <div class="footer__column__row">
        <span class="footer__column__row__copyright"><?php _e( '2023 © Kleiderordnung Martina Steinke', 'kleiderordnung' ) ?></span>
        <span class="footer__column__row__softhyphen">–</span>
        <span class="footer__column__row__allrights"><?php _e( 'All rights reserved', 'kleiderordnung' ) ?></span>
      </div>
      <!-- TODO
        * TODO footer links generischer möglich?
        => get_the_privacy_policy_link() | Function
           aber auch mehrsprachig mit Polylang?
        -->
      <div class="footer__column__row">
        <a class="footer__column__row__link footer__column__row__link--imprint" href="/impressum/" tabindex="0"><?php _e( 'Impressum', 'kleiderordnung' ) ?></a>
        <a class="footer__column__row__link footer__column__row__link--privacy" href="/datenschutzerklaerung/" tabindex="0"><?php _e( 'Datenschutz', 'kleiderordnung' ) ?></a>
        <a class="footer__column__row__link footer__column__row__link--tos" href="/allgemeine-geschaeftsbedingungen/" tabindex="0"><?php _e( 'AGB', 'kleiderordnung' ) ?></a>
      </div>
    </div>
    <div class="footer__columns__column footer__columns__column--50">
      <div class="footer__column__row">
        <?php _e( 'Mitglied bei', 'kleiderordnung' ) ?>
      </div>
      <div class="footer__partners">
        <a href=https://www.sustainable-stylists.com/tina-steinke target="_blank" rel="me noopener" tabindex="0">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists.png" width="203" height="61"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists@2x.png 2x"
            loading="lazy"
            alt="<?php esc_attr_e( 'Sustainable Stylists', 'kleiderordnung' ) ?>"
          >
        </a>
        <a href="https://fashionchangers.de/" target="_blank" rel="noopener" tabindex="0">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/fashion-changers.png" width="178" height="65"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/fashion-changers.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/fashion-changers@2x.png 2x"
            loading="lazy"
            alt="<?php esc_attr_e( 'Fashion Changers', 'kleiderordnung' ) ?>"
          >
        </a>
        <a href="https://www.reflecta.network/changemaker/martina-steinke" target=_blank rel=noopener" tabindex="0">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/reflecta.png" width="127" height="61"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/reflecta.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/reflecta@2x.png 2x"
            loading="lazy"
            alt="<?php esc_attr_e( 'reflecta network', 'kleiderordnung' ) ?>"
          >
        </a>
        <a href="https://berlin.impacthub.net/" target="_blank" rel="noopener" tabindex="0">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/impact-hub.png" width="61" height="61"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/impact-hub.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/impact-hub@2x.png 2x"
            loading="lazy"
            alt="<?php esc_attr_e( 'Impact Hub Berlin', 'kleiderordnung' ) ?>"
          >
        </a>
      </div>
    </div>
  </div>
  <!-- TODO website carbon badge -->
</footer>
