<?php
/*
@package Buono-Theme
  This is template is for Home Sidebar
*/
  if( ! is_active_sidebar('buono-home-sidebar')){
    return;
  }
?>
<aside class="buono-sidebar sidebar-nav" id='navigation-home' role='complementary'>
  <?php dynamic_sidebar('buono-home-sidebar') ?>
</aside>
