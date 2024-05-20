<?php
/**
 * Title: Authors Title
 * Slug: artlyris-theme/authors-title
 * Categories: artlyris-patterns
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

    <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
    <div class="wp-block-group" style="gap:0">

        <!-- wp:paragraph {"fontFamily":"playfair","style":{"spacing":{"margin":{"top":"0"},"padding":"0"}}} -->
        <p class="has-playfair-font-family" style="padding:0;margin-top:0;width:100%;"><em><?php

        echo __( 'From A to Z', 'artlyris' );

        ?></em></p>
        <!-- /wp:paragraph -->

        <!-- wp:post-title {"textAlign":"center","showPrefix":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"x-large"} /-->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
