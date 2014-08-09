<?php
/**
 * Template for display the case studies archive
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

get_header(); ?>

<div class="main">

	<div class="page-title-block">
		<div class="row">
			<div class="small-24 columns">
				<h1 class="page-title"><?php _e( 'Case Studies', 'bernskioldmedia' ); ?></h1>
				<p class="page-subtitle"><?php _e( 'We have done a lot of work that we are proud of for many different organizations around the globe. Here we\'ve collected some of our case studies for you to look at.', 'bernskioldmedia' ); ?></p>
			</div>
		</div>
	</div>

	<div class="case-study-filter-block">
		<div class="row">
			<div class="small-24 columns">
				<ul class="case-study-filter">
					<li class="case-study-filter-title"><?php _e( 'Sort:', 'bernskioldmedia' ); ?></li>
					<li class="filter" data-filter="<?php _e( 'all', 'bernskioldmedia' ); ?>"><a href="#"><?php _e( 'All', 'bernskioldmedia' ); ?></a></li>
					<li class="filter" data-filter="<?php _e( 'web-strategy', 'bernskioldmedia' ); ?>"><a href="#"><?php _e( 'Web Strategy', 'bernskioldmedia' ); ?></a></li>
					<li class="filter" data-filter="<?php _e( 'design-development', 'bernskioldmedia' ); ?>"><a href="#"><?php _e( 'Web Design & Development', 'bernskioldmedia' ); ?></a></li>
					<li class="filter" data-filter="<?php _e( 'e-commerce', 'bernskioldmedia' ); ?>"><a href="#"><?php _e( 'E-Commerce', 'bernskioldmedia' ); ?></a></li>
					<li class="filter" data-filter="<?php _e( 'mobile-solutions', 'bernskioldmedia' ); ?>"><a href="#"><?php _e( 'Mobile Solutions', 'bernskioldmedia' ); ?></a></li>
				</ul>
			</div>
		</div>
	</div>

	<?php
		$case_studies_query_args = array(
			'post_type' => 'bm_casestudies',
			'posts_per_page' => -1,
		);

		$case_studies_query = new WP_Query( $case_studies_query_args );
	?>

	<?php if ( $case_studies_query->have_posts() ) : ?>
	<div class="row page-section">

		<div class="small-24 columns">

			<ul class="case-studies-grid">

				<?php while ( $case_studies_query->have_posts() ) : $case_studies_query->the_post(); ?>
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
	    <?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>