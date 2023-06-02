<?php
/**
 * Noon\Theme class
 *
 * @package Noon
 */

namespace Noon;

use InvalidArgumentException;
use Noon\Experts\experts;

/**
 * Main class for the theme.
 *
 * This class takes care of initializing theme features and available template tags.
 */
class Theme {

	/**
	 * Instance Control
	 *
	 * @var null
	 */
	private static $instance = null;

	/**
	 * Associative array of theme modules, keyed by their slug.
	 *
	 * @var array
	 */
	public $modules = array();

	/**
	 * The template tags instance, providing access to all available template tags.
	 *
	 * @var Template_Tags
	 */
	protected $template_tags;

	/**
	 * Main Noon\Theme Class Instance.
	 *
	 * Insures that only one instance of Noon Class exists in memory at any one
	 * time. Also prevents needing to define globals all over the place.
	 *
	 * @static
	 * @static var array $instance
	 *
	 * @return Noon\Theme Class
	 */
	public static function instance() {

		// Return if already instantiated.
		if ( self::is_instantiated() ) {
			return self::$instance;
		}

		// Setup the singleton.
		self::setup_instance();

		self::$instance->initialize();

		// Return the instance.
		return self::$instance;

	}

	/**
	 * Setup the singleton instance
	 *
	 * @access private
	 */
	private static function setup_instance() {
		self::$instance = new Theme();
	}

	/**
	 * Return whether the main loading class has been instantiated or not.
	 *
	 * @access private
	 * @return boolean True if instantiated. False if not.
	 */
	private static function is_instantiated() {

		// Return true if instance is correct class.
		if ( ! empty( self::$instance ) && ( self::$instance instanceof Theme ) ) {
			return true;
		}

		// Return false if not instantiated correctly.
		return false;
	}

	/**
	 * Constructor.
	 *
	 * Sets the theme modules.
	 *
	 * @param array $modules Optional. List of theme modules. Only intended for custom initialization, typically
	 *                       the theme modules are declared by the theme itself. Each theme module must
	 *                       implement the Module_Interface interface.
	 *
	 * @throws InvalidArgumentException Thrown if one of the $modules does not implement Module_Interface.
	 */
	public function __construct( array $modules = array() ) {
		spl_autoload_register( array( $this, 'autoload' ) );

		if ( empty( $modules ) ) {
			$modules = $this->get_default_modules();
		}

		// Set the modules.
		foreach ( $modules as $module ) {
			// Bail if a module is invalid.
			if ( ! $module instanceof Module_Interface ) {
				throw new InvalidArgumentException(
					sprintf(
					/* translators: 1: classname/type of the variable, 2: interface name */
						__( 'The theme module %1$s does not implement the %2$s interface.', 'noon' ),
						gettype( $module ),
						Module_Interface::class
					)
				);
			}

			$this->modules[ $module->get_slug() ] = $module;
		}

		// Instantiate the template tags instance for all theme templating modules.
		$this->template_tags = new Template_Tags(
			array_filter(
				$this->modules,
				function ( Module_Interface $module ) {
						return $module instanceof Templating_Module_Interface;
				}
			)
		);
	}

	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param  string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	private function autoload( $class_name ) {
		$namespace = 'Noon';

		if ( strpos( $class_name, $namespace . '\\' ) !== 0 ) {
			return false;
		}
		$parts = explode( '\\', substr( $class_name, strlen( $namespace . '\\' ) ) );

		$path = get_template_directory() . '/inc/modules';
		foreach ( $parts as $part ) {
			$path .= '/' . strtolower( $part );
		}
		$path .= '.php';
		if ( ! file_exists( $path ) ) {
			return false;
		}
		include_once $path; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

		return true;
	}
	/**
	 * Throw error on object clone.
	 *
	 * The whole idea of the singleton design pattern is that there is a single
	 * object therefore, we don't want the object to be cloned.
	 *
	 * @return void
	 */
	public function __clone() {
		// Cloning instances of the class is forbidden.
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Something went wrong.', 'noon' ), '1.0' );
	}

	/**
	 * Disable un-serializing of the class.
	 *
	 * @return void
	 */
	public function __wakeup() {
		// Unserializing instances of the class is forbidden.
		_doing_it_wrong( __FUNCTION__, esc_html__( 'Something went wrong.', 'noon' ), '1.0' );
	}


	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 *
	 * This method must only be called once in the request lifecycle.
	 */
	public function initialize() {
		array_walk(
			$this->modules,
			function ( Module_Interface $module ) {
				$module->initialize();
			}
		);
	}

	/**
	 * Retrieves the template tags instance, the entry point exposing template tag methods.
	 *
	 * Calling `noon()` is a short-hand for calling this method on the main theme instance. The instance then allows
	 * for actual template tag methods to be called. For example, if there is a template tag called `posted_on`, it can
	 * be accessed via `noon()->posted_on()`.
	 *
	 * @return Template_Tags Template tags instance.
	 */
	public function template_tags() : Template_Tags {
		return $this->template_tags;
	}

	/**
	 * Retrieves the module for a given slug.
	 *
	 * This should typically not be used from outside of the theme classes infrastructure.
	 *
	 * @param  string $slug Slug identifying the module.
	 * @return Module_Interface Module for the slug.
	 *
	 * @throws InvalidArgumentException Thrown when no theme module with the given slug exists.
	 */
	public function module( string $slug ) : Module_Interface {
		if ( ! isset( $this->modules[ $slug ] ) ) {
			throw new InvalidArgumentException(
				sprintf(
				/* translators: %s: slug */
					__( 'No theme module with the slug %s exists.', 'noon' ),
					$slug
				)
			);
		}

		return $this->modules[ $slug ];
	}

	/**
	 * Gets the default theme modules.
	 *
	 * This method is called if no modules are passed to the constructor, which is the common scenario.
	 *
	 * @return array List of theme modules to use by default.
	 */
	protected function get_default_modules() : array {
		$modules = array(
			new Localization\Local(),
			new Helper\Help(),
			new Blocks\Styles(),
			new Blocks\Patterns(),
			new Amp\Amp(),
			new Styles\Style(),
			new Excerpts\Excerpts(),
		);

		return $modules;
	}
}
