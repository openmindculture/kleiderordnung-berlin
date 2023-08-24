<?php
/*
 * Single Story: Testimonial
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
if (!isset($resorted_post_id) || empty($resorted_post_id)) {
  $resorted_post_id = get_the_ID();
}
if (!isset($loop_index)) {
  $loop_index = 0;
}
if (!isset($last_index)) {
  $last_index = 0;
}
?>
<div class="stories__story carousel__item carousel__item--index-<?php echo $loop_index?>"<?php if ($loop_index == 0) { echo ' id="stories-items-first"';} elseif ($loop_index == $last_index) { echo ' id="stories-items-last"'; } ?> tabindex="0">
  <figure class="stories__story__image">
    <?php echo get_the_post_thumbnail($resorted_post_id) ?>
  </figure>
  <figure class="stories__story__quote">
    <figcaption class="stories__story__quote__author">
      <?php echo get_the_title($resorted_post_id) ?>
    </figcaption>
    <blockquote class="stories__story__quote__text">
      <?php echo get_the_content($resorted_post_id) ?>
    </blockquote>
  </figure>
</div>
