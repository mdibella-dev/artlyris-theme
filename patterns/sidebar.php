<?php
/**
 * Title: Sidebar
 * Slug: artlyris-theme/sidebar
 * Categories: sidebar, artlyris-patterns
 */
?>



<!-- wp:group {"className":"site-component-sidebar-tool"} -->
<div class="wp-block-group site-component-sidebar-tool">

    <!-- wp:columns -->
    <div class="wp-block-columns">

        <!-- wp:column {"width":"40px"} -->
        <div class="wp-block-column" style="flex-basis:40px">

            <!-- wp:avatar {"size":40} /-->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">

            <!-- wp:post-author-name {"isLink":true } /-->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:post-author-biography /-->
</div>
<!-- /wp:group -->




<?php
if ( has_tag() ) {
?>
<!-- wp:group {"className":"site-component-sidebar-tool"} -->
<div class="wp-block-group site-component-sidebar-tool">

    <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} -->
    <h6 class="wp-block-heading is-style-sidebar-tool"><span class="line"></span><span class="label"><?php echo __( 'Tags', 'artlyris' ); ?></span><span class="line"></span></h6>
    <!-- /wp:heading -->

    <!-- wp:post-terms {"term":"post_tag"} /-->

</div>
<!-- /wp:group -->
<?php
}
?>


<?php
if ( has_term( '', 'edition') ) {

    global $post;
           $editions = [];
           $terms    = get_the_terms( $post, 'edition' );

    if ( ! empty( $terms ) ) {

        foreach ( $terms as $term ) {

            $pages = get_posts( [
                'post_type'   => 'page',
                'numberposts' => 1,
                'tax_query'   => [
                    [
                        'taxonomy'         => 'edition',
                        'field'            => 'term_id',
                        'terms'            => $term->term_id,
                        'include_children' => false
                    ]
                ]
            ] );

            if ( ! empty( $pages ) ) {
                $editions[] = $pages[0];
            }
        }

        if ( ! empty( $editions ) ) {
?>
<!-- wp:group {"className":"site-component-sidebar-tool"} -->
<div class="wp-block-group site-component-sidebar-tool">

    <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} -->
    <h6 class="wp-block-heading is-style-sidebar-tool"><span class="line"></span><span class="label"><?php echo __( 'Editions', 'artlyris' ); ?></span><span class="line"></span></h6>
    <!-- /wp:heading -->

    <!-- wp:group -->
    <div class="wp-block-group">

            <?php
            foreach ( $editions as $edition ) {
                $post_thumbnail_id = get_post_thumbnail_id( $edition );

                if ( $post_thumbnail_id ) {
                    $post_thumbnail_url = get_the_post_thumbnail_url( $edition, 'full' );
                    $post_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true);
            ?>

        <!-- wp:image {"id":<?php echo $post_thumbnail_id; ?>,"sizeSlug":"full","align":"center",className:"edition-image"} -->
        <figure class="edition-image wp-block-image aligncenter size-full">
            <a href="<?php echo get_permalink( $edition ); ?>">
                <img src="<?php echo $post_thumbnail_url; ?>" alt="<?php echo $post_thumbnail_alt; ?>"/>
            </a>
        </figure>
        <!-- /wp:image -->

            <?php
                }
            }
            ?>
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
<?php
        }
    }
}
?>
