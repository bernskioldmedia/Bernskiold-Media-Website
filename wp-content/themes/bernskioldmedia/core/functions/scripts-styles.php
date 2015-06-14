<?php
/**
 * Header Functions
 *
 * Contains functions that hook into wp_head and/or output their content
 * to wp_head via other actions/hooks such as scripts and stylesheets.
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

/**
 * Stylesheets
 *
 * Registeres and enqueues theme stylesheets.
 *
 * @since 1.0
 **/
function bernskioldmedia_enqueue_styles() {

	// Register
	// wp_register_style( $handle, $src, $deps, $ver, $media );
	wp_register_style( 'base', THEME_CSS . '/layout.css', false, THEME_VERSION, 'all' );

	// Enqueue
	wp_enqueue_style( 'base' );

}

// Register Styles with WordPress
add_action( 'wp_enqueue_scripts', 'bernskioldmedia_enqueue_styles' );

/**
 * Enqueue Scripts on public side
 *
 * @since Bernskiold Media Framework 1.0
 **/
function bernskioldmedia_enqueue_scripts() {

	// Register
	// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
	wp_register_script( 'foundation', THEME_JS . '/foundation/foundation.js', array( 'jquery' ), THEME_VERSION, true );
	wp_register_script( 'modernizr', THEME_JS . '/vendor/custom.modernizr.js', false, '2.6.2', false );
	wp_register_script( 'scripts', THEME_JS . '/scripts.min.js', array( 'jquery', 'foundation' ), '2.6.2', true );
	wp_register_script( 'mixitup', THEME_JS . '/jquery.mixitup.min.js', array( 'jquery' ), '1.5.5', true );
	wp_register_script( 'bmedia', THEME_JS . '/bmedia.min.js', array( 'jquery', 'foundation' ), THEME_VERSION, true );

	// Enqueue
	wp_enqueue_script( 'modernizr' );
	// wp_enqueue_script( 'foundation' );
	// wp_enqueue_script( 'scripts' );
	// wp_enqueue_script( 'mixitup' );
	wp_enqueue_script( 'bmedia' );

}

// Register Scripts with WordPress
add_action('wp_enqueue_scripts', 'bernskioldmedia_enqueue_scripts');

/**
 * Adds a favicon to the site
 *
 * Will load any favicon that is added into the
 * theme image directory.
 *
 * @since Bernskiold Media Framework 1.0
 **/
function bernskioldmedia_favicon() {

	echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . THEME_IMAGES . '/favicon.ico">';

}

add_action('wp_head', 'bernskioldmedia_favicon'); // Adds the favicon to frontend
add_action('admin_head', 'bernskioldmedia_favicon'); // Adds the favicon to backend

/**
 * Adds the Google Analytics Tracking Code
 *
 * Uses universal tracking. Loops through and adds a different tracking code depending on the language.
 */
function bernskioldmedia_google_analytics() {

	$language = ICL_LANGUAGE_CODE;

	switch ( $language ) {

		case 'en':
			$property_id = 'UA-19733539-1';
			break;

		case 'sv':
			$property_id = 'UA-19733539-4';
			break;

		case 'de':
			$property_id = 'UA-19733539-5';
			break;

		default:
			$property_id = 'UA-19733539-1'; // fallback to english
			break;
	}

	ob_start(); ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo $property_id; ?>', 'auto');
		ga('send', 'pageview');
	</script>
	<?php
	$output = ob_get_clean();

	echo $output;

}

add_action( 'wp_head', 'bernskioldmedia_google_analytics' );