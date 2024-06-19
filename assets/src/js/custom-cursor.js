/**
 * Custom Cursor
 *
 * @see     https://codepen.io/ntenebruso/pen/QWLzVjY
 * @uses    mobble plugin https://wordpress.org/plugins/mobble/
 *
 * @author  Marco Di Bella
 * @package ARTlyris
 */


document.addEventListener( 'readystatechange', (event) => {

    if ( event.target.readyState === 'complete' ) {

        // Check whether it's a desktop system or not
        if ( document.querySelector( 'body' ).classList.contains( 'desktop' ) ) {

            // Create Cursor
            const cursor = document.createElement( 'div' );

            cursor.classList.add( 'cursor' );
            document.body.appendChild( cursor );


            // Add event handler for moving the faux cursor
            document.addEventListener( 'mousemove', function( event ) {
                var x = event.clientX;
                var y = event.clientY;

                cursor.style.left = x + 'px';
                cursor.style.top = y + 'px';
            } );


            // Add event handler(s) for 'hover' effect
            var a = document.querySelectorAll( '.wp-site-blocks a' );

            a.forEach( item => {
                item.addEventListener( 'mouseover', () => { cursor.classList.add( 'hover' ); } );
                item.addEventListener( 'mouseleave', () => { cursor.classList.remove( 'hover' ); } );
            } );

        }
    }

} );
