<?php
/**
 * Title: Testimonial
 * Slug: blockskit-base/testimonial
 * Categories: theme
 * Keywords: testimonial
 */
$blockskit_base_images = array(
    BLOCKSKIT_BASE_URL . 'assets/images/review-quotes-icon.svg',
    BLOCKSKIT_BASE_URL . 'assets/images/review-img1.jpg',
    BLOCKSKIT_BASE_URL . 'assets/images/review-img2.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"100%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:100%"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|x-small"}}},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-columns animated animated-fadeInUp" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":1.1}},"className":"animated animated-fadeInUp"} -->
<h2 class="wp-block-heading has-text-align-left animated animated-fadeInUp" style="letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Hear from our happy clients', 'blockskit-base' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"className":"animated animated-fadeInUp"} -->
<p class="has-text-align-left animated animated-fadeInUp" style="padding-bottom:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Elementum quia fugit cum euismod, varius hymenaeos.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"27%","className":"bk-hide-tab  bk-hide-mob"} -->
<div class="wp-block-column bk-hide-tab bk-hide-mob" style="flex-basis:27%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"13%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13%"><!-- wp:buttons {"className":"animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons animated animated-fadeInUp"><!-- wp:button {"style":{"spacing":{"padding":{"top":"16px","right":"20px","bottom":"16px","left":"20px"}},"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:6px;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'More Review', 'blockskit-base' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"left":"var:preset|spacing|large"}}},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-columns are-vertically-aligned-top animated animated-fadeInUp" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"60%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"background"} -->
<div class="wp-block-columns has-background-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:column {"style":{"spacing":{"blockGap":"2px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":294,"width":"50px","height":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($blockskit_base_images[0]); ?>" alt="" class="wp-image-294" style="width:50px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small"}}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( '"Architecto autem facilis conse quuntur rerum nemo! Torquent non, nostrum quis vestibulum magnis? Quos praesentium netus. Gravida, eros, ridiculus dolor purus eveniet magnam vero."', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":136,"width":"75px","height":"75px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url($blockskit_base_images[1]); ?>" alt="" class="wp-image-136" style="width:75px;height:75px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"2px","left":"0"}}}} -->
<h5 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--x-small);margin-right:0;margin-bottom:2px;margin-left:0"><?php esc_html_e( 'Steve Sampson', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'SENIOR DESIGNER', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"40%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"background"} -->
<div class="wp-block-columns has-background-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:column {"style":{"spacing":{"blockGap":"2px"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":294,"width":"50px","height":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($blockskit_base_images[0]); ?>" alt="" class="wp-image-294" style="width:50px;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small"}}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( '"Architecto autem facilis conse quuntur rerum nemo! Torquent non, nostrum quis vestibulum impedit tempor."', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":137,"width":"75px","height":"75px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url($blockskit_base_images[2]); ?>" alt="" class="wp-image-137" style="width:75px;height:75px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","right":"0","bottom":"2px","left":"0"}}}} -->
<h5 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--x-small);margin-right:0;margin-bottom:2px;margin-left:0"><?php esc_html_e( 'Miley Johenson', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'SENIOR ADVISOR', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->