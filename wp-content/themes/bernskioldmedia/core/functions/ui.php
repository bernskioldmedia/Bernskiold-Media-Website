<?php
/**
 * Contains various tweaks for UI purposes
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

/**
 * Custom Pagination
 *
 * @since Bernskiold Media Framework 1.0
 **/
function bernskioldmedia_pagination($pages = '', $range = 2) {
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

if ( ! function_exists( 'bm_author_box' ) ) :
    /**
     * Single Post Author Box
     *
     * @author Erik Bernskiold
     * @return void
     */
    function bm_author_box() {

        global $post;

        ob_start(); ?>

        <div class="post-author-box">
            <div class="row">

                <div class="post-author-box-avatar small-24 medium-8 columns">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
                </div>

                <div class="post-author-box-info small-24 medium-16 columns">
                    <h5 class="post-author-box-name"><?php the_author(); ?></h5>
                    <p class="post-author-box-bio"><?php the_author_meta( 'description' ); ?></p>
                    <p><a href="https://twitter.com/<?php the_author_meta( 'twitter' ); ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php the_author_meta( 'twitter' ); ?></a></p>
                </div>

            </div>
        </div>

        <?php
        $output = ob_get_clean();

        echo $output;

    }
endif;

if ( ! function_exists( 'bm_language_switcher' ) ) :
    /**
     * Language Switcher
     *
     * Creates the language switcher for the header,
     * using only flags and showing all enabled languages.
     *
     * @author  Erik Bernskiold
     */
    function bm_language_switcher() {

        // Declare variables
        $output = '';

        // Load the languages
        $languages = icl_get_languages('skip_missing=0&orderby=code');

        if ( ! empty( $languages ) ) {

            $output .= '<ul class="languages-list">';

            foreach ( $languages as $l ) {

                $output .= '<li>';

                if ( ! $l['active'] )
                    $output .= '<a href="' . $l['url'] . '">';

                $output .= '<img src="' . $l['country_flag_url'] . '" height="12" alt="' . $l['language_code'] . '" width="18" />';

                if ( ! $l['active'] )
                    $output .= '</a>';

                $output .= '</li>';
            }

            $output .= '</ul>';

        }

        return $output;

    }
endif;

if ( ! function_exists( 'bm_blog_heading' ) ) :

    /**
     * Blog Heading Document
     *
     * @author  Erik Bernskiold
     */
    function bm_blog_heading() {

        $title    = __( 'Academy', 'bernskioldmedia' );
        $subtitle = false;

        if ( is_category() ) {
            $title    = single_cat_title( '', false );
            $subtitle = category_description();
        }

        ob_start(); ?>

        <section class="page-title-block blog-title-block">
            <div class="row">
                <div class="small-24 columns">
                    <h1><?php echo $title; ?></h1>

                    <?php if ( $subtitle ) : ?>
                        <p class="page-subtitle"><?php echo $subtitle; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <nav class="blog-topics">
            <div class="row">
                <?php wp_nav_menu(array(
                    'theme_location' => 'blog-topics-menu',
                    'container'       => '',
                    'depth'           => 1,
                )); ?>
            </div>
        </nav>

        <?php

        $output = ob_get_clean();

        echo $output;

    }

endif;