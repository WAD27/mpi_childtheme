<?php
/*
Template Name: Inicio MPI
*/

get_header();

if (have_posts()):
  while (have_posts()): the_post();

  echo the_content();

endwhile;
else:
  echo "No hay Posts para MPI";
endif;

// endif;

get_footer();
