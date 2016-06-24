<?php
/**
 * Plugin Name: BM: ACF Fields
 * Plugin URI:  https://www.bernskioldmedia.com
 * Description: Stores the local JSON files for ACF inside this plugin directory.
 * Version:     1.0.0
 * Author:      Bernskiold Media
 * Author URI:  https://www.bernskioldmedia.com
 * Text Domain: bm-acf-fields
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Hook into the filters.
add_filter( 'acf/settings/save_json', 'bm_acf_json_save' );
add_filter( 'acf/settings/load_json', 'bm_acf_json_load' );

/**
 * Modify ACF JSON Save Folder
 *
 * @return string
 */
function bm_acf_json_save() {

	// update path
	$path = dirname( __FILE__ ) . '/json';

	return $path;

}

/**
 * Make ACF recognize custom JSON folder for loading
 *
 * @param $paths
 *
 * @return array
 */
function bm_acf_json_load( $paths ) {

	// append path
	$paths[] = dirname( __FILE__ ) . '/json';

	return $paths;

}
