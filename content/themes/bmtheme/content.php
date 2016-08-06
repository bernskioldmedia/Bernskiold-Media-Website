<?php
/**
 * Content Template for General Posts
 **/
namespace BernskioldMedia\Theme;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-list-item' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-list-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
		</div>
	<?php endif; ?>

	<div class="post-list-content">

		<h2 class="post-list-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<div class="post-list-excerpt">
			<p><?php echo theme()->template->get_excerpt( 35 ); ?></p>
		</div>

		<p class="post-list-cta">
			<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue Reading', 'bmtheme' ); ?></a>
		</p>

	</div>

</article>
