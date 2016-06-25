<?php
/**
 * Section Header
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;
?>
<section class="section-header">
	<div class="row">
		<div class="section-header-content">
			<h2 class="section-title"><?php the_sub_field( 'section_title' ); ?></h2>

			<?php
			$section_subtitle = get_sub_field( 'section_subtitle' );

			if ( $section_subtitle ) : ?>
				<p class="section-subtitle"><?php echo esc_html( $section_subtitle ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
