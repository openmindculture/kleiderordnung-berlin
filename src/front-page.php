<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
  <?php define('KLEIDERORDNUNG_PAGE_TITLE', 'KleiderOrdnung Berlin: nachhaltige Modeberatung von Tina Steinke') ?>
  <?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
  <body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
  <?php
    if ( str_starts_with(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), 'en')  ) {
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/header.php');
      echo '<main id="wp--skip-link--target">';
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/intro.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/offers.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/mission.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/calltoaction.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/stories.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/news.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/socialmedia.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/contact.php');
      echo '</main>';
      include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/footer.php');
    } else {
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
    }
  ?>
  </body>
</html>
