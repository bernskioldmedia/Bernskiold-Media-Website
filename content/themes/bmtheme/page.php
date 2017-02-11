<?php
/**
 * Displays Page
 *
 * Template Name: Flex Page
 * Template Post Type: page, bm_case_studies
 **/

namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php theme()->template->load_flex_page(); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
