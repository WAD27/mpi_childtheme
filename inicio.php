<?php
/*
Template Name: Inicio MPI
*/

get_header();

// contenido pagina inicio
?>

<!-- <section id="inicio-quien" class="container"> -->

<?php
if (have_posts()):
  while (have_posts()): the_post();

  echo the_content();

endwhile;
else:
  echo "No hay información para MPI";
endif;
?>

<!-- </section> -->

<?php
//Secciones complementarias
get_template_part('inicio-mpi-team');
// get_template_part('inicio-mpi-exito');
get_template_part('inicio-mpi-sycsa');


get_footer('inicio');
