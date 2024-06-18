<?php
/**
 * Main functions for setting up the theme.
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */

namespace artlyris;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Performs basic settings for the theme.
 *
 * @since  1.0.0
 */

function theme_setup() {
    // Enables internationalization.
    load_theme_textdomain( 'artlyris', THEME_DIR . 'languages' );


    // Enables responsive embedding of media embeds.
    add_theme_support( 'responsive-embeds' );


    // Adds editor styles.
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/build/css/frontend-style.min.css' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\theme_setup' );



/**
 * Loads a set of necessary JS scripts and stylesheets.
 *
 * @since  1.0.0
 */

function theme_scripts() {

    /**
     * Registers and loads the theme's own scripts.
     */

    $scripts = [
        'anime' => [
            'path'    => 'assets/build/vendors/anime/anime.min.js',
            'deps'    => [],
            'version' => false,
            'args'    => [
                'in_footer' => true,
                'strategy'  => 'async'
            ]
        ],
        'artlyris-frontend-script' => [
            'path'    => /*'assets/build/js/frontend.min.js'*/ 'assets/src/js/frontend.js',
            'deps'    => [
                'anime'
            ],
            'version' => '',
            'args'    => [
                'in_footer' => true,
                'strategy'  => 'async'
            ]
        ],
        'artlyris-custom-cursor-script' => [
            'path'    => /*'assets/build/js/custom-cursor.min.js'*/ 'assets/src/js/custom-cursor.js',
            'deps'    => [],
            'version' => '',
            'args'    => [
                'in_footer' => true,
                'strategy'  => 'async'
            ]
        ]
    ];

    // Register (and enqueue) all scripts in the given order
    foreach ( $scripts as $handle => $setup ) {

        if ( file_exists( THEME_DIR . $setup['path'] ) ) {

            $version = '';

            if ( is_string( $setup['version'] ) ) {
                $version = ( empty( $setup['version'] ) )? THEME_VERSION . '.' . filemtime( THEME_DIR . $setup['path'] ) : $setup['version'];
            }  else if ( is_bool( $setup['version'] ) and ( false === $setup['version'] ) ) {
                $version = false;
            } else {
                $version = null;
            }

            wp_register_script(
                $handle,
                THEME_URI . $setup['path'],
                $setup['deps'],
                $version,
                $setup['args'],
            );

            wp_enqueue_script( $handle );
        }

    }


    /**
     * Registers and loads the theme's own styles.
     *
     * Note: The style.css in the main directory is only used for theme identification and versioning.
     * Actually the (compressed) style information can be found in frontend-style(.min).css.
     */

    $styles = [
        'artlyris-frontend-style' => [
            'path'    => 'assets/build/css/frontend.min.css',
            'deps'    => [],
            'version' => ''
        ],
        'artlyris-custom-cursor-style' => [
            'path'    => 'assets/build/css/custom-cursor.min.css',
            'deps'    => [],
            'version' => ''
        ]
    ];


    // Register (and enqueue) all styles in the given order
    foreach ( $styles as $handle => $setup ) {

        if ( file_exists( THEME_DIR . $setup['path'] ) ) {

            $version = '';

            if ( is_string( $setup['version'] ) ) {
                $version = ( empty( $setup['version'] ) )? THEME_VERSION . '.' . filemtime( THEME_DIR . $setup['path'] ) : $setup['version'];
            }  else if ( is_bool( $setup['version'] ) and ( false === $setup['version'] ) ) {
                $version = false;
            } else {
                $version = null;
            }

            wp_register_style(
                $handle,
                THEME_URI . $setup['path'],
                $setup['deps'],
                $version
            );

            wp_enqueue_style( $handle );
        }

    }

}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\theme_scripts', 9999 );
