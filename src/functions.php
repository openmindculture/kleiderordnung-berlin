<?php
/* todo refactor to inc module files and consistent PSR-compliant syntax wherever possible */
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! defined ( 'KLEIDERORDNUNG_DIR' ) ){
  define( 'KLEIDERORDNUNG_DIR', get_template_directory() );
}

if ( ! defined ( 'KLEIDERORDNUNG_URI' ) ){
  define( 'KLEIDERORDNUNG_URI', get_template_directory_uri() );
}

if ( ! defined ( 'KLEIDERORDNUNG_THEME_VERSION' ) ){
  define( 'KLEIDERORDNUNG_THEME_VERSION', '2.5.3' );
}

add_theme_support('post-thumbnails', array(
  'post',
  'page',
  /* custom post types must also declare thumbnail support explicitly */
  'story',
  'offer',
));

add_filter('use_block_editor_for_post', function (
    /** @var bool */ $useBlockEditorForPost,
    /** @var WP_Post */ $post
){
  if ($post->post_type === 'post') return false;
  if ($post->post_type === 'story') return false;
  if ($post->post_type === 'offer') return false;
  $languages = pll_languages_list();
  foreach ($languages as &$language) {
    if (get_permalink($post->ID) == pll_home_url($language))
      return false;
  }
  return $useBlockEditorForPost;
}, 10,2);

// reminder that actions wrap filter calls
// so there is any order preference despite the declarative approach
// I would rather put filter hooks before action hooks

add_filter( 'body_class', function( $classes = '' ) {
  $classes[] = 'theme-kleiderordnung';
  return $classes;
} );

add_filter('acf/fields/wysiwyg/toolbars' , function( $toolbars ){
  $toolbars['Full'] = array();
  $toolbars['Full'][1] = array('bold', 'italic', 'underline', 'strikethrough', 'bullist', 'alignleft', 'aligncenter', 'alignright', 'alignjustify', 'link', 'unlink', 'pastetext', 'removeformat', 'undo', 'redo' );
  $toolbars['Full'][2] = array();
  unset( $toolbars['Basic' ] );
  return $toolbars;
});

add_action( 'admin_init', function () {
  if (is_admin()) {
    add_editor_style( 'editor-style.css');
    wp_enqueue_style(
      'kleiderordnung_admin_style',
      get_template_directory() . '/admin-style.css',
      array(),
      KLEIDERORDNUNG_THEME_VERSION,
      'all'
    );
  }
});


if (is_admin()) {
  add_action('acf/input/admin_footer', function(){
    ?><script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/admin-scripts.js?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>"></script>
    <?php
  });
}

// dequeue svg filters above page header
add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'global-styles' );
} );

add_action('after_setup_theme', function() {
  load_theme_textdomain( 'kleiderordnung', get_template_directory() . '/languages' );
  remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
  remove_action( 'in_admin_header', 'wp_global_styles_render_svg_filters' );
}, 10, 0);

// if still necessary:
// remove_action( 'wp_head', 'wp_generator' ); // goes into functions.php
// remove_action( 'wp_head', 'wp_generator' );

require_once( KLEIDERORDNUNG_DIR.'/inc/functions/customizer.php' );
