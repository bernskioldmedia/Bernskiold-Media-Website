<?php
/**
 * Custom Post Type: Clients
 *
 * @package BernskioldMedia\Clients
 */

namespace BernskioldMedia\Clients;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class CPT_Clients
 *
 * @package BernskioldMedia\Clients
 */
class CPT_Clients {

	/**
	 * Class CPT_Clients Constructor
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
			'name'                  => _x( 'Clients', 'Post Type General Name', 'bm-clients' ),
			'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'bm-clients' ),
			'menu_name'             => __( 'Clients', 'bm-clients' ),
			'name_admin_bar'        => __( 'Clients', 'bm-clients' ),
			'archives'              => __( 'Client Archives', 'bm-clients' ),
			'parent_item_colon'     => __( 'Parent Client:', 'bm-clients' ),
			'all_items'             => __( 'All Clients', 'bm-clients' ),
			'add_new_item'          => __( 'Add New Client', 'bm-clients' ),
			'add_new'               => __( 'Add New', 'bm-clients' ),
			'new_item'              => __( 'New Client', 'bm-clients' ),
			'edit_item'             => __( 'Edit Client', 'bm-clients' ),
			'update_item'           => __( 'Update Client', 'bm-clients' ),
			'view_item'             => __( 'View Client', 'bm-clients' ),
			'search_items'          => __( 'Search Clients', 'bm-clients' ),
			'not_found'             => __( 'Not found', 'bm-clients' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'bm-clients' ),
			'insert_into_item'      => __( 'Insert into client', 'bm-clients' ),
			'uploaded_to_this_item' => __( 'Uploaded to this client', 'bm-clients' ),
			'items_list'            => __( 'Clients list', 'bm-clients' ),
			'items_list_navigation' => __( 'Clients list navigation', 'bm-clients' ),
			'filter_items_list'     => __( 'Filter clients list', 'bm-clients' ),
		);

		$rewrite = array(
			'slug'       => 'clients',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);

		$args = array(
			'label'               => __( 'Clients', 'bm-clients' ),
			'labels'              => $labels,
			'supports'            => array( 'title' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-groups',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'clients',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);

		register_post_type( 'bm_clients', $args );

	}
}
