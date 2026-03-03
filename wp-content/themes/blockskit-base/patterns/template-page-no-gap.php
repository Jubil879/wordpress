<?php
/**
 * Title: Template Page No Gap
 * Slug: blockskit-base/template-page-no-gap
 * Categories: template
 * Inserter: false
 */
$blockskit_base_images = array(
	BLOCKSKIT_BASE_URL . 'assets/images/inner-banner-img1.jpg',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url($blockskit_base_images[0]); ?>","id":79,"dimRatio":80,"overlayColor":"foreground","focalPoint":{"x":0.5,"y":0},"minHeight":600,"contentPosition":"bottom center","align":"full","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"top":"0","bottom":"150px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center" style="margin-bottom:0;padding-top:0;padding-bottom:150px;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-79" alt="" src="<?php echo esc_url($blockskit_base_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"is-not-stacked-on-mobile"} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"18%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column bk-hide-tab bk-hide-mob" style="flex-basis:18%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.666%"} -->
<div class="wp-block-column" style="flex-basis:66.666%"><!-- wp:post-title {"textAlign":"center","level":1,"textColor":"accent-text"} /-->

<!-- wp:spacer {"height":"50px","className":"bk-hide-tab bk-hide-mob","UAGHideMob":true,"UAGHideTab":true,"UAGResponsiveConditions":true} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer bk-hide-tab bk-hide-mob uag-hide-tab uag-hide-mob"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"18%","className":"bk-hide-tab bk-hide-mob"} -->
<div class="wp-block-column bk-hide-tab bk-hide-mob" style="flex-basis:18%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;padding-top:0;padding-bottom:0"><!-- wp:post-featured-image /-->

<!-- wp:post-content {"layout":{"type":"default"}} /--></main>
<!-- /wp:group -->