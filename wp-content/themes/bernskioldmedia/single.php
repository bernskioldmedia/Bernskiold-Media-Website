<?php
/**
 * Displays Single Post
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

get_header(); ?>

<div class="main blog-index">

	<?php bm_blog_heading(); ?>

	<div class="row page-section-2x">

	<?php if ( have_posts() ) : ?>

		<div class="small-24 medium-15 large-16 columns">

		<?php while ( have_posts() ) : the_post(); ?>

		   <?php get_template_part( 'content', 'single' ); // This is where the specific post formatting is done. ?>

			<?php bm_author_box(); ?>

			<?php comments_template(); ?>

		<?php endwhile; ?>

	    </div>

		<?php get_sidebar(); ?>

	<?php else : ?>

	    <?php get_template_part('content', '404'); // Streamline and get the 404 content from a unified file. ?>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>