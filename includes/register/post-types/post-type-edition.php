<?php
/**
 * Custom post type: edition.
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */

namespace artlyris\post_types\edition;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Registers the custom post type.
 *
 * @since 1.0.0
 */

function register() {

    $labels = [
        'name'                  => __( 'Editions', 'artlyris' ),
        'singular_name'         => __( 'Edition', 'artlyris' ),
        'menu_name'             => __( 'Editions', 'artlyris' ),
        'all_items'             => __( 'All editions', 'artlyris' ),
        'add_new_item'          => __( 'Add new edition', 'artlyris' ),
        'edit_item'             => __( 'Edit edition', 'artlyris' ),
        'new_item'              => __( 'New edition', 'artlyris' ),
        'view_item'             => __( 'View edition', 'artlyris' ),
    ];

    $args = [
        'label'                 => __( 'Edition', 'artlyris' ),
        'labels'                => $labels,
        'description'           => '',
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'rest_base'             => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'rest_namespace'        => 'wp/v2',
        'has_archive'           => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => false,
        'delete_with_user'      => false,
        'exclude_from_search'   => false,
        'capability_type'       => 'page',
        'map_meta_cap'          => true,
        'hierarchical'          => false,
        'can_export'            => true,
        'rewrite'               => [
            'slug'       => 'edition',
            'with_front' => true
        ],
        'query_var'             => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-book',
        'supports'              => [
            'title',
            'thumbnail',
            'editor'
        ],
        'taxonomies'            => [
            'editions'
        ],
        'show_in_graphql'       => false,
    ];

    register_post_type( 'edition', $args );

}

add_action( 'init', __NAMESPACE__ . '\register' );
