<?php
/**
 * Title: Template Order Confirmation
 * Slug: blockskit-base/template-order-confirmation
 * Categories: template
 * Inserter: false
 */
$blockskit_base_images = array(
	BLOCKSKIT_BASE_URL . 'assets/images/inner-banner-img1.jpg',
);
?>

<!-- wp:group {"tagName":"main","layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_base_images[0]); ?>","id":345,"dimRatio":80,"overlayColor":"foreground","focalPoint":{"x":0.5,"y":0},"minHeight":600,"contentPosition":"bottom center","align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"},"padding":{"top":"0","bottom":"150px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="margin-bottom:var(--wp--preset--spacing--xx-large);padding-top:0;padding-bottom:150px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-345" alt="" src="<?php echo esc_url($blockskit_base_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","level":1} /-->

<!-- wp:spacer {"height":"50px","className":"bk-hide-tab bk-hide-mob","UAGHideMob":true,"UAGHideTab":true,"UAGResponsiveConditions":true} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer bk-hide-tab bk-hide-mob uag-hide-tab uag-hide-mob"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

<!-- wp:woocommerce/legacy-template {"template":"order-confirmation"} /--></main>
<!-- /wp:group -->