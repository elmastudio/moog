<?php
/**
 * Title: Theme Footer
 * Slug: theme/footer
 * Description: 
 * Categories: footers
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|9","right":"var:preset|spacing|9","left":"var:preset|spacing|9","top":"var:preset|spacing|9"}}},"className":"site-footer"} -->
<div class="wp-block-group alignfull site-footer" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)"><!-- wp:group {"style":{"border":{"radius":"24px","width":"1px"}},"borderColor":"border-primary","backgroundColor":"background-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-border-primary-border-color has-background-secondary-background-color has-background" style="border-width:1px;border-radius:24px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9","right":"var:preset|spacing|9"}}},"className":"btn-round form-round btn-l form-l","layout":{"type":"constrained"},"paddingBottom":1} -->
<div class="wp-block-group btn-round form-round btn-l form-l pb__1" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|6"}}},"textColor":"font-primary","className":"wp-block-heading","fontSize":"text-l"} -->
<h3 class="wp-block-heading has-text-align-center has-font-primary-color has-text-color has-text-l-font-size" style="padding-bottom:var(--wp--preset--spacing--6)">Join our newsletter</h3>
<!-- /wp:heading -->

<!-- wp:mailchimp-for-wp/form {"id":48} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"border-primary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-border-primary-color has-alpha-channel-opacity has-border-primary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|9","padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|9","right":"var:preset|spacing|9"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--9)"><!-- wp:social-links {"iconColor":"font-primary","iconColorValue":"#0B0B0B","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|9"}}},"className":"is-style-logos-only size-m","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only size-m"><!-- wp:social-link {"url":"#","service":"wordpress"} /-->

<!-- wp:social-link {"url":"https://twitter.com/ellenbauer","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/elmastudio/?hl=en","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://www.youtube.com/@elmastudio","service":"youtube"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:navigation {"ref":21444,"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} /-->

<!-- wp:site-logo {"width":64,"align":"center"} /-->

<!-- wp:paragraph {"align":"center","fontSize":"text-xxs"} -->
<p class="has-text-align-center has-text-xxs-font-size">
<?php
	printf(
		/* Translators: WordPress link. */
		esc_html__( 'Proudly powered by %s', 'moog' ),
		'<a href="' . esc_url( __( 'https://wordpress.org', 'moog' ) ) . '" rel="nofollow">WordPress</a>'
	)
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->