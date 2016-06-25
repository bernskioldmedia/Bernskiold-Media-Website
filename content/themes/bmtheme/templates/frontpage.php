<?php
/**
 * Template Name: Frontpage
 **/
namespace BernskioldMedia\Theme;

esc_html_x( 'Frontpage', 'frontpage page template name', 'bmtheme' );

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="hero">
				<div class="row">
					<div class="hero-content">
						<h1 class="hero-title">Your Global Full-Service Digital Agency</h1>
						<p class="hero-subtitle">We develop strategies, digital marketing solutions and create beautiful web solutions to grow your business. The combination of areas means we can be your one-stop-shop for all things digital.</p>
						<ul class="hero-actions">
							<li>
								<a href="#" class="button hollow white">Learn What We Do</a>
							</li>
							<li>
								<a href="#" class="button hollow white">See Our Cases</a>
							</li>
						</ul>
					</div>
				</div>
			</section>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
