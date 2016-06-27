<?php
/**
 * Displays Case Studies Archive
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php theme()->template->the_page_title_block( __( 'Case Studies', 'bmtheme' ), __( 'Wondering what we have done? You\'ve come to the right place. Here we have collected some of the work that we have done.' ) ); ?>

		<div class="case-archive-list">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				$main_image       = get_field( 'case_main_image' );
				$related_services = get_field( 'related_services' );
				$client           = get_field( 'case_client' );
				?>

				<a href="<?php the_permalink(); ?>" <?php post_class( 'case-archive-item' ); ?> id="case-<?php the_ID(); ?>">

					<div class="case-archive-item-content">

						<?php
						$client_logo = get_field( 'client_logo_light', $client );

						if ( $client_logo ) : ?>
							<div class="case-archive-item-client-logo">
								<img src="<?php echo esc_url( $client_logo['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $client->post_title ); ?>">
							</div>
						<?php else : ?>
							<h3><?php the_title(); ?></h3>
						<?php endif; ?>

						<p class="case-archive-item-description">
							<?php the_field( 'case_short_description' ); ?>
						</p>

						<?php if ( $related_services ) : ?>
							<ul class="case-archive-item-services">
								<?php foreach ( $related_services as $service ) : ?>
									<li><?php echo esc_html( $service->post_title ); ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

						<p class="case-archive-item-action">
							<span class="hollow button"><?php esc_html_e( 'Read Case Study', 'bmtheme' ); ?></span>
						</p>

					</div>

					<div class="case-archive-item-image" style="background-image: url('<?php echo esc_url_raw( $main_image['sizes']['large'] ); ?>');"></div>

				</a>

			<?php endwhile; ?>

		</div>

		<?php
		$client_query_args = array(
			'post_type'     => 'bm_clients',
			'post_per_page' => 8,
			'meta_query'    => array(
				'relation' => 'AND',
				array(
					'key'     => 'client_is_selected',
					'value'   => '1',
					'compare' => '=',
				),
				array(
					'key'     => 'client_logo_dark',
					'value'   => '',
					'compare' => '!=',
				),
			),
		);

		$client_query = new \WP_Query( $client_query_args );
		?>

		<?php if ( $client_query->have_posts() ) : ?>

			<section class="section-header">
				<div class="row">
					<div class="section-header-content">
						<h2 class="section-title"><?php esc_html_e( 'Our Clients', 'bmtheme' ); ?></h2>
						<p class="section-subtitle"><?php esc_html_e( 'Here is a list of many of the clients that are working with, or have worked with over the years.', 'bmtheme' ); ?></p>
					</div>
				</div>
			</section>

			<div class="client-grid">

				<?php while ( $client_query->have_posts() ) : $client_query->the_post(); ?>

					<?php
					$client_logo = get_field( 'client_logo_dark' );
					?>

					<div class="client-grid-item">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo esc_url_raw( $client_logo['sizes']['medium'] ); ?>" alt="<?php the_title(); ?>">
						</a>
					</div>

				<?php endwhile; ?>

			</div>

			<?php get_template_part( 'partials/project-cta' ); ?>

		<?php endif; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
