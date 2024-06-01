<?php
/**
 * Custom taxonomy: editions.
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */

namespace artlyris\taxonomies\editions;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Registers the customtaxonomy.
 *
 * @since 1.0.0
 */

function register() {

    $labels = [
        'name'          => __( 'Editions', 'artlyris' ),
        'singular_name' => __( 'Edition', 'artlyris' ),
        'menu_name'     => __( 'Editions', 'artlyris' ),
        'all_items'     => __( 'All editions', 'artlyris' ),
    ];

    $args = [
        'label'                 => __( 'Editions', 'artlyris' ),
        'labels'                => $labels,
        'public'                => false,
        'publicly_queryable'    => true,
        'hierarchical'          => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'query_var'             => true,
        'rewrite'               => false,
        'show_admin_column'     => true,
        'show_in_rest'          => true,
        'show_tagcloud'         => true,
        'rest_base'             => 'editions',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'rest_namespace'        => 'wp/v2',
        'show_in_quick_edit'    => false,
        'sort'                  => false,
        'show_in_graphql'       => false,
    ];

    register_taxonomy( 'edition', ['post','edition'], $args );
}

add_action( 'init', __NAMESPACE__ . '\register' );
