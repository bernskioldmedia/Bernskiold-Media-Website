<?php
/**
 * Page Template: Frontpage
 *
 * Adds a custom page template to display the frontpage.
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 *
 * Template Name: Frontpage
 *
 **/

get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="hero">
      <div class="row">
        <div class="small-22 medium-16 large-15 columns small-centered">
          <h1><?php _e( 'Grasp the Web', 'bernskioldmedia' ); ?></h1>
          <p class="hero-subtitle"><?php _e( 'The web is a magical place and we help to use it better, whether it is outlining strategies, creating effective websites, developing web apps or helping you learn what is new.', 'bernskioldmedia' ); ?></p>
          <p><a href="<?php echo bm_home_url( _x( 'contact', 'contact page slug', 'bernskioldmedia' ) ) ;?>" class="button outline light"><?php _e( 'Get In Touch', 'bernskioldmedia' ); ?></a></p>
        </div>
      </div>
    </div>
    <div class="hero-service-selector">
        <ul>
          <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/web-strategy/' ); ?>"><i class="fa fa-2x fa-cogs"></i> <?php _e( 'Web Strategy', 'bernskioldmedia' ); ?></a></li>
          <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/web-design-development/' ); ?>"><i class="fa fa-2x fa-code"></i> <?php _e( 'Design & Development', 'bernskioldmedia' ); ?></a></li>
          <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/e-commerce/' ); ?>"><i class="fa fa-2x fa-shopping-cart"></i> <?php _e( 'e-Commerce', 'bernskioldmedia' ); ?></a></li>
          <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/education/' ); ?>"><i class="fa fa-2x fa-users"></i> <?php _e( 'Education', 'bernskioldmedia' ); ?></a></li>
        </ul>
      </div>

    <div class="main frontpage">

      <div class="page-section-bordered">

        <div class="row page-section-3x">
          <div class="small-24 columns text-center">
            <h2 class="text-center"><?php _e( 'Three Focus Areas', 'bernskioldmedia' ); ?></h2>
            <p class="sub-heading text-center"><?php _e( 'Our services are built around these three focus areas, which we work around on all projects.', 'bernskioldmedia' ); ?></p>
          </div>
          <div class="small-24 medium-24 large-8 columns text-center">
            <h3><?php _e( 'Strategy', 'bernskioldmedia' ); ?></h3>
            <p><?php _e( 'Before setting out to create something, a strategy helps you deliver and secure the long term results. Many web projects aren\'t successful before they lack a long term plan. Let yours be better.', 'bernskioldmedia' ); ?></p>
            <p><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/web-strategy/' ); ?>" class="button"><?php _e( 'More Web Strategy', 'bernskioldmedia' ); ?></a></p>
          </div>
          <div class="small-24 medium-12 large-8 columns text-center">
            <h3><?php _e( 'Development', 'bernskioldmedia' ); ?></h3>
            <p><?php _e( 'Turning a strategy, vision or idea into a well-functioning product is an art form in itself. You want your web project to succeed, right? Let us help you make it successful both in the short and long term.', 'bernskioldmedia' ); ?></p>
            <p><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/web-design-development/' ); ?>" class="button"><?php _e( 'More Design & Development', 'bernskioldmedia' ); ?></a></p>
          </div>
          <div class="small-24 medium-12 large-8 columns text-center">
            <h3><?php _e( 'Education', 'bernskioldmedia' ); ?></h3>
            <p><?php _e( 'A vital component is education. If nobody knows how to use something, how do you expect it to succeed? Let us help you with your internal education in a clear and pedagocial way.', 'bernskioldmedia' ); ?></p>
            <p><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/education/' ); ?>" class="button"><?php _e( 'More Education', 'bernskioldmedia' ); ?></a></p>
          </div>
        </div>

      </div>

      <?php /*
      <section class="case-study-highlights">
        <ul class="hero-case-study-list">
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case-studies/camping-key.png" alt="">
            <div class="hero-case-study-info">
              <h4 class="hero-case-study-title">Camping Key Europe</h4>
              <p class="hero-case-study-excerpt">Together with Truth, we have been working to create a new web for...</p>
              <div class="hero-case-study-category"><i class="fa fa-code"></i> Design &amp; Development</div>
            </div>
          </li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case-studies/truth.png" alt="">
            <div class="hero-case-study-info">
              <h4 class="hero-case-study-title">Camping Key Europe</h4>
              <p class="hero-case-study-excerpt">Together with Truth, we have been working to create a new web for...</p>
              <div class="hero-case-study-category"><i class="fa fa-code"></i> Design &amp; Development</div>
            </div>
          </li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case-studies/startaihop.png" alt="">
            <div class="hero-case-study-info">
              <h4 class="hero-case-study-title">Camping Key Europe</h4>
              <p class="hero-case-study-excerpt">Together with Truth, we have been working to create a new web for...</p>
              <div class="hero-case-study-category"><i class="fa fa-code"></i> Design &amp; Development</div>
            </div>
          </li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case-studies/signonline.png" alt="">
            <div class="hero-case-study-info">
              <h4 class="hero-case-study-title">Camping Key Europe</h4>
              <p class="hero-case-study-excerpt">Together with Truth, we have been working to create a new web for...</p>
              <div class="hero-case-study-category"><i class="fa fa-code"></i> Design &amp; Development</div>
            </div>
          </li>
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/case-studies/esska.png" alt="">
            <div class="hero-case-study-info">
              <h4 class="hero-case-study-title">Camping Key Europe</h4>
              <p class="hero-case-study-excerpt">Together with Truth, we have been working to create a new web for...</p>
              <div class="hero-case-study-category"><i class="fa fa-code"></i> Design &amp; Development</div>
            </div>
          </li>
        </ul>
      </section>
      */ ?>

      <div class="page-section-3x page-section-bordered">
        <div class="row">
          <div class="small-24 columns text-center">
            <h2 class="text-center"><?php _e( 'Trusted by Clients Worldwide', 'bernskioldmedia' ); ?></h2>
            <p class="sub-heading text-center"><?php _e( 'From small businesses to big organizations, clients around the world entrust us with their web projects.', 'bernskioldmedia' ); ?></p>

            <ul class="inline-block-list spacing-2x text-center client-logo-list">
              <li><a href="http://www.ssrs.se/"><img src="<?php echo get_template_directory_uri(); ?>/images/clients/srss.png" alt="Swedish Sea Rescue Society"></a></li>
               <li><a href="http://www.campingkey.com"><img src="<?php echo get_template_directory_uri(); ?>/images/clients/campingkey.png" alt="Camping Key Europe"></a></li>
              <li><a href="http://www.vimlewebb.se"><img src="<?php echo get_template_directory_uri(); ?>/images/clients/vimlewebb.png" alt="VimleWebb"></a></li>
              <li><a href="http://www.miami.se"><img src="<?php echo get_template_directory_uri(); ?>/images/clients/miami.png" alt="Miami Advertising Agency"></a></li>
              <li><a href="http://www.highheaven.com"><img src="<?php echo get_template_directory_uri(); ?>/images/clients/highheaven.png" alt="HighHeaven"></a></li>
              <li><a href="http://www.hellotruth.se"><img src="<?php echo get_template_directory_uri(); ?>/images/clients/truth.png" alt="Truth"></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="page-section-3x page-section-bordered bg-gray">
        <div class="row">
          <div class="small-24 columns">
            <blockquote class="frontpage-testimonial"><?php _e( 'We are very happy with the website that Bernskiold Media has built for us. With WordPress we have a modern and easily maintanable website that has been completely integrated with our warehouse management system.', 'bernskioldmedia' ); ?><cite>Kristofer Grahn, CEO, BoxBuddy</cite> </blockquote>
          </div>
        </div>
      </div>

      <?php
      $blog_query_args = array(
        'post_type'      => 'post',
        'posts_per_page' => 2,
      );

      $blog_query = bm_get_transient_query( 'frontpage_blog_query_' . ICL_LANGUAGE_CODE, $blog_query_args, HOUR_IN_SECONDS );

      if ( $blog_query->have_posts() ) : ?>
        <div class="page-section-light">
          <div class="row page-section-2x">
            <div class="small-24 medium-24 large-9 columns">
              <h2><?php _e( 'From The Academy', 'bernskioldmedia' ); ?></h2>
              <p class="sub-heading"><?php _e( 'In our academy we publish article about all aspects of a successful web. Read about strategy, analysis, business, marketing and much more.', 'bernskioldmedia' ); ?></p>
            </div>

            <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
              <div class="small-24 medium-12 large-7 columns post-item">

                <?php if ( has_post_thumbnail() ) : ?>
                  <p class="post-thumbnail"><a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'fp-blog-thumbnail' ); ?>
                  </a></p>
                <?php endif; ?>

                <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php the_excerpt(); ?></p>
              </div>
            <?php endwhile; ?>

          </div>
        </div>
      <?php endif; ?>

    </div>

	<?php endwhile; ?>

	<?php endif; ?>

<?php get_footer(); ?>