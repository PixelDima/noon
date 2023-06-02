<?php
/**
 * noon\Excerpts\classes class
 *
 * @package noon
 */

namespace Noon\Excerpts;

use Noon\Module_Interface;
use function add_filter;
use function apply_filters;
use function get_the_ID;
use function get_the_title;

/**
 * Class for adjusting size and format for post excerpt.
 */
class Excerpts implements Module_Interface {


	/**
	 * Gets the unique identifier for the theme module.
	 *
	 * @return string Module slug.
	 */
	public function get_slug() : string {
		return 'excerpts';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ) );
		add_filter( 'excerpt_length', array( $this, 'new_excerpt_length' ) );
	}

	/**
	 * Custom Excerpt length.
	 */
	public function new_excerpt_length() {
		return apply_filters( 'noon_excerpt_length', 12 );
	}

	/**
	 * Custom Excerpt ending.
	 */
	public function new_excerpt_more() {
		return ' &hellip; ';
	}
}
