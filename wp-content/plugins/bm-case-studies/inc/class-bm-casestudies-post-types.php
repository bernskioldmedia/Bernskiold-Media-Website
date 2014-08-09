<?php
/**
 * Post Types
 */

class BM_Case_Studies_Post_Types {

	public function __construct() {

		// Register case studies post type
		add_action( 'init', array( $this, 'case_studies' ) );

		// Add the services taxonomy
		add_action( 'init', array( $this, 'services' ), 0 );

	}

	/**
	 * Register the Case Studies Post Type
	 */
	public function case_studies() {

		register_post_type( 'bm_casestudies', array(
			'label' 					 => _x( 'Case Studies', 'A plural descriptive name for the post type marked for translation.', 'bmcasestudies' ),
			'labels' 				 => array(
				'name'               => _x( 'Case Studies', 'general name for the post type, usually plural', 'bmcasestudies' ),
				'singular_name'      => _x( 'Case Study', 'name for one object of this post type', 'bmcasestudies' ),
				'menu_name'          => _x( 'Case Studies', 'the menu name text', 'bmcasestudies' ),
				'all_items'          => _x( 'All Case Studies', 'the all items text used in the menu', 'bmcasestudies' ),
				'add_new'            => _x( 'Add New', 'the add new text', 'bmcasestudies' ),
				'add_new_item'       => _x( 'Add New Case Study', 'the add new item text', 'bmcasestudies' ),
				'edit_item'          => _x( 'Edit Case Study', 'the edit item text', 'bmcasestudies' ),
				'new_item'           => _x( 'New Case Study', 'the new item text', 'bmcasestudies' ),
				'view_item'          => _x( 'View Case Study', 'the view item text', 'bmcasestudies' ),
				'search_items'       => _x( 'Search Case Studies', 'the search items text', 'bmcasestudies' ),
				'not_found'          => _x( 'No case studies found', 'the not found text', 'bmcasestudies' ),
				'not_found_in_trash' => _x( 'No case studies found in Trash', ' not found in trash text', 'bmcasestudies' ),
				'parent_item_colon'  => _x( 'Parent Case Study', 'the parent text', 'bmcasestudies' ),
			),
			'description'         => _x( 'Contains all the case studies', 'gone camping post type description', 'bmcasestudies' ),
			'public'              => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_nav_menus'   => false,
			'show_in_menu'        => true,
			'capability_type'     => 'page',
			'hierarchial'         => false,
			'menu_icon'				 => BMCS_PLUGIN_URL . '/assets/images/case-studies-post-type.png',
			'supports' => array(
				'title',
				'author',
				'thumbnail',
				'editor',
			),
			'has_archive' 			 => 'case-studies',
			'rewrite' 				 => array(
				'slug' 				 => 'case-studies',
			),
		));

	}

	/**
	 * Register the Taxonomy "Services"
	 *
	 * @return void
	 */
	public function services() {

		$labels = array(
		'name'                       => _x( 'Services', 'Taxonomy General Name', 'bmcasestudies' ),
		'singular_name'              => _x( 'Service', 'Taxonomy Singular Name', 'bmcasestudies' ),
		'menu_name'                  => __( 'Services', 'bmcasestudies' ),
		'all_items'                  => __( 'All Services', 'bmcasestudies' ),
		'parent_item'                => __( 'Parent Service', 'bmcasestudies' ),
		'parent_item_colon'          => __( 'Parent Service:', 'bmcasestudies' ),
		'new_item_name'              => __( 'New Service Name', 'bmcasestudies' ),
		'add_new_item'               => __( 'Add New Service', 'bmcasestudies' ),
		'edit_item'                  => __( 'Edit Service', 'bmcasestudies' ),
		'update_item'                => __( 'Update Service', 'bmcasestudies' ),
		'separate_items_with_commas' => __( 'Separate services with commas', 'bmcasestudies' ),
		'search_items'               => __( 'Search Services', 'bmcasestudies' ),
		'add_or_remove_items'        => __( 'Add or remove services', 'bmcasestudies' ),
		'choose_from_most_used'      => __( 'Choose from the most used services', 'bmcasestudies' ),
		'not_found'                  => __( 'Not Found', 'bmcasestudies' ),
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

	register_taxonomy( 'bm_services', 'bm_casestudies', $args );

	}

}
new BM_Case_Studies_Post_Types();