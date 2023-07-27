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
      get_template_directory_uri() . '/admin-style.css',
      array(),
      KLEIDERORDNUNG_THEME_VERSION,
      'all'
    );
  }
} );

if ( is_admin() ) {
  add_action( 'admin_enqueue_scripts', function () {
    wp_enqueue_script(
      'kleiderordnung_admin_script',
      get_template_directory_uri() . '/js/admin-scripts.js',
      array(),
      KLEIDERORDNUNG_THEME_VERSION
    );
  } );
}
