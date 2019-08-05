<?php

/*
@package Buono-Theme
  This is template is for Default Sidebar
*/
  if( ! is_active_sidebar('buono-sidebar')){
    return;
  }
?>
  <aside class="general buono-sidebar" role="complementary">
    <?php dynamic_sidebar('buono-sidebar');?>
  </aside>
