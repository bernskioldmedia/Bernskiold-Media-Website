<?php
/**
 * Plugin Name: [Bernskiold Media] Case Studies
 * Plugin URI: http://www.bernskioldmedia.com
 * Description: This plugin houses the case studies functionality of the Bernskiold Media website.
 * Author: Bernskiold Media
 * Author URI: http://www.bernskioldmedia.com
 * Version: 1.0
 * Text Domain: bmcasestudies
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
	exit;

/**
 * BM_Case_Studies Class
 */
class BM_Case_Studies {

	/**
	 * Constructor
	 */
	public function __construct() {

		// Define some constants
		define( 'BMCS_VERSION', '1.0' );
		define( 'BMCS_PLUGIN_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
		define( 'BMCS_PLUGIN_URL', untrailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ) );

		// Include classes and functions
		include( 'inc/class-bm-casestudies-post-types.php' );
		include( 'inc/class-bm-casestudies-acffields.php' );

		// Add the textdomain and support translation
		add_action( 'plugins_loaded', array( $this, 'add_textdomain' ) );

	}

	/**
	 * Add textdomain for plugin
	 *
	 * @author  Erik Bernskiold
	 */
	public function add_textdomain() {
		load_plugin_textdomain( 'bmcasestudies', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

}

// Initialize everything
$GLOBALS['bm_case_studies'] = new BM_Case_Studies();
