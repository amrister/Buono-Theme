<?php
/*
@package Buono-Theme
  This is template is for enqueue all required files for theme
*/
function buono_enqueue_files(){

  // CSS
  wp_enqueue_style( 'foundation-css', get_template_directory_uri().'/css/bootstrap.min.css',array(), '6.5.1', 'all' );
  wp_enqueue_style( 'master', get_template_directory_uri().'/css/master.css',array(), '1.0.0', 'all' );

  // JS
  wp_deregister_script('jquery');
  wp_enqueue_script( 'jquery',get_template_directory_uri().'/js/jquery-3.4.1.js' , array(), '3.4.1', true);
  wp_enqueue_script('foundation-js', get_template_directory_uri().'/js/bootstrap.min.js', array('popper'), '6.5.1', true);
  wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '6.5.1', true);
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);

  // Fonts & icons
  wp_enqueue_style('font-face', get_template_directory_uri().'/fonts/font-face.css', array(), false, 'all');
  wp_enqueue_style('buono-icons', get_template_directory_uri().'/icons/buono-icons.css', array(), false, 'all');

}
add_action('wp_enqueue_scripts','buono_enqueue_files');
