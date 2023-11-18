<?php
/**
 * Noon\Template_Tags class
 *
 * @package noon
 */

namespace Noon;

use InvalidArgumentException;
use BadMethodCallException;
use RuntimeException;

/**
 * Template tags entry point.
 *
 * This class provides access to all available template tag methods.
 *
 * Its instance can be accessed through `noon()`. For example, if there is a template tag called `posted_on`, it can
 * be accessed via `noon()->posted_on()`.
 */
class Template_Tags {

	/**
	 * Associative array of all available template tags.
	 *
	 * Method names are the keys, their callback information the values.
	 *
	 * @var array
	 */
	protected $template_tags = array();

	/**
	 * Constructor.
	 *
	 * Sets the theme modules.
	 *
	 * @param array $modules Optional. List of theme templating modules. Each of these must implement the
	 *                          Templating_Module_Interface interface.
	 *
	 * @throws InvalidArgumentException Thrown if one of the $modules does not implement
	 *                                  Templating_Module_Interface.
	 */
	public function __construct( array $modules = array() ) {

		// Set the template tags for the modules.
		foreach ( $modules as $module ) {

			// Bail if a templating module is invalid.
			if ( ! $module instanceof Templating_Module_Interface ) {
				throw new InvalidArgumentException(
					sprintf(
						/* translators: 1: classname/type of the variable, 2: interface name */
						__( 'The theme templating module %1$s does not implement the %2$s interface.', 'noon-theme' ),
						gettype( $module ),
						Templating_Module_Interface::class
					)
				);
			}

			$this->set_template_tags( $module );
		}
	}

	/**
	 * Magic call method.
	 *
	 * Will proxy to the template tag $method, unless it is not available, in which case an exception will be thrown.
	 *
	 * @param string $method Template tag name.
	 * @param array  $args   Template tag arguments.
	 * @return mixed Template tag result, or null if template tag only outputs markup.
	 *
	 * @throws BadMethodCallException Thrown if the template tag does not exist.
	 */
	public function __call( string $method, array $args ) {
		if ( ! isset( $this->template_tags[ $method ] ) ) {
			throw new BadMethodCallException(
				sprintf(
					/* translators: %s: template tag name */
					__( 'The template tag %s does not exist.', 'noon-theme' ),
					'noon()->' . $method . '()'
				)
			);
		}

		return call_user_func_array( $this->template_tags[ $method ]['callback'], $args );
	}

	/**
	 * Sets template tags for a given theme templating module.
	 *
	 * @param Templating_Module_Interface $module Theme templating module.
	 *
	 * @throws InvalidArgumentException Thrown when one of the template tags is invalid.
	 * @throws RuntimeException         Thrown when one of the template tags conflicts with an existing one.
	 */
	protected function set_template_tags( Templating_Module_Interface $module ) {
		$tags = $module->template_tags();

		foreach ( $tags as $method_name => $callback ) {
			if ( is_callable( $callback ) ) {
				$callback = array( 'callback' => $callback );
			}

			if ( ! is_array( $callback ) || ! isset( $callback['callback'] ) ) {
				throw new InvalidArgumentException(
					sprintf(
						/* translators: 1: template tag method name, 2: module class name */
						__( 'The template tag method %1$s registered by theme module %2$s must either be a callable or an array.', 'noon-theme' ),
						$method_name,
						get_class( $module )
					)
				);
			}

			if ( isset( $this->template_tags[ $method_name ] ) ) {
				throw new RuntimeException(
					sprintf(
						/* translators: 1: template tag method name, 2: module class name */
						__( 'The template tag method %1$s registered by theme module %2$s conflicts with an already registered template tag of the same name.', 'noon-theme' ),
						$method_name,
						get_class( $module )
					)
				);
			}

			$this->template_tags[ $method_name ] = $callback;
		}
	}
}
