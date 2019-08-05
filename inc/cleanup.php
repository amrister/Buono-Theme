<?php
/*
@package Buono-Theme
  This is template is for Clean up my Theme
*/
/*
  ====================================
  Remove Version of WordPress
  ====================================
*/
  function buono_generator_alter(){
    return '';
  }
  add_filter( 'the_generator', 'buono_generator_alter');
  // Remove From Scripts and style enqueue

  function buono_remove_version_from_scripts($src){
    global $wp_version;
    parse_str(parse_url($src,PHP_URL_QUERY),$query);
    if( !empty($query['ver']) && $query['ver']==$wp_version){
      $src = remove_query_arg( 'ver', $src);
    }
    return $src;
  }
  add_filter('script_loader_src','buono_remove_version_from_scripts');
  add_filter('style_loader_src','buono_remove_version_from_scripts');
