<?php
/**
 * Template for displaying the post archives
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<div class="post-archive">
		<div class="row align-justify">
			<div class="post-archive-content">

				<?php if ( have_posts() ) : ?>

					<h1 class="page-title archives-title">
						<?php if ( is_day() ) : ?>
							<?php printf( esc_html__( 'Daily Archives: %s', 'bmtheme' ), '<span>' . get_the_date() . '</span>' ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( esc_html__( 'Monthly Archives: %s', 'bmtheme' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( esc_html__( 'Yearly Archives: %s', 'bmtheme' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?>
						<?php else : ?>
							<?php esc_html_e( 'Article Archives', 'bmtheme' ); ?>
						<?php endif; ?>
					</h1>

					<p class="page-subtitle"><?php esc_html_e( 'Read our articles about everything digital marketing, such as strategy, WordPress, web development, search engine optimization (SEO) and much more.', 'bmtheme' ); ?></p>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; ?>

					<?php theme()->template->pagination(); ?>

				<?php else : ?>

					<p><?php esc_html_e( 'Unfortunately there are now articles available for this query.', 'bmtheme' ); ?></p>

				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</div>
	</div>

</main>

<?php get_footer(); ?>
