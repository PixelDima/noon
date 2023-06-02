<?php
/**
 * noon\AMP\Module class
 * =====================
 * This class provides support for the AMP plugin.
 *
 * @package noon
 */

namespace Noon\AMP;

use Noon\Module_Interface;
use Noon\Templating_Module_Interface;
use function add_action;
use function add_theme_support;
use function get_theme_support;


/**
 * Class for managing AMP support.
 *
 * Exposes template tags:
 * * `noon()->is_amp()`
 * * `noon()->using_amp_live_list_comments()`
 *
 * @link https://wordpress.org/plugins/amp/
 */
class amp implements Module_Interface, Templating_Module_Interface {

	/**
	 * Gets the unique identifier for the theme module.
	 *
	 * @return string Module slug.
	 */
	public function get_slug() : string {
		return 'amp';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'action_add_amp_support' ) );
	}

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `noon()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array {
		return array(
			'is_amp'                       => array( $this, 'is_amp' ),
			'using_amp_live_list_comments' => array( $this, 'using_amp_live_list_comments' ),
		);
	}

	/**
	 * Adds theme support for AMP.
	 *
	 * From here you can control how the plugin, when activated, impacts the the theme.
	 */
	public function action_add_amp_support() {
		add_theme_support(
			'amp',
			array(
				'comments_live_list' => true,
			)
		);
	}

	/**
	 * Determines whether this is an AMP response.
	 *
	 * Note that this must only be called after the parse_query action.
	 *
	 * @return bool Whether the AMP plugin is active and the current request is for an AMP endpoint.
	 */
	public function is_amp() : bool {
		return function_exists( 'is_amp_endpoint' ) && \is_amp_endpoint();
	}

	/**
	 * Determines whether amp-live-list should be used for the comment list.
	 *
	 * @return bool Whether to use amp-live-list.
	 */
	public function using_amp_live_list_comments() : bool {
		if ( ! $this->is_amp() ) {
			return false;
		}

		$amp_theme_support = get_theme_support( 'amp' );

		return ! empty( $amp_theme_support[0]['comments_live_list'] );
	}
}
