<?php
/**
 * Displays Clients Archive
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php theme()->template->the_page_title_block( __( 'Clients', 'bmtheme' ), __( 'Wondering who we have worked for before? Here is a list of most of the clients we are working with, or have worked with in the past.' ) ); ?>

		<div class="client-grid">

			<?php while ( have_posts() ) : the_post(); ?>

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

</main>

<?php get_footer(); ?>
