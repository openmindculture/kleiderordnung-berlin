<?php
/*
 * Page Footer
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<footer id="footer" class="footer site-footer">
  <div class="footer__content">
    <div class="footer__columns__column-wrapper">
      <div class="footer__columns__column footer__columns__column--50">
        <div class="footer__column__row">
          <span class="footer__column__row__copyright"><?php _e( '2023 © Kleiderordnung Martina Steinke', 'kleiderordnung' ) ?></span>
          <span class="footer__column__row__softhyphen">–</span>
          <span class="footer__column__row__allrights"><?php _e( 'All rights reserved', 'kleiderordnung' ) ?></span>
        </div>
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
          <a href=https://www.sustainable-stylists.com/stylistin-tina-steinke/" target="_blank" rel="me noopener" tabindex="0">
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
    <aside class="footer__ecofriendly">
      <div class="footer__ecofriendly__detail--websitecarbon carbonbadge" id="wcb">
        <?php /* script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer=""></script> */ ?>
        <style>#wcb.carbonbadge{--b1:#0e11a8;--b2:#00ffbc;font-size:15px;text-align:center;color:var(--b1);line-height:1.15}#wcb.carbonbadge sub{vertical-align:middle;position:relative;top:.3em;font-size:.7em}#wcb #wcb_2,#wcb #wcb_a,#wcb #wcb_g{display:inline-flex;justify-content:center;align-items:center;text-align:center;font-size:1em;line-height:1.15;font-family:-apple-system,BlinkMacSystemFont,sans-serif;text-decoration:none;margin:.2em 0}#wcb #wcb_a,#wcb #wcb_g{padding:.3em .5em;border:.13em solid var(--b2)}#wcb #wcb_g{border-radius:.3em 0 0 .3em;background:#fff;border-right:0;min-width:8.2em}#wcb #wcb_a{border-radius:0 .3em .3em 0;border-left:0;background:var(--b1);color:#fff;font-weight:700;border-color:var(--b1)}#wcb.wcb-d #wcb_a{color:var(--b1);background:var(--b2);border-color:var(--b2)}#wcb.wcb-d #wcb_2{color:#fff}</style>
        <div id="wcb_p"><span id="wcb_g">0.16g of CO<sub>2</sub>/view</span><a id="wcb_a" target="_blank" rel="noopener" href="https://www.websitecarbon.com/website/kleiderordnung-berlin/">Website Carbon</a></div><span id="wcb_2">&nbsp;Cleaner than 84% of pages tested</span></div>
      <div class="footer__ecofriendly__detail--greenhosting">
        <a href="https://www.thegreenwebfoundation.org/green-web-check/?url=https%3A%2F%2Fkleiderordnung.berlin%2F" target="_blank">
          <img src="https://api.thegreenwebfoundation.org/greencheckimage/kleiderordnung.berlin" width="300" height="135" loading="lazy" alt="This website is hosted Green - checked by thegreenwebfoundation.org">
        </a>
      </div>
      <div class="footer__ecofriendly__detail--ecograder">
        <a href="https://ecograder.com/report/nelSPuhV7x13D5K2TSSS7lXJ" target="_blank" title="In August 2023, this page scored better than 80% of all URLs crawled by Ecograder.">Ecograder Score: <b>94</b>/100 <small>(0.21 g CO₂e)</small></a><!-- TODO renew -->
      </div>
    </aside>
  </div>
</footer>
