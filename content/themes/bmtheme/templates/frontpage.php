<?php
/**
 * Template Name: Frontpage
 **/
namespace BernskioldMedia\Theme;

esc_html_x( 'Frontpage', 'frontpage page template name', 'bmtheme' );

get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section class="hero">
			<div class="row">
				<div class="hero-content">
					<h1 class="hero-title"><?php esc_html_e( 'Your Global Full-Service Boutique Digital Agency', 'bmtheme' ); ?></h1>
					<p class="hero-subtitle"><?php esc_html_e( 'We develop strategies, digital marketing solutions and create beautiful web solutions to grow your business. The combination of areas means we can be your one-stop-shop for all things digital.', 'bmtheme' ); ?></p>
					<ul class="hero-actions">
						<li>
							<a href="<?php echo esc_url( home_url( 'services' ) ); ?>" class="button hollow white"><?php esc_html_e( 'Learn What We Do', 'bmtheme' ); ?></a>
						</li>
						<li>
							<a href="<?php echo esc_url( home_url( 'case-studies' ) ); ?>" class="button hollow white"><?php esc_html_e( 'See Our Cases', 'bmtheme' ); ?></a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<main class="main" role="main" id="content">

			<?php theme()->template->load_flex_page(); ?>

		</main>

	<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
