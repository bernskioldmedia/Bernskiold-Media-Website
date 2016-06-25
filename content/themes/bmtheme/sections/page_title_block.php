<?php
/**
 * Page Title Block
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;
?>
<section class="page-title-block">
	<div class="row">
		<div class="page-title-block-content">
			<h1 class="page-title"><?php the_title(); ?></h1>

			<?php
			$subtitle = get_field( 'page_subtitle' );
			if ( $subtitle ) : ?>
				<p class="page-subtitle"><?php echo esc_html( $subtitle ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
