<!DOCTYPE html>
<html <?php echo get_language_attributes(); ?>>
<?php define('KLEIDERORDNUNG_PAGE_TITLE', esc_html(get_the_title())) ?>
<?php include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php') ?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<?php
  if (have_posts()): while (have_posts()) : the_post();
  if ( str_starts_with(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), 'en')  ) {
    include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/header.php');
    echo '<main id="wp--skip-link--target">';
    ?>
    <h1 class="page-title" id="content"><?php the_title(); ?></h1>
    <?php
    the_content();
    echo '</main>';
    include( KLEIDERORDNUNG_DIR . '/inc/structure_en_tmp/footer.php');
  } else {
    include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
    echo '<main id="wp--skip-link--target">';
    ?>
    <h1 class="page-title" id="content"><?php the_title(); ?></h1>
    <?php
    the_content();
    echo '</main>';
    include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
  }
  endwhile;
  endif;
?>
</body>
</html>
