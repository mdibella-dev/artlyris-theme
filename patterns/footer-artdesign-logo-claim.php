<?php
/**
 * Title: ARTdesign Logo & Claim
 * Slug: artlyris-theme/footer-artdesign-logo-claim
 * Categories: footer
 */
?>


<!-- wp:group {"className":"site-component-footer-artdesign","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
<div class="wp-block-group site-component-footer-artdesign">

    <!-- wp:paragraph -->
    <p><?php echo __( 'A project by', 'artlyris' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:html -->
    <a href="https://www.artdesign-dibella.de/" target="_blank" rel="noopener" class="site-component-footer-logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 321 371.2">
            <defs>
                <style>
                  .cls-1 {
                    filter: url(#drop-shadow-1);
                  }

                  .cls-2 {
                    fill: url(#New_Gradient_Swatch_2);
                  }

                  .cls-2, .cls-3, .cls-4 {
                    fill-rule: evenodd;
                    stroke-width: 0px;
                  }

                  .cls-3 {
                    fill: url(#New_Gradient_Swatch_1);
                  }

                  .cls-4 {
                    fill: url(#New_Gradient_Swatch_1-2);
                  }
                </style>
                <filter id="drop-shadow-1" filterUnits="userSpaceOnUse">
                    <feOffset dx="5" dy="5"/>
                    <feGaussianBlur result="blur" stdDeviation="3"/>
                    <feFlood flood-color="#000" flood-opacity=".1"/>
                    <feComposite in2="blur" operator="in"/>
                    <feComposite in="SourceGraphic"/>
                </filter>
                <linearGradient id="New_Gradient_Swatch_2" data-name="New Gradient Swatch 2" x1="315.2" y1="361.4" x2="175.2" y2="191.4" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#fff"/>
                    <stop offset=".5" stop-color="#fdb913"/>
                    <stop offset="1" stop-color="#000"/>
                </linearGradient>
                <linearGradient id="New_Gradient_Swatch_1" data-name="New Gradient Swatch 1" x1="0" y1="275" x2="167.4" y2="275" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#fff"/>
                    <stop offset=".5" stop-color="#00aaad"/>
                    <stop offset="1" stop-color="#000"/>
                </linearGradient>
                <linearGradient id="New_Gradient_Swatch_1-2" data-name="New Gradient Swatch 1" x1="31.6" y1="95.7" x2="168.2" y2="95.7" xlink:href="#New_Gradient_Swatch_1"/>
            </defs>
            <g class="cls-1">
                <path class="cls-2" d="M285.1,295.1c3.7-3,6.7-4.9,12.9-5.9-33.2-4.5-64.5-7.9-85-26-20.8-18.4-23.6-47.6-41.3-69-1.1-1.2-5.3-4.4-2.5,2.5,19.8,49.1,42.1,93.3,72.8,126.5,17,18.4,45.6,41,79,48-17.1-22.2-63.3-53.7-35.9-76.1Z"/>
                <path class="cls-3" d="M73.3,316.3c3.3,3.5,5.4,6.3,6.8,12.4,2-33.4,3.2-64.9,19.8-86.7,16.8-22.1,45.8-26.9,65.8-46.2,1.2-1.2,4-5.6-2.6-2.3-47.5,23.3-90,48.7-120.9,81.8-17.1,18.3-37.6,48.5-42.2,82.3,20.9-18.7,49-67,73.3-41.3Z"/>
                <path class="cls-4" d="M60.7,78.9c-3.9,2.7-7.1,4.3-13.3,4.8,32.7,7.3,63.5,13.5,82.4,33.3,19.1,20.1,19.3,49.5,35.1,72.4,1,1.3,4.9,4.9,2.7-2.2-15.4-50.6-33.8-96.7-61.4-132.4C90.8,34.9,64.2,9.9,31.6,0c15.1,23.6,58.3,59.1,29.1,78.9Z"/>
            </g>
        </svg>
    </a>
    <!-- /wp:html -->

</div>
<!-- /wp:group -->
