<?php
/*
Template Name: MPI Team Archivo
*/

get_header();

$args = array('post_type' => 'mpi-team' );
$q = new WP_Query($args);
if ($q->have_posts()):
  while ($q->have_posts()):
    $q->the_post();
    ?>

    <?php
    echo the_field('mpi_team_nombre');
    echo the_field('mpi_team_puesto');
    echo the_field('mpi_team_foto_perfil');
    echo the_field('mpi_team_foto_header');
    echo the_field('mpi_team_instagram');
    echo the_field('mpi_team_twitter');
    echo the_field('mpi_team_facebook');
    echo the_field('mpi_team_email');
    echo the_field('mpi_team_descripcion_corta');

    ?>

    <?php
  endwhile;
endif;



get_footer();
?>
