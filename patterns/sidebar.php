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
        <h6 class="wp-block-heading is-style-sidebar-tool"><span class="label"><?php echo __( 'Categories', 'artlyris' ); ?></span><span class="line"></span></h6>

        <!-- wp:categories /-->

    </div>
    <!-- /wp:group -->


    <?php
    if ( has_tag() ) {
    ?>
    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} /-->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span class="label"><?php echo __( 'Tags', 'artlyris' ); ?></span><span class="line"></span></h6>

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

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} /-->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span class="label"><?php echo __( 'Editions', 'artlyris' ); ?></span><span class="line"></span></h6>

        <!-- wp:group -->
        <div>

                <?php
                foreach ( $editions as $edition ) {
                ?>
            <p>
            <a href="<?php echo get_permalink( $edition ); ?>"><?php //echo __( 'Part of this edition', 'artlyris' );

            $post_thumbnail_id = get_post_thumbnail_id( $edition );

            if ( $post_thumbnail_id ) {
                $post_thumbnail_url = get_the_post_thumbnail_url( $edition, 'full' );
                $post_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true);
            ?>

            <!-- wp:image {"id":<?php echo $post_thumbnail_id; ?>,"sizeSlug":"full","linkDestination":"none","align":"center",className:"edition-image"} -->
            <figure class="edition-image wp-block-image aligncenter size-full"><img src="<?php echo $post_thumbnail_url; ?>" alt="<?php echo $post_thumbnail_alt; ?>"/></figure>
            <!-- /wp:image -->

            <?php
            }
            ?></a>
            </p>

                <?php
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

</aside>
<!-- /wp:group -->
