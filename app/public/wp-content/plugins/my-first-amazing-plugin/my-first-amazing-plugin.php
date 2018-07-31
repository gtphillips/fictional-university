<?php
/*
Plugin Name: My first Amazing Plugin
Description: This Plugin Will Change Your Life.
*/

add_filter('the_content', 'loremFilter');

function loremFilter($content){
  $content = str_replace('Lorem', '*****', $content);
  return $content;
}

add_shortcode('programCount', 'programCountFunction');

function programCountFunction(){
  $numberOfPrograms = 0;

  //TO DO: code query for count number of program post type

  return $numberOfPrograms;
}
?>
