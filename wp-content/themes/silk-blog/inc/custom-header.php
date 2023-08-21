<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package silkblog
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses silkblog_header_style()
 */
function silkblog_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'silkblog_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1920,
		'height'                 => 1080,
		'flex-height'            => true,
		'wp-head-callback'       => '',
		'admin-head-callback'	 => '',
	) ) );
}
add_action( 'after_setup_theme', 'silkblog_custom_header_setup' );
