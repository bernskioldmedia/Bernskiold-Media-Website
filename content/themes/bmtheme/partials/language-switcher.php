<?php
/**
 * Language Switcher Section
 *
 * @package BernskioldMedia\Theme
 */
namespace BernskioldMedia\Theme;

// Get the active languages from WPML.
$languages = apply_filters( 'wpml_active_languages', null, array(
	'skip_missing' => 0,
) );

if ( ! empty( $languages ) ) : ?>
<ul class="language-switcher">

	<?php foreach ( $languages as $language ) : ?>
	<li>
		<a href="<?php echo esc_url( $language['url'] ); ?>">
			<img src="<?php echo esc_url( theme()->get_theme_images_uri() . '/flags/' . $language['language_code'] . '.png' ); ?>" alt="<?php echo esc_html( $language['native_name'] ); ?>">
			<?php echo esc_html( $language['native_name'] ); ?>
		</a>
	</li>
	<?php endforeach; ?>

</ul>
<?php endif; ?>