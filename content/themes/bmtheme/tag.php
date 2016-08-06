<?php
/**
 * Template for the Category Archives
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<div class="post-archive">
		<div class="row align-justify">
			<div class="post-archive-content">

				<?php if ( have_posts() ) : ?>

					<h1 class="page-title"><?php single_tag_title( '' ); ?></h1>

					<?php
					$tag_description = tag_description();

					if ( ! empty( $tag_description ) ) {
						echo apply_filters( 'tag_archive_meta', '<p class="page-subtitle">' . $tag_description . '</p>' );
					}
					?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>

					<?php endwhile; ?>

					<?php theme()->template->pagination(); ?>

				<?php else : ?>

					<p><?php esc_html_e( 'Unfortunately there are now articles available for this query.', 'bmtheme' ); ?></p>

				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>

</main>

<?php get_footer(); ?>
