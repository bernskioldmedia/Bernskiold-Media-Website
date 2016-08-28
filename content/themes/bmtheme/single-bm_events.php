<?php
/**
 * Displays Single Event
 **/
namespace BernskioldMedia\Theme;

get_header(); ?>

<main class="main" role="main" id="content">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php

			// Get Event Fields.
			$event_image        = get_the_post_thumbnail_url( $post->ID, 'large' );
			$event_description  = get_field( 'event_description' );
			$event_person_photo = get_field( 'event_person_photo' );
			$event_person_name  = get_field( 'event_person_name' );
			$event_person_bio   = get_field( 'event_person_bio' );
			$event_types        = get_the_terms( $post->ID, 'bm_event_type' );
			$event_product      = get_field( 'event_product' );
			$event_course_link  = get_field( 'event_course_link' );

			if ( $event_product ) {
				$_product    = wc_get_product( $event_product->ID );
				$event_price = $_product->get_price_html();
			} else {
				$_product    = false;
				$event_price = get_field( 'event_price' );
			}

			// Display the case image background.
			if ( $event_image ) {
				$background = 'style="background-image: url(' . $event_image . ')"';
			} else {
				$background = '';
			}
			?>

			<article <?php post_class( 'event-item' ); ?> id="case-study-<?php the_ID(); ?>">

				<div class="event-item-header">
					<div class="event-item-header-overlay" <?php echo $background; ?>></div>
					<div class="row">
						<div class="event-item-header-content">

							<?php if ( ! empty( $event_types ) ) : ?>
								<ul class="event-item-type">
									<?php foreach ( $event_types as $type ) : ?>
										<li><?php echo esc_html( $type->name ); ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

							<h1 class="page-title"><?php the_title(); ?></h1>

						</div>
					</div>
				</div>

				<div class="row is-fullwidth">
					<div class="event-item-body">

						<?php echo $event_description; ?>

						<?php if ( $_product ) : ?>

							<p>
								<a href="<?php the_permalink( $event_product ) ?>" class="large hollow button"><?php esc_html_e( 'Register Now', 'bmtheme' ); ?></a>
							</p>

						<?php elseif ( $event_course_link ) : ?>

							<p>
								<a href="<?php echo esc_url_raw( $event_course_link ) ?>" class="large hollow button"><?php esc_html_e( 'Go to Course', 'bmtheme' ); ?></a>
							</p>

						<?php endif; ?>

						<?php if ( $event_person_bio ) : ?>

							<div class="event-item-bio">

								<h2><?php printf( esc_html__( 'About %s', 'bmtheme' ), esc_html( $event_person_name ) ); ?></h2>

								<?php if ( $event_person_photo ) : ?>
									<img src="<?php echo esc_url_raw( $event_person_photo['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $event_person_name ); ?>" class="alignright image-rounded">
								<?php endif; ?>

								<?php echo $event_person_bio; ?>

							</div>

						<?php endif; ?>

					</div>
					<div class="event-item-infobox">

						<?php if ( $event_person_photo && $event_person_name ) : ?>

							<div class="event-person">

								<div class="event-person-photo">
									<img src="<?php echo esc_url_raw( $event_person_photo['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $event_person_name ); ?>">
								</div>

								<div class="event-person-name">
									<?php echo esc_html( $event_person_name ); ?>
								</div>

							</div>

						<?php endif; ?>

						<dl>

							<?php
							/**
							 * Price Display
							 */
							if ( '0' == $event_price ) : ?>
								<dt><?php esc_html_e( 'Price', 'bmtheme' ); ?></dt>
								<dd><?php esc_html_e( 'Free!', 'bmtheme' ); ?></dd>
							<?php elseif ( $event_price ) : ?>
								<dt><?php esc_html_e( 'Price', 'bmtheme' ); ?></dt>
								<dd class="event-price">
									<?php if ( $_product ) {
										echo $event_price;
									} else {
										sprintf( __( '% USD', 'bmtheme' ), $event_price );
									} ?>
								</dd>
							<?php endif; ?>

							<dt><?php esc_html_e( 'Length', 'bmtheme' ); ?></dt>
							<dd><?php the_field( 'event_length' ); ?></dd>

						</dl>

						<?php
						/**
						 * Display Event Dates
						 */
						if ( have_rows( 'event_dates' ) ) : ?>

							<h3><?php esc_html_e( 'Dates', 'bmtheme' ); ?></h3>

							<ul class="event-dates">

								<?php while ( have_rows( 'event_dates' ) ) : the_row(); ?>

									<?php
									$from_date     = new \DateTime( get_sub_field( 'event_from_date' ) );
									$to_date       = new \DateTime( get_sub_field( 'event_to_date' ) );
									$max_attendees = get_sub_field( 'event_max_attendees' );
									$reg_attendees = get_sub_field( 'event_reg_attendees' );

									if ( $reg_attendees === $max_attendees || $reg_attendees > $max_attendees ) {
										$event_class  = 'is-full';
										$event_status = __( 'Fully Booked', 'bmtheme' );
									} elseif ( ( $max_attendees - $reg_attendees ) <= 3 ) {
										$seats_left   = $max_attendees - $reg_attendees;
										$event_status = sprintf( __( 'Only %s Seats Left', 'bmtheme' ), $seats_left );
										$event_class  = 'is-limited';
									} else {
										$event_class  = 'is-open';
										$event_status = '';
									}
									?>

									<li class="event-date <?php echo esc_attr( $event_class ); ?>">

										<div class="event-location">
											<?php the_sub_field( 'event_location' ); ?>
										</div>

										<div class="event-status <?php echo esc_attr( $event_class ); ?>">
											<?php echo esc_html( $event_status ); ?>
										</div>

										<div class="event-from-date">
											<?php echo esc_html( $from_date->format( _x( 'F j', 'from event date format', 'bmtheme' ) ) ); ?>
										</div>

										<?php if ( $to_date != $from_date ) : ?>
											<div class="event-to-date">
												<?php echo esc_html( $to_date->format( _x( 'F j, Y', 'to event date format', 'bmtheme' ) ) ); ?>
											</div>
										<?php endif; ?>

									</li>

								<?php endwhile; ?>

							</ul>

						<?php endif; ?>

						<?php if ( $_product ) : ?>

							<p class="event-item-link">
								<a href="<?php the_permalink( $event_product ) ?>" class="large hollow button"><?php esc_html_e( 'Register Now', 'bmtheme' ); ?></a>
							</p>

						<?php elseif ( $event_course_link ) : ?>

							<p class="event-item-link">
								<a href="<?php echo esc_url_raw( $event_course_link ) ?>" class="large hollow button"><?php esc_html_e( 'Go to Course', 'bmtheme' ); ?></a>
							</p>

						<?php endif; ?>

					</div>
				</div>

			</article>

			<?php if ( ! $_product ) : ?>

				<?php get_template_part( 'sections/project_cta' ); ?>

			<?php endif; ?>

		<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
