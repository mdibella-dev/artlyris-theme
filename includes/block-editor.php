<?php
/**
 * Settings and functions related to the block editor (aka Gutenberg).
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */

namespace artlyris;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Removes the (additional) post-title-wrapper.
 *
 * @since 1.1.0
 *
 * @see https://generatepress.com/forums/topic/when-editing-in-gutenberg-remove-the-title-from-the-editing-interface/ (thx David)
 *
 * @param array $editor_settings The settings.
 *
 * @return array The modified settings.
 */

function block_editor_settings_all( $editor_settings ) {
    $editor_settings['styles'][] = [
        'css' => '.edit-post-visual-editor__post-title-wrapper { display: none; }'
    ];

    return $editor_settings;
}

add_filter( 'block_editor_settings_all', __NAMESPACE__ . '\block_editor_settings_all' );



/**
 * Adds the block pattern category "ARTlyris" to the editor.
 *
 * @since 1.0.0
 */

function register_theme_block_pattern_category() {

    register_block_pattern_category(
        'artlyris-patterns', [
            'label' => __( 'ARTlyris', 'artlyris' )
        ]
    );

}

add_action( 'init', __NAMESPACE__ . '\register_theme_block_pattern_category' );
