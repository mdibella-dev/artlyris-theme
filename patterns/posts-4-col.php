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

    <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":4}} -->

        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"medium","fontFamily":"open-sans"} /-->

    <!-- /wp:post-template -->

</div>
<!-- /wp:query -->
