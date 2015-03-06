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