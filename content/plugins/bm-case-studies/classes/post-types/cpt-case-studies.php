<?php
/**
 * Custom Post Type: Case Studies
 *
 * @package BernskioldMedia\CaseStudies
 */

namespace BernskioldMedia\CaseStudies;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class CPT_Case_Studies
 *
 * @package BernskioldMedia\CaseStudies
 */
class CPT_Case_Studies {

	/**
	 * Class CPT_Case Studies Constructor
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
			'name'                  => _x( 'Case Studies', 'Post Type General Name', 'bm-case-studies' ),
			'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'bm-case-studies' ),
			'menu_name'             => __( 'Case Studies', 'bm-case-studies' ),
			'name_admin_bar'        => __( 'Case Studies', 'bm-case-studies' ),
			'archives'              => __( 'Case Study Archives', 'bm-case-studies' ),
			'parent_item_colon'     => __( 'Parent Case Study:', 'bm-case-studies' ),
			'all_items'             => __( 'All Case Studies', 'bm-case-studies' ),
			'add_new_item'          => __( 'Add New Case Study', 'bm-case-studies' ),
			'add_new'               => __( 'Add New', 'bm-case-studies' ),
			'new_item'              => __( 'New Case Study', 'bm-case-studies' ),
			'edit_item'             => __( 'Edit Case Study', 'bm-case-studies' ),
			'update_item'           => __( 'Update Case Study', 'bm-case-studies' ),
			'view_item'             => __( 'View Case Study', 'bm-case-studies' ),
			'search_items'          => __( 'Search Case Studies', 'bm-case-studies' ),
			'not_found'             => __( 'Not found', 'bm-case-studies' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'bm-case-studies' ),
			'featured_image'        => __( 'Featured Image', 'bm-case-studies' ),
			'set_featured_image'    => __( 'Set featured image', 'bm-case-studies' ),
			'remove_featured_image' => __( 'Remove featured image', 'bm-case-studies' ),
			'use_featured_image'    => __( 'Use as featured image', 'bm-case-studies' ),
			'insert_into_item'      => __( 'Insert into case study', 'bm-case-studies' ),
			'uploaded_to_this_item' => __( 'Uploaded to this case study', 'bm-case-studies' ),
			'items_list'            => __( 'Case Studies list', 'bm-case-studies' ),
			'items_list_navigation' => __( 'Case Studies list navigation', 'bm-case-studies' ),
			'filter_items_list'     => __( 'Filter case studies list', 'bm-case-studies' ),
		);

		$rewrite = array(
			'slug'       => 'case-studies',
			'with_front' => true,
			'pages'      => true,
			'feeds'      => true,
		);

		$args = array(
			'label'               => __( 'Case Studies', 'bm-case-studies' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-portfolio',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => 'case-studies',
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
		);

		register_post_type( 'bm_case_studies', $args );

	}
}
