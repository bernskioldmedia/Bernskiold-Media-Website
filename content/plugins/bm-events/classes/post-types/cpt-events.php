<?php
/**
 * Custom Post Type: Events
 *
 * @package BernskioldMedia\Events
 */

namespace BernskioldMedia\Events;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class CPT_Events
 *
 * @package BernskioldMedia\Events
 */
class CPT_Events {

	/**
	 * Class CPT_Events Constructor
	 */
	public function __construct() {

		// Initialize the Post Type
		add_action( 'init', array( $this, 'post_type' ), 1 );

	}

	/**
	 * Register Post Type
	 */
	public function post_type() {

		$labels = array(
			'name'                  => _x( 'Events', 'Post Type General Name', 'bm-events' ),
			'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'bm-events' ),
			'menu_name'             => __( 'Events', 'bm-events' ),
			'name_admin_bar'        => __( 'Events', 'bm-events' ),
			'archives'              => __( 'Event Archives', 'bm-events' ),
			'parent_item_colon'     => __( 'Parent Event:', 'bm-events' ),
			'all_items'             => __( 'All Events', 'bm-events' ),
			'add_new_item'          => __( 'Add New Event', 'bm-events' ),
			'add_new'               => __( 'Add New', 'bm-events' ),
			'new_item'              => __( 'New Event', 'bm-events' ),
			'edit_item'             => __( 'Edit Event', 'bm-events' ),
			'update_item'           => __( 'Update Event', 'bm-events' ),
			'view_item'             => __( 'View Event', 'bm-events' ),
			'search_items'          => __( 'Search Events', 'bm-events' ),
			'not_found'             => __( 'Not found', 'bm-events' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'bm-events' ),
			'featured_image'        => __( 'Event Image', 'bm-events' ),
			'set_featured_image'    => __( 'Set event image', 'bm-events' ),
			'remove_featured_image' => __( 'Remove event image', 'bm-events' ),
			'use_featured_image'    => __( 'Use as event image', 'bm-events' ),
			'insert_into_item'      => __( 'Insert into event', 'bm-events' ),
			'uploaded_to_this_item' => __( 'Uploaded to this event', 'bm-events' ),
			'items_list'            => __( 'Events list', 'bm-events' ),
			'items_list_navigation' => __( 'Events list navigation', 'bm-events' ),
			'filter_items_list'     => __( 'Filter events list', 'bm-events' ),
		);

		$rewrite = array(
			'slug'       => 'events',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);

		$args = array(
			'label'               => __( 'Events', 'bm-events' ),
			'description'         => __( 'Holds events for the website.', 'bm-events' ),
			'labels'              => $labels,
			'supports'            => array( 'title' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'events',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);

		register_post_type( 'bm_events', $args );

	}
}
