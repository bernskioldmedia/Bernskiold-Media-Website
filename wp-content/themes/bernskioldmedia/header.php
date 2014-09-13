<?php
/**
 * Outputs Site Header
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta name="viewport" content="initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<title><?php wp_title(''); ?></title>

		<script type="text/javascript" src="//use.typekit.net/cnt5jqj.js"></script>
    	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

    <!-- Facebook API -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=10150161903840008";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Twitter API -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div class="header-search-area">
      <div class="row">
        <div class="small-24 medium-8 columns">
          <h3><?php _e( 'Search', 'bernskioldmedia' ); ?></h3>
          <p><?php _e( 'Find what you are looking for by using the search form.', 'bernskiold' ); ?></p>
        </div>
        <div class="small-24 medium-14 columns">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>

    <div class="top-row">
      <div class="row">
        <ul>
          <li>
            <?php wp_nav_menu(array(
                'theme_location'  => 'top-menu',
                'container'       => 'nav',
                'container_class' => 'top-navigation',
                'depth'           => 1,
              )); ?>
          </li>
          <li class="header-search-box">
            <i class="fa fa-search"></i>
          </li>
          <li class="language-selector">
            <?php echo bm_language_switcher(); ?>
          </li>
        </ul>
      </div>
    </div>

    <header class="site-header">
      <div class="row">

        <div class="logo small-24 medium-24 large-7 columns">

          <a href="#" class="responsive-navigation-toggle"><i class="fa fa-bars"></i></a>

          <a href="<?php echo bm_home_url(); ?>">
            <?php if ( is_front_page() ) : ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-light.png" alt="">
            <?php else : ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">
            <?php endif; ?>
          </a>
        </div>

			<?php wp_nav_menu(array(
        'theme_location'  => 'primary-menu',
        'container'       => 'nav',
        'container_class' => 'primary-navigation hide-for-small small-24 medium-24 large-16 columns',
        'depth'           => 3,
			)); ?>

      </div>

      <div class="responsive-navigation show-for-small">
        <?php wp_nav_menu(array(
          'theme_location'  => 'primary-menu',
          'container'       => 'nav',
          'container_class' => 'responsive-menu',
          'depth'           => 1,
        )); ?>
      </div>
    </header>