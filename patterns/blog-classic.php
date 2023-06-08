<?php
/**
 * Title: Blog classic
 * Slug: noon/blog-classic
 * Description: 
 * Categories: posts
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:query {"queryId":5,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"width":"1px","radius":"5px"},"spacing":{"blockGap":"0"}},"borderColor":"base-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"wrap"}} -->
<div class="wp-block-group has-border-color has-base-2-border-color" style="border-width:1px;border-radius:5px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":250,"isDark":false,"style":{"layout":{"selfStretch":"fixed","flexSize":"33em"}}} -->
<div class="wp-block-cover is-light" style="min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium","top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-swt-post-terms-pill is-style-tags"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"text-3xl"} /-->

<!-- wp:post-excerpt {"moreText":""} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"base-2","className":"is-style-separator-dotted"} -->
<hr class="wp-block-separator has-text-color has-base-2-color has-alpha-channel-opacity has-base-2-background-color has-background is-style-separator-dotted"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author-name {"isLink":true,"style":{"typography":{"lineHeight":"1"}},"fontSize":"text-base"} /-->

<!-- wp:paragraph -->
<p>/</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"textColor":"contrast-1"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0"}}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->

<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
