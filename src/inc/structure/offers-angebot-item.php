<?php
/*
 * Single Offer: Angebot (Large Layout)
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
if (!isset($resorted_post_id) || empty($resorted_post_id)) {
  $resorted_post_id = get_the_ID();
}
?>
<article id="<?php echo get_field('offer_id', $resorted_post_id); ?>" class="offers__offer">
  <figure class="offers__offer__image">
    <picture>
      <?php echo get_the_post_thumbnail($resorted_post_id) ?>
    </picture>
  </figure>
  <div class="offers__offer__card">
    <figure class="offers__offer__icon"></figure>
    <?php if (is_single()): ?>
      <h1 class="offers__offer__headline"><?php echo get_the_title($resorted_post_id) ?></h1>
    <?php else: ?>
      <h3 class="offers__offer__headline"><?php echo get_the_title($resorted_post_id) ?></h3>
    <?php endif ?>
    <p class="offers__offer__paragraph">
      <?php echo get_the_content($resorted_post_id) ?>
    </p>
    <?php if (!empty(get_field('offer_features', $resorted_post_id))): ?>
    <strong class="offers__offer__features__headline"><?php _e( 'Was Du erhältst', 'kleiderordnung' ) ?>:</strong>
    <?php echo get_field('offer_features', $resorted_post_id); ?>
    <?php endif ?>
    <div class="offers__offer__card__footer">
      <div class="offers__offer__pricingwrapper">
        <div class="offers__offer__price">
          <?php echo get_field('offer_price', $resorted_post_id); ?>
        </div>
        <?php echo get_field('offer_price_annotation', $resorted_post_id); ?>
      </div>
      <div class="offers__offer__buttonwrapper">
        <a class="button button--primary" href="<?php echo get_home_url() ?>/#kontakt" tabindex="0"><?php _e( 'Termin buchen', 'kleiderordnung' ) ?></a>
      </div>
    </div>
  </div>
</article>
