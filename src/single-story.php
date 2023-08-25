<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php define('KLEIDERORDNUNG_PAGE_TITLE', esc_html(get_the_title())) ?>
<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();

      include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
      ?>
      <main id="wp--skip-link--target">
        <section class="page__main__section">
          <div class="page__main__entry">
            <h1 class="page-title" id="content"><?php the_title(); ?></h1>
            <?php
              include( KLEIDERORDNUNG_DIR . '/inc/structure/stories-testimonial-item.php');
            ?>
          </div>
        </section>
      </main>
      <?php
      include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
      include( KLEIDERORDNUNG_DIR . '/inc/structure/admin-edit-link.php');

    endwhile;
  endif;
?>
</body>
</html>
