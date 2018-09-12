<?php
function basic_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri().'/css/basic.css', array(),'1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri().'/js/basic.js', array(),'1.0.0', true);
}
add_action('wp_enqueue_scripts', 'basic_script_enqueue');

function basic_setup(){
add_theme_support('menus');
register_nav_menu('primary', 'Primary Header Navigation');
register_nav_menu('secondary', 'Secondary Navigation');
}
add_action( 'init','basic_setup');