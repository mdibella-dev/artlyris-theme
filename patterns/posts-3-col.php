<?php
/**
 * Title: List of posts, 3 columns
 * Slug: artlyris-theme/posts-3-col
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}","layout":{"type":"default"}} -->
<div class="wp-block-query">

    <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":3}} -->

        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
        <!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"typography":{"fontStyle":"normal","fontWeight":"300","textTransform":"uppercase"},"fontSize":"large"}} /-->

    <!-- /wp:post-template -->

</div>
<!-- /wp:query -->
