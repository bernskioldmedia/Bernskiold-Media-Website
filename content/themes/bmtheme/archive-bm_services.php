<?php
/**
 * Displays Services Archive
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php theme()->template->the_page_title_block( __( 'Services', 'bmtheme' ), __( 'Your business and the web could do wonderful things together. We provide the solutions to grow your business securely using the digital and web tools.' ) ); ?>

		<?php
		$areas = get_terms( array(
			'taxonomy'   => 'bm_areas',
			'orderby'    => 'slug',
			'order'      => 'ASC',
			'hide_empty' => false,
		) );

		if ( ! empty( $areas ) ) : ?>

			<?php foreach ( $areas as $area ) : $area_image = get_field( 'area_image', $area ) ?>

				<section class="service-area-item">
					<div class="service-area-content">
						<h3 class="service-area-name"><?php echo esc_html( $area->name ); ?></h3>
						<p class="service-area-description"><?php echo $area->description; ?></p>

						<?php
						$service_area_query_args = array(
							'post_type'      => 'bm_services',
							'posts_per_page' => 50,
							'tax_query'      => array(
								array(
									'taxonomy' => 'bm_areas',
									'field'    => 'term_id',
									'terms'    => $area->term_id,
								),
							),
						);

						$service_area_query = new \WP_Query( $service_area_query_args );
						?>

						<?php if ( $service_area_query->have_posts() ) : ?>

							<ul class="service-area-list">

								<?php while ( $service_area_query->have_posts() ) : $service_area_query->the_post(); ?>

									<li>
										<?php if ( get_field( 'is_service_linked' ) ) : ?>
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<?php else : ?>
											<?php the_title(); ?>
										<?php endif; ?>
									</li>

								<?php endwhile; ?>

							</ul>

						<?php endif; ?>
					</div>
					<div class="service-area-image" style="background-image: url('<?php echo esc_url_raw( $area_image['sizes']['medium'] ); ?>');"></div>
				</section>

			<?php endforeach; ?>

		<?php endif; ?>

		<?php get_template_part( 'partials/project-cta' ); ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
