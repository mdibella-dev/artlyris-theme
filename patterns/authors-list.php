<?php
/**
 * Title: List of authors
 * Slug: artlyris-theme/authors-list
 * Categories: query
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"className":"authors-list"} -->
<div class="wp-block-group alignfull authors-list">

    <?php
    $args = [
        'fields'              => 'ID',
        'has_published_posts' => ['post'],
        'orderby'             => [
            'last_name_clause'  => 'ASC',
            'first_name_clause' => 'ASC',
        ],
        'meta_query'          => [
            'relation'          => 'AND',
            'first_name_clause' => [
                'key'     => 'first_name',
                'compare' => 'EXISTS'
            ],
            'last_name_clause'  => [
                'key'     => 'last_name',
                'compare' => 'EXISTS'
            ]
        ]
    ];

    $authors = get_users( $args );

    foreach ( $authors as $author ) {

        $info = get_userdata( $author );

    ?>

    <!-- wp:group {"width":"100%","className":"authors-list-item"} -->
    <div class="wp-block-group authors-list-item" style="width:100%">

        <!-- wp:columns -->
        <div class="wp-block-columns">

            <!-- wp:column {"width":"96px"} -->
            <div class="wp-block-column" style="flex-basis:96px">

                <!-- wp:avatar {"userId":<?php echo $author; ?>} /-->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">

                <!-- wp:group {"className":"authors-list-item__name"} -->
                <div class="wp-block-group authors-list-item__name"><?php

                echo sprintf(
                    '<a href="%1$s" target="_self">%2$s</a>',
                    get_author_posts_url( $author ),
                    sprintf(
                        '%1$s, %2$s',
                        $info->last_name,
                        $info->first_name
                    )
                );

                ?></div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">

                <!-- wp:group {"className":"authors-list-item__cats"} -->
                <div class="wp-block-group authors-list-item__cats"><?php

                $args = [
                    'taxonomy' => 'category',
                    'orderby'  => 'name',
                    'order'    => 'ASC'
                ];

                $categories  = get_categories( $args );
                $author_cats = [];

                foreach ( $categories as $category ) {

                    $args = [
                        'post_type'   => ['post'],
                        'post_status' => ['publish'],
                        'numberposts' => -1,
                        'author'      => $author,
                        'category'    => $category->term_id
                    ];

                    if ( ! empty( get_posts( $args ) ) ) {
                        $author_cats[] = sprintf(
                            '<a href="%1$s" rel="tag">%2$s</a>',
                            get_category_link( $category->term_id ),
                            $category->name
                        );
                    }

                }

                echo implode( ", ", $author_cats );

                ?></div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

    <?php
    }
    ?>

</div>
<!-- /wp:group -->
