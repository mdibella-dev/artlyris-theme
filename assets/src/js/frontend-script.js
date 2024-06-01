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
 * Fire the setHeaderHeightVar() procedure
 */

document.addEventListener( 'DOMContentLoaded', (event) => { setHeaderHeightVar(); } );
window.addEventListener( 'resize', (event) => { setHeaderHeightVar(); } );


/**
 * Animate edition header
 */

document.addEventListener( 'DOMContentLoaded', (event) => {

    const edition_images = document.querySelectorAll( '.edition-image--animate-fade-in' );
    const edition_links  = document.querySelectorAll( '.edition-image--animate-fade-in + .edition-image-link' );

    anime( {
        targets: edition_images,
        duration: 750,
        opacity: 1,
        translateY: -50,
        easing: 'easeInOutQuad'
    } );

    anime( {
        targets: edition_links,
        duration: 550,
        opacity: 1,
        translateY: -50,
        easing: 'easeInOutQuad',
        delay: 200
    } );

} );


/**
 * Close slideout when window is resized
 */

window.addEventListener( 'resize', function() {
    const body = document.querySelector( 'body' );

    if ( body.classList.contains( 'slideout-visible' ) ) {
        let timeline = anime.timeline( {
            easing: 'easeInOutExpo',
            duration: 400
        } );

        timeline
        .add( {
            targets: '.site-component-slideout',
            right: '-100%'
        } );

        body.classList.toggle( 'slideout-visible' );
    }
        
} );


/**
 * Click on hamburger => show/hide slideout
 */

const hamburger = document.querySelector( '.site-component-header-navigation__mobile-trigger' );

if ( hamburger != null ) {
    hamburger.addEventListener( 'click', function( e ) {
        const body = document.querySelector( 'body' );

        // Show slideout
        if ( ! body.classList.contains( 'slideout-visible' ) ) {

            let timeline = anime.timeline( {
                easing: 'easeInOutExpo',
                duration: 400
            } );

            timeline
            .add( {
                targets: '.site-component-slideout',
                right: '0'
            } );

        // Hide slideout
        } else {

            let timeline = anime.timeline( {
                easing: 'easeInOutExpo',
                duration: 400
            } );

            timeline
            .add( {
                targets: '.site-component-slideout',
                right: '-100%'
            } );

        }

        body.classList.toggle( 'slideout-visible' );
    } );
}
