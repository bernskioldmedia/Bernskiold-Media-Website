<?php
/**
 * Displays Tag Archives
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<h1 class="page-title tag-heading">
			<?php printf( __( 'Tag Archives: %s', 'bernskioldmedia' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
		</h1>

		<?php
			$tag_description = tag_description();
			if ( ! empty( $tag_description ) )
				echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
		?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part('content', get_post_format()); ?>

		<?php endwhile; ?>

		<?php
	    		if(function_exists('wp_pagenavi')) :
	    			wp_pagenavi(); // Add support for the WP-Pagenavi plugin if it is installed. Otherwise use the default.
	    		else :
	    			bernskioldmedia_pagination();
	    		endif;
		?>

	<?php else : ?>

		<?php get_template_part('content', '404'); // Streamline and get the 404 content from a unified file. ?>

	<?php endif; ?>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>