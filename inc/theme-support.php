<?php
/*
@package Buono-Theme
  This is template is for adding all theme supports
*/
/*
  ====================================
  Enable Normal Support Features
  ====================================
*/
  // Menus
  add_theme_support('menus');
  function buono_reg_menus(){
    register_nav_menu('navbar', 'Menu for bootstrap navbar');
  }
  add_action( 'after_setup_theme','buono_reg_menus');

  // Others
  add_theme_support('post-thumbnails',array('post','buono-testimonials','buono-team'));
  add_theme_support('custom-header');
  add_theme_support('custom-background');
  add_theme_support('custom-logo');
  add_theme_support('html5', array('comment-list','comment-form','search-form'));
