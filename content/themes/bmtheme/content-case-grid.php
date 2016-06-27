<?php
/**
 * Case Grid Item
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

// Get fields.
$main_image        = get_field( 'case_main_image' );
$short_description = get_field( 'case_short_description' );
$case_client       = get_field( 'case_client' );
$client_logo       = get_field( 'client_logo_light', $case_client );
?>
<a href="<?php the_permalink(); ?>" class="case-grid-item" id="case-<?php the_ID(); ?>">
	<div class="case-grid-item-overlay" style="background-image: url('<?php echo esc_url_raw( $main_image['sizes']['medium'] ); ?>');"></div>
	<div class="case-grid-item-content">

		<?php if ( $client_logo ) : ?>
			<div class="case-grid-item-logo">
				<img src="<?php echo esc_url_raw( $client_logo['url'] ); ?>" alt="<?php echo esc_attr( $client->post_title ); ?>">
			</div>
		<?php endif; ?>

		<p class="case-grid-item-intro"><?php echo esc_html( theme()->template->get_excerpt( 20, $short_description ) ); ?></p>
		<p class="case-grid-item-action">
			<span class="small white hollow button"><?php esc_html_e( 'View Case Study', 'bmtheme' ); ?></span>
		</p>
	</div>
</a>