<?php
/**
 * Displays the site footer
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/
?>

    <footer class="site-footer">

      <div class="row">
        <div class="small-24 columns">
          <?php wp_nav_menu(array(
            'theme_location'  => 'primary-menu',
            'container'       => 'nav',
            'container_class' => 'footer-navigation',
            'depth'           => 1,
          )); ?>
        </div>
      </div>

      <div class="row">

        <div class="small-24 medium-24 large-12 columns footer-col-1">

          <div class="row">
            <div class="small-24 columns footer-about">
              <p><?php printf( __( '<span>Bernskiold Media</span> is a web and digital agency based out of Gothenburg, Sweden. <a href="%s">Read More</a>', 'bernskioldmedia' ), home_url( ICL_LANGUAGE_CODE . _x( '/about-us/', 'about us page slug', 'bernskioldmedia' ) ) ); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns footer-case-study">
              <h5 class="footer-block-title"><?php _e( 'Newsletter', 'bernskioldmedia' ); ?></h5>
              <form action="http://bernskioldmedia.us1.list-manage.com/subscribe/post?u=692fa400bc84329b1d105c071&amp;id=3806350390" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <input type="email" placeholder="<?php _e( 'Your email address', 'bernskioldmedia' ); ?>">
                <input type="submit" value="<?php _e( 'Subscribe for Free', 'bernskioldmedia' ); ?>" class="button outline expand light">
              </form>
            </div>
            <div class="small-12 columns footer-social-media">
              <h5 class="footer-block-title"><?php _e( 'On Social Media', 'bernskioldmedia' ); ?></h5>
              <ul>
                <li class="facebook"><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
                <li class="youtube"><a href="#"><i class="fa fa-youtube-square"></i> YouTube</a></li>
                <li class="github"><a href="#"><i class="fa fa-github-square"></i> Github</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="small-12 medium-12 large-6 columns footer-services">
          <div class="footer-block">
            <h5 class="footer-block-title"><?php _e( 'What We Do', 'bernskioldmedia' ); ?></h5>
            <ul>
              <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/' ); ?>">Web Development</a></li>
              <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/' ); ?>">e-Commerce</a></li>
              <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/' ); ?>">Web Analysis</a></li>
              <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/' ); ?>">Web Strategy</a></li>
              <li><a href="<?php echo home_url( ICL_LANGUAGE_CODE . '/services/' ); ?>">Mobile Solutions</a></li>
            </ul>
          </div>
        </div>

        <div class="small-24 medium-12 large-6 columns">
          <div class="footer-block" itemscope itemtype="http://schema.org/Organization">
            <h5 class="footer-block-title"><?php _e( 'Contact', 'bernskioldmedia' ); ?></h5>
            <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="name">Bernskiold Media AB</span><br/>
            <span itemprop="streetAddress">Storgatan 53</span><br/>
            <span itemprop="postalCode">411 38</span> <span itemprop="addressLocality"><?php _e( 'Gothenburg', 'bernskioldmedia' ); ?></span></p>
            <p><?php _e( 'Phone:', 'bernskioldmedia' ); ?> <a href="tel://+4631102010" class="no-link" itemprop="telephone"><?php _e( '+46 (0) 31 - 10 20 10', 'bernskioldmedia' ); ?></a><br/>
            <a href="mailto:<?php _e( 'info@bernskioldmedia.com', 'bernskioldmedia' ); ?>" class="no-link" itemprop="email"><?php _e( 'info@bernskioldmedia.com', 'bernskioldmedia' ); ?></a></p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="small-24 columns colophon">
          <p><?php printf( __( 'Copyright &copy; %s Bernskiold Media AB. All Rights Reserved.', 'bernskioldmedia' ), date( 'Y' ) ); ?></p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>