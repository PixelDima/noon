<?php
/**
 * Noon\Templating_Module_Interface interface
 *
 * @package noon
 */

namespace Noon;

/**
 * Interface for a theme module that exposes template tags.
 */
interface Templating_Module_Interface {

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `noon()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array;
}
