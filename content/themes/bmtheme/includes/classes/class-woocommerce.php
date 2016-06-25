<?php
/**
 * WooCommerce Modifications
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

/**
 * Class WooCommerce
 *
 * @package BernskioldMedia\Theme
 */
class WooCommerce {

	public function __construct() {

		// Declare WooCommerce Support
		add_theme_support( 'woocommerce' );

		// Optimize WooCommerce Scripts.
		add_action( 'wp_enqueue_scripts', array( $this, 'manage_woocommerce_styles' ), 99 );

		// Apply the theme wrapper.
		add_action( 'woocommerce_before_main_content', array( $this, 'theme_wrapper_start' ), 10 );
		add_action( 'woocommerce_after_main_content', array( $this, 'theme_wrapper_end' ), 10 );

		// Remove the WooCommerce Breadcrumbs.
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

		// Remove Sidebar on WooCommerce.
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

	}

	/**
	 * Optimize WooCommerce Scripts
	 *
	 * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
	 */
	public function manage_woocommerce_styles() {

		//remove generator meta tag.
		remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

		// first check that woo exists to prevent fatal errors.
		if ( function_exists( 'is_woocommerce' ) ) {

			// Dequeue scripts and styles.
			if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
				wp_dequeue_style( 'woocommerce-general' );
				wp_dequeue_style( 'woocommerce-layout' );
				wp_dequeue_style( 'woocommerce-smallscreen' );
				wp_dequeue_style( 'woocommerce_frontend_styles' );
				wp_dequeue_style( 'woocommerce_fancybox_styles' );
				wp_dequeue_style( 'woocommerce_chosen_styles' );
				wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
				wp_dequeue_script( 'wc_price_slider' );
				wp_dequeue_script( 'wc-single-product' );
				wp_dequeue_script( 'wc-add-to-cart' );
				wp_dequeue_script( 'wc-cart-fragments' );
				wp_dequeue_script( 'wc-checkout' );
				wp_dequeue_script( 'wc-add-to-cart-variation' );
				wp_dequeue_script( 'wc-single-product' );
				wp_dequeue_script( 'wc-cart' );
				wp_dequeue_script( 'wc-chosen' );
				wp_dequeue_script( 'woocommerce' );
				wp_dequeue_script( 'prettyPhoto' );
				wp_dequeue_script( 'prettyPhoto-init' );
				wp_dequeue_script( 'jquery-blockui' );
				wp_dequeue_script( 'jquery-placeholder' );
				wp_dequeue_script( 'fancybox' );
				wp_dequeue_script( 'jqueryui' );
			}
		}

	}

	/**
	 * Theme Wrapper Start Code
	 */
	public function theme_wrapper_start() {
		?>

		<main class="main" role="main" id="content">

		<section class="section woocommerce-wrapper">
		<div class="row">
		<div class="columns">

		<?php
	}

	/**
	 * Theme Wrapper End Code
	 */
	public function theme_wrapper_end() {
		?>

		</div>
		</div>
		</section>
		</main>
		<?php
	}
}
