<?php
/**
 * Title: Three Columns Featured
 * Slug: blockskit-base/three-columns-featured
 * Categories: theme
 * Keywords: three columns featured
 */
$blockskit_base_images = array(
    BLOCKSKIT_BASE_URL . 'assets/images/featured-icon1.svg',
    BLOCKSKIT_BASE_URL . 'assets/images/featured-icon2.svg',
    BLOCKSKIT_BASE_URL . 'assets/images/featured-icon3.svg',
    BLOCKSKIT_BASE_URL . 'assets/images/featured-icon4.svg',
    BLOCKSKIT_BASE_URL . 'assets/images/featured-icon5.svg',
    BLOCKSKIT_BASE_URL . 'assets/images/featured-icon6.svg',
);
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-columns animated animated-fadeInUp"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","id":323,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_base_images[0]); ?>" alt="" class="wp-image-323" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":1.1}}} -->
<h5 class="wp-block-heading has-text-align-center" style="letter-spacing:-0.04em;line-height:1.1"><?php esc_html_e( 'User friendly', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Irure dolorum aute quod musin cura wisi. Ipsum sec quam potenti earum beatae inventore ab, cumque.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_base_images[1]); ?>" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":1.1}}} -->
<h5 class="wp-block-heading has-text-align-center" style="letter-spacing:-0.04em;line-height:1.1"><?php esc_html_e( 'Collaboration &amp; support', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Irure dolorum aute quod musin cura wisi. Ipsum sec quam potenti earum beatae inventore ab, cumque.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","id":320,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_base_images[2]); ?>" alt="" class="wp-image-320" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":1.1}}} -->
<h5 class="wp-block-heading has-text-align-center" style="letter-spacing:-0.04em;line-height:1.1"><?php esc_html_e( 'Project management', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Irure dolorum aute quod musin cura wisi. Ipsum sec quam potenti earum beatae inventore ab, cumque.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-columns animated animated-fadeInUp"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","id":323,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_base_images[3]); ?>" alt="" class="wp-image-323" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":1.1}}} -->
<h5 class="wp-block-heading has-text-align-center" style="letter-spacing:-0.04em;line-height:1.1"><?php esc_html_e( 'Digital strategy', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Dui vitae animi per dis reiciendis. Ab gestas commodo ipsam busipum elementum, impedit int.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","id":325,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($blockskit_base_images[4]); ?>" alt="" class="wp-image-325" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":1.1}}} -->
<h5 class="wp-block-heading has-text-align-center" style="letter-spacing:-0.04em;line-height:1.1"><?php esc_html_e( 'Reasonable services', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Dui vitae animi per dis reiciendis. Ab gestas commodo ipsam busipum elementum, impedit int.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"className":"is-style-bk-box-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bk-box-shadow" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","id":322,"width":"45px","height":"45px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($blockskit_base_images[5]); ?>" alt="" class="wp-image-322" style="object-fit:cover;width:45px;height:45px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":1.1}}} -->
<h5 class="wp-block-heading has-text-align-center" style="letter-spacing:-0.04em;line-height:1.1"><?php esc_html_e( 'Globalization method', 'blockskit-base' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Dui vitae animi per dis reiciendis. Ab gestas commodo ipsam busipum elementum, impedit int.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->