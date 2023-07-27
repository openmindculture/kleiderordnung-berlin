<?php
/*
 * Call to Action (CTA) Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<div class="calltoaction">
  <div class="calltoaction__text">
    <?php echo get_field('page_cta_text', KLEIDERORDNUNG_FRONT_PAGE_ID) ?>
  </div>
  <div class="calltoaction__buttonwrapper">
    <a class="button button--primary" href="#kontakt" tabindex="0">
      <?php _e( 'Kontakt', 'kleiderordnung' ) ?>
    </a>
  </div>
</div>
