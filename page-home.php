<?php
/*
@package Sunset-theme
  Template Name: Blog page template
  This is The Template Home Page
*/

  get_header();
  get_template_part('template-parts/navbar');
?>
  <div class="page-content">
    <?php if(is_front_page()): ?>
      <!-- Banner Of The Home Page  -->
      <div class="banner">
        <div class="back-shape">
          <div class="container table">
            <div class="text table-cell">
              <h1 class="logo"><span class="buono-icon buono-logo"></span></h1>
              <p><?php bloginfo('description'); ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
<?php
  get_template_part('template-parts/tail');
  get_footer();
?>
