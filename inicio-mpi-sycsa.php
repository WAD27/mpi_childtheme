<?php
/*
Template Name: Inicio MPI Grupo SYCSA
*/
?>

<section id="inicio-sycsa" class="container-fluid">
<h3 class="inicio-titulo col-12 text-center">Grupo SYCSA</h3>
  <?php
    $args = array('page_id' => 6951 );
    $q = new WP_Query($args);
    while ($q->have_posts()): $q->the_post();

      echo the_content();

    endwhile;
  ?>


</section>
