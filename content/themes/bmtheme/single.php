<?php
/**
 * Displays Single Post
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) :
			the_post(); ?>

			<article <?php post_class( 'single-post' ); ?> id="post-<?php the_ID(); ?>">

				<div class="post-item-image" style="background-image: url('<?php the_post_thumbnail_url( 'large )' ); ?>');"></div>

				<div class="post-item-header">
					<div class="row">
						<div class="post-item-header-content">

							<div class="single-post-date">
								<?php the_time( __( 'F j, Y', 'bmtheme' ) ); ?>
							</div>

							<h1 class="page-title single-post-title"><?php the_title(); ?></h1>

							<?php
							$post_categories = get_the_terms( $post, 'category' );

							if ( ! empty( $post_categories ) ) : ?>
								<ul class="single-post-category">
									<?php foreach ( $post_categories as $category ) : ?>
										<li>
											<a href="<?php echo esc_url_raw( get_term_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

						</div>
					</div>
				</div>

				<section class="section">

					<div class="single-post-body">

						<?php the_content(); ?>

						<div class="single-post-author-box">
							<div class="row">

								<div class="single-post-author-box-avatar">
									<?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
								</div>

								<div class="single-post-author-box-info">
									<h2 class="post-author-box-name"><?php the_author(); ?></h2>
									<p class="post-author-box-bio"><?php the_author_meta( 'description' ); ?></p>
								</div>

							</div>
						</div>

						<div class="single-post-comments">
							<?php echo do_shortcode( '[fbcomments]' ); ?>

							<?php comments_template(); ?>
						</div>

					</div>

				</section>
			</article>

		<?php endwhile; ?>

	<?php endif; ?>

	<?php
	$popular_articles_query_args = array(
		'post_type'      => 'post',
		'posts_per_page' => 8,
		'orderby'        => 'rand',
	);

	$popular_articles_query = new \WP_Query( $popular_articles_query_args );

	if ( $popular_articles_query->have_posts() ) : ?>

	<section class="section">
		<header class="section-header pb2">
			<div class="row">
				<div class="column">
					<h2><?php esc_html_e( 'Editor\'s Picks', 'bmtheme' ); ?></h2>
					<p class="intro"><?php esc_html_e( 'These are articles that our editors have picked from the archives.', 'bmtheme' ); ?></p>
				</div>
			</div>
		</header>

		<div class="row small-up-1 medium-up-2 large-up-3 xlarge-up-4">

			<?php while ( $popular_articles_query->have_posts() ) : $popular_articles_query->the_post(); ?>

				<div class="column">

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="editor-pick-thumbnail post-thumbnail" style="background-image: url('<?php echo esc_url_raw( get_the_post_thumbnail_url() ); ?>');"></a>
						<?php endif; ?>

						<h3 class="h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo esc_html( theme()->template->get_excerpt( 15 ) ); ?></p>
					</article>

				</div>

			<?php endwhile; ?>

		</div>

	</section>

	<?php endif;
	wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>
