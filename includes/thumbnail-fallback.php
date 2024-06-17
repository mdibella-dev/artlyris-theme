<?php
/**
 * Function to return a fallback image (a placeholder) for posts without a thumbnail.
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */

namespace artlyris;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Returns a HTML code for the fallback image if no thumbnail is present.
 *
 * @since 1.0.0
 * @see   https://developer.wordpress.org/reference/hooks/post_thumbnail_html/
 */

function post_thumbnail_fallback_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) {

    if ( empty( $html ) ) {

        $path = THEME_URI . 'assets/img/placeholder-01.png';

        $attr = array_merge( ['alt'=>'', 'style'=>''], $attr );

        $html = sprintf(
            '<img class="%1$s" width="%2$s" height="%3$s" src="%4$s" alt="%5$s" style="%6$s">',
            implode( ' ', ['wp-post-image', 'size' . $size] ),
            '450',
            '300',
            $path,
            $attr['alt'],
            $attr['style']
        );
    }

    return $html;
}


add_filter( 'post_thumbnail_html', __NAMESPACE__ . '\post_thumbnail_fallback_html', 20, 5 );
