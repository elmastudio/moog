<?php
/**
 * Title: Comments
 * Slug: moog/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"},"blockGap":"0"}},"className":"btn-round form-rounded","layout":{"type":"constrained"}} -->
<div class="wp-block-group btn-round form-rounded" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">
<!-- wp:comments {"textColor":"font-secondary","className":"wp-block-comments-query-loop "} -->
<div class="wp-block-comments wp-block-comments-query-loop has-font-secondary-color has-text-color">
<!-- wp:heading {"level":4,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|6"}}},"textColor":"font-primary"} -->
<h4 class="wp-block-heading has-font-primary-color has-text-color" id="comments" style="padding-bottom:var(--wp--preset--spacing--6)">Comments</h4>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|9"}}},"backgroundColor":"border-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide" style="margin-bottom:var(--wp--preset--spacing--9)"/>
<!-- /wp:separator -->

<!-- wp:comment-template {"fontSize":"text-xxs"} -->
<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--6)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|1"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--1)"><!-- wp:avatar {"size":24,"style":{"border":{"radius":"100px","width":"1px"}},"borderColor":"border-secondary"} /-->

<!-- wp:comment-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|font-secondary"}}}},"textColor":"font-secondary","fontSize":"text-xxs"} /-->

<!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-secondary"}}}},"textColor":"font-secondary","fontSize":"text-xxs"} /-->

<!-- wp:comment-edit-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-secondary"}}}},"fontSize":"text-xxs","textColor":"font-tertiary"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"left":"36px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-left:36px"><!-- wp:comment-content {"textColor":"font-secondary","fontSize":"text-xxs"} /-->

<!-- wp:comment-reply-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-secondary"}}},"spacing":{"margin":{"top":"var:preset|spacing|1","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}},"fontSize":"text-xxs","textColor":"font-tertiary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|6","top":"var:preset|spacing|6"}}},"textColor":"font-secondary","fontSize":"text-m"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->
