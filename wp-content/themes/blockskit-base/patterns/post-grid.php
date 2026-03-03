<?php
/**
 * Title: Post Grid
 * Slug: blockskit-base/post-grid
 * Categories: theme
 * Keywords: post grid
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--xx-large);margin-bottom:var(--wp--preset--spacing--x-large);padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":1.1,"letterSpacing":"-0.03em"}},"className":"animated animated-fadeInUp"} -->
<h2 class="wp-block-heading has-text-align-center animated animated-fadeInUp" style="letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Latest from the blog', 'blockskit-base' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xx-small"}}},"className":"animated animated-fadeInUp"} -->
<p class="has-text-align-center animated animated-fadeInUp" style="padding-bottom:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Elementum quia fugit cum euismod, varius hymenaeos.', 'blockskit-base' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":42,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-query animated animated-fadeInUp"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|medium","right":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"250px","scale":"contain","style":{"border":{"radius":"6px"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":5,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-small"}},"typography":{"letterSpacing":"-0.03em","lineHeight":"1.2"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-author {"textAlign":"left","avatarSize":24,"showAvatar":false,"style":{"color":{"text":"#656565"}},"fontSize":"x-small"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","style":{"color":{"text":"#656565"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->