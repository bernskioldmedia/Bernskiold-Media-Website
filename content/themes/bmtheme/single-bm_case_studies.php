<?php
/**
 * Displays Single Case Study
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
			// Get Case Fields.
			$case_image        = get_field( 'case_main_image' );
			$short_description = get_field( 'case_short_description' );
			$related_services  = get_field( 'related_services' );
			$client            = get_field( 'case_client' );
			$case_gallery      = get_field( 'case_gallery' );

			// Display the case image background.
			if ( $case_image ) {
				$background = 'style="background-image: url(' . $case_image['sizes']['large'] . ')"';
			} else {
				$background = '';
			}
			?>

			<article <?php post_class( 'case-item' ); ?> id="case-study-<?php the_ID(); ?>">

				<div class="case-item-header">
					<div class="case-item-header-overlay" <?php echo $background; ?>></div>
					<div class="row">
						<div class="case-item-header-content">
							<h1 class="page-title"><?php the_title(); ?></h1>

							<?php if ( ! empty( $short_description ) ) : ?>
								<p class="page-subtitle"><?php echo esc_html( $short_description ); ?></p>
							<?php endif; ?>

							<?php if ( $related_services ) : ?>
								<ul class="case-item-services">
									<?php foreach ( $related_services as $service ) : ?>
										<li><a href="<?php echo esc_url_raw( get_permalink( $service ) ); ?>"><?php echo esc_html( $service->post_title ); ?></a></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<div class="row is-fullwidth">
					<div class="case-item-body">
						<?php the_field( 'case_description' ); ?>
					</div>
					<div class="case-item-infobox">

						<?php
						$client_logo = get_field( 'client_logo_dark', $client );

						if ( $client_logo ) : ?>
							<div class="case-item-client-logo">
								<img src="<?php echo esc_url( $client_logo['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $client->post_title ); ?>">
							</div>
						<?php endif; ?>

						<dl>
							<dt><?php esc_html_e( 'Launch Date', 'bmtheme' ); ?></dt>
							<dd><?php the_field( 'case_date' ); ?></dd>
							<dt><?php esc_html_e( 'Client', 'bmtheme' ); ?></dt>
							<dd><?php echo esc_html( $client->post_title ); ?></dd>
							<dt><?php printf( esc_html__( 'Who are %s?', 'bmtheme' ), esc_html( $client->post_title ) ); ?></dt>
							<dd><?php the_field( 'client_short_description', $client ); ?></dd>
						</dl>

						<p class="case-item-link">
							<a href="<?php the_field( 'case_url' ); ?>" class="large hollow button"><?php esc_html_e( 'Visit Project', 'bmtheme' ); ?></a>
						</p>
					</div>
				</div>

				<?php if ( $case_gallery ) : ?>
					<div class="case-item-gallery">
						<?php foreach ( $case_gallery as $image ) : ?>
							<a href="<?php echo esc_url( $image['url'] ); ?>" class="case-item-gallery-item" style="background-image: url('<?php echo esc_url( $image['sizes']['thumbnail'] ); ?>')"></a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

				<?php get_template_part( 'partials/project-cta' ); ?>

				<?php get_template_part( 'sections/case_studies' ); ?>

			</article>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
