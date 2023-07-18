<?php
/*
 * Mission Statement Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>

<section id="mission" class="mission target-offset">
  <div class="mission__layer mission__layer--decoration"></div>
  <div class="mission__layer mission__layer--content">
    <div class="mission__card">
      <h2 class="mission__headline"><?php echo get_field('page_page_mission_headline', KLEIDERORDNUNG_FRONT_PAGE_ID) ?></h2>
      <p class="mission__text">
        <?php echo get_field('page_page_mission_text', KLEIDERORDNUNG_FRONT_PAGE_ID) ?>
      </p>
    </div>
  </div>
</section>
