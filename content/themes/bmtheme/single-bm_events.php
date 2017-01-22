<?php
/**
 * Displays Single Event
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			if ( has_term( array( 'courses', '1-kurser' ), 'bm_event_type' ) ) {
				get_template_part( 'templates/events/courses' );
			} elseif ( has_term( array( 'on-demand', 'on-demand-sv' ), 'bm_event_type' ) ) {
				get_template_part( 'templates/events/on-demand' );
			} elseif ( has_term( array( 'lectures', 'forelasningar' ), 'bm_event_type' ) ) {
				get_template_part( 'templates/events/lectures' );
			} elseif ( has_term( array( 'online-courses', 'onlinekurser' ), 'bm_event_type' ) ) {
				get_template_part( 'templates/events/online-courses' );
			} else {
				get_template_part( 'templates/events/default' );
			}

		}
	} ?>

</main>

<?php get_footer(); ?>
