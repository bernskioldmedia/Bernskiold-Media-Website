<?php
/**
 * Language Redirect
 *
 * This file takes care and redirects the user to the proper language
 * version of the site, if the root domain (without language) is accessed.
 */

/** Load the Language Cookie if it exists, otherwise default to english */
if ( isset( $_COOKIE['_icl_current_language'] ) ) {
	$language = $_COOKIE['_icl_current_language'];
} else {
	$language = 'en';
}

/** Redirect to the language */
wp_redirect( home_url( '/' . $language . '/' ) );
exit;