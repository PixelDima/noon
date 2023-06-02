<?php
/**
 * Noon\Module_Interface interface
 *
 * @package Noon
 */

namespace Noon;

/**
 * Interface for a theme module.
 */
interface Module_Interface {

	/**
	 * Gets the unique identifier for the theme module.
	 *
	 * @return string Module slug.
	 */
	public function get_slug() : string;

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize();
}
