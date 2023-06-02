<?php
/**
 * Noon: Block Patterns
 *
 * @since Noon 0.8.0
 */

namespace Noon\Blocks;

use Noon\Module_Interface;

class Patterns implements Module_Interface {

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'init', array( $this, 'noon_register_block_pattern_categories' ), 9 );
	}

	/**
	 * Gets the unique identifier for the theme module.
	 *
	 * @return string Module slug.
	 */
	public function get_slug() : string {
		return 'blocks';
	}

	/**
	 * Registers block patterns, categories, and type.
	 *
	 * @since Noon 0.1.0
	 */
	function noon_register_block_pattern_categories() {

		if ( function_exists( 'register_block_pattern_category_type' ) ) {
			register_block_pattern_category_type( 'noon', array( 'label' => __( 'Noon Patterns', 'noon' ) ) );
		}

		$block_pattern_categories = array(
			'noon' => array(
				'label'         => __( 'Noon', 'noon' ),
				'categoryTypes' => array( 'noon' ),
			),
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Noon 0.1.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'noon_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}

	}
}
