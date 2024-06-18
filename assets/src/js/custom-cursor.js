/**
 * Custom Cursor
 *
 * @see https://codepen.io/ntenebruso/pen/QWLzVjY
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */


document.addEventListener( 'DOMContentLoaded', (event) => {

/*    const body = document.querySelector( 'body' );

    if ( ! body.classList.contains( 'block-editor-page' ) ) {
*/
    // Create Cursor
    const cursor = document.createElement( 'div' );

    cursor.classList.add( 'cursor' );
    document.body.appendChild( cursor );
    


    document.addEventListener( 'mousemove', function( event ) {
        var x = event.clientX;
        var y = event.clientY;

        cursor.style.left = x + 'px';
        cursor.style.top = y + 'px';
    } );

/*
    document.addEventListener( 'mousedown', function() {
        cursor.classList.add( 'hover' )
    } );


    document.addEventListener( 'mouseup', function() {
        cursor.classList.remove( 'hover' )
    } );
*/

    var a = document.querySelectorAll( 'a' );

    a.forEach( item => {
        item.addEventListener( 'mouseover', () => { cursor.classList.add( 'hover' ); } );
        item.addEventListener( 'mouseleave', () => { cursor.classList.remove( 'hover' ); } );
    } );

} );
