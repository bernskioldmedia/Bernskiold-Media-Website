<?php
/**
 * Custom Post Type: Testimonials
 *
 * @package BernskioldMedia\Testimonials
 */

namespace BernskioldMedia\Testimonials;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class CPT_Testimonials
 *
 * @package BernskioldMedia\Testimonials
 */
class CPT_Testimonials {

	/**
	 * Class CPT_Testimonials Constructor
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
			'name'                  => _x( 'Testimonials', 'Post Type General Name', 'bm-testimonials' ),
			'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'bm-testimonials' ),
			'menu_name'             => __( 'Testimonials', 'bm-testimonials' ),
			'name_admin_bar'        => __( 'Testimonials', 'bm-testimonials' ),
			'archives'              => __( 'Testimonial Archives', 'bm-testimonials' ),
			'parent_item_colon'     => __( 'Parent Testimonial:', 'bm-testimonials' ),
			'all_items'             => __( 'All Testimonials', 'bm-testimonials' ),
			'add_new_item'          => __( 'Add New Testimonial', 'bm-testimonials' ),
			'add_new'               => __( 'Add New', 'bm-testimonials' ),
			'new_item'              => __( 'New Testimonial', 'bm-testimonials' ),
			'edit_item'             => __( 'Edit Testimonial', 'bm-testimonials' ),
			'update_item'           => __( 'Update Testimonial', 'bm-testimonials' ),
			'view_item'             => __( 'View Testimonial', 'bm-testimonials' ),
			'search_items'          => __( 'Search Testimonials', 'bm-testimonials' ),
			'not_found'             => __( 'Not found', 'bm-testimonials' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'bm-testimonials' ),
			'insert_into_item'      => __( 'Insert into testimonial', 'bm-testimonials' ),
			'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'bm-testimonials' ),
			'items_list'            => __( 'Testimonials list', 'bm-testimonials' ),
			'items_list_navigation' => __( 'Testimonials list navigation', 'bm-testimonials' ),
			'filter_items_list'     => __( 'Filter testimonials list', 'bm-testimonials' ),
		);

		$args = array(
			'label'               => __( 'Testimonials', 'bm-testimonials' ),
			'description'         => __( 'Holds testimonials for the website.', 'bm-testimonials' ),
			'labels'              => $labels,
			'supports'            => array( 'title' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-format-quote',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'testimonials',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => false,
			'capability_type'     => 'page',
		);

		register_post_type( 'bm_testimonials', $args );

	}
}
