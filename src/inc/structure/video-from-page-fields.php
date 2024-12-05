<?php
/*
 * Show Video defined by Custom Page Fields
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */

global /* @type {int} */ $kleiderordnung_currentPageId;
if (!$kleiderordnung_currentPageId || empty($kleiderordnung_currentPageId)) {
  $kleiderordnung_currentPageId = KLEIDERORDNUNG_FRONT_PAGE_ID;
}

/**
 * metadata of custom video fields
 *
 * @param string $fieldKey
 * @param int $pageId
 *
 * @return String[]
 */
function kleiderordnung_getMediaMeta($fieldKey, $pageId) {
  $currentWidth = '';
  $currentHeight = '';
  $currentUrl = '';
  $currentMedia = get_field($fieldKey, $pageId);
  if ($currentMedia) {
    $currentMediaId = $currentMedia['ID'];
    if ($currentMediaId) {
      $currentUrl = wp_get_attachment_url($currentMediaId);
      $currentMediaMetadata = wp_get_attachment_metadata($currentMediaId);
      if ($currentMediaMetadata) {
        if (array_key_exists('width', $currentMediaMetadata) && array_key_exists('height', $currentMediaMetadata)) {
          $currentWidth = $currentMediaMetadata['width'];
          $currentHeight = $currentMediaMetadata['height'];
        }
      }
    }
  }
  return array(
    'width' => $currentWidth,
    'height' => $currentHeight,
    'url' => $currentUrl,
  );
}

$videoMetaWebm = kleiderordnung_getMediaMeta('page_intro_video_webm', $kleiderordnung_currentPageId);
$videoMetaMp4 = kleiderordnung_getMediaMeta('page_intro_video_mp4', $kleiderordnung_currentPageId);
$posterImageMeta = kleiderordnung_getMediaMeta('page_intro_video_poster_image', $kleiderordnung_currentPageId);
$subtitlesMetaDe = kleiderordnung_getMediaMeta('page_intro_video_subtitles_file_de', $kleiderordnung_currentPageId);
$subtitlesMetaEn = kleiderordnung_getMediaMeta('page_intro_video_subtitles_file_en', $kleiderordnung_currentPageId);
$captionsMetaDe = kleiderordnung_getMediaMeta('page_intro_video_captions_file_de', $kleiderordnung_currentPageId);
$captionsMetaEn = kleiderordnung_getMediaMeta('page_intro_video_captions_file_en', $kleiderordnung_currentPageId);

$kleiderordnung_currentPageHasVideoWebm = !empty($videoMetaWebm['url']);
$kleiderordnung_currentPageHasVideoMp4 = !empty($videoMetaMp4['url']);
$kleiderordnung_currentPageHasVideoPosterImage = !empty($posterImageMeta['url']);
$kleiderordnung_currentPageVideoAutoplay = !empty(get_field('page_intro_video_autoplay', $kleiderordnung_currentPageId));
$kleiderordnung_showDefaultSubtitlesDe = false;
$kleiderordnung_showDefaultSubtitlesEn = false;
if (!empty(get_field('page_intro_video_showsubtitles', $kleiderordnung_currentPageId))) {
  if (pll_current_language() == 'de') {
    $kleiderordnung_showDefaultSubtitlesDe = true;
  } elseif (pll_current_language() == 'en') {
    $kleiderordnung_showDefaultSubtitlesEn = true;
  }
}

if ($kleiderordnung_currentPageHasVideoWebm || $kleiderordnung_currentPageHasVideoMp4) : ?>
<section class="video__wrapper">
  <video
    controls

    <?php if ($kleiderordnung_currentPageVideoAutoplay): ?>
      autoplay
      preload="auto"
    <?php else: ?>
      preload="metadata"
    <?php endif ?>

    class="video__player"
      <?php if (!empty($videoMetaWebm['width']) && !empty($videoMetaWebm['height'])) : ?>
          width="<?php echo esc_html($videoMetaWebm['width']) ?>"
          height="<?php echo esc_html($videoMetaWebm['height']) ?>"
      <?php elseif (!empty($videoMetaMp4['width']) && !empty($videoMetaMp4['height'])): ?>
          width="<?php echo esc_html($videoMetaWebm['width']) ?>"
          height="<?php echo esc_html($videoMetaWebm['height']) ?>"
      <?php endif; ?>

      <?php if ($kleiderordnung_currentPageHasVideoPosterImage): ?>
        poster="<?php echo $posterImageMeta['url']?>"
      <?php endif ?>
    >
    <?php if ($kleiderordnung_currentPageHasVideoWebm): ?>
      <source src="<?php echo esc_html($videoMetaWebm['url']) ?>" type="video/webm" />
    <?php endif ?>

    <?php if ($kleiderordnung_currentPageHasVideoMp4): ?>
      <source src="<?php echo esc_html($videoMetaMp4['url']) ?>" type="video/mp4" />
    <?php endif ?>

    <?php if (!empty($subtitlesMetaEn['url'])): ?>
      <track
        label="<?php _e( 'English subtitles', 'kleiderordnung' ) ?> "
        kind="subtitles"
        srclang="en"
        src="<?php echo esc_html($subtitlesMetaEn['url']) ?>"
        <?php if ($kleiderordnung_showDefaultSubtitlesEn): ?>
          default
        <?php endif ?>
      />
    <?php endif ?>

    <?php if (!empty($subtitlesMetaDe['url'])): ?>
      <track
        label="<?php _e( 'Deutsche Untertitel', 'kleiderordnung' ) ?> "
        kind="subtitles"
        srclang="de"
        src="<?php echo esc_html($subtitlesMetaDe['url']) ?>"
        <?php if ($kleiderordnung_showDefaultSubtitlesDe): ?>
          default
        <?php endif ?>
      />
    <?php endif ?>

    <?php if (!empty($captionsMetaEn['url'])): ?>
      <track
        label="<?php _e( 'English captions', 'kleiderordnung' ) ?> "
        kind="captions"
        srclang="en"
        src="<?php echo esc_html($captionsMetaEn['url']) ?>"
      />
    <?php endif ?>

    <?php if (!empty($captionsMetaDe['url'])): ?>
      <track
        label="<?php _e( 'Deutsche Captions', 'kleiderordnung' ) ?> "
        kind="captions"
        srclang="de"
        src="<?php echo esc_html($captionsMetaDe['url']) ?>"
      />
    <?php endif ?>

    <?php _e( 'Video', 'kleiderordnung' ) ?> -
    <?php _e( 'download as', 'kleiderordnung' ) ?>
    <?php if ($kleiderordnung_currentPageHasVideoWebm): ?>
      <a href="<?php echo esc_html($videoMetaWebm['url']) ?>">webm</a>
    <?php endif ?>
    <?php if ($kleiderordnung_currentPageHasVideoWebm || $kleiderordnung_currentPageHasVideoMp4): ?>
      <?php _e( 'or', 'kleiderordnung' ) ?>
    <?php endif ?>
    <?php if ($kleiderordnung_currentPageHasVideoMp4): ?>
      <a href="<?php echo esc_html($videoMetaMp4['url']) ?>">mp4</a>
    <?php endif; ?>
  </video>
</section>
<?php endif ?>
