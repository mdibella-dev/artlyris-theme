<?php
/**
 * Title: Single Author Info
 * Slug: artlyris-theme/single-author-info-deprecated
 * Categories: artlyris-patterns
 */
?>


<!-- wp:group {"align":"full","layout":{"type":"constrained"},"className":"site-component-author-info"} -->
<div class="wp-block-group alignfull site-component-author-info">

    <!-- wp:columns -->
    <div class="wp-block-columns">

        <!-- wp:column {"width":"96px"} -->
        <div class="wp-block-column" style="flex-basis:96px">

            <!-- wp:avatar /-->

        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:post-author-name {"isLink":true } /-->
            <!-- wp:post-author-biography /-->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">


</div>
<!-- /wp:group -->




<!-- wp:group {"className":"site-component-sidebar-tool"} -->
<div class="wp-block-group site-component-sidebar-tool">

    <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} -->
    <h6 class="wp-block-heading is-style-sidebar-tool"><span class="line"></span><span class="label"><?php echo __( 'Categories', 'artlyris' ); ?></span><span class="line"></span></h6>
    <!-- /wp:heading -->

    <!-- wp:categories /-->

</div>
<!-- /wp:group -->
