<?php
/**
 * Search Form
 *
 * Styles the default WordPress search form according
 * to the markup in this file.
 *
 * @since  1.0
 * @version  1.0
 * @package Bernskiold Media Framework
 */

if ( isset( $_GET['q']  ) ) {
	$search_query = wp_strip_all_tags( $_GET['q']  );
} else {
	$search_query = '';
}

?>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

<div class="row collapse">
  <div class="small-20 columns">
		<input type="text" value="<?php echo $search_query; ?>" name="s" id="s" placeholder="<?php _e('What are you looking for?', 'bernskioldmedia'); ?>">
  </div>
  <div class="small-4 columns">
		<input type="submit" class="button postfix" id="searchsubmit" value="<?php _e('Search', 'bernskioldmedia'); ?>" />
  </div>
</div>
</form>