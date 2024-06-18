/**
 * Custom Cursor
 *
 * @see https://codepen.io/ntenebruso/pen/QWLzVjY
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */


document.addEventListener( 'readystatechange', (event) => {
    if ( event.target.readyState === 'complete' ) {

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


        var a = document.querySelectorAll( '.wp-site-blocks a' );

        a.forEach( item => {
            item.addEventListener( 'mouseover', () => { cursor.classList.add( 'hover' ); } );
            item.addEventListener( 'mouseleave', () => { cursor.classList.remove( 'hover' ); } );
        } );
    }

} );
