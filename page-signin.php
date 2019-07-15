<?php
/*
@package Buono-Theme
  This is template is for Login Page
*/
  get_header();
?>
  <section class="sign-in access  text-center">
    <div class="container">
      <div class="content-acc">
        <div class="row">
          <div class="col-md-5">
            <div class="overlay">
              <div class="text">
                <p>Welcome Back To</p>
                <h2 class="h1"><span class="buono-icon buono-logo"></span></h2>
                <p>We are so glad that you back for us another time</p>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form">
              <div class="text">
                <h5>Login to access your account</h5>
              </div>
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return validation ();">
                <div class="form-group d-flex">
                  <input class="" type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="form-group d-flex">
                  <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <input type="submit" name="" value="Login" class="btn">
              </form>
              <div class="outers">
                <a href="#">Login With Facebook</a>
                <a href="#">Login With Google</a>
              </div>
              <h6 class="stat">Didn't have acount? <a href="register">Register Now</a> </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
