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

		// GTM Tracking.
		// add_action( 'wp_head', array( $this, 'google_tag_manager_head' ) );
		// add_action( 'bm_before_body', array( $this, 'google_tag_manager_body' ) );

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
		<script>try {
				Typekit.load();
			} catch(e) {
			}</script>
		<?php
		echo ob_get_clean();

	}

	/**
	 * Adds the Google Analytics Tracking Code
	 *
	 * Uses universal tracking. Loops through and adds a different tracking code depending on the language.
	 */
	function google_tag_manager_head() {

		ob_start(); ?>
		<!-- Google Tag Manager -->
		<script>(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start': new Date().getTime(), event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', 'GTM-WKF7ZS');</script>
		<!-- End Google Tag Manager -->
		<?php
		$output = ob_get_clean();

		echo $output;

	}

	public function google_tag_manager_body() {

		ob_start(); ?>
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKF7ZS"
			        height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<?php

		echo ob_Get_clean();
	}

}
