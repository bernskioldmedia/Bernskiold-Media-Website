<?php
/**
 * Displays Page
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

get_header(); ?>

<div class="main">

	<div class="page-title-block">
		<div class="row">
			<div class="small-24 columns">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<p class="page-subtitle"><?php the_field( 'page_subtitle' ); ?></p>
			</div>
		</div>
	</div>

	<div class="row page-section">

	<?php if ( have_posts() ) : ?>

		<div class="small-24 columns">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="page-content">
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

	<?php else : ?>

	    <?php get_template_part('content', '404'); // Streamline and get the 404 content from a unified file. ?>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>