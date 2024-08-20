<?php

/*** Editor clasico ***/
add_filter('use_block_editor_for_post', '__return_false', 10);

add_action('wp_enqueue_scripts', 'artech_child_theme_styles', 3);
function artech_child_theme_styles()
{
  wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), null, true);
  if (is_page("trabaja-con-nosotros")) {
    wp_enqueue_script('trabaja-script', get_stylesheet_directory_uri() . '/assets/js/trabaja-con-nosotros.js', array(), null, true);
  }
  wp_enqueue_style('artech-parent-style', get_template_directory_uri() . '/style.css', array('bootstrap'));
  wp_enqueue_style('artech-child-style', get_stylesheet_uri(), array('artech-parent-style'));
}
