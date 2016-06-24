<?php
/**
 * Custom Post Type: Services
 *
 * @package BernskioldMedia\Services
 */

namespace BernskioldMedia\Services;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class CPT_Services
 *
 * @package BernskioldMedia\Services
 */
class CPT_Services {

	/**
	 * Class CPT_Services Constructor
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
			'name'                  => _x( 'Services', 'Post Type General Name', 'bm-services' ),
			'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'bm-services' ),
			'menu_name'             => __( 'Services', 'bm-services' ),
			'name_admin_bar'        => __( 'Services', 'bm-services' ),
			'archives'              => __( 'Service Archives', 'bm-services' ),
			'parent_item_colon'     => __( 'Parent Service:', 'bm-services' ),
			'all_items'             => __( 'All Services', 'bm-services' ),
			'add_new_item'          => __( 'Add New Service', 'bm-services' ),
			'add_new'               => __( 'Add New', 'bm-services' ),
			'new_item'              => __( 'New Service', 'bm-services' ),
			'edit_item'             => __( 'Edit Service', 'bm-services' ),
			'update_item'           => __( 'Update Service', 'bm-services' ),
			'view_item'             => __( 'View Service', 'bm-services' ),
			'search_items'          => __( 'Search Services', 'bm-services' ),
			'not_found'             => __( 'Not found', 'bm-services' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'bm-services' ),
			'featured_image'        => __( 'Service Image', 'bm-services' ),
			'set_featured_image'    => __( 'Set service image', 'bm-services' ),
			'remove_featured_image' => __( 'Remove service image', 'bm-services' ),
			'use_featured_image'    => __( 'Use as service image', 'bm-services' ),
			'insert_into_item'      => __( 'Insert into service', 'bm-services' ),
			'uploaded_to_this_item' => __( 'Uploaded to this service', 'bm-services' ),
			'items_list'            => __( 'Services list', 'bm-services' ),
			'items_list_navigation' => __( 'Services list navigation', 'bm-services' ),
			'filter_items_list'     => __( 'Filter services list', 'bm-services' ),
		);

		$rewrite = array(
			'slug'       => 'services',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);

		$args = array(
			'label'               => __( 'Services', 'bm-services' ),
			'description'         => __( 'Holds services for the website.', 'bm-services' ),
			'labels'              => $labels,
			'supports'            => array( 'title' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-book-alt',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'services',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);

		register_post_type( 'bm_services', $args );

	}
}
