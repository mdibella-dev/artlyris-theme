wp.domReady( () => {

    /** core/image */

    wp.blocks.unregisterBlockStyle(
        'core/image',
        [
            'rounded'
        ]
    );

    wp.blocks.registerBlockStyle(
        'core/image',
        [
            {
                name: 'float',
                label: 'Float',
                isDefault: false
            }
        ]
    );


    /** core/heading */

    wp.blocks.registerBlockStyle(
        'core/heading',
        [
            {
                name: 'sidebar-tool',
                label: 'Sidebar-Tool',
                isDefault: false,
            }
        ]
    );


    // Remove unused block variations
    // Current block manager plugins are failing
    wp.blocks.unregisterBlockVariation( 'core/embed', 'soundcloud' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'spotify' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'animoto' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'cloudup' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'collegehumor' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'crowdsignal' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'imgur' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'kickstarter' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'mixcloud' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'reverbnation' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'screencast' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'scribd' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'speaker-deck' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'smugmug' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'tiktok' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'ted' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'tumblr' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'twitter' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'videopress' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'wordpress' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'amazon-kindle' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'wolfram-cloud' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'issuu' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'pocketcasts' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'dailymotion' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'reddit' );


} );
