<?php
/*
@package Buono-Theme
  This is template is for Register Page
*/
  get_header();
?>

  <section class="register access">
    <div class="container">
      <div class="content-acc">
        <div class="row">
          <div class="col-md-5">
            <div class="overlay text-center">
              <div class="text">
                <p>Welcome To</p>
                <h2 class="h1 logo">NAS</h2>
                <p>We Hope that you enjoy your experience with us</p>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form">
              <div class="text">
                <h5>Register now to enjoy our features</h5>
              </div>
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return validation();">
                <div class="form-group d-flex">
                  <span id="nameerror">*</span>
                  <input type="text" name="name" id="name" placeholder="Name" required data-validation-required-message="Please Enter AMr">
                </div>
                <div class="form-group d-flex">
                  <span id="usererror">*</span>
                  <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="form-group d-flex">
                  <span id="emailerror">*</span>
                  <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group d-flex">
                  <span id="passerror">*</span>
                  <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group d-flex file">
                  <input type="file" name="image" id="image" required>
                  <span id="imageerror"></span>
                </div>
                <div class="foot d-flex">
                  <input type="submit" name="" value="Register" class="btn">
                  <h6>Already have acount? <a href="signin">Login Now</a> </h6>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
