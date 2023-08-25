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
      ?><main id="wp--skip-link--target">';
      <section class="page__main__section">
        <div class="page__main__entry">

        <article class="news__post news__post--single">
          <figure class="news__post__image">
            <picture>
              <?php the_post_thumbnail() ?>
            </picture>
          </figure>
          <div class="news__post__content">
            <div class="news__post__title">
              <?php
              $category = get_the_category();
              if($category && $category[0]) {
                echo $category[0]->cat_name;
              }
              ?>
            </div>
            <div class="news__post__text">
              <h1><?php the_title() ?></h1>
              <p><?php the_content() ?></p>
            </div>
          </div>
        </article>

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
