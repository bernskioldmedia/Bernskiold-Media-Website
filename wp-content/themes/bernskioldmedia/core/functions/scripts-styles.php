<?php
/**
 * Header Functions
 *
 * Contains functions that hook into wp_head and/or output their content
 * to wp_head via other actions/hooks such as scripts and stylesheets.
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

/**
 * Stylesheets
 *
 * Registeres and enqueues theme stylesheets.
 *
 * @since 1.0
 **/
function bernskioldmedia_enqueue_styles() {

	// Register
	// wp_register_style( $handle, $src, $deps, $ver, $media );
	wp_register_style( 'base', THEME_CSS . '/layout.css', false, THEME_VERSION, 'all' );

	// Enqueue
	wp_enqueue_style( 'base' );

}

// Register Styles with WordPress
add_action( 'wp_enqueue_scripts', 'bernskioldmedia_enqueue_styles' );

/**
 * Enqueue Scripts on public side
 *
 * @since Bernskiold Media Framework 1.0
 **/
function bernskioldmedia_enqueue_scripts() {

	// Register
	// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
	wp_register_script( 'foundation', THEME_JS . '/foundation/foundation.js', array( 'jquery' ), THEME_VERSION, true );
	wp_register_script( 'modernizr', THEME_JS . '/vendor/custom.modernizr.js', false, '2.6.2', false );
	wp_register_script( 'scripts', THEME_JS . '/scripts.min.js', array( 'jquery', 'foundation' ), '2.6.2', true );
	wp_register_script( 'mixitup', THEME_JS . '/jquery.mixitup.min.js', array( 'jquery' ), '1.5.5', true );


	// Enqueue
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'foundation' );
	wp_enqueue_script( 'scripts' );
	wp_enqueue_script( 'mixitup' );

}

// Register Scripts with WordPress
add_action('wp_enqueue_scripts', 'bernskioldmedia_enqueue_scripts');

/**
 * Adds a favicon to the site
 *
 * Will load any favicon that is added into the
 * theme image directory.
 *
 * @since Bernskiold Media Framework 1.0
 **/
function bernskioldmedia_favicon() {

	echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . THEME_IMAGES . '/favicon.ico">';

}

add_action('wp_head', 'bernskioldmedia_favicon'); // Adds the favicon to frontend
add_action('admin_head', 'bernskioldmedia_favicon'); // Adds the favicon to backend
