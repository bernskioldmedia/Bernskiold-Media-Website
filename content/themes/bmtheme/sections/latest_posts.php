<?php
/**
 * Text Section
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

$latest_posts_query_args = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'no_found_rows'  => true,
);

$latest_posts_query = new \WP_Query( $latest_posts_query_args );

if ( $latest_posts_query->have_posts() ) : ?>

	<section class="section-header pb2">
		<div class="row">
			<div class="section-header-content">
				<h2 class="section-title"><?php esc_html_e( 'Latest Academy Posts', 'bmtheme' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Learn digital marketing, web, business and all related topics in our academy. Articles, videos, e-books and more for your benefit.', 'bmtheme' ); ?></p>
			</div>
		</div>
	</section>
	<section class="academy-index-grid">

		<?php while ( $latest_posts_query->have_posts() ) : $latest_posts_query->the_post(); ?>

			<article <?php post_class( 'academy-grid-item' ); ?> id="post-<?php the_ID(); ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" class="post-thumbnail" style="background-image: url('<?php echo esc_url_raw( get_the_post_thumbnail_url() ); ?>');"></a>
				<?php endif; ?>

				<h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<p><?php echo esc_html( theme()->template->get_excerpt( 12 ) ); ?></p>
			</article>

		<?php endwhile; ?>

	</section>

	<section class="section-footer">
		<div class="row">
			<div class="small-24 columns">
				<p class="text-center"><a href="<?php echo esc_url_raw( home_url( 'articles' ) ); ?>" class="large hollow button mb0"><?php esc_html_e( 'To the articles archive', 'bmtheme' ); ?></a></p>
			</div>
		</div>
	</section>

<?php endif; ?>
<?php wp_reset_postdata(); ?>
