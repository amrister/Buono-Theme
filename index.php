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
        <div class="blog-search">
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="search-blog" value="" placeholder="Search by name">
              <input type="submit" name="" value="Search" style="background-image: url(<?php echo get_template_directory_uri()?>/icons/search.svg)">
            </div>
          </form>
        </div>
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
          <?php
              global $wp_query;
              $pages_num = $wp_query->max_num_pages;
              if($pages_num > 1):
                  $args = array(
                  // 'base'               => '%_%',
                  'format'             => '?paged=%#%',
                  'total'              => $pages_num,
                  'current'            => max(1,get_query_var('paged')),
                  'show_all'           => true,
                  'prev_next'          => false,
                  'type'               => 'plain',
                  'add_args'           => false,
                  'add_fragment'       => '',
                  'before_page_number' => '',
                  'after_page_number'  => ''
                  );
          ?>
            <!-- Start Pagination -->
            <div class="pagination blog-pagination">
                <?php  echo paginate_links($args);?>
            </div>
            <!-- End Pagination -->
         <?php endif;?>
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
