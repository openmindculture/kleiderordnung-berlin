<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
define( 'KLEIDERORDNUNG_PAGE_TITLE', translate( 'News', 'kleiderordnung' ) );
include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php');
?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<?php
include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
?><main id="wp--skip-link--target">
  <section id="page__main__section">
    <div class="page__main__entry">
      <h1><?php _e( 'News', 'kleiderordnung' ) ?></h1>
      <?php
      include( KLEIDERORDNUNG_DIR . '/inc/structure/news.php');
      ?>
    </div>
  </section>
</main>
<?php
include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
include( KLEIDERORDNUNG_DIR . '/inc/structure/admin-edit-link.php');
?>
</body>
</html>
