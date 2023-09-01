<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
define( 'KLEIDERORDNUNG_PAGE_TITLE', translate( 'News', 'kleiderordnung' ) );
include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php');
?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<?php
include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
if (get_post_type() === 'post') :
?><main id="wp--skip-link--target">
  <section id="page__main__section">
    <div class="page__main__entry">
      <?php
      include( KLEIDERORDNUNG_DIR . '/inc/structure/news.php');
      ?>
    </div>
  </section>
</main>
<?php
else:
  if (have_posts()) :
?>
<main id="wp--skip-link--target">
  <?php
    while (have_posts()) :
      the_post();
  ?>
      <h1 class="page-title" id="content"><?php the_title(); ?></h1>
  <?php
      the_content();
    endwhile;
  ?>
</main>
<?php
  endif; // have_posts
endif; // is_single && get_post_type post or else iterate the_content
include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
include( KLEIDERORDNUNG_DIR . '/inc/structure/admin-edit-link.php');
?>
</body>
</html>
