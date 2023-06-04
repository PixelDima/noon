<?php
/**
 * Title: header default
 * Slug: noon/header-default
 * Description:
 * Categories: noon, header
 * Keywords:
 * Viewport Width: 1280
 * Block Types: core/template-part/header
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0px"},"blockGap":"0"}},"backgroundColor":"transparent","textColor":"contrast-3","className":"is-style-default is-style-header-transparent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default is-style-header-transparent has-contrast-3-color has-transparent-background-color has-text-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-logo {"width":45,"shouldSyncIcon":true} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","flexWrap":"wrap"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"blockGap":"40px"}},"fontSize":"tiny-plus"} -->
	<!-- wp:navigation-link {"label":"<?php echo __( 'Home', 'noon' ); ?>  ","url":"/","kind":"custom","isTopLevelLink":true} /-->
	<!-- wp:navigation-submenu {"label":"<?php echo __( 'Pages', 'noon' ); ?>","url":"#","kind":"custom","isTopLevelItem":true} -->
	<!-- wp:navigation-link {"label":"<?php echo __( 'About us', 'noon' ); ?>","description":"<?php echo __( 'Peek behind the curtain' ); ?>","url":"/about-us","kind":"custom","isTopLevelLink":false} /-->
	<!-- wp:navigation-link {"label":"<?php echo __( 'Services', 'noon' ); ?>","description":"<?php echo __( 'Discover our service' ); ?>","url":"#","kind":"custom","isTopLevelLink":false} /-->
	<!-- wp:navigation-link {"label":"<?php echo __( 'Contact us', 'noon' ); ?>","description":"<?php echo __( 'Drop us a message' ); ?>","url":"#","kind":"custom","isTopLevelLink":false} /-->
	<!-- /wp:navigation-submenu -->
	<!-- wp:navigation-link {"label":"<?php echo __( 'Blog', 'noon' ); ?>","url":"/blog","kind":"custom","isTopLevelLink":true} /-->
	<!-- wp:navigation-link {"label":"<?php echo __( 'Contact us', 'noon' ); ?>","url":"#","kind":"custom","isTopLevelLink":true,"className":""} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
