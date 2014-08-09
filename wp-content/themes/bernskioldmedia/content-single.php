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

</article>