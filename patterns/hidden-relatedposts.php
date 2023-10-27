<?php
/**
 * Title: Related Posts
 * Slug: moog/hidden-relatedposts
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|default","right":"var:preset|spacing|9","bottom":"var:preset|spacing|14","left":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--default);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--14);padding-left:var(--wp--preset--spacing--9)"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","className":"gap-l"} -->
<div class="wp-block-query alignwide gap-l"><!-- wp:group {"textColor":"font-tertiary"} -->
<div class="wp-block-group has-font-tertiary-color has-text-color"><!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|7"}},"typography":{"letterSpacing":"-1.5px"}},"textColor":"font-primary","className":"pb__1","fontSize":"text-xl"} -->
<h2 class="wp-block-heading pb__1 has-font-primary-color has-text-color has-text-xl-font-size" style="padding-bottom:var(--wp--preset--spacing--7);letter-spacing:-1.5px">Up next</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|default","bottom":"var:preset|spacing|9"}}},"backgroundColor":"border-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--9)"/>
<!-- /wp:separator -->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|9"}},"textColor":"font-secondary","layout":{"type":"grid","columnCount":3},"fontSize":"text-xxs"} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"24px"}}} /-->

<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"text-xxs"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}},"elements":{"link":{"color":{"text":"var:preset|color|font-primary"}}}},"textColor":"font-primary","fontSize":"text-xxl"} /-->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"text-xxs"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
