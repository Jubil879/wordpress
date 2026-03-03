<?php
/**
 * Title: Header Top Info
 * Slug: blockskit-base/header-top-info
 * Categories: theme
 */
$blockskit_base_images = array(
BLOCKSKIT_BASE_URL . 'assets/images/info-img1.png',
BLOCKSKIT_BASE_URL . 'assets/images/info-img2.png',
BLOCKSKIT_BASE_URL . 'assets/images/info-img3.png',
);
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"bottom":{"color":"#dedede33","width":"1px"},"top":{},"right":{},"left":{}},"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"},"blockGap":{"top":"var:preset|spacing|xx-small"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="border-bottom-color:#dedede33;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:column {"verticalAlignment":"center","width":"46%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:46%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-accent-text-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><img class="wp-image-42" style="width: 15px;" src="<?php echo esc_url($blockskit_base_images[0]); ?>" alt=""> <?php esc_html_e( '+1987 123456', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-accent-text-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><img class="wp-image-41" style="width: 16px;" src="<?php echo esc_url($blockskit_base_images[1]); ?>" alt=""> <?php esc_html_e( 'info@domain.com', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontSize":"x-small"} -->
<p class="has-accent-text-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><img class="wp-image-42" style="width: 15px;" src="<?php echo esc_url($blockskit_base_images[2]); ?>" alt=""> <?php esc_html_e( 'Rock Street, San Francisco', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:social-links {"iconColor":"accent-text","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->