<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php define('KLEIDERORDNUNG_PAGE_TITLE', esc_html(get_the_title())) ?>
<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<?php
    include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
    echo '<main id="wp--skip-link--target">';
    ?>
    <section id="angebot">
      <div class="offers__cards">
      <?php
        include( KLEIDERORDNUNG_DIR . '/inc/structure/offers-angebot-item.php');
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
