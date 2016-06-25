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
</head>

<body <?php body_class(); ?>>

<?php do_action( 'bm_before_body' ); ?>

<div id="page" class="hfeed site">

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
					<a href="#">
						<img src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/magnifying-glass.png' ); ?>" data-src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/magnifying-glass.svg' ); ?>"  width="32" height="32" class="iconic iconic-sm" alt="Search">
					</a>
				</div>

				<div class="columns shrink top-bar-item top-bar-cart">
					<a href="<?php echo esc_url( wc_get_cart_url() ); ?>">
						<span class="top-bar-cart-icon"><img src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/cart.png' ); ?>" data-src="<?php echo esc_url_raw( theme()->get_theme_icons_uri() . '/cart.svg' ); ?>"  width="32" height="32" class="iconic iconic-sm" alt="Search"></span>
						<span class="top-bar-cart-label">1</span>
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

		</div>

	</header>
