<?php
/**
 * Script and Style Functions
 *
 * Handles the loading of scripts and styles for the
 * theme through the proper enqueuing methods.
 **/
namespace BernskioldMedia\Theme;

/**
 * Theme_Scripts_Styles Class
 *
 * @package BernskioldMedia\Theme
 */
class Theme_Scripts_Styles {

	/**
	 * Theme_Scripts_Styles Constructor
	 */
	public function __construct() {

		// Styles
		add_action( 'wp_enqueue_scripts', array( $this, 'styles' ) );

		// Scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

		// Typekit.
		add_action( 'wp_head', array( $this, 'typekit' ) );

		// GA Tracking.
		add_action( 'wp_head', array( $this, 'google_analytics' ) );

	}

	/**
	 * Stylesheets
	 *
	 * Registers and enqueues theme stylesheets.
	 **/
	public function styles() {

		// Register
		wp_register_style( 'main', theme()->get_theme_assets_uri() . '/css/main.css', false, theme()->get_theme_version(), 'all' );

		// Enqueue
		wp_enqueue_style( 'main' );

	}

	/**
	 * Enqueue Scripts on public side
	 **/
	public function scripts() {

		// Register
		wp_register_script( 'modernizr', theme()->get_theme_assets_uri() . '/js/src/vendor/modernizr.min.js', false, '2.8.3', false );
		wp_register_script( 'theme', theme()->get_theme_assets_uri() . '/js/theme.min.js', array( 'jquery' ), theme()->get_theme_version(), true );

		// Enqueue
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'theme' );

	}

	/**
	 * Typekit
	 */
	public function typekit() {

		ob_start(); ?>
		<script src="https://use.typekit.net/cnt5jqj.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<?php
		echo ob_get_clean();

	}

	/**
	 * Adds the Google Analytics Tracking Code
	 *
	 * Uses universal tracking. Loops through and adds a different tracking code depending on the language.
	 */
	function google_analytics() {

		$language = ICL_LANGUAGE_CODE;

		switch ( $language ) {

			case 'en':
				$property_id = 'UA-19733539-1';
				break;

			case 'sv':
				$property_id = 'UA-19733539-4';
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

			ga('create', '<?php echo esc_html( $property_id ); ?>', 'auto');
			ga('send', 'pageview');
		</script>
		<?php
		$output = ob_get_clean();

		echo $output;

	}
}
