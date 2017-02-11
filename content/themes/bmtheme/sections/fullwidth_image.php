<?php
/**
 * Text Section
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

$image = get_sub_field( 'fullwidth_image' );
?>
<section class="section is-fullwidth-image" style="background-image: url('<?php echo esc_url( $image['url'] ); ?>');">
	<figure>
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
	</figure>
</section>
