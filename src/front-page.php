<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php define('KLEIDERORDNUNG_PAGE_TITLE', __('Kleiderordnung Berlin: nachhaltige Modeberatung von Tina Steinke', 'kleiderordnung' )) ?>
  <?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
  <body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
  <?php
    // include( KLEIDERORDNUNG_DIR . '/inc/structure/contact-calendar-popup.php');
    $kleiderordnung_option_page_on_front_id = /** @var int */ get_option('page_on_front');
    define('KLEIDERORDNUNG_FRONT_PAGE_ID', /** @var int */ pll_get_post( $kleiderordnung_option_page_on_front_id ));
    $kleiderordnung_currentPageId = KLEIDERORDNUNG_FRONT_PAGE_ID;
    include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
    echo '<main id="wp--skip-link--target">';
    include( KLEIDERORDNUNG_DIR . '/inc/structure/intro.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/video-from-page-fields.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/offers.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/mission.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/calltoaction.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/stories.php');
    $isNewsTeaser = true;
    include( KLEIDERORDNUNG_DIR . '/inc/structure/news.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/socialmedia.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/contact.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/z_decoration.php');
    echo '</main>';
    include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/admin-edit-link.php');
  ?>
  </body>
</html>
