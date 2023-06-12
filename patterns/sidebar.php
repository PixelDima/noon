<?php
/**
 * Title: Sidebar
 * Slug: noon/sidebar
 * Description:
 * Categories: noon, post
 * Keywords: sidebar, post
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading">Need Assistance?</h3>
<!-- /wp:heading -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Type keywords","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"is-style-border is-style-border-with-radius"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading">About me</h3>
<!-- /wp:heading -->

<!-- wp:image {"align":"wide","id":1772,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/profile.webp" alt="" class="wp-image-1772"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default">As a proficient WordPress designer, I specialize in crafting tailor-made themes that resonate with the brand's identity. With a keen eye for detail and aesthetics, I merge creativity and technical expertise to produce visually appealing, responsive, and user-friendly designs for a diverse clientele.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Discover Our Theme</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading">Latest Articles</h3>
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
<h3 class="wp-block-heading">Stay Connected</h3>
<!-- /wp:heading -->

<!-- wp:social-links {"openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links is-style-default"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium"}},"border":{"radius":"10px"}},"backgroundColor":"base-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-1-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"level":3,"className":"wp-block-heading"} -->
<h3 class="wp-block-heading">Categories</h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
