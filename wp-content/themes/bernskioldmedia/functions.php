<?php

/**
 * Default WordPress functions.php file
 * Loads and configures the theme.
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/


/**
 * Include and Set Up Bernskiold Media Framework Class
 ***********************************************/

require_once( get_template_directory() . '/core/theme.php'); // Includes Bernskiold Media Framework

$ilmenite = new Ilmenite_Framework();

$ilmenite->init(array(
	'theme_name' => 'Bernskiold Media', // Change this to the name of the theme.
	'theme_slug' => 'bernskioldmedia', // Create a custom slug for the theme.
	'theme_version' => '1.0'
));

/**
 * Add Theme-Specific Stuff Below Here
 *****************************************/

/**
 * Defines content width
 **/

if (!isset($content_width)) {
	$content_width = 630; // Let this to the proper content width
}