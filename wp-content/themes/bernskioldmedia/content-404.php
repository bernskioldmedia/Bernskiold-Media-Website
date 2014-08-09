<?php
/**
 * 'Not Found Content'
 *
 * Included on the 404 page as well as when post content is not found.
 *
 * @since Bernskiold Media Framework 1.1
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/
?>

<article class="error-page">

	<h2 class="page-title text-center"><?php _e('404 - Content Cannot Be Found', 'bernskioldmedia'); ?></h2>

    <div class="page-content text-center">
    	<p class="intro"><?php _e('Unfortunately the content you were looking for could not be found. Please check that the URL is correct or do a search using the form below.', 'bernskioldmedia'); ?></p>
    	<?php get_search_form(); ?>
    </div>

</article>