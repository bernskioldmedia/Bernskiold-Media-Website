<?php
$client_query_args = array(
	'post_type'     => 'bm_clients',
	'post_per_page' => 15,
	'no_found_rows' => true,
	'orderby'       => 'rand',
	'meta_query'    => array(
		'relation' => 'AND',
		array(
			'key'     => 'client_is_selected',
			'value'   => '1',
			'compare' => '=',
		),
		array(
			'key'     => 'client_logo_dark',
			'value'   => '',
			'compare' => '!=',
		),
		array(
			'key'     => 'is_item_active',
			'value'   => '1',
			'compare' => '=',
		),
	),
);

if ( is_post_type_archive( 'bm_case_studies' ) ) {
	$client_query_args['posts_per_page'] = 50;
}

$client_query = new \WP_Query( $client_query_args );
?>

<?php if ( $client_query->have_posts() ) : ?>

	<section class="section-header">
		<div class="row">
			<div class="section-header-content">
				<h2 class="section-title"><?php esc_html_e( 'Our Clients', 'bmtheme' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Here is a list of many of the clients that are working with, or have worked with over the years.', 'bmtheme' ); ?></p>
			</div>
		</div>
	</section>

	<div class="client-grid">

		<?php while ( $client_query->have_posts() ) : $client_query->the_post(); ?>

			<?php
			$client_logo = get_field( 'client_logo_dark' );
			?>

			<div class="client-grid-item">
				<a href="<?php the_field( 'client_url' ); ?>">
					<img src="<?php echo esc_url_raw( $client_logo['sizes']['medium'] ); ?>" alt="<?php the_title(); ?>">
				</a>
			</div>

		<?php endwhile; ?>

	</div>

<?php endif; wp_reset_postdata(); ?>