<?php

/**
 * Displays Blog Articles from XLD Studios
 *
 * @since Bernskiold Media Framework 1.0
 * @author XLD Studios
 * @version 1.0
 * @package Bernskiold Media Framework
 **/

add_action('wp_dashboard_setup', 'bernskioldmedia_dashboard_widget_blog');

function bernskioldmedia_dashboard_widget_blog() {

     global $wp_meta_boxes;

     // add a custom dashboard widget
     wp_add_dashboard_widget( 'dashboard_custom_feed', __('From the XLD Studios Blog', 'bernskioldmedia'), 'bernskioldmedia_dashboard_widget_blog_output' ); //add new RSS feed output
}

function bernskioldmedia_dashboard_widget_blog_output() {
     echo '<div class="rss-widget">';
     wp_widget_rss_output(array(
          'url' => __( 'http://www.xldstudios.com/feed', 'bernskioldmedia' ),
          'title' => __('The Latest from XLD Studios', 'bernskioldmedia'),
          'items' => 2,
          'show_summary' => 1,
          'show_author' => 0,
          'show_date' => 1
     ));
     echo "</div>";
}