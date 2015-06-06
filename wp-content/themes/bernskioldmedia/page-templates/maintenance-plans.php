<?php
/**
 * Template Name: Maintenance Plans
 **/

get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="page-section bg-primary">
			<div class="row">
				<div class="small-24 medium-20 medium-centered columns">
					<div class="page-section-heading-block centered">
						<h1 class="page-section-heading"><?php _e( 'WordPress Maintenance', 'hackedwp' ); ?></h1>
						<p class="page-section-subtitle"><?php _e( 'Hackers are always trying to access websites. Without ongoing maintenance, sites are more likely to be hacked which can be expensive to fix and damage your reputation. With a maintenance plan you never need to worry about your site and can feel safe that we are always looking after it.', 'hackedwp' ); ?></p>
					</div>
				</div>
			</div>
			<div class="row collapse pt2">
				<div class="small-24 medium-8 columns">
					<ul class="pricing-table">
						<li class="title"><?php _e( 'Personal', 'hackedwp' ); ?></li>
						<li class="bullet-item not-in-pkg"><?php _e( '24/7 Security Monitoring', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Daily Secure Database Cloud Backups', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( '<em>Weekly</em> Secure File Cloud Backups', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'WordPress Core Updates', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Theme & Plugin Updates', 'hackedwp' ); ?></li>
						<li class="bullet-item not-in-pkg"><?php _e( 'Site Security Scan and Protection Setup', 'hackedwp' ); ?></li>
						<li class="bullet-item not-in-pkg"><?php _e( 'Performance Optimization', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Add-on hours available', 'hackedwp' ); ?></li>
						<li class="price"><?php _e( '$29<span>/month</span>', 'hackedwp' ); ?></li>
						<li class="cta-button"><a class="button" href="<?php echo home_url( _x( '/cart/?add-to-cart=37', 'maintenance personal add to cart', 'hackedwp' ) ); ?>"><?php _e( 'Keep My Site Safe &rarr;', 'hackedwp' ); ?></a><a href="<?php echo home_url( _x( '/help/wordpress-maintenance-plan-personal/', 'maintenance personal slug', 'hackedwp' ) ); ?>" class="cta-more"><?php _e( 'Read more about this plan.', 'hackedwp' ); ?></a></li>
					</ul>
				</div>
				<div class="small-24 medium-8 columns">
					<ul class="pricing-table featured">
						<li class="title"><?php _e( 'Small Business', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( '24/7 Security Monitoring', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Daily Secure Database Cloud Backups', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( '<strong>Daily</strong> Secure File Cloud Backups', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'WordPress Core Updates', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Theme & Plugin Updates', 'hackedwp' ); ?></li>
						<li class="bullet-item not-in-pkg"><?php _e( 'Site Security Scan and Protection Setup', 'hackedwp' ); ?></li>
						<li class="bullet-item not-in-pkg"><?php _e( 'Performance Optimization', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Add-on hours available', 'hackedwp' ); ?></li>
						<li class="price"><?php _e( '$49<span>/month', 'hackedwp' ); ?></span></li>
						<li class="cta-button"><a class="button large" href="<?php echo home_url( _x( '/cart/?add-to-cart=38', 'maintenance small business add to cart', 'hackedwp' ) ); ?>"><?php _e( 'Keep My Site Safe &rarr;', 'hackedwp' ); ?></a><a href="<?php echo home_url( _x( '/help/wordpress-maintenance-plan-small-business/', 'maintenance small business slug', 'hackedwp' ) ); ?>" class="cta-more"><?php _e( 'Read more about this plan.', 'hackedwp' ); ?></a></li>
					</ul>
				</div>
				<div class="small-24 medium-8 columns">
					<ul class="pricing-table">
						<li class="title"><?php _e( 'Business', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( '24/7 Security Monitoring', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Daily Secure Database Cloud Backups', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( '<strong>Daily</strong> Secure File Cloud Backups', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'WordPress Core Updates', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Theme & Plugin Updates', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Site Security Scan and Protection Setup', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Performance Optimization', 'hackedwp' ); ?></li>
						<li class="bullet-item"><?php _e( 'Add-on hours available', 'hackedwp' ); ?></li>
						<li class="price"><?php _e( '$99<span>/month','hackedwp' ); ?></span></li>
						<li class="cta-button"><a class="button" href="<?php echo home_url( _x( '/cart/?add-to-cart=40', 'maintenance business add to cart', 'hackedwp' ) ); ?>"><?php _e( 'Keep My Site Safe &rarr;', 'hackedwp' ); ?></a><a href="<?php echo home_url( _x( '/help/wordpress-maintenance-plan-business/', 'maintenance business slug', 'hackedwp' ) ); ?>" class="cta-more"><?php _e( 'Read more about this plan.', 'hackedwp' ); ?></a></li>
					</ul>
				</div>
			</div>
			<div class="row pt3">
				<div class="small-24 medium-18 medium-centered columns">
					<h3><?php _e( 'Enterprise', 'hackedwp' ); ?></h3>
					<p><?php _e( 'Build on the Business package with custom additions for your unique and exact needs. Enterprise customers will benefit from Service Level Agreements (SLA) and dedicated resources. We work out a package based on exactly what you need.', 'hackedwp' ); ?></p>
					<p><a href="<?php echo home_url( _x( '/contact/', 'contact us page slug', 'hackedwp' ) ); ?>" class="button alt-button white"><?php _e( 'Contact Us &rarr;', 'hackedwp' ); ?></a></p>
				</div>
			</div>
		</section>

	<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('content', '404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>