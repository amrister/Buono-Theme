<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?php bloginfo('url');?>"><span class="buono-icon buono-logo"></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <?php wp_nav_menu(array(
        'theme_location' => 'navbar',
        'menu_class' => 'navbar-nav',
        'walker' => new WP_Bootstrap_Navwalker(),
        'depth' => 2,
      ));
    ?>
  </div>
</nav>
