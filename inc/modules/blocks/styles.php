<?php
/**
 * This file adds block styles to the Noon WordPress theme.
 * Noon\Styles\classes class
 *
 * @package Noon
 */
namespace Noon\Blocks;

use Noon\Module_Interface;
use function add_action;

/**
 * Class for adding block styles to the Noon WordPress theme.
 */
class Styles implements Module_Interface {
	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'init', array( $this, 'noon_register_block_styles' ) );
	}
	/**
	 * Gets the unique identifier for the theme module.
	 *
	 * @return string Module slug.
	 */
	public function get_slug() : string {
		return 'blocks/styles';
	}
	/**
	 * Register block styles.
	 *
	 * @since 0.1.0
	 */
	function noon_register_block_styles() {
		$block_styles = array(
			'core/button'                    => array(
				'secondary-button' => __( 'Secondary', 'noon' ),
			),
			'core/query-pagination-next'     => array(
				'wp-block-button__link' => __( 'Button', 'noon' ),
			),
			'core/query-pagination-previous' => array(
				'wp-block-button__link' => __( 'Button', 'noon' ),
			),
			'core/image'                     => array(
				'm-0' => __( 'No Margin', 'noon' ),
			),
			'core/paragraph'                 => array(
				'm-0' => __( 'No Margin', 'noon' ),
			),
			'core/separator'                 => array(
				'separator-dotted' => __( 'Dotted', 'noon' ),
			),
			'core/column'                    => array(
				'noon-shadow'       => __( 'Noon Shadow', 'noon' ),
				'noon-solid-shadow' => __( 'Solid Shadow', 'noon' ),
			),
			'core/group'                     => array(
				'noon-shadow'       => __( 'Noon Shadow', 'noon' ),
				'noon-solid-shadow' => __( 'Solid Shadow', 'noon' ),
			),
			'core/code'                      => array(
				'contrast-code' => __( 'Contrast Style', 'noon' ),
			),
			'core/preformatted'              => array(
				'preformatted-dark' => __( 'Contrast Style', 'noon' ),
			),

			'core/post-terms'                => array(
				'tags' => __( 'Tags Style', 'noon' ),
			),
			'core/template-part/header'      => array(
				'noon-header-transparent' => __( 'Transparent', 'noon' ),
				'noon-header-default'     => __( 'Default', 'noon' ),
			),
		);

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}
}
