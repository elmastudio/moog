<?php
/**
 * Title: Masonry post columns
 * Slug: moog/posts-columns-masonry
 * Categories: query
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":1,"query":{"perPage":12,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","sticky":""},"align":"wide"} -->
<div class="wp-block-query alignwide">

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"moog/hidden-no-results"} /-->
<!-- /wp:query-no-results -->

<!-- wp:post-template {"className":"gap-xl masonry","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"border":{"radius":"24px","width":"1px"}},"borderColor":"border-primary","backgroundColor":"surface-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-border-primary-border-color has-surface-secondary-background-color has-background" style="border-width:1px;border-radius:24px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":{"topLeft":"24px","topRight":"24px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9"}},"border":{"radius":"0px"}},"backgroundColor":"background-secondary","className":"entry-header"} -->
<div class="wp-block-group entry-header has-background-secondary-background-color has-background" style="border-radius:0px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)">

<!-- wp:post-date {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|3"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"text-xxs"} /-->

<!-- wp:post-title {"isLink":true,"textColor":"font-primary"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":45,"style":{"spacing":{"padding":{"top":"var:preset|spacing|3"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"font-secondary","fontSize":"text-xxs"} /-->
<!-- wp:post-author {"avatarSize":24,"byline":"by ","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-secondary"}}},"spacing":{"padding":{"top":"var:preset|spacing|3"}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"textColor":"font-secondary","fontSize":"text-xxs"} /-->
<!-- wp:post-terms {"term":"category","separator":" ","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|3"}}},"fontSize":"text-xxs"} /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"className":"pagination-wrap"} -->
<div class="wp-block-group pagination-wrap" style="padding-top:var(--wp--preset--spacing--10)"><!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false} -->
<!-- wp:query-pagination-previous {"label":"Previous Page","fontSize":"text-xs"} /-->

<!-- wp:query-pagination-numbers {"fontSize":"text-xs"} /-->

<!-- wp:query-pagination-next {"label":"Next Page","fontSize":"text-xs"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->
