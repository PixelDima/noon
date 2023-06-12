<?php
/**
 * Title: Blog Post Card
 * Slug: noon/blog-post-card
 * Description:
 * Categories: posts, noon
 * Keywords:
 * Viewport Width: 640
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"0"}},"className":"is-style-noon-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-noon-shadow" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":3,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":2},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"fontSize":"large"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"","style":{"color":{"duotone":"unset"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|small","right":"0","bottom":"0","left":"0"}}},"className":"is-style-default","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--small);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"is-style-tags","fontSize":"text-sm"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:post-excerpt {"moreText":""} /-->

<!-- wp:separator {"backgroundColor":"base-2","className":"is-style-separator-dotted"} -->
<hr class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background is-style-separator-dotted"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"fontSize":"small"} -->
<div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author-name {"isLink":true,"style":{"typography":{"lineHeight":"1"}},"fontSize":"text-base"} /-->

<!-- wp:paragraph -->
<p>/</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"textColor":"contrast-1","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
