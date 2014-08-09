<?php
/**
 * Template for display the case studies single page
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

get_header(); ?>

<div class="main">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="gradient-bg">

				<div class="row page-section text-center">
					<h1 class="page-title case-study-title"><?php the_title(); ?></h1>
					<p class="case-study-link"><a href="http://<?php the_field( 'casestudy_website_link' ); ?>"><?php the_field( 'casestudy_website_link' ); ?></a></p>
				</div>

				<div class="row page-section">

					<div class="small-24 medium-8 columns">
						<p class="intro"><?php the_field( 'casestudy_intro' ); ?></p>
						<ul class="case-study-details">
							<li><i class="fa fa-user"></i> <?php _e( 'Launched', 'bernskioldmedia' ); ?> <?php the_field( 'casestudy_launch' ); ?></li>

							<?php
							$terms = get_the_terms( $post->ID, 'bm_services' );

							if( $terms ) : ?>

								<?php foreach( $terms as $term ) : ?>
									<li><i class="fa fa-tag"></i> <?php echo $term->name; ?></li>
								<?php endforeach; ?>

							<?php endif; ?>
						</ul>
					</div>

					<div class="small-24 medium-14 columns text-right">
						<img src="<?php the_field( 'casestudy_preview' ); ?>" alt="<?php the_title(); ?>">
					</div>

				</div>

			</div>

			<div class="row page-section">
				<div class="small-24 medium-20 medium-centered columns">
					<div class="case-study-body">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<?php if ( has_post_thumbnail() ) : ?>
			<div class="row page-section">
				<div class="small-24 medium-22 medium-centered columns text-center">
					<?php the_post_thumbnail( 'original', array( 'class' => 'case-study-thumbnail' ) ); ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="row page-section-3x">
				<div class="small-24 medium-8 medium-centered columns text-center">
					<p class="case-study-contact-text"><?php _e( 'Get started with your project', 'bernskioldmedia' ); ?></p>
					<p><a href="<?php echo home_url( _x( '/contact-us/', 'contact us page slug', 'bernskioldmedia' ) ); ?>" class="button expand large case-study-contact-button"><?php _e( 'Contact Us', 'bernskioldmedia' ); ?></a></p>
					<p class="case-study-contact-text"><?php _e( 'Or call us +46 (0) 31 - 313 81 40', 'bernskioldmedia' ); ?></p>
				</div>
			</div>

		<?php endwhile; ?>

	<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>