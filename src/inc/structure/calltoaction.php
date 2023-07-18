<?php
/*
 * Call to Action (CTA) Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>
<div class="calltoaction">
  <p class="calltoaction__text">
    <?php echo get_field('page_contact_teaser_text', KLEIDERORDNUNG_FRONT_PAGE_ID) ?>
  </p>
  <div class="calltoaction__buttonwrapper">
    <a class="button button--primary" href="#kontakt" tabindex="0">
      <?php _e( 'Kontakt') ?>
    </a>
  </div>
</div>
