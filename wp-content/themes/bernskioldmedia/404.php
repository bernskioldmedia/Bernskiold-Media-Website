<?php
/**
 * Template for the 404 page
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

get_header(); ?>

<div class="main error-page">
	<div class="row page-section-3x">

		<div class="small-24 columns">
			<h1 class="page-title text-center"><?php _e('404 - Content Cannot Be Found', 'bernskioldmedia'); ?></h1>

		    <div class="page-content text-center">
		    	<p class="intro"><?php _e('Unfortunately the content you were looking for could not be found. Please check that the URL is correct or do a search using the form below.', 'bernskioldmedia'); ?></p>
		    	<?php get_search_form(); ?>
		    </div>
		</div>

	</div>
</div>

<?php get_footer(); ?>