<?php
/*
 * Single Offer: Angebot (Large Layout)
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
include_once( KLEIDERORDNUNG_DIR . '/inc/functions/insert-soft-hyphenation.php');
if (isset($resorted_post_id)) {
  $currentItemPostId = $resorted_post_id;
  $currentItemTitle = get_the_title($currentItemPostId);
} else {
  $currentItemPostId = get_the_ID();
  $currentItemTitle = get_the_title();
}
$decodedTitle = html_entity_decode($currentItemTitle);
$strippedTitle = strip_tags($decodedTitle);
$wordsOnlyTitle = preg_replace("/[^A-Za-z0-9 ]/", '', $strippedTitle);
?>
<article
  id="<?php echo get_field('offer_id', $currentItemPostId); ?>"
  class="offers__offer<?php
    if (!has_post_thumbnail($currentItemPostId)) {
      echo ' offers__offer--has-no-image';
    }
    if (isset($currentOfferItemIndex) && ($currentOfferItemIndex % 2 == 0)) {
      echo ' offers__offer--layout--left';
    }
  ?>"
>
  <figure class="offers__offer__image">
    <picture>
      <?php if (isset($currentItemPostId)) { echo get_the_post_thumbnail($currentItemPostId); } else { the_post_thumbnail(); } ?>
    </picture>
  </figure>
  <div class="offers__offer__card">
    <figure class="offers__offer__icon"></figure>
    <?php if (is_single()): ?>
      <h1 class="offers__offer__headline"><?php
        echo kleiderordnung_insert_soft_hyphenation($currentItemTitle);
        ?></h1>
    <?php else: ?>
      <h3 class="offers__offer__headline"><?php
        echo kleiderordnung_insert_soft_hyphenation($currentItemTitle);
        ?></h3>
    <?php endif ?>
    <p class="offers__offer__paragraph">
      <?php if (isset($resorted_post_id)) { echo get_the_content($currentItemPostId); } else { the_content(); } ?>
    </p>
    <?php
      $currentOfferFeatures = get_field('offer_features', $currentItemPostId);
      if (!empty($currentOfferFeatures)): ?>
      <strong class="offers__offer__features__headline"><?php _e( 'Was Du erhältst', 'kleiderordnung' ) ?>:</strong>
      <?php
        if (get_option('kleiderordnung_show_more') && substr_count($currentOfferFeatures,'<li>') > 3) {
          $currentOfferFeaturesItems = explode('<li>', $currentOfferFeatures);
          // add +1 length to compensate the empty item before first li
          $currentOfferFeaturesExcerpt = join ('<li>', array_slice( $currentOfferFeaturesItems, 0, 4));
          // likewise, we need an additional opening li tag
          $currentOfferFeaturesMore = '<li class="offers__offer__features__list__more">';
          $currentOfferFeaturesMore .= join ('<li class="offers__offer__features__list__more">', array_slice( $currentOfferFeaturesItems, 4 ));
          echo $currentOfferFeaturesExcerpt;
          echo '<li class="offers__offer__features__list__readmore">';
          echo '<button class="initially-hidden">';
          echo _e('mehr lesen', 'kleiderordnung');
          echo ' ...</button></li>';
          echo $currentOfferFeaturesMore;
        } else {
          echo $currentOfferFeatures;
        }
      ?>
    <?php endif ?>
    <div class="offers__offer__card__footer">
      <div class="offers__offer__pricingwrapper">
        <div class="offers__offer__price">
          <?php echo kleiderordnung_insert_soft_hyphenation(get_field('offer_price', $currentItemPostId)); ?>
        </div>
        <?php echo kleiderordnung_insert_soft_hyphenation(get_field('offer_price_annotation', $currentItemPostId)); ?>
      </div>
      <div class="offers__offer__buttonwrapper">
        <a
          class="button button--primary offers__offer__contactbutton"
          href="<?php echo get_home_url() ?>/#kontakt"
          tabindex="0"
          data-parent-id="<?php echo get_field('offer_id', $currentItemPostId); ?>"
          data-unreplaced-parent-name="<?php echo esc_html($currentItemTitle) ?>"
          data-unquoted-parent-name="<?php echo esc_html(preg_replace('/"/', '', $currentItemTitle)) ?>"
          data-parent-name="<?php echo esc_html($wordsOnlyTitle) ?>"
        ><?php _e( 'Termin buchen', 'kleiderordnung' ) ?></a>
      </div>
    </div>
  </div>
</article>
