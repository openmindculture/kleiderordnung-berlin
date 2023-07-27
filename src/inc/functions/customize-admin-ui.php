<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 */

add_filter( 'use_block_editor_for_post', function (
  /** @var bool */ $useBlockEditorForPost,
  /** @var WP_Post */ $post
) {
  if ( $post->post_type === 'post' ) {
    return false;
  }
  if ( $post->post_type === 'story' ) {
    return false;
  }
  if ( $post->post_type === 'offer' ) {
    return false;
  }
  $languages = pll_languages_list();
  foreach ( $languages as &$language ) {
    if ( get_permalink( $post->ID ) == pll_home_url( $language ) ) {
      return false;
    }
  }

  return $useBlockEditorForPost;
}, 10, 2 );

add_filter( 'acf/fields/wysiwyg/toolbars', function ( $toolbars ) {
  $toolbars['Full'] = array();
  $toolbars['Full'][1] = array(
    'bold',
    'italic',
    'underline',
    'strikethrough',
    'bullist',
    'alignleft',
    'aligncenter',
    'alignright',
    'alignjustify',
    'link',
    'unlink',
    'pastetext',
    'removeformat',
    'undo',
    'redo'
  );
  $toolbars['Full'][2] = array();
  unset( $toolbars['Basic'] );

  return $toolbars;
} );

add_action( 'admin_init', function () {
  if ( is_admin() ) {
    add_editor_style( 'editor-style.css' );
    wp_enqueue_style(
      'kleiderordnung_admin_style',
      get_template_directory() . '/admin-style.css',
      array(),
      KLEIDERORDNUNG_THEME_VERSION,
      'all'
    );
  }
} );

if ( is_admin() ) {
  add_action( 'acf/input/admin_footer', function () {
    ?>
    <script type="text/javascript"
            src="<?php echo get_template_directory_uri() ?>/js/admin-scripts.js?v=<?php echo KLEIDERORDNUNG_THEME_VERSION ?>"></script>
    <?php
  } );
}
