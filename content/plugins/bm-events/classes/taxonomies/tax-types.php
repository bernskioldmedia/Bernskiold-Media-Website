<?php
/**
 * Custom Taxonomy: Event Types
 *
 * @package BernskioldMedia\Events
 */

namespace BernskioldMedia\Events;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class Tax_Types
 *
 * @package BernskioldMedia\Events
 */
class Tax_Types {

	/**
	 * Class Tax_Types Constructor
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
				'name'                       => _x( 'Event Types', 'Taxonomy General Name', 'bm-events' ),
				'singular_name'              => _x( 'Event Type', 'Taxonomy Singular Name', 'bm-events' ),
				'menu_name'                  => __( 'Event Types', 'bm-events' ),
				'all_items'                  => __( 'All Event Types', 'bm-events' ),
				'parent_item'                => __( 'Parent Event Type', 'bm-events' ),
				'parent_item_colon'          => __( 'Parent Event Type:', 'bm-events' ),
				'new_item_name'              => __( 'New Event Type Name', 'bm-events' ),
				'add_new_item'               => __( 'Add New Event Type', 'bm-events' ),
				'edit_item'                  => __( 'Edit Event Type', 'bm-events' ),
				'update_item'                => __( 'Update Event Type', 'bm-events' ),
				'view_item'                  => __( 'View Event Type', 'bm-events' ),
				'separate_items_with_commas' => __( 'Separate event types with commas', 'bm-events' ),
				'add_or_remove_items'        => __( 'Add or remove event types', 'bm-events' ),
				'choose_from_most_used'      => __( 'Choose from the most used', 'bm-events' ),
				'popular_items'              => __( 'Popular Event Types', 'bm-events' ),
				'search_items'               => __( 'Search Event Types', 'bm-events' ),
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
				'bm_events',
			);

			register_taxonomy( 'bm_event_type', $apply_to_post_types, $args );

	}
}
