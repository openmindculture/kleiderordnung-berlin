<!DOCTYPE html><?php /* TODO update/copy this file manually if you experience problems with automatic build! */ ?>
<html <?php language_attributes(); ?>>
<?php define('KLEIDERORDNUNG_PAGE_TITLE', translate( 'Seite nicht vorhanden', 'kleiderordnung' ) ) ?>
<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<?php
    include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
    echo '<main id="wp--skip-link--target">';
    ?>
      <section id="page__main__section">
        <div class="page__main__entry">
          <h1>
            <?php _e( 'Seite nicht vorhanden', 'kleiderordnung' ) ?>
          </h1>
          <p>
            <?php _e( 'Die gesuchte Seite ist an dieser Adresse leider nicht vorhanden.', 'kleiderordnung' ) ?>
          </p>
        </div>
        <div class="page__main__entry">
          <div class="page__main__buttonwrapper">
            <a class="button button--primary" href="<?php echo get_home_url() ?>/" tabindex="0">
              <?php _e( 'zur Startseite', 'kleiderordnung' ) ?>
            </a>
          </div>
        </div>
      </section>
    </main>
    <?php
    include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/admin-edit-link.php');
?>
</body>
</html>
