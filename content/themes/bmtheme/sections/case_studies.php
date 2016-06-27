<?php
/**
 * Case Studies
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

$case_studies_query_args = array(
	'posts_per_page' => 6,
	'post_type'      => 'bm_case_studies',
	'orderby'        => 'rand',
);

$case_studies_query = new \WP_Query( $case_studies_query_args );

if ( $case_studies_query->have_posts() ) : ?>
	<div class="case-grid">
		<div class="row">

			<?php while ( $case_studies_query->have_posts() ) : $case_studies_query->the_post(); ?>

				<?php get_template_part( 'content', 'case-grid' ); ?>

			<?php endwhile; ?>

		</div>
	</div>
<?php endif;
wp_reset_postdata(); ?>

