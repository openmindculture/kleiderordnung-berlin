<?php
/**
 * @package KleiderOrdnung
 * @author balbuf (Stephen Beemsterboer)
 * @wordpress-plugin
 * Description: update existing posts when using the WordPress Importer
 * Plugin URI: https://gist.github.com/balbuf/d232769f1e7d66fe91b8ecd7795ef3cb
 * Author URI: https://github.com/balbuf
 * Tested up to: 6.5
 *
 * When using the WordPress Importer, update existing
 * posts instead of skipping them. Updates content according
 * to the import file even if the existing post was updated
 * more recently.
 *
 * To use, drop this file into your /mu-plugins/ folder or
 * copy this code into your functions.php file.
 */

class WPImporterUpdate {

  protected $existing_post;

  function __construct() {
    add_filter( 'wp_import_existing_post', [ $this, 'wp_import_existing_post' ], 10, 2 );
    add_filter( 'wp_import_post_data_processed', [ $this, 'wp_import_post_data_processed' ], 10, 2 );
  }

  function wp_import_existing_post( $post_id, $post ) {
    if ( $this->existing_post = $post_id ) {
      $post_id = 0; // force the post to be imported
    }
    return $post_id;
  }

  function wp_import_post_data_processed( $postdata, $post ) {
    if ( $this->existing_post ) {
      // update the existing post
      $postdata['ID'] = $this->existing_post;
    }
    return $postdata;
  }

}
new WPImporterUpdate;
