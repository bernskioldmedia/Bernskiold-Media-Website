<?php
/**
 * Displays the site footer
 **/
namespace BernskioldMedia\Theme;
?>
<footer class="site-footer">
	<div class="row">
		<div class="small-24 columns">
			<?php wp_nav_menu( array(
				'theme_location'  => 'primary-menu',
				'container'       => 'nav',
				'container_class' => 'footer-menu',
				'container_id'    => 'js-footer-menu',
				'menu_class'      => 'inline-block-list',
				'fallback_cb'     => '',
				'depth'           => 1,
			) ); ?>
		</div>
	</div>
	<div class="row">
		<div class="small-24 medium-12 columns">
			<p class="footer-colophon"><?php _e( '<strong>Bernskiold Media</strong> is a boutique full service digital agency and web agency based in Sweden with offices in Stockholm and Gothenburg.', 'bmtheme' ); ?>
				<a href="<?php echo esc_url( home_url( 'about-us' ) ); ?>"><?php esc_html_e( 'Read More', 'bmtheme' ); ?></a>
			</p>
		</div>
		<div class="small-24 medium-12 columns">
			<form action="//bernskioldmedia.us1.list-manage.com/subscribe/post?u=692fa400bc84329b1d105c071&amp;id=3806350390" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<h3 class="h4"><?php esc_html_e( 'Actionable Insights Monthly Right In Your Inbox', 'bernskioldmedia' ); ?></h3>
				<div class="row">
					<div class="small-14 medium-24 large-16 columns">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?php esc_attr_e( 'Your email address', 'bernskioldmedia' ); ?>">
					</div>
					<div class="small-10 medium-24 large-8 columns">
						<input type="submit" value="<?php esc_attr_e( 'Subscribe', 'bernskioldmedia' ); ?>" class="button outline expand light" id="newsletter-submission">
					</div>
				</div>
				<div style="position: absolute; left: -5000px;">
					<input type="text" name="b_692fa400bc84329b1d105c071_3806350390" tabindex="-1" value=""></div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="small-24 medium-24 large-7 columns pb1">
			<h3><?php esc_html_e( 'Contact Us', 'bmtheme' ); ?></h3>
			<p class="intro"><?php esc_html_e( 'Stop by our offices to say hi, give us a call or send us a message and we\'ll talk.', 'bmtheme' ); ?></p>
		</div>
		<div class="small-12 medium-8 large-5 columns">
			<h4><?php esc_html_e( 'Stockholm (HQ)', 'bmtheme' ); ?></h4>
			<p><span class="contact-heading"><?php esc_html_e( 'Postal Address', 'bmtheme' ); ?></span>
				<span class="contact-value">Holländargatan 22<br>
				113 59 Stockholm</span></p>
			<p>
				<span class="contact-heading"><?php esc_html_e( 'Phone', 'bmtheme' ); ?></span><span class="contact-value"><a href="tel://+468322010"><?php esc_html_e( '+46 8 32 20 10', 'bmtheme' ); ?></a></span>
			</p>
		</div>
		<div class="small-12 medium-8 large-6 columns">
			<h4><?php esc_html_e( 'Gothenburg', 'bmtheme' ); ?></h4>
			<p><span class="contact-heading"><?php esc_html_e( 'Postal Address', 'bmtheme' ); ?></span>
				<span class="contact-value">Kungsgatan 4<br>
				411 19 <?php esc_html_e( 'Gothenburg', 'bmtheme' ); ?></span></p>
			<p>
				<span class="contact-heading"><?php esc_html_e( 'Phone', 'bmtheme' ); ?></span><span class="contact-value"><a href="tel://+4631102010"><?php esc_html_e( '+46 31 10 20 10', 'bmtheme' ); ?></a></span>
			</p>
		</div>
		<div class="small-24 medium-8 large-6 columns">
			<h4><?php esc_html_e( 'Company', 'bmtheme' ); ?></h4>
			<?php wp_nav_menu( array(
				'theme_location'  => 'footer-list-menu',
				'container'       => 'nav',
				'container_class' => '',
				'container_id'    => 'js-footer-list-menu',
				'menu_class'      => '',
				'fallback_cb'     => '',
				'depth'           => 1,
			) ); ?>
		</div>
	</div>
</footer>

</div><!-- #page -->
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
