<?php
/*
@package Sunset-theme
  This is The Template For Standard Post Formate
*/
?>
<div class="site-post media">
  <div class="text">
    <?php the_title( $before = '<h6 class="post-heading">', $after = '</h6>', $echo = true ); ?>
    <div class="post-date">
      <?php echo buono_get_post_meta();?>
    </div>
    <div class="post-desc">
      <?php the_excerpt(); ?>
    </div>
    <div class="post-footer">
      <?php echo buono_get_post_footer();?>
    </div>
    <!-- <a href="<?php //echo get_permalink();?>">Read Full...</a> -->
  </div>
  <div class="image">
    <a href="<?php echo get_permalink();?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>')"></a>
  </div>
</div>
