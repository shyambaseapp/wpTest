<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: hotel-suite
 */

return array(
    'title'      =>__( 'Footer Default', 'hotel-suite' ),
    'categories' => array( 'hotel-suite' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}}},"backgroundColor":"black","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"20px","left":"20px"}}},"className":"alignwide"} -->
<div class="wp-block-columns alignwide" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px"}},"className":"wow bounce"} -->
<div class="wp-block-column wow bounce"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"accent"} -->
<h2 class="wp-block-heading has-accent-color has-text-color" style="font-size:22px"><strong>'. esc_html('About Us','hotel-suite') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>'. esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','hotel-suite') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}},"className":"wow bounce"} -->
<div class="wp-block-column wow bounce"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"accent"} -->
<h2 class="wp-block-heading has-accent-color has-text-color" style="font-size:22px"><strong>'. esc_html('Contact Us','hotel-suite') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><span class="dashicons dashicons-email-alt"></span>  '. esc_html('support@example.com','hotel-suite') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-phone"></span>  +123 456 7890</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-admin-home"></span>  '. esc_html('123, Red Hills, Chicago,IL, USA','hotel-suite') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}},"className":"wow bounce"} -->
<div class="wp-block-column wow bounce"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"accent"} -->
<h2 class="wp-block-heading has-accent-color has-text-color" style="font-size:22px"><strong>'. esc_html('Recent Post','hotel-suite') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostContent":true,"excerptLength":10,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-background-color has-background"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium"} -->
<p class="has-text-align-center has-background-color has-text-color has-link-color has-medium-font-size">'. esc_html('WP Radiant | Proudly Powered By ','hotel-suite') .' <a href="https://wordpress.org/">'. esc_html('WordPress','hotel-suite') .'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);