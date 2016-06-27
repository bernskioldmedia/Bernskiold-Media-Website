<?php
/**
 * Template Name: Academy
 **/
namespace BernskioldMedia\Theme;

esc_html_x( 'Academy', 'academy page template name', 'bmtheme' );

get_header(); ?>

<?php theme()->template->the_page_title_block( __( 'Academy', 'bmtheme' ), __( 'Learning is not just important but fun. In the academy we publish content for you to learn new insights and help you improve: From articles to e-books and courses.', 'bmtheme' ) ); ?>

<section class="section">
	<div class="row">
		<div class="academy-main">

			<?php
			$latest_post_query_args = array(
				'post_type'      => 'post',
				'posts_per_page' => 1,
			);

			$latest_post_query = new \WP_Query( $latest_post_query_args );

			if ( $latest_post_query->have_posts() ) : ?>

				<div class="row">

					<?php while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post(); ?>

						<article <?php post_class( 'academy-featured-post' ); ?> id="post-<?php the_ID(); ?>">

							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" class="post-thumbnail" style="background-image: url('<?php echo esc_url_raw( get_the_post_thumbnail_url() ); ?>');"></a>
							<?php endif; ?>

							<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p class="post-excerpt"><?php echo esc_html( theme()->template->get_excerpt( 50 ) ); ?></p>
							<p>
								<a href="<?php the_permalink(); ?>" class="text-bold"><?php esc_html_e( 'Continue Reading &rarr;', 'bmtheme' ); ?></a>
							</p>
						</article>

					<?php endwhile; ?>

				</div>

			<?php endif;
			wp_reset_postdata(); ?>

			<?php
			$latest_six_query_args = array(
				'post_type'      => 'post',
				'posts_per_page' => 6,
				'offset'         => 1,
			);

			$latest_six_query = new \WP_Query( $latest_six_query_args );

			if ( $latest_six_query->have_posts() ) : ?>

				<div class="academy-index-grid">

					<?php while ( $latest_six_query->have_posts() ) : $latest_six_query->the_post(); ?>

						<article <?php post_class( 'academy-grid-item' ); ?> id="post-<?php the_ID(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" class="post-thumbnail" style="background-image: url('<?php echo esc_url_raw( get_the_post_thumbnail_url() ); ?>');"></a>
							<?php endif; ?>

							<h5 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						</article>

					<?php endwhile; ?>

				</div>

				<p class="mt2 mb0 text-center"><a href="<?php echo esc_url_raw( home_url( 'articles' ) ); ?>" class="large hollow button mb0"><?php esc_html_e( 'To the articles archive', 'bmtheme' ); ?></a></p>

			<?php endif;
			wp_reset_postdata(); ?>

		</div>
		<div class="academy-editors-picks">

			<h2><?php esc_html_e( 'Editor\'s Picks', 'bmtheme' ); ?></h2>
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
							<a href="<?php the_permalink(); ?>" class="post-thumbnail" style="background-image: url('<?php echo esc_url_raw( get_the_post_thumbnail_url() ); ?>');"></a>
						<?php endif; ?>

						<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo esc_html( theme()->template->get_excerpt( 15 ) ); ?></p>
					</article>

				<?php endwhile; ?>

			<?php endif;
			wp_reset_postdata(); ?>

		</div>
	</div>
</section>

<section class="section">
	<div class="section-header">
		<div class="row">
			<div class="section-header-content">
				<h2 class="section-title"><?php _e( 'All Our Topics', 'bernskioldmedia' ); ?></h2>
				<p class="section-subtitle"><?php _e( 'The academy features insights into a diverse range of sub-topics within our major headlines. Find your favorite topic below.', 'bernskioldmedia' ); ?></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<?php wp_nav_menu(array(
				'theme_location'  => 'blog-topics-menu',
				'container'       => 'nav',
				'container_class' => 'topic-overview',
				'depth'           => 2,
			)); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
