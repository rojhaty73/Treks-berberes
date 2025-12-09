<?php
function add_style() {
  wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false);
  wp_enqueue_style('404-style', get_template_directory_uri() . '/404.css', false);
}
add_action( 'wp_enqueue_scripts', 'add_style' );


function add_script() {
  wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'add_script' );


function custom_register_nav_menu(){
      register_nav_menus( array(
          'primary_menu' => 'Menu principal',
      ) );
  }
  add_action( 'after_setup_theme', 'custom_register_nav_menu', 0 );





