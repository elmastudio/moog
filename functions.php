<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package moog
 * @since 1.0
 */
 
/**
 * The theme version.
 *
 * @since 1.0
 */
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0
 *
 * @return void
 */
function moog_support() {

		// Enqueue editor styles.
		add_editor_style( 'assets/build/css/style-editor.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

}
add_action( 'after_setup_theme', 'moog_support' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0
 *
 * @return void
 */
function moog_scripts() {

	wp_enqueue_style(
		'moog-style',
		get_template_directory_uri() . '/assets/build/css/style.css',
		[],
		THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'moog_scripts' );

/**
 * Registers pattern categories.
 *
 * @since 1.0
 */
function moog_register_pattern_categories() {

	$block_pattern_categories = array(
		'headers'       => array( 'label' => __( 'Headers' ) ),
		'footers'       => array( 'label' => __( 'Footers' ) ),
	);

	$block_pattern_categories = apply_filters( 'moog_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}

add_action( 'init', 'moog_register_pattern_categories' );
