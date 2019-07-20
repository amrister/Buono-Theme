<?php
/*
@package Buono-Theme
  This is template is for Header of pages
*/
  $slug = basename(get_permalink());
  $class = 'page-'.$slug;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php bloginfo('name');?></title>
    <meta charset="<?php wp_title('|');bloginfo('charset'); ?>" >
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description');?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(array('template-page',$class)); ?>>
