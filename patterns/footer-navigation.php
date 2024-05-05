<?php
/**
 * Title: Footer Navigation
 * Slug: artlyris-theme/footer-navigation
 * Categories: footer, navigation
 */
?>

<!-- wp:group {"className":"site-component-footer-navigation","tagName":"nav"} -->
<nav class="wp-block-group site-component-footer-navigation">

    <!-- wp:list {"className":"site-component-footer-navigation-item-wrapper"} -->
    <ul class="site-component-footer-navigation-item-wrapper">

        <!-- wp:list-item {"className":"site-component-footer-navigation-item"} -->
        <li class="site-component-footer-navigation-item">
            <a class="site-component-footer-navigation-item__content" href="/home/"><?php echo __( 'Home', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-footer-navigation-item"} -->
        <li class="site-component-footer-navigation-item">
            <a class="site-component-footer-navigation-item__content" href="/ueber-uns/"><?php echo __( 'About', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-footer-navigation-item"} -->
        <li class="site-component-footer-navigation-item">
            <a class="site-component-footer-navigation-item__content" href="/impressum/"><?php echo __( 'Imprint', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-footer-navigation-item"} -->
        <li class="site-component-footer-navigation-item">
            <a class="site-component-footer-navigation-item__content" href="/datenschutz/"><?php echo __( 'Privacy Policy', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

    </ul>
    <!-- /wp:list -->

</nav>
<!-- /wp:group -->
