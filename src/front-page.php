<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
  <!-- TODO localize theme text and meta content -->
  <?php define('KLEIDERORDNUNG_PAGE_TITLE', 'KleiderOrdnung Berlin: nachhaltige Modeberatung von Tina Steinke') ?>
  <?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
  <body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
  <?php
    $kleiderordnung_option_page_on_front_id = /** @var int */ get_option('page_on_front');
    define('KLEIDERORDNUNG_FRONT_PAGE_ID', /** @var int */ pll_get_post( $kleiderordnung_option_page_on_front_id ));
    include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
    echo '<main id="wp--skip-link--target">';
    include( KLEIDERORDNUNG_DIR . '/inc/structure/intro.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/offers.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/mission.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/calltoaction.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/stories.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/news.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/socialmedia.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/contact.php');
    echo '</main>';
    include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
  ?>
  </body>
</html>
