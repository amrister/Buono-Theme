<section class="footer bottom" data-section="bottom">
  <div class="footer-back">
    <div class="container">
      <div class="site-logo text-center">
        <span class="buono-icon buono-logo"></span>
      </div>
      <div class="links">
        <div class="row">
          <div class="col-3">
            <div class="pages">
              <h5>Pages</h5>
              <div class="pages-menu">
                <?php wp_nav_menu( array(
                    'theme_location' => 'navbar',
                    'menu_class' => 'list-unstyled'
                  ));
                ?>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="schedule">
              <h5>Schedule</h5>
              <div class="schedule-menu">
                <ul class="list-unstyled">
                  <li><span>Monday - Friday </span>9AM - 10AM</li>
                  <li><span>Saturday </span>9AM - 10AM</li>
                  <li><span>Sunday </span>9AM - 10AM</li>
                </ul>
                <div class="email">
                  <h6>Email</h6>
                  <p>hey@yourwebsite.com</p>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-1 col-4">
            <div class="instagram">
              <h5>Instagram</h5>
              <div class="row">
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/8.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/1.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/2.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/3.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/4.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/5.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/6.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="image">
                    <img src="<?php echo get_template_directory_uri()?>/images/insta/7.png" alt="">
                    <div class="overlay">
                      <div class="link">
                        <img src="<?php echo get_template_directory_uri()?>/icons/link.svg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
    <div class="tail text-center">
      <h6 class="conclusion">&copy; 2016 - 20<?php echo date('y') ?> CopyRights Reserved - Made With Love by Amr Hussien</h6>
    </div>
  </div>
</section>
