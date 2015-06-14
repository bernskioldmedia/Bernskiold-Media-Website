<?php
/**
 * WooCommerce Integration Functions
 */

/**
 * Quick Action Calls
 *
 * Before we begin with the functions, here is a place
 * for quick action add/remove calls.
 */

// Remove sidebar on WooCommerce pages
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
 * Get on with the other functions...
 */

if ( ! function_exists( 'bmedia_woocommerce_start' ) ) :

	/**
	 * WooCommerce Starter Wrapper
	 *
	 * The main wrapper for the WooCommerce pages.
	 *
	 * @author  Erik Bernskiold
	 */
	function bmedia_woocommerce_start() {

		ob_start();

		?>

		<div class="main store-page">
			<div class="row page-section-3x">

		<?php
		$output = ob_get_clean();

		echo $output;

	}

	add_action( 'woocommerce_before_main_content', 'bmedia_woocommerce_start', 10 );

endif;

if ( ! function_exists( 'bmedia_woocommerce_end' ) ) :

	/**
	 * WooCommerce End Wrapper
	 *
	 * The closing part of the main wrapper for the WooCommerce pages.
	 *
	 * @author  Erik Bernskiold
	 */
	function bmedia_woocommerce_end() {

		ob_start();

		?>
			</div>
		</div>

		<?php
		$output = ob_get_clean();

		echo $output;

	}
	add_action( 'woocommerce_after_main_content', 'bmedia_woocommerce_end', 10 );

endif;

if ( ! function_exists( 'bmedia_remove_woocommerce_breadcrumbs' ) ) :

	/**
	 * Remove WooCommerce Breadcrumbs
	 * @return void
	 * @author  Erik Bernskiold
	 */
	function bmedia_remove_woocommerce_breadcrumbs() {
	    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}

	add_action( 'init', 'bmedia_remove_woocommerce_breadcrumbs' );

endif;

if ( ! function_exists( 'bmedia_woocommerce_scripts_styles' ) ) :

	/**
	 * Optimize WooCommerce Scripts
	 *
	 * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
	 */
	function bmedia_woocommerce_scripts_styles() {
		//remove generator meta tag
		remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

		//first check that woo exists to prevent fatal errors
		if ( function_exists( 'is_woocommerce' ) ) {
			//dequeue scripts and styles
			if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
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

	add_action( 'wp_enqueue_scripts', 'bmedia_woocommerce_scripts_styles', 99 );

endif;