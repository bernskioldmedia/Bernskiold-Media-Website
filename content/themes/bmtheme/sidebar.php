<?php
/**
 * Displays Main Sidebar
 **/
namespace BernskioldMedia\Theme;
?>
<aside class="post-archive-sidebar sidebar">

	<h2 class="h3"><?php esc_html_e( 'Editor\'s Picks', 'bmtheme' ); ?></h2>
	<p class="intro"><?php esc_html_e( 'These are articles that our editors have picked from the archives.', 'bmtheme' ); ?></p>

	<?php
	$popular_articles_query_args = array(
		'post_type'      => 'post',
		'posts_per_page' => 4,
		'orderby'        => 'rand',
	);

	$popular_articles_query = new \WP_Query( $popular_articles_query_args );

	if ( $popular_articles_query->have_posts() ) : ?>

		<?php while ( $popular_articles_query->have_posts() ) : $popular_articles_query->the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" class="editor-pick-thumbnail post-thumbnail" style="background-image: url('<?php echo esc_url_raw( get_the_post_thumbnail_url() ); ?>');"></a>
				<?php endif; ?>

				<h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php echo esc_html( theme()->template->get_excerpt( 15 ) ); ?></p>
			</article>

		<?php endwhile; ?>

	<?php endif;
	wp_reset_postdata(); ?>

	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
