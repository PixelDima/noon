<?php
/**
 * Noon\Styles\classes class
 *
 * @package Noon
 */
namespace Noon\Styles;

use Noon\Module_Interface;
use Noon\Templating_Module_Interface;

use function Noon\Noon;
use function wp_print_styles;
use function add_action;
use function wp_style_add_data;

/**
 * Class for managing stylesheets.
 *
 * Exposes template tags:
 * * `Noon()->print_styles()`
 */

class Style implements Module_Interface, Templating_Module_Interface {


	/**
	 * Associative array of CSS files, as $handle => $data pairs.
	 * $data must be an array with keys 'file' (file path relative to 'assets/css' directory), and optionally 'global'
	 * (whether the file should immediately be enqueued instead of just being registered) and 'preload_callback'
	 * (callback function determining whether the file should be preloaded for the current request).
	 *
	 * Do not access this property directly, instead use the `get_css_files()` method.
	 *
	 * @var array
	 */
	protected $css_files;


	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'action_enqueue_custom_block_styles' ), 99 );
		add_action( 'wp_enqueue_scripts', array( $this, 'action_enqueue_styles' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'action_add_gutenberg_styles' ), 90 );
	}

	/**
	 * Load custom block styles only when the block is used
	 */
	function action_enqueue_custom_block_styles() {

		// Scan our styles folder to locate block styles
		$files = glob( get_template_directory() . '/assets/bundle/css/frontend/blocks/*.css' );

		foreach ( $files as $file ) {
			// Get the filename and core block name
			$filename   = basename( $file, '.css' );
			$block_name = str_replace( 'core-', 'core/', $filename );

			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => "noon-block-{$filename}-styles",
					'src'    => get_theme_file_uri( "/assets/bundle/css/frontend/blocks/{$filename}.css" ),
					'path'   => get_theme_file_path( "/assets/bundle/css/frontend/blocks/{$filename}.css" ),
				)
			);
		}
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
			'print_styles' => array( $this, 'print_styles' ),
		);
	}

	/**
	 * Gets the unique identifier for the theme module.
	 *
	 * @return string Module slug.
	 */
	public function get_slug() : string {
		return 'styles';
	}
	/**
	 * Registers or enqueues stylesheets.
	 *
	 * Stylesheets that are global are enqueued. All other stylesheets are only registered, to be enqueued later.
	 */
	public function action_enqueue_styles() {

		$preloading_styles_enabled = $this->preloading_styles_enabled();

		$css_files = $this->get_css_files();
		foreach ( $css_files as $handle => $data ) {
			$src     = get_theme_file_uri( '/assets/bundle/css/frontend/' . $data['file'] );
			$version = Noon()->get_asset_version( get_theme_file_path( '/assets/bundle/css/frontend/' . $data['file'] ) );

			/*
			* Enqueue global stylesheets immediately and register the other ones for later use
			* (unless preloading stylesheets is disabled, in which case stylesheets should be immediately
			* enqueued based on whether they are necessary for the page content).
			*/
			if ( $data['global'] || ! $preloading_styles_enabled && is_callable( $data['preload_callback'] ) && call_user_func( $data['preload_callback'] ) ) {
				wp_enqueue_style( $handle, $src, array(), $version, $data['media'] );
			} else {
				wp_register_style( $handle, $src, array(), $version, $data['media'] );
			}
			wp_style_add_data( $handle, 'precache', true );
		}
	}

	/**
	 * Enqueues WordPress theme styles for the editor.
	 */
	public function action_add_gutenberg_styles() {
		// Enqueue Google Fonts.
		$version = Noon()->get_asset_version( get_theme_file_path( '/assets/bundle/css/backend/editor/editor.css' ) );

		wp_enqueue_style( 'noon-editor-styles', get_theme_file_uri( '/assets/bundle/css/backend/editor/editor.css' ), array(), $version, 'all' );
	}

	/**
	 * Determines whether to preload stylesheets and inject their link tags directly within the page content.
	 *
	 * Using this technique generally improves performance, however may not be preferred under certain circumstances.
	 * For example, since AMP will include all style rules directly in the head, it must not be used in that context.
	 * By default, this method returns true unless the page is being served in AMP. The
	 * {@see 'noon:preloading_styles_enabled'} filter can be used to tweak the return value.
	 *
	 * @return bool True if preloading stylesheets and injecting them is enabled, false otherwise.
	 */
	protected function preloading_styles_enabled() {
		$preloading_styles_enabled = ! noon()->is_amp();

		/**
		 * Filters whether to preload stylesheets and inject their link tags within the page content.
		 *
		 * @param bool $preloading_styles_enabled Whether preloading stylesheets and injecting them is enabled.
		 */
		return apply_filters( 'noon:preloading_styles_enabled', $preloading_styles_enabled );
	}
	/**
	 * Gets all CSS files.
	 *
	 * @return array Associative array of $handle => $data pairs.
	 */
	protected function get_css_files() : array {
		if ( is_array( $this->css_files ) ) {
			return $this->css_files;
		}

		$css_files = array(
			'noon-global'     => array(
				'file'   => 'front-style.css',
				'global' => ! is_rtl(),
			),
			'noon-global-rtl' => array(
				'file'   => 'front-style-rtl.css',
				'global' => is_rtl(),
			),
		);

		/**
		 * Filters default CSS files.
		 *
		 * @param array $css_files Associative array of CSS files, as $handle => $data pairs.
		 *                         $data must be an array with keys 'file' (file path relative to 'assets/css'
		 *                         directory), and optionally 'global' (whether the file should immediately be
		 *                         enqueued instead of just being registered) and 'preload_callback' (callback)
		 *                         function determining whether the file should be preloaded for the current request).
		 */
		$css_files       = apply_filters( 'noon:css_files', $css_files );
		$this->css_files = array();
		foreach ( $css_files as $handle => $data ) {
			if ( is_string( $data ) ) {
				$data = array( 'file' => $data );
			}

			if ( empty( $data['file'] ) ) {
				continue;
			}

			$this->css_files[ $handle ] = array_merge(
				array(
					'global'           => false,
					'preload_callback' => null,
					'media'            => 'all',
				),
				$data
			);
		}
		return $this->css_files;
	}

	/**
	 * Prints stylesheet link tags directly.
	 *
	 * This should be used for stylesheets that aren't global and thus should only be loaded if the HTML markup
	 * they are responsible for is actually present. Template parts should use this method when the related markup
	 * requires a specific stylesheet to be loaded. If preloading stylesheets is disabled, this method will not do
	 * anything.
	 *
	 * If the `<link>` tag for a given stylesheet has already been printed, it will be skipped.
	 *
	 * @param string ...$handles One or more stylesheet handles.
	 */
	public function print_styles( string ...$handles ) {
		$css_files = $this->get_css_files();
		$handles   = array_filter(
			$handles,
			function ( $handle ) use ( $css_files ) {
				$is_valid = isset( $css_files[ $handle ] ) && ! $css_files[ $handle ]['global'];
				if ( ! $is_valid ) {
					/* translators: %s: stylesheet handle */
					_doing_it_wrong( __CLASS__ . '::print_styles()', esc_html( sprintf( __( 'Invalid theme stylesheet handle: %s', 'noon' ), $handle ) ), 'Kadence 1.0.0' );
				}
				return $is_valid;
			}
		);

		if ( empty( $handles ) ) {
			return;
		}

		wp_print_styles( $handles );
	}
}
