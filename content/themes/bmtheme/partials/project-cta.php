<?php
/**
 * Project CTA Section
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;
?>
<div class="project-cta">
	<div class="row">
		<div class="project-cta-content">
			<h2 class="section-title"><?php esc_html_e( 'Let\'s get started on your project!', 'bmtheme' ); ?></h2>
			<p class="section-subtitle"><?php esc_html_e( 'We\'d love to talk about your project. Contact us directly, or leave a message below and we will get back to you as soon as possible.', 'bmtheme' ); ?></p>
			<div class="row medium-unstack">
				<div class="project-cta-person">
					<div class="row">
						<div class="small-24 medium-10 large-11 columns">
							<img src="<?php echo wp_upload_dir()['url']; ?>/erik-bernskiold-square-500px-300x300.jpg" alt="" class="image-rounded">
						</div>
						<div class="small-24 medium-14 large-13 columns">
							<p>
								<strong class="intro"><?php esc_html_e( 'Erik Bernskiold', 'bmtheme' ); ?></strong><br>
								<?php esc_html_e( 'Managing Director', 'bmtheme' ); ?>
							</p>
							<p>
								<strong><?php esc_html_e( 'Phone:', 'bmtheme' ); ?></strong><br><a href="tel://+4631102011" class="no-link"><?php esc_html_e( '+46 31 10 20 11', 'bmtheme' ); ?></a><br>
								<strong>E-mail:</strong><br><a href="mailto:erik@bernskioldmedia.com" class="no-link"><?php esc_html_e( 'erik@bernskioldmedia.com', 'bmtheme' ); ?></a>
							</p>
						</div>
					</div>
				</div>
				<div class="project-cta-form">
					<?php echo do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
