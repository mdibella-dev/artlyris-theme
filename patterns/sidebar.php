<?php
/**
 * Title: Sidebar
 * Slug: artlyris-theme/sidebar
 * Categories: sidebar, artlyris-patterns
 */
?>

<!-- wp:group {"className":"site-component-sidebar","tagName":"aside"} -->
<aside class="wp-block-group site-component-sidebar">

    <?php
    if ( has_category() ) {
        global $post;
            $cats    = wp_get_post_categories( $post->ID, ['fields' => 'all'] );
            $cat_str = '';

            foreach( $cats as $cat ) {

               $cat_link = get_term_link( $cat );

               if ( is_wp_error( $cat_link ) ) {
                   continue;
               }

               $cat_str = sprintf(
                   '<a href="%1$s">%2$s</a>',
                   esc_url( $cat_link ),
                   $cat->name
               );

               if ( ! empty( $cat_str ) ) {
                   break;
               }
            }

            $author_str = sprintf(
               '<a href="%1$s">%2$s</a>',
               esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
               get_the_author_meta( 'display_name' )
            );

    ?>
    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} -->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span class="label"><?php echo __( 'Info', 'artlyris' ); ?></span><span class="line"></span></h6>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php
        echo sprintf(
           __( 'Written by %2$s and published in %3$s, filed under %1$s.', 'artlyris' ),
           $cat_str,
           $author_str,
           wp_date( 'F Y', get_post_timestamp( $post->ID, 'date' ) )
        );
        ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <?php
    }
    ?>

    <?php
    if ( has_tag() ) {
    ?>
    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} -->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span class="label"><?php echo __( 'Tags', 'artlyris' ); ?></span><span class="line"></span></h6>
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
        <h6 class="wp-block-heading is-style-sidebar-tool"><span class="label"><?php echo __( 'Editions', 'artlyris' ); ?></span><span class="line"></span></h6>
        <!-- /wp:heading -->

        <!-- wp:group -->
        <div class="wp-block-group">

                <?php
                foreach ( $editions as $edition ) {
                ?>

            <!-- wp:paragraph -->
            <p>
                <a href="<?php echo get_permalink( $edition ); ?>"><?php

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
            <!-- /wp:paragraph -->

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


    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} -->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span class="label"><?php echo __( 'Categories', 'artlyris' ); ?></span><span class="line"></span></h6>
        <!-- /wp:heading -->

        <!-- wp:categories /-->

    </div>
    <!-- /wp:group -->

</aside>
<!-- /wp:group -->
