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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bmtheme' ); ?></a>

	<header class="site-header" role="banner">

		<section class="top-bar">
			<div class="row">
				<div class="top-bar-content">

					<?php wp_nav_menu( array(
						'theme_location'  => 'top-menu',
						'container'       => 'nav',
						'container_class' => 'top-bar-item top-menu',
						'container_id'    => 'js-top-menu',
						'fallback_cb'     => '',
						'depth'           => 1,
					) ); ?>

					<div class="top-bar-item top-bar-search">
						Search
					</div>

					<div class="top-bar-item top-bar-cart">
						Cart
					</div>

					<div class="top-bar-item top-bar-languages">
						<?php esc_html_e( 'Choose Language', 'bmtheme' ); ?>
					</div>

				</div>
			</div>
		</section>

		<div class="row">
			<section class="header-content">

				<div class="header-logo">
					<a href="<?php echo esc_url_raw( home_url() ); ?> ">
						<img src="<?php echo esc_url_raw( theme()->get_theme_images_uri() . '/logo.png' ); ?>" data-src="<?php echo esc_url_raw( theme()->get_theme_images_uri() . '/logo.svg' ); ?>" alt="<?php esc_html_e( 'Bernskiold Media', 'bmtheme' ); ?>">
					</a>
				</div>

				<?php wp_nav_menu( array(
					'theme_location'  => 'primary-menu',
					'container'       => 'nav',
					'container_class' => 'primary-menu',
					'container_id'    => 'js-primary-menu',
					'fallback_cb'     => '',
					'depth'           => 1,
				) ); ?>

			</section>
		</div>

	</header>
