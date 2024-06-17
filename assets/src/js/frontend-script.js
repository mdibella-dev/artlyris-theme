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
 * setHeightVars()
 */

function setHeightVars() {
    let header_height           = document.querySelector( '.wp-site-blocks > header' ).getBoundingClientRect().height;
    let slideout_trigger_height = document.querySelector( '.slideout-trigger-area' ).getBoundingClientRect().height;

    document.querySelector( ':root' ).style.setProperty( '--header-height', header_height + 'px' );
    document.querySelector( ':root' ).style.setProperty( '--slideout-height', slideout_trigger_height + 'px' );
}


/**
 * doSlideout()
 *
 * @param open_or_close true: open; false: close
 */

function doSlideout( open_or_close ) {
    const body = document.querySelector( 'body' );

    if ( open_or_close == false ) {
        anime( {
            easing: 'easeInOutExpo',
            duration: 400,
            targets: '.site-component-slideout',
            right: '-100%'
        } );

        body.classList.remove( 'slideout-visible' );
    } else if ( open_or_close == true ) {

        anime( {
            easing: 'easeInOutExpo',
            duration: 400,
            targets: '.site-component-slideout',
            right: '0%'
        } );

        body.classList.add( 'slideout-visible' );
    }
}



/********************************
 * Event handlers
 ********************************/


/**
 * Fire the setHeaderHeightVar() procedure
 */

document.addEventListener( 'DOMContentLoaded', (event) => { setHeightVars(); } );
window.addEventListener( 'resize', (event) => { setHeightVars(); } );


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
 * Close the slideout
 */

// on resize
window.addEventListener( 'resize', (event) => { doSlideout( false ); } );

// on click on trigger
const trigger_close = document.querySelector( '.slideout-trigger__close' );

if ( trigger_close != null ) {
    trigger_close.addEventListener( 'click', (event) => { doSlideout( false ); } );
}


/**
 * Opens the slideout
 */

// on click on trigger
const trigger_open = document.querySelector( '.slideout-trigger__open' );

if ( trigger_open != null ) {
    trigger_open.addEventListener( 'click', (event) => { doSlideout( true ); } );
}



/********************************
 * Custom Cursor
 *
 * @see https://codepen.io/ntenebruso/pen/QWLzVjY
 ********************************/


document.addEventListener( 'DOMContentLoaded', (event) => {

    // Create
    const cursor = document.createElement( 'div' );

    cursor.classList.add( 'cursor' );
    document.body.appendChild( cursor );


    document.addEventListener( 'mousemove', function( event ) {
        var x = event.clientX;
        var y = event.clientY;

        cursor.style.left = x + 'px';
        cursor.style.top = y + 'px';
    } );


    document.addEventListener( 'mousedown', function() {
        cursor.classList.add( 'hover' )
    } );


    document.addEventListener( 'mouseup', function() {
        cursor.classList.remove( 'hover' )
    } );
} );
