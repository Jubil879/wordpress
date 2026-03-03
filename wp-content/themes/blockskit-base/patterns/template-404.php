<?php
 /**
  * Title: Template 404
  * Slug: blockskit-base/template-404
  * Categories: template
  * Inserter: false
  */
$blockskit_base_images = array(
BLOCKSKIT_BASE_URL . 'assets/images/inner-banner-img1.jpg',
);
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"0"},"blockGap":"var:preset|spacing|x-large"}}} -->
<main class="wp-block-group" style="padding-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_base_images[0]); ?>","id":79,"dimRatio":80,"overlayColor":"foreground","focalPoint":{"x":0.5,"y":0},"minHeight":750,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large);min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-79" alt="" src="<?php echo esc_url($blockskit_base_images[0]); ?>" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:spacer {"height":"70px","className":"bk-hide-desktop","UAGHideMob":true,"UAGHideTab":true,"UAGResponsiveConditions":true} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer bk-hide-desktop uag-hide-tab uag-hide-mob"></div>
<!-- /wp:spacer -->

<!-- wp:query-title {"type":"archive","textAlign":"center"} /-->

<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 30vw, 15rem)","fontWeight":"400","lineHeight":"1"}},"className":"has-text-align-center"} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(4rem, 30vw, 15rem);font-weight:400;line-height:1">
<?php echo esc_html__( '404', 'blockskit-base' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'This page could not be found. Maybe try a search?', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none"}},"backgroundColor":"primary","textColor":"light"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->