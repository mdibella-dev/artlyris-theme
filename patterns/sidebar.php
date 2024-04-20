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

    <?php
    if ( has_tag() ) {
    ?>
    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} /-->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span><?php echo __( 'Tags', 'artlyris' ); ?></span></h6>

        <!-- wp:post-terms {"term":"post_tag"} /-->

    </div>
    <!-- /wp:group -->
    <?php
    }
    ?>

    <?php
    if ( has_term( '', 'edition') ) {

        global $post;
        $pages = [];
        $x;

        $terms = get_the_terms( $post, 'edition' );

        if ( is_array( $terms ) ) {
            $x = $terms[0]->term_id;
            $pages = get_posts( [
                'post_type'   => 'page',
                'numberposts' => 1,
                'tax_query'   => [
                    [
                        'taxonomy'         => 'edition',
                        'field'            => 'term_id',
                        'terms'            => $terms[0]->term_id,
                        'include_children' => false
                    ]
                ]
            ] );
        }

        if( ! empty( $pages ) ) {
    ?>
    <!-- wp:group {"className":"site-component-sidebar-tool"} -->
    <div class="wp-block-group site-component-sidebar-tool">

        <!-- wp:heading {"level":6,"className":"is-style-sidebar-tool"} /-->
        <h6 class="wp-block-heading is-style-sidebar-tool"><span><?php echo __( 'Editions', 'artlyris' ); ?></span></h6>

        <p><a href="<?php echo get_permalink( $pages[0] ); ?>"><?php echo __( 'Part of this edition', 'artlyris' ); ?></a></p>

    </div>
    <!-- /wp:group -->
    <?php
        }
    }
    ?>

</aside>
<!-- /wp:group -->
