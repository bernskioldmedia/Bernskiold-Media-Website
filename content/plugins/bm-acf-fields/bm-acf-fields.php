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
namespace BernskioldMedia\Website\ACF_Fields;

//Change ACF Local JSON save location to /json folder inside this plugin
add_filter( 'json/settings/save_json', function() {
	return dirname( __FILE__ ) . '/json';
} );

//Include the /json folder in the places to look for ACF Local JSON files
add_filter( 'json/settings/load_json', function( $paths ) {
	$paths[] = dirname( __FILE__ ) . '/json';

	return $paths;
} );
