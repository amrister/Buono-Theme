<?php
/*
@package Sunset-theme
  This is The Template For Standard Post Formate
*/
?>
<div class="site-post">
  <div class="image">
    <?php the_post_thumbnail(); ?>
    <div class="overlay"></div>
  </div>
  <div class="text">
    <?php the_title( $before = '<h6 class="post-heading">', $after = '</h6>', $echo = true ); ?>
    <div class="post-desc">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php get_permalink();?>">Read Full...</a>
  </div>
</div>
