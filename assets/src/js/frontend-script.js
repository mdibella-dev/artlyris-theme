/********************************
 * Event handlers
 ********************************/


/**
 * Do some adjustments if the window has been resized
 */

window.addEventListener( 'resize', function() {

    let header_height = document.querySelector( '.wp-site-blocks > header' ).getBoundingClientRect().height;

    document.querySelector( ':root' ).style.setProperty( '--header-height', header_height );
} );
