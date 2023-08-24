<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
  define( 'KLEIDERORDNUNG_PAGE_TITLE', translate( 'Suchergebnis', 'kleiderordnung' ) );
  include( KLEIDERORDNUNG_DIR . '/inc/structure/html-head.php');
?>
<body <?php body_class(); ?> itemtype="https://schema.org/WebPage" itemscope>
<?php
  include( KLEIDERORDNUNG_DIR . '/inc/structure/header.php');
  ?><main id="wp--skip-link--target">
    <section id="page__main__section">
      <div class="page__main__entry">
        <h1><?php _e( 'Suchergebnis', 'kleiderordnung' ) ?></h1>
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      setup_postdata(get_the_ID());
      if (get_post_type()) :
        if (get_post_type()==='offer') : ?>
          <section id="angebot">
            <div class="offers__cards">
              <?php
              include( KLEIDERORDNUNG_DIR . '/inc/structure/offers-single-angebot.php');
              ?>
            </div>
          </section>
        <?php
        else : ?>
          <h2 class="page-title" id="content"><?php the_title(); ?></h2>
        <?php
          the_content();
        endif;
      endif;
    ?>
    <?php
    echo '</main>';
    endwhile;
    include( KLEIDERORDNUNG_DIR . '/inc/structure/footer.php');
    include( KLEIDERORDNUNG_DIR . '/inc/structure/admin-edit-link.php');
  endif;
?>
</body>
</html>
