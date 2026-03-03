<?php
/**
 * Title: Hero Banner
 * Slug: blockskit-base/hero-banner
 * Categories: theme
 * Keywords: hero banner
 */
$blockskit_base_images = array(
    BLOCKSKIT_BASE_URL . 'assets/images/banner-img1.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url($blockskit_base_images[0]); ?>","id":162,"dimRatio":80,"overlayColor":"foreground","minHeight":740,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|x-small","bottom":"0","left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:0;padding-left:var(--wp--preset--spacing--x-small);min-height:740px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-162" alt="" src="<?php echo esc_url($blockskit_base_images[0]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"animated animated-fadeInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group animated animated-fadeInUp"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--large);flex-basis:70%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":1.1},"spacing":{"padding":{"right":"0","bottom":"var:preset|spacing|xx-small","top":"0"}}},"fontSize":"xxxx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xxxx-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--xx-small);letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Create&nbsp;workspace&nbsp;&amp; make life easier', 'blockskit-base' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"textColor":"accent-text"} -->
<p class="has-text-align-center has-accent-text-color has-text-color" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Dignis esse fugit, natus pharetra, tempus metus soluta. Perferendis, laboriosam purusin, autem, iaculis, officiis hac saepe bibendum.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:6px;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Discover More', 'blockskit-base' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"6px"}},"borderColor":"accent-text","className":"is-style-bk-button-secondary"} -->
<div class="wp-block-button is-style-bk-button-secondary"><a class="wp-block-button__link has-border-color has-accent-text-border-color wp-element-button" href="#" style="border-radius:6px"><?php esc_html_e( 'Get Started', 'blockskit-base' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->