<?php
/**
 * Template Name: Fullwidth
 **/
namespace BernskioldMedia\Theme;

esc_html_x( 'Fullwidth', 'fullwidth page template name', 'bmtheme' );

get_header(); ?>

<main class="main" role="main">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>