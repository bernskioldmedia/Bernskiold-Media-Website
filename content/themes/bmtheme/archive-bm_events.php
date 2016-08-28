<?php
/**
 * Displays Events Archive
 **/
namespace BernskioldMedia\Theme;

$event_types = get_terms( array(
	'taxonomy'   => 'bm_event_type',
	'hide_empty' => false,
) );

$il = 0;
$it = 0;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php theme()->template->the_page_title_block( __( 'Events', 'bmtheme' ), __( 'We have lectures, courses and webinars for you throughout the year. All on topics about the digital world, teaching you the latest.' ) ); ?>

	<div class="row">

		<section class="event-archive-sidebar">

			<ul class="event-type-tabs tabs vertical" id="js-event-tabs" data-tabs>

				<?php foreach ( $event_types as $type ) : $il ++;

					if ( 1 === $il ) {
						$active_class = 'is-active';
					} else {
						$active_class = '';
					}; ?>

					<li class="tabs-title <?php echo esc_attr( $active_class ); ?>">
						<a href="#<?php echo esc_attr( $type->slug ); ?>" aria-selected="true"><?php echo esc_html( $type->name ); ?></a>
					</li>

				<?php endforeach; ?>

			</ul>

			<?php /*
			<div class="upcoming-events">
				<h2 class="h3"><?php esc_html_e( 'Upcoming Events', 'bmtheme' ); ?></h2>
				<p class="intro"><?php esc_html_e( 'What\'s next on our calendar? Well, these events are. There might still be time!', 'bmtheme' ); ?></p>
			</div>
            */ ?>

		</section>

		<section class="event-archive-content">

			<div class="tabs-content vertical" data-tabs-content="js-event-tabs">

				<?php foreach ( $event_types as $type ) : $it ++;

					if ( 1 === $it ) {
						$active_class = 'is-active';
					} else {
						$active_class = '';
					}; ?>

					<div class="tabs-panel <?php echo esc_attr( $active_class ); ?>" id="<?php echo esc_attr( $type->slug ); ?>">

						<h2><?php echo esc_html( $type->name ); ?></h2>

						<?php if ( ! empty( $type->description ) ) : ?>
							<p class="intro"><?php echo esc_html( $type->description ); ?></p>
						<?php endif; ?>

						<?php
						$event_type_query_args = array(
							'post_type'      => 'bm_events',
							'posts_per_page' => 50,
							'no_found_rows'  => true,
							'meta_query'     => array(
								array(
									'key'     => 'is_item_active',
									'value'   => '1',
									'compare' => '=',
								),
							),
							'tax_query'      => array(
								array(
									'taxonomy' => 'bm_event_type',
									'field'    => 'term_id',
									'terms'    => $type->term_id,
								),
							),
						);

						$event_type_query = new \WP_Query( $event_type_query_args );
						?>

						<?php if ( $event_type_query->have_posts() ) : ?>

							<div class="events-list">

								<?php while ( $event_type_query->have_posts() ) : $event_type_query->the_post(); ?>

									<?php
									$event_product = get_field( 'event_product' );

									if ( $event_product ) {
										$_product    = wc_get_product( $event_product->ID );
										$event_price = $_product->get_price_html();
									} else {
										$_product    = false;
										$event_price = get_field( 'event_price' );
									}
									?>

									<article <?php post_class( 'events-list-item' ); ?>>

										<a href="<?php the_permalink(); ?>">

											<?php if ( has_post_thumbnail() ) : ?>
												<div class="events-list-item-image" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ); ?>');"></div>
											<?php endif; ?>

											<h3 class="events-list-item-title"><?php the_title(); ?></h3>

											<p class="events-list-item-excerpt">
												<?php echo esc_html( theme()->template->get_excerpt( 20, get_field( 'event_description' ) ) ); ?>
											</p>

											<?php if ( $event_price === '0' ) : ?>
												<p class="events-list-item-price"><?php esc_html_e( 'Free!', 'bmtheme' ); ?></p>
											<?php elseif ( $event_price ) : ?>
												<p class="events-list-item-price">
													<?php if ( $_product ) {
														echo $event_price;
													} else {
														printf( __( '% USD', 'bmtheme' ), $event_price );
													} ?>
												</p>
											<?php endif; ?>

											<p class="events-list-item-cta">
												<span><?php esc_html_e( 'Read More & Book', 'bmtheme' ); ?></span>
											</p>

										</a>

									</article>

								<?php endwhile; ?>

							</div>

						<?php else : ?>

							<p class="pt2"><?php printf( esc_html__( 'Unfortunately we do not have any %s to show you right now.', 'bmtheme' ), esc_html( $type->name ) ); ?></p>

						<?php endif;
						wp_reset_postdata(); ?>

					</div>

				<?php endforeach; ?>

			</div>

		</section>

	</div>

</main>

<?php get_footer(); ?>
