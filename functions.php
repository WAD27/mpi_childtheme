<?php

add_action('wp_enqueue_scripts','dependencias');
function dependencias() {

  $parent ='parent-style';
  wp_enqueue_style($parent, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('mpi-slidet-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css');
  wp_enqueue_style('mpi-slider-styles', get_stylesheet_directory_uri() . '/css/slick.css');
  wp_enqueue_style('mpi-style', get_stylesheet_directory_uri() . '/css/custom.css');
  wp_enqueue_script('mpi-imgs', get_stylesheet_directory_uri() . '/js/imgLiquid-min.js');
  wp_enqueue_script('mpi-grid', get_stylesheet_directory_uri() . '/js/masonry.js');
  wp_enqueue_script('mpi-slider', get_stylesheet_directory_uri() . '/js/slick.min.js');
  wp_enqueue_script('mpi-scripts', get_stylesheet_directory_uri() . '/js/custom.js');

}

// cpts
include_once "cpts/mpi-team.php";
include_once "cpts/mpi-galeria.php";
include_once "cpts/mpi-banners.php";
include_once "cpts/grupo-sycsa.php";
add_action('init','mpi_team', 0);
add_action('init','mpi_galeria', 1);
add_action('init','mpi_banners', 2);
add_action('init','grupo_sycsa', 3);

// excerpt_more
function get_excerpt($text) {
  $excerpt = $text;
  // $excerpt = preg_replace(" ([.*?])",'',$excerpt);
  // $excerpt = strip_shortcodes($excerpt);
  // $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, 25);
  // $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  // $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
  $excerpt = $excerpt.'... Leer Más';
  return $excerpt;
}
