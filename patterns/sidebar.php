<?php
/**
 * Title: Sidebar
 * Slug: artlyris-theme/sidebar
 * Categories: sidebar
 */
?>

<!-- wp:group {"className":"site-component-sidebar","tagName":"aside"} -->
<aside class="wp-block-group site-component-sidebar">

    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} /-->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span><?php echo __( 'Categories', 'artlyris' ); ?></span></h6>

        <!-- wp:categories /-->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} /-->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span><?php echo __( 'Tags', 'artlyris' ); ?></span></h6>

        <!-- wp:post-terms {"term":"post_tag"} /-->

    </div>
    <!-- /wp:group -->

</aside>
<!-- /wp:group -->
