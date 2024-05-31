/**
 * Do some magic
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */



/********************************
 * Helper functions
 ********************************/


/**
 * setHeaderHeightVar()
 */

function setHeaderHeightVar() {
    let header_height = document.querySelector( '.wp-site-blocks > header' ).getBoundingClientRect().height;

    document.querySelector( ':root' ).style.setProperty( '--header-height', header_height + 'px' );
}



/********************************
 * Event handlers
 ********************************/


/**
 * Events to fire the setHeaderHeightVar() procedure
 */

document.addEventListener( 'DOMContentLoaded', (event) => { setHeaderHeightVar(); } );
window.addEventListener( 'resize', (event) => { setHeaderHeightVar(); } );


/**
 * Events to animate edition header
 */

document.addEventListener( 'DOMContentLoaded', (event) => {

    const edition_images = document.querySelectorAll( '.edition-image--animate-fade-in' );

    edition_images.forEach( edition_image => {

        anime( {
            targets: edition_image,
            opacity: 1,
            translateY: -50,
            duration: 750,
            easing: 'easeInOutQuad'
        } );
    } );
} );
