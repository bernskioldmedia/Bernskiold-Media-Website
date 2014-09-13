<?php
/**
 * 'Not Found Content'
 **/
?>

<article class="error-page">

	<h2 class="page-title text-center"><?php _e('No Content Found', 'bernskioldmedia'); ?></h2>

    <div class="page-content text-center">
    	<p class="intro"><?php _e('No content could be found for this request. You are in the right place, it is just that we don\'t have anything to display here yet. Try another page for now, or use the search below to find something else.', 'bernskioldmedia'); ?></p>
    	<?php get_search_form(); ?>
    </div>

</article>