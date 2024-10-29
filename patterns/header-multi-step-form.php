<?php
/**
 * Title: header-multi-step-form
 * Slug: dev-assessment/header-multi-step-form
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header Group"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Top Bar"},"align":"full","style":{"spacing":{"padding":{"bottom":"12px","top":"12px","left":"120px","right":"120px"}}},"backgroundColor":"custom-lp-colors-main-greens-secondary","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull has-custom-lp-colors-main-greens-secondary-background-color has-background" style="padding-top:12px;padding-right:120px;padding-bottom:12px;padding-left:120px"><!-- wp:group {"metadata":{"name":"Top Bar - Left"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"12px"}},"textColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-white-color has-text-color has-link-color"><!-- wp:paragraph {"metadata":{"name":"Call"},"style":{"typography":{"fontSize":"12px"}},"fontFamily":"jost"} -->
<p class="has-jost-font-family" style="font-size:12px"><?php esc_html_e('Free consultations for the month of October!', 'dev-assessment');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Action"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sI Want this Deal!%2$s', 'dev-assessment' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Top Bar - Right"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"60px"}},"textColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-white-color has-text-color has-link-color"><!-- wp:group {"metadata":{"name":"Address"},"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"name":"Pin Icon"}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/map-pin-wonderland-1.png" alt="<?php esc_attr_e('Plano, TX', 'dev-assessment');?>" class="" style="object-fit:cover;width:30px;height:30px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"metadata":{"name":"Local"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700"><?php esc_html_e('Plano, TX', 'dev-assessment');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Phone"},"style":{"border":{"radius":"12px"},"spacing":{"blockGap":"0px","padding":{"left":"6px"}}},"backgroundColor":"custom-lp-colors-secondary-yellows-primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-custom-lp-colors-secondary-yellows-primary-background-color has-background" style="border-radius:12px;padding-left:6px"><!-- wp:image {"width":"30px","height":"30px","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"name":"Phone Icon"}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/phone-topbar-wonderland.png" alt="" class="" style="object-fit:cover;width:30px;height:30px"/></figure>
<!-- /wp:image -->

<!-- wp:buttons {"metadata":{"name":"Phone Number"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-lp-colors-secondary-yellows-primary","textColor":"custom-lp-colors-main-greens-tertiary","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-lp-colors-main-greens-tertiary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"},"border":{"radius":"12px"},"spacing":{"padding":{"left":"12px","right":"12px"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-custom-lp-colors-main-greens-tertiary-color has-custom-lp-colors-secondary-yellows-primary-background-color has-text-color has-background has-link-color wp-element-button" href="tel:50800000000" style="border-radius:12px;padding-right:12px;padding-left:12px"><?php esc_html_e('(508) 0000-0000', 'dev-assessment');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Header Menu"},"align":"full","style":{"spacing":{"padding":{"bottom":"28px","top":"28px","left":"120px","right":"120px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:28px;padding-right:120px;padding-bottom:28px;padding-left:120px"><!-- wp:group {"metadata":{"name":"Header Menu - Left"},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":273,"shouldSyncIcon":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Header Menu - Right"},"style":{"spacing":{"blockGap":"44px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"custom-lp-colors-text-body","className":"header-right-menu","style":{"spacing":{"margin":{"top":"0"},"blockGap":"36px"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-lp-colors-main-greens-primary","textColor":"white","style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:700"><a class="wp-block-button__link has-white-color has-custom-lp-colors-main-greens-primary-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:12px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('I Want a Quote', 'dev-assessment');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->