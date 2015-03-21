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
              <p><?php printf( __( '<span>Bernskiold Media</span> is a web and digital agency based in Gothenburg, Sweden. <a href="%s">Read More</a>', 'bernskioldmedia' ), home_url( ICL_LANGUAGE_CODE . _x( '/about-us/', 'about us page slug', 'bernskioldmedia' ) ) ); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns footer-case-study">
              <h5 class="footer-block-title"><?php _e( 'Bernskiold Media', 'bernskioldmedia' ); ?></h5>
              <?php wp_nav_menu(array(
                'theme_location'  => 'company-menu',
                'container'       => 'nav',
                'container_class' => 'company-navigation',
                'depth'           => 1,
              )); ?>
            </div>
            <div class="small-12 columns footer-social-media">
              <h5 class="footer-block-title"><?php _e( 'On Social Media', 'bernskioldmedia' ); ?></h5>
              <ul>
                <li class="facebook"><a href="https://www.facebook.com/bernskioldmedia"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                <li class="twitter"><a href="https://twitter.com/bernskioldmedia"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                <li class="linkedin"><a href="https://www.linkedin.com/company/bernskiold-media"><i class="fa fa-linkedin-square"></i> LinkedIn</a></li>
                <li class="youtube"><a href="https://www.youtube.com/user/ErikBernskiold"><i class="fa fa-youtube-square"></i> YouTube</a></li>
                <li class="github"><a href="https://github.com/bernskioldmedia"><i class="fa fa-github-square"></i> Github</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="small-24 medium-8 large-12 columns" id="footer-newsletter">

          <h5 class="footer-block-title"><?php _e( 'Receive Insights, News and Tips for Free', 'bernskioldmedia' ); ?></h5>
              <form action="//bernskioldmedia.us1.list-manage.com/subscribe/post?u=692fa400bc84329b1d105c071&amp;id=3806350390" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="row">
                  <div class="small-14 medium-24 large-16 columns">
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?php _e( 'Your email address', 'bernskioldmedia' ); ?>">
                  </div>
                  <div class="small-10 medium-24 large-8 columns">
                    <input type="submit" value="<?php _e( 'Subscribe', 'bernskioldmedia' ); ?>" class="button outline expand light" id="newsletter-submission">
                  </div>
                </div>
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_692fa400bc84329b1d105c071_3806350390" tabindex="-1" value=""></div>
              </form>
        </div>

        <div class="small-10 medium-8 large-6 columns footer-services">
          <div class="footer-block">
            <h5 class="footer-block-title"><?php _e( 'What We Do', 'bernskioldmedia' ); ?></h5>
            <?php wp_nav_menu(array(
              'theme_location'  => 'services-menu',
              'container'       => 'nav',
              'container_class' => 'services-menu',
              'depth'           => 1,
            )); ?>
          </div>
        </div>

        <div class="small-14 medium-8 large-6 columns footer-contact">
          <div class="footer-block" itemscope itemtype="//schema.org/Organization">
            <h5 class="footer-block-title"><?php _e( 'Contact', 'bernskioldmedia' ); ?></h5>
            <p itemprop="address" itemscope itemtype="//schema.org/PostalAddress"><span itemprop="name"><?php _e( 'Bernskiold Media AB', 'bernskioldmedia' ); ?></span><br/>
            <span itemprop="streetAddress"><?php _e( 'Ingenjörsgatan 9', 'bernskioldmedia' ); ?></span><br/>
            <span itemprop="postalCode"><?php _e( '411 19', 'bernskioldmedia' ); ?></span> <span itemprop="addressLocality"><?php _e( 'Gothenburg', 'bernskioldmedia' ); ?></span></p>
            <p><?php _e( 'Phone:', 'bernskioldmedia' ); ?> <a href="tel://+4631102010" class="no-link" itemprop="telephone"><?php _e( '+46 31 - 10 20 10', 'bernskioldmedia' ); ?></a><br/>
            <a href="mailto:<?php _e( 'info@bernskioldmedia.com', 'bernskioldmedia' ); ?>" class="no-link" itemprop="email"><?php _e( 'info@bernskioldmedia.com', 'bernskioldmedia' ); ?></a></p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="small-24 columns colophon text-center">
          <p><?php printf( __( 'Copyright &copy; %s Bernskiold Media AB. All Rights Reserved.', 'bernskioldmedia' ), date( 'Y' ) ); ?></p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>