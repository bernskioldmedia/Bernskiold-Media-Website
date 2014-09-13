<?php
/**
 * Contains various tweaks for UI purposes
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

if ( ! function_exists( 'bernskioldmedia_pagination' ) ) :

    /**
     * Pagination
     *
     * Creates a pagination markup based on the Foundation
     * framework pagination markup.
     *
     * @author  Erik Bernskiold
     */

    function bernskioldmedia_pagination( $arrows = true, $ends = true, $pages = 2 ) {

        if (is_singular()) return;

        global $wp_query, $paged;
        $pagination = '';

        $max_page = $wp_query->max_num_pages;
        if ($max_page == 1) return;
        if (empty($paged)) $paged = 1;

        if ($arrows) $pagination .= bernskioldmedia_pagination_link($paged - 1, 'arrow' . (($paged <= 1) ? ' unavailable' : ''), '&laquo;', 'Previous Page');
        if ($ends && $paged > $pages + 1) $pagination .= bernskioldmedia_pagination_link(1);
        if ($ends && $paged > $pages + 2) $pagination .= bernskioldmedia_pagination_link(1, 'unavailable', '&hellip;');
        for ($i = $paged - $pages; $i <= $paged + $pages; $i++) {
            if ($i > 0 && $i <= $max_page)
                $pagination .= bernskioldmedia_pagination_link($i, ($i == $paged) ? 'current' : '');
        }
        if ($ends && $paged < $max_page - $pages - 1) $pagination .= bernskioldmedia_pagination_link($max_page, 'unavailable', '&hellip;');
        if ($ends && $paged < $max_page - $pages) $pagination .= bernskioldmedia_pagination_link($max_page);

        if ($arrows) $pagination .= bernskioldmedia_pagination_link($paged + 1, 'arrow' . (($paged >= $max_page) ? ' unavailable' : ''), '&raquo;', 'Next Page');

        $pagination = '<ul class="pagination">' . $pagination . '</ul>';
        $pagination = '<div class="pagination-centered">' . $pagination . '</div>';

        echo $pagination;
    }

endif;

if ( ! function_exists( 'bernskioldmedia_pagination_link' ) ) :

    /**
     * Pagination Link
     *
     * Creates the special pagination link that is then used in the
     * main pagination function above.
     *
     * @author  Erik Bernskiold
     */
    function bernskioldmedia_pagination_link( $page, $class = '', $content = '', $title = '' ) {
        $id = sanitize_title_with_dashes('pagination-page-' . $page . ' ' . $class);
        $href = (strrpos($class, 'unavailable') === false && strrpos($class, 'current') === false) ? get_pagenum_link($page) : "#$id";

        $class = empty($class) ? $class : " class=\"$class\"";
        $content = !empty($content) ? $content : $page;
        $title = !empty($title) ? $title : 'Page ' . $page;

        return "<li$class><a id=\"$id\" href=\"$href\" title=\"$title\">$content</a></li>\n";
    }

endif;

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