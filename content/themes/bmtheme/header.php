<?php
/**
 * Main Site Header Template
 */
namespace BernskioldMedia\Theme;
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="fb:pages" content="34318550689" />

	<?php wp_head(); ?>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		                                                            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '823576004434770');
		fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
	               src="https://www.facebook.com/tr?id=823576004434770&ev=PageView&noscript=1"
		/></noscript>
	<!-- End Facebook Pixel Code -->
	
</head>

<body <?php body_class(); ?>>

<?php do_action( 'bm_before_body' ); ?>

<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-left" id="offCanvas" data-off-canvas>

			<div class="off-canvas-logo">
				<a href="<?php echo esc_url_raw( home_url() ); ?> ">
					<img src="<?php echo esc_url_raw( theme()->get_theme_images_uri() . '/logo.png' ); ?>" data-src="<?php echo esc_url_raw( theme()->get_theme_images_uri() . '/logo.svg' ); ?>" alt="<?php esc_html_e( 'Bernskiold Media', 'bmtheme' ); ?>" class="iconic" width="272" height="36">
				</a>
			</div>

			<?php wp_nav_menu( array(
				'theme_location'  => 'primary-menu',
				'container'       => 'nav',
				'container_class' => 'off-canvas-menu',
				'container_id'    => 'js-primary-menu',
				'menu_class'      => '',
				'fallback_cb'     => '',
				'depth'           => 1,
			) ); ?>

			<?php wp_nav_menu( array(
				'theme_location'  => 'top-menu',
				'container'       => 'nav',
				'container_class' => 'off-canvas-top-menu',
				'container_id'    => 'js-top-menu',
				'menu_class'      => 'inline-block-list',
				'fallback_cb'     => '',
				'depth'           => 1,
			) ); ?>

		</div>

		<div id="page" class="hfeed site off-canvas-content" data-off-canvas-content>

			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bmtheme' ); ?></a>

			<header class="site-header" role="banner">

				<section class="top-bar">
					<div class="row align-right">

						<?php wp_nav_menu( array(
							'theme_location'  => 'top-menu',
							'container'       => 'nav',
							'container_class' => 'columns shrink top-bar-item top-menu',
							'container_id'    => 'js-top-menu',
							'menu_class'      => 'inline-block-list',
							'fallback_cb'     => '',
							'depth'           => 1,
						) ); ?>

						<div class="columns shrink top-bar-item top-bar-search">
							<a href="<?php echo esc_url( home_url( 'search' ) ); ?>">
								<img src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/magnifying-glass.png' ); ?>" data-src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/magnifying-glass.svg' ); ?>" width="32" height="32" class="iconic iconic-sm" alt="Search">
							</a>
						</div>

						<div class="columns shrink top-bar-item top-bar-cart">
							<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
								<span class="top-bar-cart-icon"><img src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/cart.png' ); ?>" data-src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/cart.svg' ); ?>" width="32" height="32" class="iconic iconic-sm" alt="Search"></span>
							</a>
						</div>

						<div class="columns shrink top-bar-item top-bar-languages">
							<a href="#">
								<?php esc_html_e( 'Language', 'bmtheme' ); ?>
							</a>
							<?php get_template_part( 'partials/language-switcher' ); ?>
						</div>

					</div>
				</section>

				<div class="row align-justify">

					<div class="column shrink header-logo">
						<a href="<?php echo esc_url_raw( home_url() ); ?> ">
							<img src="<?php echo esc_url_raw( theme()->get_theme_images_uri() . '/logo.png' ); ?>" data-src="<?php echo esc_url_raw( theme()->get_theme_images_uri() . '/logo.svg' ); ?>" alt="<?php esc_html_e( 'Bernskiold Media', 'bmtheme' ); ?>" class="iconic" width="272" height="36">
						</a>
					</div>

					<?php wp_nav_menu( array(
						'theme_location'  => 'primary-menu',
						'container'       => 'nav',
						'container_class' => 'column primary-menu',
						'container_id'    => 'js-primary-menu',
						'menu_class'      => 'inline-block-list',
						'fallback_cb'     => '',
						'depth'           => 1,
					) ); ?>

					<div class="header-nav-trigger">
						<a href="#" data-toggle="offCanvas"><?php esc_html_e( 'Menu', 'bmtheme' ); ?></a>
					</div>

				</div>

			</header>
