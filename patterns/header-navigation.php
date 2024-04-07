<?php
/**
 * Title: Header Navigation
 * Slug: artlyris-theme/header-navigation
 * Categories: header, navigation
 */
?>

<!-- wp:group {"className":"site-component-header-navigation","tagName":"nav"} -->
<nav class="wp-block-group site-component-header-navigation">

    <!-- wp:list {"className":"site-component-header-navigation-item-wrapper"} -->
    <ul class="site-component-header-navigation-item-wrapper">

        <!-- wp:list-item {"className":"site-component-header-navigation-item"} -->
        <li class="site-component-header-navigation-item">
            <a class="site-component-header-navigation-item__content" href="/home/"><?php echo __( 'Home', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-header-navigation-item"} -->
        <li class="site-component-header-navigation-item">
            <a class="site-component-header-navigation-item__content" href="#"><?php echo __( 'Authors', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-header-navigation-item"} -->
        <li class="site-component-header-navigation-item">
            <a class="site-component-header-navigation-item__content" href="#"><?php echo __( 'Works', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-header-navigation-item"} -->
        <li class="site-component-header-navigation-item">
            <a class="site-component-header-navigation-item__content" href="#"><?php echo __( 'Editions', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

    </ul>
    <!-- /wp:list -->

</nav>
<!-- /wp:group -->
