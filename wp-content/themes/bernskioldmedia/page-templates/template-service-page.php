<?php
/**
 * Page Template: Service Page
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 *
 * Template Name: Service Page
 **/

// Make template name translatable
__( 'Service Page', 'bernskioldmedia' );

get_header(); ?>

<div class="service-image">
	<div class="row">
		<div class="small-24 columns">
			<?php if ( get_field( 'service_image' ) ) : ?>
				<img src="<?php the_field( 'service_image' ); ?>" alt="<?php the_title(); ?>">
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="main service-page">

	<div class="row page-section">

	<?php if ( have_posts() ) : ?>

		<div class="small-24 medium-15 large-16 columns">

		<?php while ( have_posts() ) : the_post(); ?>

		    <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1 class="page-title"><?php the_title(); ?></h1>

				<p class="intro"><?php the_field( 'page_subtitle' ); ?></p>

				<div class="page-body">
					<?php the_content(); ?>
				</div>

			</article>

		<?php endwhile; ?>

	    <?php
	    	if(function_exists('wp_pagenavi')) :
	    		wp_pagenavi(); // Add support for the WP-Pagenavi plugin if it is installed. Otherwise use the default.
	    	else :
	    		bernskioldmedia_pagination();
	    	endif;
	    ?>

	    </div>

		<div class="small-24 medium-8 large-7 columns service-sidebar sidebar">

			<?php wp_nav_menu(array(
	        'theme_location'  => 'services-menu',
	        'container'       => 'nav',
	        'container_class' => 'menu',
	        'depth'           => 1,
			)); ?>

			<?php dynamic_sidebar('service-sidebar'); ?>

		</div>

	<?php else : ?>

	    <?php get_template_part('content', '404'); // Streamline and get the 404 content from a unified file. ?>

	<?php endif; ?>

	</div>

	<?php
		$query_args = array(
			'post_type'      => 'bm_casestudies',
			'posts_per_page' => 3,
			'orderby'        => 'rand',
		);

		$query = new WP_Query( $query_args );
	?>

	<?php if ( $query->have_posts() ) : ?>

		<div class="page-section-bordered-top">

			<div class="row page-section">

				<div class="small-24 medium-20 medium-centered columns text-center">
					<h2><?php _e( 'Related Case Studies', '￼textdomain' ); ?></h2>
					<p class="intro"><?php _e( 'What better than reading about projects we have done previously for other clients as well as read what they thought about working with us and the results.', 'bernskioldmedia' ); ?></p>
				</div>

			</div>

			<div class="row page-section">

				<ul class="case-studies-grid">

					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<li class="case-study-list-item <?php echo bm_get_filter_terms( get_the_ID(), 'bm_services' ); ?>" id="case-study-<?php the_ID(); ?>">
						<a href="<?php the_permalink(); ?>">
							<div class="case-study-list-item-thumbnail">
								<img src="<?php the_field( 'casestudy_preview_thumbnail' ); ?>" alt="<?php the_title(); ?>">
								<div class="case-study-list-item-content">
									<div class="case-study-logo">
										<img src="<?php the_field( 'casestudy_preview_logo' ); ?>" alt="<?php the_title(); ?>">
									</div>
								</div>
							</div>
							<div class="case-study-list-item-info">
								<h2 class="case-study-list-item-title"><?php the_title(); ?></h2>
								<p class="case-study-list-item-subtitle"><?php the_field( 'casestudy_intro' ); ?></p>
							</div>
						</a>
					</li>
					<?php endwhile; ?>

				</ul>

			</div>

		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>