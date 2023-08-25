<?php
/*
 * Single Offer: Angebot (Large Layout)
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
if (isset($resorted_post_id)) {
  $currentItemPostId = $resorted_post_id;
} else {
  $currentItemPostId = get_the_ID();
}
?>
<article id="<?php echo get_field('offer_id', $currentItemPostId); ?>" class="offers__offer<?php if (!has_post_thumbnail()) { echo ' offers__offer--has-no-image'; } ?>">
  <figure class="offers__offer__image">
    <picture>
      <?php if (isset($currentItemPostId)) { echo get_the_post_thumbnail($currentItemPostId); } else { the_post_thumbnail(); } ?>
    </picture>
  </figure>
  <div class="offers__offer__card">
    <figure class="offers__offer__icon"></figure>
    <?php if (is_single()): ?>
      <h1 class="offers__offer__headline"><?php if (isset($resorted_post_id)) { echo get_the_title($currentItemPostId); } else { the_title(); } ?></h1>
    <?php else: ?>
      <h3 class="offers__offer__headline"><?php if (isset($resorted_post_id)) { echo get_the_title($currentItemPostId); } else { the_title(); } ?></h3>
    <?php endif ?>
    <p class="offers__offer__paragraph">
      <?php if (isset($resorted_post_id)) { echo get_the_content($currentItemPostId); } else { the_content(); } ?>
    </p>
    <?php if (!empty(get_field('offer_features', $currentItemPostId))): ?>
      <strong class="offers__offer__features__headline"><?php _e( 'Was Du erhältst', 'kleiderordnung' ) ?>:</strong>
      <?php echo get_field('offer_features', $currentItemPostId); ?>
    <?php endif ?>
    <div class="offers__offer__card__footer">
      <div class="offers__offer__pricingwrapper">
        <div class="offers__offer__price">
          <?php echo get_field('offer_price', $currentItemPostId); ?>
        </div>
        <?php echo get_field('offer_price_annotation', $currentItemPostId); ?>
      </div>
      <div class="offers__offer__buttonwrapper">
        <a class="button button--primary" href="<?php echo get_home_url() ?>/#kontakt" tabindex="0"><?php _e( 'Termin buchen', 'kleiderordnung' ) ?></a>
      </div>
    </div>
  </div>
</article>
