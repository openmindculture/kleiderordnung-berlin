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

function kleiderordnung_register_post_type_story() {
	$labels = array(
		'name'                  => 'Stories (Testimonials)',
		'singular_name'         => 'Story',
		'menu_name'             => 'Stories',
		'name_admin_bar'        => 'Story',
		'all_items'             => 'Stories (Testimonials)',
		'add_new_item'          => 'Neue Story (Testimonial) erstellen',
		'add_new'               => 'Erstellen',
		'new_item'              => 'Neue Story',
		'edit_item'             => 'Story bearbeiten',
		'update_item'           => 'Story aktualisieren',
		'featured_image'        => 'Beitragsbild',
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

  if( function_exists('acf_add_local_field_group') ) {
    acf_add_local_field_group( array(
      'key'      => 'story_field_group',
      'title'    => 'Weitere Einstellungen',
      'position' => 'side',
      'fields'   => array(
        array(
          'key'   => 'position_number',
          'label' => 'Positionsnummer (Beispiel: 2)',
          'name'  => 'Positionsnummer',
          'type'  => 'text',
        )
      ),
      'location' => array(
        array(
          array(
            'param'    => 'post_type',
            'operator' => '==',
            'value'    => 'story',
          ),
        ),
      ),
    ) );

    /* admin column headers */
    add_filter( "manage_story_posts_columns", function ( $defaults ) {
      $defaults['position_number'] = 'Position';

      return $defaults;
    } );

    /* admin column content */
    add_action( "manage_story_posts_custom_column", function ( $column_name, $post_id ) {
      if ( $column_name == 'position_number' ) {
        echo get_field( 'position_number', $post_id );
      }
    }, 10, 2 );

    /* admin column sorting headers */
    add_filter( "manage_edit-story_sortable_columns", 'kleiderordnung_story_sort' );
    function kleiderordnung_story_sort( $columns ) {
      $custom = array(
        'position_number' => 'position_number'
      );

      return wp_parse_args( $custom, $columns );
    }

    /* admin column sorting order by */
    add_filter( 'request', 'kleiderordnung_story_orderby' );
    function kleiderordnung_story_orderby( $vars ) {
      if ( isset( $vars['orderby'] ) && 'position_number' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
          'meta_key' => 'position_number',
          'orderby'  => array(
            'position_number' => 'ASC'
          )
        ) );
      }

      return $vars;
    }
  }
}

function kleiderordnung_register_post_type_offer() {
  $labels = array(
    'name'                  => 'Angebote',
    'singular_name'         => 'Angebot',
    'menu_name'             => 'Angebote',
    'name_admin_bar'        => 'Angebot',
    'all_items'             => 'Angebote',
    'add_new_item'          => 'Neues Angebot erstellen',
    'add_new'               => 'Erstellen',
    'new_item'              => 'Neues Angebot',
    'edit_item'             => 'Angebot bearbeiten',
    'update_item'           => 'Angebot aktualisieren',
    'featured_image'        => 'Beitragsbild',
  );
  $args = array(
    'label'                 => 'Angebot',
    'description'           => 'Offer Type Description',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
  );
  register_post_type( 'offer', $args );

  $labels = array(
    'name'                       => _x( 'Angebotskategorien', 'taxonomy general name', 'textdomain' ),
    'singular_name'              => _x( 'Angebotskategorie', 'taxonomy singular name', 'textdomain' ),
    'search_items'               => __( 'Angebotskategorien durchsuchen', 'textdomain' ),
    'popular_items'              => __( 'Beliebte Angebotskategorien', 'textdomain' ),
    'all_items'                  => __( 'Alle Angebotskategorien', 'textdomain' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Angebotskategorie bearbeiten', 'textdomain' ),
    'update_item'                => __( 'Angebotskategorie aktualisieren', 'textdomain' ),
    'add_new_item'               => __( 'Neue Angebotskategorie hinzufügen', 'textdomain' ),
    'new_item_name'              => __( 'Namen der neuen Angebotskategorie', 'textdomain' ),
    'separate_items_with_commas' => __( 'Angebotskategorien mit Komma trennen', 'textdomain' ),
    'add_or_remove_items'        => __( 'Angebotskategorie hinzufügen oder entfernen', 'textdomain' ),
    'choose_from_most_used'      => __( 'Aus den häufigsten Angebotskategorien wählen', 'textdomain' ),
    'not_found'                  => __( 'Keine Angebotskategorien gefunden.', 'textdomain' ),
    'menu_name'                  => __( 'Angebotskategorien', 'textdomain' ),
  );

  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'offer_section' ),
  );

  register_taxonomy( 'offer_section', 'offer', $args );

  if( function_exists('acf_add_local_field_group') ) {
    acf_add_local_field_group( array(
      'key'      => 'offer_field_group_sidebar',
      'title'    => 'Weitere Einstellungen',
      'position' => 'side',
      'fields'   => array(
        array(
          'key'   => 'offer_position_number',
          'label' => 'Positionsnummer (Beispiel: 2)',
          'name'  => 'Positionsnummer',
          'type'  => 'text',
        ),
        array(
          'key'   => 'offer_id',
          'label' => 'ID (für Links und Icon, z.B. angebote-styling-beratung)',
          'name'  => 'offer_dom_id',
          'type'  => 'text',
        ),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'post_type',
            'operator' => '==',
            'value'    => 'offer',
          ),
        ),
      ),
    ) );

    acf_add_local_field_group( array(
      'key'      => 'offer_field_group_main',
      'title'    => 'Was du erhältst, Preis und weitere Inhalte',
      'position' => 'normal',
      'fields'   => array(
        array(
          'key'   => 'offer_features',
          'label' => 'Was du erhältst (als Aufzählungsliste formatieren)',
          'name'  => 'offer_features',
          'type'  => 'wysiwyg',
        ),
        array(
          'key'   => 'offer_price',
          'label' => 'Preis (fettgedruckte Zeile, Text möglich)',
          'name'  => 'offer_price',
          'type'  => 'text',
        ),
        array(
          'key'   => 'offer_price_annotation',
          'label' => 'Preishinweise (Zeilen unter dem Preis)',
          'name'  => 'offer_price_annotation',
          'type'  => 'wysiwyg',
        ),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'post_type',
            'operator' => '==',
            'value'    => 'offer',
          ),
        ),
      ),
    ) );

    /* admin column headers */
    add_filter( "manage_offer_posts_columns", function ( $defaults ) {
      $defaults['offer_position_number'] = 'Position';

      return $defaults;
    } );

    /* admin column content */
    add_action( "manage_offer_posts_custom_column", function ( $column_name, $post_id ) {
      if ( $column_name == 'offer_position_number' ) {
        echo get_field( 'offer_position_number', $post_id );
      }
    }, 10, 2 );

    /* admin column sorting headers */
    add_filter( "manage_edit-offer_sortable_columns", 'kleiderordnung_offer_sort' );
    function kleiderordnung_offer_sort( $columns ) {
      $custom = array(
        'offer_position_number' => 'offer_position_number'
      );

      return wp_parse_args( $custom, $columns );
    }

    /* admin column sorting order by */
    add_filter( 'request', 'kleiderordnung_offer_orderby' );
    function kleiderordnung_offer_orderby( $vars ) {
      if ( isset( $vars['orderby'] ) && 'offer_position_number' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array(
          'meta_key' => 'offer_position_number',
          'orderby'  => array(
            'offer_position_number' => 'ASC'
          )
        ) );
      }

      return $vars;
    }
  }
}

add_action( 'init', 'kleiderordnung_register_post_type_story' );
add_action( 'init', 'kleiderordnung_register_post_type_offer' );
