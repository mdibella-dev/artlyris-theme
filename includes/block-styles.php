<?php
namespace artlyris;



/** Prevent direct access */
defined( 'ABSPATH' ) or exit;



/**
 * Script and style modifications for the block editor.
 *
 * @since   1.0.0
 *
 * @param   void
 *
 * @return  void
 */
function register_block_styles() {

    $filename = 'assets/build/js/block-styles.min.js';

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
