<?php
/**
 * Displays Search Results
 *
 * Template Name: Search
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<section class="section has-spacing border-top border-bottom">
		<div class="row">
			<div class="small-24 columns">
				<?php get_search_form(); ?>
			</div>
		</div>
	</section>

	<?php if ( get_search_query() ) : ?>

		<?php if ( have_posts() ) : ?>

			<div class="row pt2">
				<div class="small-24 columns">
					<h1 class="h2 text-center search-page-title">
						<?php printf( esc_html__( 'Search Results for: %s', 'bmtheme' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1>
				</div>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php theme()->template->pagination(); ?>

		<?php else : ?>

			<div class="section has-spacing text-center">
				<div class="row">
					<div class="small-24 columns">
						<h1 class="page-title h2 search-page-title"><?php esc_html_e( 'No Reults Found', 'bmtheme' ); ?></h1>

						<p><?php esc_html_e( 'Unfortunately we could not find any results for your search query. Please try again with another query.', 'bmtheme' ); ?></p>
					</div>
				</div>
			</div>

		<?php endif; ?>

	<?php else : ?>

		<div class="section text-center has-spacing">
			<div class="row">
				<div class="small-24 columns">
					<p class="intro"><?php esc_html_e( 'Please type in your search query above to search.', 'bmtheme' ); ?></p>
				</div>
			</div>
		</div>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
