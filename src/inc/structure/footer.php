<?php
/*
 * Page Footer
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<footer id="footer" class="site-footer">
  <div class="footer__columns__column-wrapper">
    <div class="footer__columns__column footer__columns__column--50">
      <div class="footer__column__row">
        <span class="footer__column__row__copyright">2023 © Kleiderordnung Martina Steinke</span>
        <span class="footer__column__row__softhyphen">–</span>
        <span class="footer__column__row__allrights">All rights reserved</span>
      </div>
      <div class="footer__column__row">
        <a class="footer__column__row__link footer__column__row__link--imprint" href="#impressum">Impressum</a><!-- TODO another distinct imprint page -->
        <span class="footer__column__row__softhyphen">–</span>
        <a class="footer__column__row__link footer__column__row__link--privacy" href="#datenschutz">Datenschutz</a><!-- TODO another distinct privacy page -->
      </div>
    </div>
    <div class="footer__columns__column footer__columns__column--50">
      <div class="footer__column__row">
        Mitglied bei
      </div>
      <div class="footer__column__row">
        <a href=https://www.sustainable-stylists.com/tina-steinke target="_blank" rel="me noopener">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists.png" width="203" height="61"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/sustainable-stylists@2x.png 2x"
            loading="lazy"
            alt="Sustainable Stylists"
          >
        </a>
        <a href="https://fashionchangers.de/" target="_blank" rel="noopener">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/fashion-changers.png" width="178" height="65"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/fashion-changers.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/fashion-changers@2x.png 2x"
            loading="lazy"
            alt="reflecta"
          >
        </a>
        <a href="https://www.reflecta.network/changemaker/martina-steinke" target=_blank rel=noopener">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/reflecta.png" width="127" height="61"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/reflecta.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/reflecta@2x.png 2x"
            loading="lazy"
            alt="reflecta network"
          >
        </a>
        <a href="https://berlin.impacthub.net/" target="_blank" rel="noopener">
          <img
            src="<?php echo get_template_directory_uri() ?>/img/logos/impact-hub.png" width="61" height="61"
            srcset="<?php echo get_template_directory_uri() ?>/img/logos/impact-hub.png 1x, <?php echo get_template_directory_uri() ?>/img/logos/impact-hub@2x.png 2x"
            loading="lazy"
            alt="Impact Hub Berlin"
          >
        </a>
      </div>
    </div>
  </div>
</footer>
