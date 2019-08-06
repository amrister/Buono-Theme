<?php
/*
@package Buono-Theme
  This is template is to include all custom funciton used in theme
*/

/*
  ===========================================
  Get Rate of Testimonials
  ===========================================
*/
function buono_get_testi_rate($num){
  echo '<div class="rate">';
  $num = $num/2;
  $cont = '';
  for ($i=0; $i < 5; $i++) {
    if( $num <= 0){
        $cont = 'empty';
    }elseif( $num > 0 && $num < 1 ){
        $cont = 'half';
    }else{
        $cont = 'full';
    }
    echo '<span class="buono-icon buono-star-'.$cont.'"></span>';
    $num--;
  }
  echo '</div>';
}
/*
  ===========================================
  Edit Excerpt Length
  ===========================================
*/
  function buono_edit_excerpt_length($len){
    return 18;
  }
  add_filter('excerpt_length','buono_edit_excerpt_length',999);

  function buono_edit_excerpt_more($more){
    return '...';
  }
  add_filter('excerpt_more','buono_edit_excerpt_more');

/*
  ===========================================
  Get Post Date Ready
  ===========================================
*/
  function buono_get_post_meta($type = null){
    $content = '';
    if( $type == 'date'){
      $content = '<h6><span>'.human_time_diff( get_the_time('U'), current_time('timestamp')).'</span></h6>';
    }else if ( $type == 'cats'){
      $content = '<h6>'.get_the_category_list( $separator = ' - ').'</h6>';
    }else if ( $type == null){
      $content = '<h6><span>'.human_time_diff( get_the_time('U'), current_time('timestamp')).'</span><i class="dot"></i>'.get_the_category_list( $separator = ' - ').'</h6>';
    }
    return $content;
  }

/*
  ===========================================
  Get Post Footer Ready
  ===========================================
*/
  function buono_get_post_footer(){
    $content = '<div class="tags">';
    $content .= '<img class="icon" src="'.get_template_directory_uri().'/icons/tag.svg" alt="">';
    $content .= get_the_tag_list( $before = '', $sep = ' - ', $after = '', $id = 0 );
    $content .= '</div>';
    return $content;
  }
