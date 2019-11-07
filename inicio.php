<?php
/*
Template Name: Inicio MPI
*/

get_header();

// contenido pagina inicio
if (have_posts()):
  while (have_posts()): the_post();

  echo the_content();

endwhile;
else:
  echo "No hay Posts para MPI";
endif;
//Secciones complementarias
get_template_part('inicio-mpi-team');
// get_template_part('inicio-mpi-exito');
get_template_part('inicio-mpi-sycsa');


get_footer('inicio');
