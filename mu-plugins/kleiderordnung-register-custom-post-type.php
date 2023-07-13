<?php
/**
 * @package KleiderOrdnung
 * @author openmindculture
 * @version 2.3.2
 *
 * @wordpress-plugin
 * Version: 2.3.2
 * Tested up to: 6.2
 * Plugin Name: Kleiderordnung Register Custom Post Types
 * Text Domain: kleiderordnung-register-custom-post-types
 * Author: openmindculture
 * Author URI: https://wordpress.org/support/users/openmindculture/
 * Plugin URI: https://github.com/openmindculture/kleiderordnung-berlin
 * Description: Plugin to register custom post types
 */

function kleiderordnung_register_post_type() {
	$labels = array(
		'name'                  => 'Stories (Testimonials)',
		'singular_name'         => 'Story',
		'menu_name'             => 'Stories',
		'name_admin_bar'        => 'Story',
		'archives'              => 'Story Archives',
		'attributes'            => 'Story Attributes',
		'parent_item_colon'     => 'Parent Story:',
		'all_items'             => 'Stories (Testimonials)',
		'add_new_item'          => 'Neue Story (Testimonial) erstellen',
		'add_new'               => 'Erstellen',
		'new_item'              => 'New Story',
		'edit_item'             => 'Edit Story',
		'update_item'           => 'Update Story',
		'view_item'             => 'View Story',
		'view_items'            => 'View Stories',
		'search_items'          => 'Search Story',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this story',
		'items_list'            => 'Stories list',
		'items_list_navigation' => 'Stories list navigation',
		'filter_items_list'     => 'Filter stories list',
	);
	$args = array(
		'label'                 => 'Story',
		'description'           => 'Story Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'story', $args );

  if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array(
      'key' => 'story_field_group',
      'title' => 'Weitere Einstellungen',
      'position' => 'side',
      'fields' => array (
        array (
          'key' => 'position_number',
          'label' => 'Positionsnummer (Beispiel: 2)',
          'name' => 'Positionsnummer',
          'type' => 'text',
        )
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'story',
          ),
        ),
      ),
    ));

    /* admin column headers */
    add_filter( "manage_story_posts_columns", function ( $defaults ) {
      $defaults['position_number'] = 'Position';
      return $defaults;
    });

    /* admin column content */
    add_action( "manage_story_posts_custom_column", function ( $column_name, $post_id ) {
      if ( $column_name == 'position_number' ) {
        echo get_field( 'position_number', $post_id );
      }
    }, 10, 2 );

    /* admin column sorting headers */
    add_filter("manage_edit-story_sortable_columns", 'kleiderordnung_story_sort');
    function kleiderordnung_story_sort($columns) {
      $custom = array(
        'position_number' => 'position_number'
      );
      return wp_parse_args($custom, $columns);
    }

    /* admin column sorting order by */
    add_filter( 'request', 'kleiderordnung_story_orderby' );
    function kleiderordnung_story_orderby( $vars ) {
      if ( isset( $vars['orderby'] ) && 'position_number' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
          'meta_key'       => 'position_number',
          'orderby' => array(
            'position_number' => 'ASC'
          )
        ));
      }
      return $vars;
    }

  endif;
}
add_action( 'init', 'kleiderordnung_register_post_type' );
