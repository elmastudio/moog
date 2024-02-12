<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Moog
 * @since 1.0
 */

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
 * Enqueue style.css file.
 */
if ( ! function_exists( 'moog_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function moog_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'moog-style',
			get_stylesheet_directory_uri() . '/assets/build/css/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'moog-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'moog_styles' );

/**
 * Registers pattern categories.
 *
 * @since 1.0
 */
function moog_register_pattern_categories() {

	$block_pattern_categories = array(
		'headers'       => array( 'label' => __( 'Headers', 'moog' ) ),
		'footers'       => array( 'label' => __( 'Footers', 'moog' ) ),
		'pages'         => array( 'label' => __( 'Pages', 'moog' ) ),
	);

	$block_pattern_categories = apply_filters( 'moog_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}

add_action( 'init', 'moog_register_pattern_categories' );
