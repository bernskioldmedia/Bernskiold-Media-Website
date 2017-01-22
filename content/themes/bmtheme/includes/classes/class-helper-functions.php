<?php
/**
 * Helper Functions
 *
 * These are small helper funcitons that should not be outputting any data
 * but merely help us work with it, get it or transform it.
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

/**
 * Theme_Helpers Class
 *
 * @package BernskioldMedia\Theme
 */
class Theme_Helpers {

	/**
	 * Theme Helpers Constructor
	 */
	public function __construct() {

		add_action( 'pre_get_posts', array( $this, 'modify_case_studies_query' ) );
		add_action( 'pre_get_posts', array( $this, 'modify_clients_query' ) );

		add_filter( 'gform_address_display_format', array( $this, 'gforms_swedish_address_format' ) );

		add_filter( 'gform_pre_render_9', array( $this, 'course_registration_dates_populate' ) );
		add_filter( 'gform_pre_validation_9', array( $this, 'course_registration_dates_populate' ) );
		add_filter( 'gform_pre_submission_filter_9', array( $this, 'course_registration_dates_populate' ) );
		add_filter( 'gform_admin_pre_render_9', array( $this, 'course_registration_dates_populate' ) );

	}

	public function modify_case_studies_query( $query ) {

		if ( is_admin() || ! $query->is_main_query() ) {
			return;
		}

		if ( ! is_post_type_archive( 'bm_case_studies' ) ) {
			return;
		}

		$query->set( 'posts_per_page', 50 );
		$query->set( 'meta_query', array(
			array(
				'key'     => 'is_item_active',
				'value'   => '1',
				'compare' => '=',
			),
		) );

		return;

	}

	public function modify_clients_query( $query ) {

		if ( is_admin() || ! $query->is_main_query() ) {
			return;
		}

		if ( ! is_post_type_archive( 'bm_clients' ) ) {
			return;
		}

		$query->set( 'posts_per_page', 100 );
		$query->set( 'meta_query', array(
			'relation' => 'AND',
			array(
				'key'     => 'client_logo_dark',
				'value'   => '',
				'compare' => '!=',
			),
			array(
				'key'     => 'is_item_active',
				'value'   => '1',
				'compare' => '=',
			),
		) );

		return;

	}

	public function gforms_swedish_address_format( $format ) {
		return 'zip_before_city';
	}

	public function course_registration_dates_populate( $form ) {

		global $post;

		$course_dates = array();

		if ( have_rows( 'event_dates', $post ) ) {
			while ( have_rows( 'event_dates', $post ) ) {
				the_row();

				$from_date     = new \DateTime( get_sub_field( 'event_from_date', $post ) );
				$to_date       = new \DateTime( get_sub_field( 'event_to_date', $post ) );
				$location      = get_sub_field( 'event_location' );
				$max_attendees = get_sub_field( 'event_max_attendees', $post );
				$reg_attendees = get_sub_field( 'event_reg_attendees', $post );

				$date_text = sprintf( __( '%1$s: %2$s to %3$s', 'bmtheme' ), $location, $from_date->format( __( 'F j', 'bmtheme' ) ), $to_date->format( __( 'F j', 'bmtheme' ) ) );

				if ( $reg_attendees < $max_attendees ) {
					$course_dates[ $from_date->format( 'Y-m-d' ) ] = $date_text;
				}
			}
		}

		foreach ( $form['fields'] as &$field ) {

			if ( $field->inputName !== 'course_registration_dates' ) {
				continue;
			}

			$choices = array();

			foreach ( $course_dates as $key => $value ) {
				$choices[] = array(
					'text'  => $value,
					'value' => $key,
				);
			}

			// update 'Select a Post' to whatever you'd like the instructive option to be
			$field->choices = $choices;

		}

		return $form;
	}

}
