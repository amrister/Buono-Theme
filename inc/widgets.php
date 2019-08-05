<?php
/*
@package Buono-Theme
  This is template is for adding all theme sidebars and widgets
*/
/*
  =======================================
  Home Page Sidebar
  =======================================
*/
function buono_home_sidebar(){
  $args = array(
    'name' => __('Home Sidebar','buonotheme'),
    'id' => 'buono-home-sidebar',
    'description' => 'Sidebar for navigation of home page',
    'before_widget' => '<div class="buono-widget %2$s" id="%1$s">',
    'after_widget' => '</div>',
    'after_title' => '',
    'before_title' => '',
  );
  register_sidebar($args);
}
add_action( 'widgets_init', 'buono_home_sidebar' );

/*
  =======================================
  Home Navigation Widget
  =======================================
*/
 class Buono_Navigation_Home extends WP_Widget{

   function __construct(){
     $widget_ops = array(
       'classname' => 'home_navigation',
       'description' => 'Widget for navigation of home page',
     );
     parent::__construct('bunon_home_navigation','Home Navigation',$widget_ops);
   }

   // Fornt End
   function widget($args, $instance){
     ?>
       <ul class="list-unstyled">
         <li id="top" data-section="top" class="active">Top</li>
         <li id="about-us" data-section="about-us">About us</li>
         <li id="team" data-section="team">Team</li>
         <li id="testimonials" data-section="testimonials">Testimonials</li>
         <li id="features" data-section="features">Features</li>
         <li id="places" data-section="places">Places</li>
         <li id="bottom" data-section="bottom">bottom</li>
       </ul>
       <div class="icon js-activeSideBar" data-sidebar="sidebar-nav" data-class="active">
         <img src="<?php echo get_template_directory_uri()?>/icons/chevron-left.svg" alt="">
       </div>
     <?php
   }

   // Control Panel
   function form($instance){
     echo '<p>There is no opition to be customised, You just add sections to your home page and it will appear here</p>';
   }

 }
 add_action( 'widgets_init', function(){
   register_widget('Buono_Navigation_Home');
 });

 /*
   =======================================
   General Sidebar Of Buono Sidebar
   =======================================
 */
  function buono_sidebar(){
    $args = array(
      'name' => __('General Sidebar','buonotheme'),
      'id' => 'buono-sidebar',
      'description' => 'The General Sidebar for Buono Theme',
      'before_widget' => '<div id="%1$s" class="buono-widget %2$s">',
      'after_widget' => '</div></div>',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4><div class="widget-body">',
    );
    register_sidebar($args);
  }
  add_action('widgets_init','buono_sidebar');
