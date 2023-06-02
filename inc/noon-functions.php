<?php
/**
 * The `Noon()` function.
 *
 * @package Noon
 */

namespace Noon;

use Noon\Template_Tags;
use Noon\Theme;

/**
 * Provides access to all available template tags of the theme.
 *
 * When called for the first time, the function will initialize the theme.
 *
 * @return Template_Tags Template tags instance exposing template tag methods.
 */
function Noon() : Template_Tags {
	static $theme = null;

	if ( null === $theme ) {
		$theme = Theme::instance();
	}

	return $theme->template_tags();
}
