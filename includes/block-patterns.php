<?php
/**
 * Additional setup for the block patterns.
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */

namespace artlyris;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Registers block patterns and categories.
 *
 * @since  1.0.0
 */

function register_block_patterns() {


    try {

        $block_patterns = array(
            // add here (STRING), (STRING), ....
        );

        foreach ( $block_patterns as $block_pattern ) {
            $pattern_file = THEME_DIR . 'includes/patterns/' . $block_pattern . '.php';

            register_block_pattern(
                'ph_THEME-PREFIX' . '/' . $block_pattern,
                require $pattern_file
            );
        }
    } catch ( Exception ) {
        // do nothing!
    }
}

add_action( 'init', __NAMESPACE__ . '\register_block_patterns', 9 );
