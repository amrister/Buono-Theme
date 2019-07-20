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
