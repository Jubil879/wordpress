<?php
/**
 * Title: Footer Minimal Center Menu
 * Slug: blockskit-base/footer-minimal-center-menu
 * Categories: theme
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":36} /-->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:list {"type":"1","style":{"typography":{"lineHeight":"2"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"no-list-style","fontSize":"small"} -->
<ul style="line-height:2" class="no-list-style has-small-font-size"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'About Us', 'blockskit-base' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"type":"1","style":{"typography":{"lineHeight":"2"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"no-list-style","fontSize":"small"} -->
<ul style="line-height:2" class="no-list-style has-small-font-size"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Knowledge Base', 'blockskit-base' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"type":"1","style":{"typography":{"lineHeight":"2"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"no-list-style","fontSize":"small"} -->
<ul style="line-height:2" class="no-list-style has-small-font-size"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Support', 'blockskit-base' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:list {"type":"1","style":{"typography":{"lineHeight":"2"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"no-list-style","fontSize":"small"} -->
<ul style="line-height:2" class="no-list-style has-small-font-size"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Privacy Policy', 'blockskit-base' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"heading","iconColorValue":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dheading)","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php echo sprintf( __( 'Copyright © %d ·', 'blockskit-base' ), date("Y")); ?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} /-->

<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( '· All rights reserved', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->