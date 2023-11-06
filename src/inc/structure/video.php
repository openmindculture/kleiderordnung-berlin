<?php
/*
 * Video
 *
 * @package KleiderOrdnung
 * @author openmindculture
 */
global /* @type {int} */ $kleiderordnung_currentPageId;
if (!$kleiderordnung_currentPageId || empty($kleiderordnung_currentPageId)) {
  $kleiderordnung_currentPageId = KLEIDERORDNUNG_FRONT_PAGE_ID;
}
if (
  !empty(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId)) ||
  !empty(get_field('page_intro_video_url_webp', $kleiderordnung_currentPageId))
): ?>
Verflixte Zeitverschwendung! <h2>page_intro_video_poster_image_url</h2>
gettype(get_field('page_intro_video_poster_image_url', $kleiderordnung_currentPageId))):
  <?php echo gettype(get_field('page_intro_video_poster_image_url', $kleiderordnung_currentPageId)) ?>
<hr>var_export(get_field..., true):<br><br><?php
  echo var_export( get_field('page_intro_video_poster_image_url', $kleiderordnung_currentPageId) , true);
  ?>
<hr>
  <video
    controls
    width="250"
    <?php if (
      !empty(get_field('page_intro_video_poster_image_url', $kleiderordnung_currentPageId)) &&
      !empty(get_field('page_intro_video_poster_image_url', $kleiderordnung_currentPageId)['url'])
    ): ?>
      poster="<?php
      echo esc_html(get_field(
        'page_intro_video_poster_image_url', $kleiderordnung_currentPageId
      )['url'])
      ?>"
    <?php endif ?>
  >
    <?php if (!empty(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId))): ?>
      <source src="<?php
    echo esc_html(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId))
    ?>" type="video/webm" />
    <?php endif ?>

    <?php if (!empty(get_field('page_intro_video_url_mp4', $kleiderordnung_currentPageId))): ?>
      <source src="<?php
    echo esc_html(get_field('page_intro_video_url_mp4', $kleiderordnung_currentPageId))
    ?>" type="video/mp4" />
    <?php endif ?>

    <?php _e( 'Video', 'kleiderordnung' ) ?> -
    <?php _e( 'download as', 'kleiderordnung' ) ?>
    <?php if (!empty(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId))): ?>
      <a href="<?php
    echo esc_html(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId))
    ?>" />
    <?php endif ?>
    <?php if (
      !empty(get_field('page_intro_video_url_webm', $kleiderordnung_currentPageId)) ||
      !empty(get_field('page_intro_video_url_webp', $kleiderordnung_currentPageId))
    ): ?>
      <?php _e( 'or', 'kleiderordnung' ) ?>
    <?php endif ?>
    <?php if (!empty(get_field('page_intro_video_url_mp4', $kleiderordnung_currentPageId))): ?>
      <a href="<?php
    echo esc_html(get_field('page_intro_video_url_mp4', $kleiderordnung_currentPageId))
    ?>"/>
    <?php endif ?>
  </video>
<?php endif ?>
