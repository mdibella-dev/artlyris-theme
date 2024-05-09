<?php
/**
 * Title: List of posts, 4 columns
 * Slug: artlyris-theme/posts-4-col
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}","layout":{"type":"default"}} -->
<div class="wp-block-query">

    <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->

    <!-- wp:spacer -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4}} -->

        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"medium","fontFamily":"open-sans"} /-->

    <!-- /wp:post-template -->

    <!-- wp:spacer -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
