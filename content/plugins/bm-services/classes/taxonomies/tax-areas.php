<?php
/**
 * Custom Taxonomy: Areas
 *
 * @package BernskioldMedia\Services
 */

namespace BernskioldMedia\Services;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Tax_Areas
 *
 * @package BernskioldMedia\Services
 */
class Tax_Areas {

	/**
	 * Class Tax_Areas Constructor
	 */
	public function __construct() {

		// Initialize the taxonomy
		add_action( 'init', array( $this, 'taxonomy' ), 1 );

	}

	/**
	 * Register Taxonomy
	 */
	public function taxonomy() {

		$labels = array(
			'name'                       => _x( 'Areas', 'Taxonomy General Name', 'bm-events' ),
			'singular_name'              => _x( 'Area', 'Taxonomy Singular Name', 'bm-events' ),
			'menu_name'                  => __( 'Areas', 'bm-events' ),
			'all_items'                  => __( 'All Areas', 'bm-events' ),
			'parent_item'                => __( 'Parent Area', 'bm-events' ),
			'parent_item_colon'          => __( 'Parent Area:', 'bm-events' ),
			'new_item_name'              => __( 'New Area Name', 'bm-events' ),
			'add_new_item'               => __( 'Add New Area', 'bm-events' ),
			'edit_item'                  => __( 'Edit Area', 'bm-events' ),
			'update_item'                => __( 'Update Area', 'bm-events' ),
			'view_item'                  => __( 'View Area', 'bm-events' ),
			'separate_items_with_commas' => __( 'Separate areas with commas', 'bm-events' ),
			'add_or_remove_items'        => __( 'Add or remove areas', 'bm-events' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'bm-events' ),
			'popular_items'              => __( 'Popular Areas', 'bm-events' ),
			'search_items'               => __( 'Search Areas', 'bm-events' ),
			'not_found'                  => __( 'Not Found', 'bm-events' ),
		);

		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => false,
			'rewrite'                    => false,
		);

		// Which post types should this taxonomy be registered for?
		$apply_to_post_types = array(
			'bm_services',
		);

		register_taxonomy( 'bm_areas', $apply_to_post_types, $args );

	}
}
