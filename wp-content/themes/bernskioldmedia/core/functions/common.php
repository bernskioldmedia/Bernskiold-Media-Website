<?php

/**
 * Contains various useful custom functions.
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/


/**
 * Prints Custom Field Data
 *
 * @since Bernskiold Media Framework 1.0
 **/
function print_custom_field($custom_field) {
	global $post;
	$custom_field = get_post_meta($post->ID, $custom_field, true);
	print $custom_field;
}

/**
 * Gets Custom Field data and places
 * in variable with the same name as the
 * post meta key.
 *
 * @since Bernskiold Media Framework 1.0
 **/
function get_custom_field($custom_field) {
	global $post;
	$custom_field = get_post_meta($post->ID, $custom_field, true);
}

/**
 * Checks if a certain number is even of odd.
 *
 * @since Bernskiold Media Framework 1.0
 **/

function is_half($num) {
  if ($num % 2 == 0) {
  return false;
 } else {
    return true;
  }
}


if ( ! function_exists( 'bm_home_url' ) ) :
/**
 * Custom Home Link
 *
 * Creates a custom home_url with support for
 * the WPML language.
 *
 * @author Erik Bernskiold
 */
function bm_home_url( $page = '' ) {

    $link = icl_get_home_url() . $page;

    return $link;

}
endif;

if ( ! function_exists( 'bm_get_terms_nolinks' ) ) :
  /**
   * Get Terms without Links
   *
   * This function returns a separated list of terms without any links.
   *
   * @return void
   * @author Erik Bernskiold
   */
  function bm_get_terms_nolinks( $post_id, $taxonomy, $separator = ' / ' ) {

    $terms = get_the_terms( $post_id, $taxonomy );

    if ( $terms ) {

      $services_array = array();

      foreach ( $terms as $term ) {
        $services_array[] = $term->name;
      }

      $services = join( $separator, $services_array );

      return $services;

    } else {

      return false;

    }

  }
endif;

if ( ! function_exists( 'bm_get_filter_terms' ) ) :
  /**
   * Get Terms for use with AJAX (Mixitup) Filtering
   *
   * Function returns a list of space separated slugs for
   * terms in a given taxonomy. This can be used
   * together with the AJAX filtering.
   *
   * @return void
   * @author Erik Bernskiold
   */
  function bm_get_filter_terms( $post_id, $taxonomy ) {

    $terms = get_the_terms( $post_id, $taxonomy );

    if ( $terms ) {

      $services_array = array();

      foreach ( $terms as $term ) {
        $services_array[] = $term->slug;
      }

      $services = join( ' ', $services_array );

      return $services;

    } else {

      return false;

    }

  }
endif;