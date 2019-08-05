<?php
/*
@package Sunset-theme
  Template Name: Blog page template
  This is The Template Index Page
*/

  get_header();
  get_template_part('template-parts/navbar');
?>
  <div class="page-content">
    <div class="container">

      <!-- Start Page Head -->
      <div class="page-head">
        <h1>Our <?php wp_title( $sep = '', $display = true, $seplocation = '' ); ?></h1>
      </div>
      <!-- End Page Head -->

      <div class="row">
        <div class="col-8">
          <!-- Start Content  -->
          <div class="site-posts display">
              <?php
                if(have_posts()):
                  while(have_posts()):
                    the_post();
                    get_template_part('template-parts/post-formats/content',get_post_format());
                  endwhile;
                endif;
              ?>
          </div>
          <!-- End Content -->
        </div>

        <!-- Start Sidebar Area -->
        <div class="col-4">
          <?php get_sidebar();?>
        </div>
        <!-- End Sidebar Area -->

      </div>
    </div>
  </div>
<?php
  get_template_part('template-parts/tail');
  get_footer();
?>
