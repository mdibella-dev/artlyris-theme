<?php
/**
 * Title: Footer Navigation
 * Slug: artlyris-theme/footer-navigation
 * Categories: footer, artlyris-patterns
 */
?>

<!-- wp:group {"className":"site-component-footer-navigation","tagName":"nav"} -->
<nav class="wp-block-group site-component-footer-navigation">

    <!-- wp:list {"className":"site-component-footer-navigation__items"} -->
    <ul class="site-component-footer-navigation__items">

        <!-- wp:list-item {"className":"site-component-footer-navigation__item"} -->
        <li class="site-component-footer-navigation__item">
            <a class="site-component-footer-navigation__link" href="/home/"><?php echo __( 'Home', 'artlyris' ); ?></a>
        </li>

        <!-- wp:list-item {"className":"site-component-footer-navigation__item"} -->
        <li class="site-component-footer-navigation__item">
            <a class="site-component-footer-navigation__link" href="/impressum/"><?php echo __( 'Imprint', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

        <!-- wp:list-item {"className":"site-component-footer-navigation__item"} -->
        <li class="site-component-footer-navigation__item">
            <a class="site-component-footer-navigation__link" href="/datenschutz/"><?php echo __( 'Privacy Policy', 'artlyris' ); ?></a>
        </li>
        <!-- /wp:list-item -->

    </ul>
    <!-- /wp:list -->

</nav>
<!-- /wp:group -->
