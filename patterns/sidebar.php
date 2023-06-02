<?php
/**
 * Title: Sidebar
 * Slug: noon/sidebar
 * Description:
 * Categories: noon
 * Keywords:
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Need Assistance?', 'noon' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Type keywords","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-border is-style-border-with-radius"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'About The Author' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"id":3008,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/man-hand.webp" alt="" class="wp-image-3008"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default">
<?php esc_html_e( 'John Doe is a skilled web designer and developer with a passion for creating visually appealing and user-friendly websites. With over a decade of experience in the industry, John has built a strong reputation for delivering exceptional results. His expertise and attention to detail make him a go-to professional for clients seeking outstanding web design solutions.' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Discover Our Theme', 'noon' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Latest Articles', 'noon' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template {"fontSize":"tiny"} -->
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"80px"} -->
<div class="wp-block-column" style="flex-basis:80px"><!-- wp:group {"className":"lemmony-aspect-1_1 has-background-background-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group lemmony-aspect-1_1 has-background-background-color"><!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","sizeSlug":"thumbnail","align":"wide"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-title {"level":4,"isLink":true,"fontSize":"text-lg"} /-->

<!-- wp:post-date {"textColor":"meta","fontSize":"tiny"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Stay Connected', 'noon' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:social-links {"className":"is-style-pill-shape"} -->
<ul class="wp-block-social-links is-style-pill-shape"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading"><?php esc_html_e( 'Categories', 'noon' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
