<?php
/**
 * About Us Section
 * 
 * slug: about-us
 * title: About Us Section
 * categories: hotel-suite
 */

return array(
    'title'      =>__( 'About Us Section', 'hotel-suite' ),
    'categories' => array( 'hotel-suite' ),
    'content'    => '<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"className":"services-box wow fadeInUp","layout":{"type":"constrained","contentSize":"70%","justifyContent":"center"}} -->
<div class="wp-block-group services-box wow fadeInUp"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"id":8,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-img.png" alt="" class="wp-image-8"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":4,"textColor":"accent"} -->
<h4 class="wp-block-heading has-accent-color has-text-color">'. esc_html('About Us','hotel-suite') .'</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"31px"}},"className":"managerclass"} -->
<h3 class="wp-block-heading managerclass" style="font-size:31px">'. esc_html('I am A Business Strategist Turned Soulful Entrepreneur And Coach.','hotel-suite') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":2.2}},"className":"managerclass","fontSize":"small"} -->
<p class="managerclass has-small-font-size" style="line-height:2.2">'. esc_html('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','hotel-suite') .'</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"align":"center","id":13,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-profile.png" alt="" class="wp-image-13"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-about-boxs"} -->
<div class="wp-block-column is-about-boxs"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"upper-heading"} -->
<h2 class="wp-block-heading has-upper-heading-font-size" style="font-style:normal;font-weight:600">'. esc_html('Victor Smith','hotel-suite') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#a7a7a7"}},"className":"managerclass","fontSize":"small"} -->
<p class="managerclass has-text-color has-small-font-size" style="color:#a7a7a7">'. esc_html('GENERAL MANAGER','hotel-suite') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"is-about-box"} -->
<div class="wp-block-column is-vertically-aligned-center is-about-box"><!-- wp:image {"align":"left","id":15,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignleft size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/about-sign.png" alt="" class="wp-image-15"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);