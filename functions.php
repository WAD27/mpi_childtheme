<?php

add_action('wp_enqueue_scripts','dependencias');
function dependencias() {

  $parent ='parent-style';
  wp_enqueue_style($parent, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('mpi-style', get_stylesheet_directory_uri() . '/css/custom.css');
  wp_enqueue_script('mpi-scripts', get_stylesheet_directory_uri() . '/js/custom.js');

}

// cpts
include_once "cpts/mpi-team.php";
add_action('init','mpi_team', 0);
