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
     * Registers and loads vendor styles and scripts.
     */

    wp_enqueue_script(
        'anime',
        THEME_URI . 'assets/build/vendors/anime/anime.min.js',
        [],
        false,
        [
            'in_footer' => true,
            'strategy'  => 'async'
        ]
    );


    /**
     * Registers and loads the theme's own scripts.
     */

    //$filename = 'assets/build/js/frontend-script.min.js';
    $filename = 'assets/src/js/frontend-script.js';

    if ( file_exists( THEME_DIR . $filename ) ) {

        wp_enqueue_script(
            'artlyris-frontend-script',
            THEME_URI . $filename,
            [
                'anime'
            ],
            THEME_VERSION . '.' . filemtime( THEME_DIR . $filename ),
            true
        );
    }


    /**
     * Registers and loads the theme's own styles.
     *
     * Note: The style.css in the main directory is only used for theme identification and versioning.
     * Actually the (compressed) style information can be found in frontend(.min).css.
     */

    $filename = 'assets/build/css/frontend-style.min.css';

    if ( file_exists( THEME_DIR . $filename ) ) {

        wp_enqueue_style(
            'artlyris-frontend-style',
            THEME_URI . $filename,
            [],
            THEME_VERSION . '.' . filemtime( THEME_DIR . $filename ),
        );
    }


    wp_enqueue_style(
        'custom-cursor-style',
        THEME_URI . 'assets/build/css/custom-cursor-style.min.css',
        [],
        THEME_VERSION
    );


    wp_enqueue_script(
        'custom-cursor-script',
        THEME_URI . 'assets/src/js/custom-cursor-script.js',
        [],
        THEME_VERSION,
        [
            'in_footer' => true,
            'strategy'  => 'async'
        ]
    );



}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\theme_scripts', 9999 );
