<?php
/**
 * Include the Advanced Custom Fields fields through PHP
 *
 * This plugin relies on a series of fields through Advanced Custom Fields.
 * The fields for the case studies are presented in here.
 *
 * @author  Erik Bernskiold
 */
class BM_Case_Studies_ACF_Fields {

	/**
	 * We register the fields directly in the constructor.
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'case_study_fields' ) );

	}

	public function case_study_fields() {

		if(function_exists("register_field_group"))
		{
			register_field_group(array (
				'id' => 'acf_case-study-meta',
				'title' => 'Case Study Meta',
				'fields' => array (
					array (
						'key' => 'field_53087c2b99943',
						'label' => 'Website Link',
						'name' => 'casestudy_website_link',
						'type' => 'text',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53087e21b49d9',
						'label' => 'Grid Preview Thumbnail',
						'name' => 'casestudy_preview_thumbnail',
						'instructions' => 'Upload a thumbnail for the archive grid. Image size: 300x350px.',
						'type' => 'image',
						'required' => 1,
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_53087e21b49c2',
						'label' => 'Grid Preview Logo',
						'name' => 'casestudy_preview_logo',
						'instructions' => 'Upload a white logo on a transparent background (PNG). Image size: 300x350px.',
						'type' => 'image',
						'required' => 1,
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_53820dc7257d7',
						'label' => 'Introduction',
						'name' => 'casestudy_intro',
						'type' => 'text',
						'instructions' => 'Very short introductionary text about the project.',
						'required' => 1,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53820de2257d8',
						'label' => 'Launch Date',
						'name' => 'casestudy_launch',
						'type' => 'text',
						'instructions' => 'When was this project launched?',
						'required' => 1,
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53820dfb257d9',
						'label' => 'Preview Image',
						'name' => 'casestudy_preview',
						'type' => 'image',
						'instructions' => 'Upload a preview image for the first part of this case study.
			Image size: 650x350',
						'required' => 1,
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'bm_casestudies',
							'order_no' => 0,
							'group_no' => 0,
						),
					),
				),
				'options' => array (
					'position' => 'normal',
					'layout' => 'default',
					'hide_on_screen' => array (
					),
				),
				'menu_order' => 0,
			));
		}
	}

}
new BM_Case_Studies_ACF_Fields();