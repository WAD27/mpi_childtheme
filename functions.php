<?php

add_action('wp_enqueue_scripts','dependencias');

function dependencias() {

  $parent ='parent-style';
  wp_enqueue_style($parent, get_tempate_directory_uri() . '/style.css');
  wp_enqueue_style('mpi-style', get_stylesheet_directory_uri() . '/css/custom.css');
  wp_enqueue_scripts('mpi-scripts', get_stylesheet_directory_uri() . 'js/custom.css')

}
