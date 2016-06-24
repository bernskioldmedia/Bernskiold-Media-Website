<?php
/**
 * Custom Post Type: Press Releases
 *
 * @package BernskioldMedia\Press
 */

namespace BernskioldMedia\Press;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class CPT_Press_Releases
 *
 * @package BernskioldMedia\Press
 */
class CPT_Press_Releases {

	/**
	 * Class CPT_Press_Releases Constructor
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
			'name'                  => _x( 'Press Releases', 'Post Type General Name', 'bm-press' ),
			'singular_name'         => _x( 'Press Release', 'Post Type Singular Name', 'bm-press' ),
			'menu_name'             => __( 'Press Releases', 'bm-press' ),
			'name_admin_bar'        => __( 'Press Releases', 'bm-press' ),
			'archives'              => __( 'Press Release Archives', 'bm-press' ),
			'parent_item_colon'     => __( 'Parent Press Release:', 'bm-press' ),
			'all_items'             => __( 'All Press Releases', 'bm-press' ),
			'add_new_item'          => __( 'Add New Press Release', 'bm-press' ),
			'add_new'               => __( 'Add New', 'bm-press' ),
			'new_item'              => __( 'New Press Release', 'bm-press' ),
			'edit_item'             => __( 'Edit Press Release', 'bm-press' ),
			'update_item'           => __( 'Update Press Release', 'bm-press' ),
			'view_item'             => __( 'View Press Release', 'bm-press' ),
			'search_items'          => __( 'Search Press Releases', 'bm-press' ),
			'not_found'             => __( 'Not found', 'bm-press' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'bm-press' ),
			'insert_into_item'      => __( 'Insert into press release', 'bm-press' ),
			'uploaded_to_this_item' => __( 'Uploaded to this press release', 'bm-press' ),
			'items_list'            => __( 'Press Releases list', 'bm-press' ),
			'items_list_navigation' => __( 'Press Releases list navigation', 'bm-press' ),
			'filter_items_list'     => __( 'Filter press releases list', 'bm-press' ),
		);

		$rewrite = array(
			'slug'       => 'press',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);

		$args = array(
			'label'               => __( 'Press Releases', 'bm-press' ),
			'labels'              => $labels,
			'supports'            => array( 'title' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-megaphone',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'press',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);

		register_post_type( 'bm_press_releases', $args );

	}
}
