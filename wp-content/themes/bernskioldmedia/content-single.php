<?php
/**
 * Content Template for Single Posts
 *
 * @since Bernskiold Media Framework 1.1
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-thumbnail">
		<?php the_post_thumbnail( 'blog-thumbnail' ); ?>
	</div>
	<?php endif; ?>

	<h1 class="post-title"><?php the_title(); ?></h1>

	<ul class="post-meta">
		<li class="post-date"><i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?></li>
		<li class="post-author"><i class="fa fa-user"></i> <?php the_author(); ?></li>
		<li class="post-categories"><i class="fa fa-tag"></i> <?php the_category( ' / ' ); ?></li>
	</ul>

	<div class="post-body">
		<?php the_content( __('Continue Reading &raquo;', 'bernskioldmedia') ); ?>
	</div>

	<div class="post-author">
		<?php the_author(); ?>
	</div>

	<div class="post-newsletter">
		<h3><?php _e( 'Like What You\'ve Read? Keep Improving Your Website. Exclusive Insights Right to Your Inbox', 'bernskioldmedia' ); ?></h3>
		<p class="intro"><?php _e( 'Leave your email below to sign up for our free newsletter where we send you more useful articles and insights to help you improve your site.', 'bernskioldmedia' ); ?></p>
		<form action="//bernskioldmedia.us1.list-manage.com/subscribe/post?u=692fa400bc84329b1d105c071&amp;id=3806350390" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate onSubmit="ga('send','event','Newsletter','Subscribe','Post')">
        <div class="row">
          <div class="small-14 medium-24 large-16 columns">
          	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="<?php _e( 'Your email address', 'bernskioldmedia' ); ?>">
          </div>
          <div class="small-10 medium-24 large-8 columns">
            <input type="submit" value="<?php _e( 'Subscribe', 'bernskioldmedia' ); ?>" name="subscribe" id="mc-embedded-subscribe" class="button expand">
          </div>
        </div>
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_692fa400bc84329b1d105c071_3806350390" tabindex="-1" value=""></div>
      </form>
	</div>

</article>