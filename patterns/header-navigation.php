<?php
/**
 * Title: Header Navigation
 * Slug: artlyris-theme/header-navigation
 * Categories: header, artlyris-patterns
 */
?>

<!-- wp:group {"className":"site-component-header-navigation","tagName":"nav"} -->
<nav class="wp-block-group site-component-header-navigation">

    <!-- wp:list {"className":"site-component-header-navigation__desktop"} -->
    <ul class="site-component-header-navigation__desktop">

        <!-- wp:list-item {"className":"site-component-header-navigation__desktop-item"} -->
        <li class="site-component-header-navigation__desktop-item">
            <a class="site-component-header-navigation__desktop-link" href="/home/"><?php echo __( 'Home', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-header-navigation__desktop-item"} -->
        <li class="site-component-header-navigation__desktop-item">
            <a class="site-component-header-navigation__desktop-link" href="/autoren/"><?php echo __( 'Authors', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-header-navigation__desktop-item"} -->
        <li class="site-component-header-navigation__desktop-item">
            <a class="site-component-header-navigation__desktop-link" href="#"><?php echo __( 'Works', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-header-navigation__desktop-item"} -->
        <li class="site-component-header-navigation__desktop-item">
            <a class="site-component-header-navigation__desktop-link" href="#"><?php echo __( 'Editions', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

    </ul>
    <!-- /wp:list -->

    <!-- wp:group {"className":"site-component-header-navigation__mobile"} -->
    <div class="wp-block-group site-component-header-navigation__mobile">

        <!-- wp:html -->
        <a href="/home/" class="site-component-header-navigation__mobile-link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="display:block;width:24px;">
                <path id="svg-hamburger" fill="currentColor" d="M0 80c0-8.8 7.2-16 16-16H432c8.8 0 16 7.2 16 16s-7.2 16-16 16H16C7.2 96 0 88.8 0 80zM0 240c0-8.8 7.2-16 16-16H432c8.8 0 16 7.2 16 16s-7.2 16-16 16H16c-8.8 0-16-7.2-16-16zM448 400c0 8.8-7.2 16-16 16H16c-8.8 0-16-7.2-16-16s7.2-16 16-16H432c8.8 0 16 7.2 16 16z"/>
            </svg>
        </a>
        <!-- /wp:html -->

    </div>
    <!-- /wp:group -->

</nav>
<!-- /wp:group -->
