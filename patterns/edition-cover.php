<?php
/**
 * Title: Edition Cover
 * Slug: artlyris-theme/edition-cover
 * Categories: edition, page
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"calc(var(--header-height) + var(--wp--preset--spacing--40))","bottom":"var:preset|spacing|30","left":"style|root|padding|left","right":"style|root|padding|right"},"margin":{"bottom":"custom|main|padding-top","top":"calc(-1*var(--header-height))"}}},"backgroundColor":"pale-brown","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-pale-brown-background-color has-background" style="padding-top:calc(var(--header-height) + var(--wp--preset--spacing--40));padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--style--root--padding-left);padding-right:var(--wp--style--root--padding-right);margin-bottom:var(--wp--custom--main--padding-top);margin-top:calc(-1*var(--header-height));">

    <?php
    global $post;
           $post_thumbnail_id = get_post_thumbnail_id( $post );

    if ( $post_thumbnail_id ) {
        $post_thumbnail_url = get_the_post_thumbnail_url( $post, 'full' );
        $post_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true);
    ?>

    <!-- wp:image {"id":<?php echo $post_thumbnail_id; ?>,"sizeSlug":"full","linkDestination":"none","align":"center",className:"edition-image edition-image--animate-fade-in"} -->
    <figure class="edition-image edition-image--animate-fade-in wp-block-image aligncenter size-full"><img src="<?php echo $post_thumbnail_url; ?>" alt="<?php echo $post_thumbnail_alt; ?>"/></figure>
    <!-- /wp:image -->

    <?php
    }
    ?>

</div>
<!-- /wp:group -->
