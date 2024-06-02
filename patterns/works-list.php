<?php
/**
 * Title: List of Works
 * Slug: artlyris-theme/works-list
 * Categories: query
 */
?>

<!-- wp:group {"className":"works-list"} -->
<div class="wp-block-group works-list">

    <?php
    global $wpdb;
           $alphabet = [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' ];


    foreach ( $alphabet as $letter ) {

        $postids = $wpdb->get_col( $wpdb->prepare( "
            SELECT      ID
            FROM        $wpdb->posts
            WHERE       SUBSTR($wpdb->posts.post_title,1,1) = %s
            ORDER BY    $wpdb->posts.post_title", $letter
        ) );

        if ( $postids ) {

            $args = [
                'post__in'       => $postids,
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'order'          => 'ASC',
                'orderby'        => 'title'
            ];

            $my_query = null;
            $my_query = new WP_Query( $args );

            if ( $my_query->have_posts() ) {
                ?>

    <!-- wp:group {"className":"works-list__letter-block"} -->
    <div class="wp-block-group works-list__letter-block">

        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading"><?php echo $letter; ?></h2>
        <!-- /wp:heading -->

                <?php
                while ( $my_query->have_posts() ) {
                     $my_query->the_post(); ?>

        <!-- wp:paragraph -->
        <p class="works-list__item"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo __( 'Read this work', 'artlyris' ) ?>"><?php the_title(); ?></a></p>
        <!-- /wp:paragraph -->

                <?php
                }
                ?>

    </div>
    <!-- /wp:group -->

            <?php
            }
            wp_reset_query();
        }
    }
    ?>

</div>
<!-- /wp:group -->
