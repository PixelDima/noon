<?php
/**
 * This file adds functions to the Noon theme for WordPress.
 *
 * @package Noon
 * @author  NoonBlock
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

define( 'NOON_VERSION', '1.0.0' );
define( 'NOON_MINIMUM_WP_VERSION', '5.4' );
define( 'NOON_MINIMUM_PHP_VERSION', '7.0' );

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `Noon()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `Noon()` entry point function.
require get_template_directory() . '/inc/noon-functions.php';

// Initialize the theme.
call_user_func( 'Noon\Noon' );
