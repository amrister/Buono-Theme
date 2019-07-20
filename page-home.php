<?php
/*
@package Sunset-theme
  This is The Template Home Page
*/

  get_header();
  get_template_part('template-parts/navbar');
?>
  <div class="page-content">
    <?php if(is_front_page()): ?>

      <!-- Start Banner -->
      <header class="banner" data-section="Top">
        <div class="back-shape">
          <div class="container table">
            <div class="text table-cell">
              <h1 class="logo"><span class="buono-icon buono-logo"></span><span class="invisible"><?php bloginfo('name'); ?></span></h1>
              <p><?php bloginfo('description'); ?></p>
            </div>
          </div>
          <div class="svg-shape">
            <img src="<?php echo get_template_directory_uri()?>/images/man.svg" alt="">
          </div>
        </div>
      </header>
      <!-- End Banner -->

      <!-- Start About Us -->
      <section class="about" data-section="About Us">
        
      </section>
      <!-- End About Us -->

      <!-- Start Team  -->
      <section class="team" data-section="Team">
        <div class="section-head text-center">
          <h2>Team Members</h2>
          <p class="description">Our team members are our greatest asset.</p>
        </div>
        <div class="team-members">
          <div class="container-fluid">
            <div class="row">
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col no-padding">
                <div class="team-member">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/team/3.jpg" alt="">
                  </div>
                  <div class="overlay">
                    <div class="text">
                      <h6 class="mem-name">Amr Hussien</h6>
                      <p class="mem-postion description">Official CTO in Company</p>
                      <div class="social-icon">
                        <ul class="list-unstyled">
                          <li><a href="#"><span class="buono-icon buono-facebook"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-twitter"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-instagram"></span></a></li><li>
                            <a href="#"><span class="buono-icon buono-github"></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team -->

      <!-- Start Testimonials -->
      <section class="testimonials" data-section="Testimonials">
        <div class="container">
          <div class="section-head text-center">
            <h2>Testimonials</h2>
            <p class="description">See what people say about us</p>
          </div>
          <div class="testi-items">
            <ul class="list-unstyled">
              <?php
                $args = array(
                  'post_type' => 'buono-testimonials',
                  'post_status' => 'publish',
                  'order' => 'ASC',
                );
                $testi_query = new WP_Query($args);
                if($testi_query->have_posts()){
                  $i = 0;
                  while ($testi_query->have_posts()) {
                    $cont='left';
                    $testi_query->the_post();
                    if( $i % 2 != 0){
                      $cont= 'right';
                    }
                    ?>
                    <li>
                      <div class="testi-item media <?php echo $cont;?>">
                        <div class="image">
                          <?php the_post_thumbnail(array('250','250')); ?>
                        </div>
                        <div class="text">
                          <span class="buono-icon buono-quotes-<?php echo $cont;?> quote"></span>
                          <h5><?php the_title(); ?></h5>
                          <p class="description"><?php echo get_the_content(); ?></p>
                        <?php buono_get_testi_rate(get_post_meta( get_the_id(), '_buono_rate_meta', true)); ?>
                      </div>
                    </li>
                    <?php
                    $i++;
                  }
                }
              ?>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Testimonials -->


    <?php endif; ?>
  </div>
<?php
  get_template_part('template-parts/tail');
  get_footer();
?>
