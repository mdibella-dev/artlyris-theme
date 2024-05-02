<?php
/**
 * Additional setup for the block styles.
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */

namespace artlyris;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Script and style modifications for the block editor.
 *
 * @since 1.0.0
 */

function register_block_styles() {

    $filename = 'assets/src/js/block-styles.js';
    //$filename = 'assets/build/js/block-styles.min.js';

    wp_enqueue_script(
        'mdb-block-styles',
        THEME_URI . $filename,
        [
            'wp-blocks',
            'wp-dom-ready',
            'wp-edit-post'
        ],
        THEME_VERSION . '.' . filemtime( THEME_DIR . $filename ),
        true
    );

}

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\register_block_styles' );
