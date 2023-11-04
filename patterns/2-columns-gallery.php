<?php
/**
 * Title: Image Gallery
 * Slug: moog/2-columns-gallery
 * Categories: about, gallery
 * Viewport width: 1640
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|9","left":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|9"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--9)">
<!-- wp:heading {"level":4,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|6"}}}} -->
<h4 class="wp-block-heading" style="padding-bottom:var(--wp--preset--spacing--6)">Our Studio</h4>
<!-- /wp:heading -->

<!-- wp:separator {"align":"full","backgroundColor":"border-secondary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignfull has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|9"},"padding":{"bottom":"var:preset|spacing|12","top":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--12)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1.25rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/roppongi-hills.jpg" alt="About Image" style="border-radius:1.25rem"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|9"}}} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"style":{"border":{"radius":"1.25rem"}},"className":"size-full has-custom-border"} -->
<figure class="wp-block-image has-custom-border size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/light-and-shadow.jpg" alt="About Image" style="border-radius:1.25rem"/></figure>
<!-- /wp:image -->

<!-- wp:image {"style":{"border":{"radius":"1.25rem"}},"className":"size-full has-custom-border"} -->
<figure class="wp-block-image has-custom-border size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/girl-with-camera.jpg" alt="About Image" style="border-radius:1.25rem"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
