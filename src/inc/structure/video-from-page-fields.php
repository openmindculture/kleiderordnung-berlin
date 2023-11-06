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

$kleiderordnung_currentPageHasVideoWebm =
  !empty(get_field('page_intro_video_webm', $kleiderordnung_currentPageId)) &&
  !empty(get_field('page_intro_video_webm', $kleiderordnung_currentPageId)['url']);
$kleiderordnung_currentPageHasVideoMp4 =
  !empty(get_field('page_intro_video_mp4', $kleiderordnung_currentPageId)) &&
  !empty(get_field('page_intro_video_mp4', $kleiderordnung_currentPageId)['url']);
$kleiderordnung_currentPageHasVideoPosterImage =
  !empty(get_field('page_intro_video_poster_image', $kleiderordnung_currentPageId)) &&
  !empty(get_field('page_intro_video_poster_image', $kleiderordnung_currentPageId)['url']);

echo var_export(get_field('page_intro_video_mp4', $kleiderordnung_currentPageId), true);

if ($kleiderordnung_currentPageHasVideoWebm || $kleiderordnung_currentPageHasVideoMp4) : ?>

  <video
    controls
    width="<?php
      echo esc_html(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId)['width'])
    ?>"
    height="<?php
      echo esc_html(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId)['height'])
    ?>"
    <?php if ($kleiderordnung_currentPageHasVideoPosterImage): ?>
      poster="<?php
        echo esc_html(get_field(
          'page_intro_video_poster_image_url', $kleiderordnung_currentPageId
        )['url'])
      ?>"
    <?php endif ?>
  >
    <?php if ($kleiderordnung_currentPageHasVideoWebm): ?>
      <source src="<?php
    echo esc_html(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId)['url'])
    ?>" type="video/webm" />
    <?php endif ?>

    <?php if ($kleiderordnung_currentPageHasVideoMp4): ?>
      <source src="<?php
    echo esc_html(get_field('page_intro_video_url_mp4', $kleiderordnung_currentPageId)['url'])
    ?>" type="video/mp4" />
    <?php endif ?>

    <?php _e( 'Video', 'kleiderordnung' ) ?> -
    <?php _e( 'download as', 'kleiderordnung' ) ?>
    <?php if ($kleiderordnung_currentPageHasVideoWebm): ?>
      <a href="<?php
    echo esc_html(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId)['url'])
    ?>" />
    <?php endif ?>
    <?php if ($kleiderordnung_currentPageHasVideoWebm || $kleiderordnung_currentPageHasVideoMp4): ?>
      <?php _e( 'or', 'kleiderordnung' ) ?>
    <?php endif ?>
    <?php if ($kleiderordnung_currentPageHasVideoMp4): ?>
      <a href="<?php
    echo esc_html(get_field('page_intro_video_url_mp4', $kleiderordnung_currentPageId['url']))
    ?>"/>
    <?php endif ?>
  </video>
<?php endif ?>
