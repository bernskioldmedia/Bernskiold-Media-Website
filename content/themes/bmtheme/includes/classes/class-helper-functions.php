<?php
/**
 * Helper Functions
 *
 * These are small helper funcitons that should not be outputting any data
 * but merely help us work with it, get it or transform it.
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

/**
 * Theme_Helpers Class
 *
 * @package BernskioldMedia\Theme
 */
class Theme_Helpers {

	/**
	 * Theme Helpers Constructor
	 */
	public function __construct() {

		add_action( 'pre_get_posts', array( $this, 'modify_case_studies_query' ) );

	}

	public function modify_case_studies_query( $query ) {

		if ( is_admin() || ! $query->is_main_query() ) {
			return;
		}

		if ( ! is_post_type_archive( 'bm_case_studies' ) ) {
			return;
		}

		$query->set( 'posts_per_page', 50 );
		$query->set( 'meta_query', array(
			array(
				'key'     => 'is_item_active',
				'value'   => '1',
				'compare' => '=',
			),
		) );

		return;

	}
}
