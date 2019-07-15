<?php
/*
@package Buono-Theme
  This is template is for adding all theme supports
*/
add_theme_support('menus');
function buono_reg_menus(){
  register_nav_menu('navbar', 'Menu for bootstrap navbar');
}
add_action( 'after_setup_theme','buono_reg_menus');

// Enable Post Thumbnails For Posts
add_theme_support('post-thumbnails',array('post','buono-testimonials','buono-team'));
