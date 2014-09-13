<?php
/**
 * Page Template: Service Page
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 *
 * Template Name: Service Page
 **/

// Make template name translatable
__( 'Service Page', 'bernskioldmedia' );

get_header(); ?>

<div class="service-image">
	<div class="row">
		<div class="small-24 columns">
			<?php if ( get_field( 'service_image' ) ) : ?>
				<img src="<?php the_field( 'service_image' ); ?>" alt="<?php the_title(); ?>">
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="main service-page">

	<div class="row page-section">

	<?php if ( have_posts() ) : ?>

		<div class="small-24 medium-15 large-16 columns">

		<?php while ( have_posts() ) : the_post(); ?>

		    <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1 class="page-title"><?php the_title(); ?></h1>

				<p class="intro"><?php the_field( 'page_subtitle' ); ?></p>

				<div class="page-body">
					<?php the_content(); ?>
				</div>

			</article>

		<?php endwhile; ?>

	    <?php
	    	if(function_exists('wp_pagenavi')) :
	    		wp_pagenavi(); // Add support for the WP-Pagenavi plugin if it is installed. Otherwise use the default.
	    	else :
	    		bernskioldmedia_pagination();
	    	endif;
	    ?>

	    </div>

		<div class="small-24 medium-8 large-7 columns service-sidebar sidebar">

			<?php wp_nav_menu(array(
	        'theme_location'  => 'services-menu',
	        'container'       => 'nav',
	        'container_class' => 'menu',
	        'depth'           => 1,
			)); ?>

			<?php dynamic_sidebar('service-sidebar'); ?>

		</div>

	<?php else : ?>

	    <?php get_template_part('content', '404'); // Streamline and get the 404 content from a unified file. ?>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>