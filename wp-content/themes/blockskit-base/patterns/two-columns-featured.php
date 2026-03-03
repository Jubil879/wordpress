<?php
/**
 * Title: Two Columns Featured
 * Slug: blockskit-base/two-columns-featured
 * Categories: theme
 * Keywords: two columns featured
 */
$blockskit_base_images = array(
    BLOCKSKIT_BASE_URL . 'assets/images/feature-img1.jpg',
    BLOCKSKIT_BASE_URL . 'assets/images/feature-img2.jpg',
    BLOCKSKIT_BASE_URL . 'assets/images/feature-img3.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-small"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"}}},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-columns animated animated-fadeInUp"><!-- wp:column {"width":"49%"} -->
<div class="wp-block-column" style="flex-basis:49%"><!-- wp:image {"id":91,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($blockskit_base_images[0]); ?>" alt="" class="wp-image-91" style="border-radius:6px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":1.2,"letterSpacing":"-0.02em"},"spacing":{"padding":{"bottom":"0","top":"var:preset|spacing|x-small"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:0;letter-spacing:-0.02em;line-height:1.2"><?php esc_html_e( 'Beautiful website design with modern UI / UX', 'blockskit-base' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Minim recusandae, volutpat magna, class, adipiscing, quo id consectetuer duis anim nisl vehicula in, velit quis magna venenat. Convallis mollit delectus metuc.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0","margin":{"bottom":"0"}}}} -->
<div class="wp-block-buttons animated animated-fadeInUp" style="margin-bottom:0"><!-- wp:button {"style":{"spacing":{"padding":{"top":"16px","right":"20px","bottom":"16px","left":"20px"}},"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:6px;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Read More', 'blockskit-base' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"1px","style":{"border":{"right":{"color":"var:preset|color|outline","width":"1px"},"top":{},"bottom":{"color":"var:preset|color|outline","width":"1px"},"left":{}},"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column" style="border-right-color:var(--wp--preset--color--outline);border-right-width:1px;border-bottom-color:var(--wp--preset--color--outline);border-bottom-width:1px;padding-right:0;padding-left:0;flex-basis:1px"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"49%"} -->
<div class="wp-block-column" style="flex-basis:49%"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":1.2,"letterSpacing":"-0.02em"},"spacing":{"padding":{"bottom":"0"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="padding-bottom:0;letter-spacing:-0.02em;line-height:1.2"><?php esc_html_e( 'Empowering your digital marketing strategy', 'blockskit-base' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Minim recusandae, volutpat magna, class, adipiscing, quo id consectetuer duis anim nisl vehicula in, velit quis magna venenat. Convallis mollit delectus metus.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons animated animated-fadeInUp" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:button {"style":{"spacing":{"padding":{"top":"16px","right":"20px","bottom":"16px","left":"20px"}},"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:6px;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Read More', 'blockskit-base' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:image {"id":92,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($blockskit_base_images[1]); ?>" alt="" class="wp-image-92" style="border-radius:6px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"var:preset|spacing|xx-large"},"blockGap":{"left":"var:preset|spacing|x-large"}},"border":{"radius":"5px"}},"backgroundColor":"background","className":"animated animated-fadeInUp"} -->
<div class="wp-block-columns animated animated-fadeInUp has-background-background-color has-background" style="border-radius:5px;margin-top:var(--wp--preset--spacing--xx-large);padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":129,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($blockskit_base_images[2]); ?>" alt="" class="wp-image-129" style="border-radius:6px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.2,"letterSpacing":"-0.02em"},"spacing":{"padding":{"bottom":"var:preset|spacing|xx-small"}}}} -->
<h3 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--xx-small);letter-spacing:-0.02em;line-height:1.2"><?php esc_html_e( 'Take your brand to next level design concept.', 'blockskit-base' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Minim recusandae, volutpat magna, class, adipiscing, quo id consectetuer duis anim nisl vehicula in, velit quis magna venenat. Convallis mollit delectus metus rem, morbi ac. Quaerat cupidatat minim, pellentesque.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"0","margin":{"bottom":"0"}}}} -->
<div class="wp-block-buttons animated animated-fadeInUp" style="margin-bottom:0"><!-- wp:button {"style":{"spacing":{"padding":{"top":"16px","right":"20px","bottom":"16px","left":"20px"}},"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:6px;padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Read More', 'blockskit-base' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->