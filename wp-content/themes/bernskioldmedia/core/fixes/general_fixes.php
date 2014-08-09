<?php

/**
 * File Includes Various Fixes
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

/**
 * Removes WordPress Generatator Code
 *
 * @since Bernskiold Media Framework 1.0
 **/
function bernskioldmedia_remove_version() {
	return ''; // Returns nothing for the generator meta.
}

add_filter('the_generator', 'bernskioldmedia_remove_version'); // Performs the removal.