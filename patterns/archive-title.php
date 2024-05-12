<?php
/**
 * Title: Archive Title
 * Slug: artlyris-theme/archive-title
 * Categories: artlyris-patterns
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

    <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
    <div class="wp-block-group" style="gap:0">

        <!-- wp:paragraph {"fontFamily":"playfair","style":{"spacing":{"margin":{"top":"0","bottom":"-24px"},"padding":"0"}}} -->
        <p class="has-playfair-font-family" style="padding:0;margin-top:0;margin-bottom:-24px;width:100%;"><em><?php

        if ( is_archive() ) {

            if ( is_category() ) {
                echo __( 'Category', 'artlyris' );
            } elseif ( is_tag() ) {
                echo __( 'Tag', 'artlyris' );
            } elseif ( is_author() ) {
                echo __( 'Author Archive', 'artlyris' );
            } else {
                echo __( 'Archive', 'artlyris' );
            }

        }

        ?></em></p>
        <!-- /wp:paragraph -->

        <!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"x-large"} /-->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
