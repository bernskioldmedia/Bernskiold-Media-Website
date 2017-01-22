<?php
/**
 * Courses Template
 **/
namespace BernskioldMedia\Theme;
?>

<?php

// Get Event Fields.
$event_image        = get_the_post_thumbnail_url( $post->ID, 'large' );
$course_highlight   = get_field( 'course_highlight' );
$course_about       = get_field( 'course_about' );
$course_knowledge   = get_field( 'course_knowledge' );
$course_audience    = get_field( 'course_audience' );
$course_learning    = get_field( 'course_learning' );
$event_person_photo = get_field( 'event_person_photo' );
$event_person_name  = get_field( 'event_person_name' );
$name_parts         = explode( ' ', $event_person_name );
$event_person_fname = $name_parts[1];
$event_person_bio   = get_field( 'event_person_bio' );
$event_types        = get_the_terms( $post->ID, 'bm_event_type' );
$event_course_link  = get_field( 'event_course_link' );
$event_price        = get_field( 'event_price' );

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

	<section class="section has-spacing">
		<div class="row">
			<div class="small-24 medium-12 columns">

				<?php if ( $course_highlight ) : ?>

					<p class="course-highlight">
						<?php echo $course_highlight; ?>
					</p>

				<?php endif; ?>

				<?php if ( $course_about ) : ?>

					<h2 class="h3 text-bold"><?php esc_html_e( 'About the Course', 'bmtheme' ); ?></h2>

					<div class="course-about">
						<?php echo $course_about; ?>

						<p>
							<a href="#register" class="hollow button mb0"><?php esc_html_e( 'Register For This Course', 'bmtheme' ); ?></a>
						</p>
					</div>

				<?php endif; ?>

				<div class="block mt1 bg-primary-light">
					<div class="row">
						<div class="column shrink">
							<div class="block-icon is-left is-big">
								<i class="fa fa-users color-primary"></i>
							</div>
						</div>
						<div class="column">
							<h3 class="h4 text-bold"><?php esc_html_e( 'Group Discount for 3+ people', 'bmtheme' ); ?></h3>
							<div class="block-content">
								<p class="intro-sm"><?php esc_html_e( 'Do your colleagues also want to take this course? Cool! We offer a group discount of a full 20% for parties of more than 3 people.', 'bmtheme' ); ?></p>
							</div>
						</div>
					</div>
				</div>

				<div class="block mt1 mb1 bg-accent-light">
					<div class="row">
						<div class="column shrink">
							<div class="block-icon is-left is-big">
								<i class="fa fa-heart color-accent"></i>
							</div>
						</div>
						<div class="column">
							<h3 class="h4 text-bold"><?php esc_html_e( 'Bring a Friend - 10% Discount', 'bmtheme' ); ?></h3>
							<div class="block-content">
								<p class="intro-sm"><?php esc_html_e( 'Don\'t want to go alone? Then bring a friend and you will both get a 10% discount on the course.', 'bmtheme' ); ?></p>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="small-24 medium-12 columns">

				<div class="block bg-secondary">

					<?php if ( $event_person_photo && $event_person_name ) : ?>

						<div class="event-person course-leader">

							<h3 class="event-person-title"><?php esc_html_e( 'Course Leader', 'bmtheme' ); ?></h3>

							<div class="event-person-photo">
								<img src="<?php echo esc_url_raw( $event_person_photo['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $event_person_name ); ?>">
							</div>

							<div class="event-person-name">
								<?php echo esc_html( $event_person_name ); ?>
								<span class="read-more"><a href="#course-leader"><?php esc_html_e( 'Read More &raquo;', 'bmtheme' ); ?></a></span>
							</div>

						</div>

						<dl class="event-details">

							<?php
							/**
							 * Price Display
							 */
							if ( '0' == $event_price ) : ?>
								<dt><?php esc_html_e( 'Price', 'bmtheme' ); ?></dt>
								<dd class="event-price"><?php esc_html_e( 'Free!', 'bmtheme' ); ?></dd>
							<?php elseif ( $event_price ) : ?>
								<dt><?php esc_html_e( 'Price', 'bmtheme' ); ?></dt>
								<dd class="event-price">
									<?php printf( __( '%s USD', 'bmtheme' ), $event_price ); ?>
									<span><?php esc_html_e( 'excl. VAT', 'bmtheme' ); ?></span>
								</dd>
							<?php endif; ?>

							<dt><?php esc_html_e( 'Length', 'bmtheme' ); ?></dt>
							<dd><?php the_field( 'event_length' ); ?></dd>

							<?php
							/**
							 * Display Event Dates
							 */
							if ( have_rows( 'event_dates' ) ) : ?>

								<dt><?php esc_html_e( 'Dates', 'bmtheme' ); ?></dt>

								<dd>
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

										<div class="event-date <?php echo esc_attr( $event_class ); ?>">

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

										</div>

									<?php endwhile; ?>
								</dd>

							<?php endif; ?>

						</dl>

						<div class="course-registration-cta">
							<p>
								<a href="#register" class="expanded button mb0"><?php esc_html_e( 'Register Now', 'bmtheme' ); ?></a>
							</p>
						</div>

					<?php endif; ?>

				</div>

				<?php if ( $course_learning ) : ?>

					<div class="block course-learning">
						<h3 class="text-bold pt1">
							<i class="fa fa-graduation-cap fa-fw spaced-icon color-accent"></i> <?php esc_html_e( 'What will you be learning?', 'bmtheme' ); ?>
						</h3>

						<?php echo $course_learning; ?>

					</div>

				<?php endif; ?>

			</div>
		</div>
		<div class="row">

		</div>
	</section>

	<section class="section has-spacing bg-secondary">
		<div class="row align-justify">

			<div class="small-24 medium-12 large-13">
				<?php if ( $course_audience && $course_knowledge ) : ?>
					<div class="block">
						<h3 class="text-bold">
							<i class="fa fa-bullseye fa-fw spaced-icon color-accent"></i> <?php esc_html_e( 'Who\'s this course for?', 'bmtheme' ); ?>
						</h3>

						<?php echo $course_audience; ?>

						<hr class="is-big is-thick is-light">

						<h3 class="text-bold">
							<i class="fa fa-lightbulb-o fa-fw spaced-icon color-accent"></i> <?php esc_html_e( 'What do I need to know before?', 'bmtheme' ); ?>
						</h3>

						<?php echo $course_knowledge; ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="small-24 medium-12 large-10" id="course-leader">

				<?php if ( $event_person_bio ) : ?>

					<div class="block bg-white">

						<div class="event-item-bio course-biography">

							<?php if ( $event_person_photo ) : ?>
								<img src="<?php echo esc_url_raw( $event_person_photo['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $event_person_name ); ?>" class="alignright image-rounded">
							<?php endif; ?>

							<h3 class="text-bold"><?php esc_html_e( 'Course Leader', 'bmtheme' ); ?></h3>

							<h4 class="subheader mb1"><?php echo esc_html( $event_person_name ); ?></h4>

							<?php echo $event_person_bio; ?>

						</div>

					</div>

				<?php endif; ?>

			</div>

		</div>
	</section>

	<section class="section has-spacing bg-secondary" id="register">
		<div class="row align-center">
			<div class="small-24 medium-20 large-18 columns">

				<div class="block is-spacious has-shadow bg-white">

					<h2><?php esc_html_e( 'Course Registration', 'bmtheme' ); ?></h2>
					<p class="intro"><?php esc_html_e( 'Just select the date and fill in your details here below to register for this course right away. We look forward to seeing you!', 'bmtheme' ); ?></p>

					<hr class="is-big is-thick is-light">

					<?php gravity_form( 9, false, false, false, array(
						'course_name'  => get_the_title(),
						'course_price' => get_field( 'event_price' ),
					), true ); ?>

				</div>

			</div>
		</div>
	</section>

</article>
