<?php
/*
 * Mission Statement Section
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
?>

<section id="mission" class="mission target-offset">
  <div class="mission__layer mission__layer--content">
    <div class="mission__card">
      <h2 class="mission__headline"><?php echo get_field('page_mission_headline', KLEIDERORDNUNG_FRONT_PAGE_ID) ?></h2>
      <div class="mission__text">
        <?php echo get_field('page_mission_text', KLEIDERORDNUNG_FRONT_PAGE_ID) ?>
      </div>
    </div>
  </div>
</section>
