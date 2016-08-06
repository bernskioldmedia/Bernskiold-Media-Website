<?php
/**
 * Displays Page
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
			$service_types = get_the_terms( $post->ID, 'bm_areas' );
			$header_image = get_the_post_thumbnail_url( $post, 'large' );
			?>

			<div class="single-item-header">
				<div class="single-item-header-overlay" style="background-image: url('<?php echo esc_url_raw( $header_image ); ?>');"></div>
				<div class="row">
					<div class="single-item-header-content">

						<?php if ( ! empty( $service_types ) ) : ?>
							<ul class="single-item-type">
								<?php foreach ( $service_types as $type ) : ?>
									<li><?php echo esc_html( $type->name ); ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

						<h1 class="page-title"><?php the_title(); ?></h1>

						<p class="page-subtitle"><?php the_field( 'page_subtitle' ); ?></p>

					</div>
				</div>
			</div>

			<?php theme()->template->load_flex_page(); ?>

			<?php get_template_part( 'partials/project-cta' ); ?>

			<?php get_template_part( 'sections/case_studies' ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
