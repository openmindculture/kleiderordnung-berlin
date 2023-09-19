<?php
/*
 * Single Story: Testimonial
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
if (!isset($loop_index)) { $loop_index = 0; }
if (!isset($last_index)) { $last_index = 0; }
$has_thumbnail = (isset($resorted_post_id)) ? has_post_thumbnail($resorted_post_id) : has_post_thumbnail();
$current_title = isset($resorted_post_id) ? get_the_title($resorted_post_id) : get_the_title();
$current_content = isset($resorted_post_id) ? get_the_content($resorted_post_id) : get_the_content();
?>
<div class="stories__story carousel__item carousel__item--index-<?php echo $loop_index?>"<?php
  if ($loop_index == 0) {
    echo ' id="stories-items-first"';
  } elseif ($loop_index == $last_index) {
    echo ' id="stories-items-last"';
  }
  ?> tabindex="0">
  <figure class="stories__story__image<?php
    if (!$has_thumbnail) {
      echo ' empty';
    }
  ?>">
    <?php if (isset($resorted_post_id)) { echo get_the_post_thumbnail($resorted_post_id); } else { the_post_thumbnail(); } ?>
  </figure>
  <figure class="stories__story__quote<?php
  if (strlen($current_content) > 360) {
    echo ' long';
  }
  ?>">
    <figcaption class="stories__story__quote__author">
      <?php echo $current_title; ?>
    </figcaption>
    <blockquote class="stories__story__quote__text">
      <?php echo $current_content; ?>
    </blockquote>
  </figure>
</div>
