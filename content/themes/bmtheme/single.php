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

				<div class="row is-fullwidth">

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
							<?php echo do_shortcode('[fbcomments]'); ?>
						</div>

					</div>

					<?php get_sidebar( 'single' ); ?>
				</div>
			</article>

			<?php comments_template(); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
