<?php
/**
 * Template Name: Language Redirect
 *
 * This template file is used by the WPML root page and
 * redirects the user from the empty domain to an appropriate
 * language version of the website.
 *
 * If we have a WPML cookie, we redirect to that website. If not,
 * we send the visitor to the default language.
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

// Get the current language cookie cookie.
$user_language = wp_kses_post( $_COOKIE['_icl_current_language'] );

if ( isset( $user_language ) ) {
	wp_redirect( home_url( $user_language ) );
	exit;
} else {
	wp_redirect( home_url( 'en' ) );
	exit;
}
