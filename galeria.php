<?php
/*
Template Name: Galería MPI
*/

get_header();

while (have_posts()): the_post();

  echo the_content();

endwhile;

 ?>





 <?php get_footer();
