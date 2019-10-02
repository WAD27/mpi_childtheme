<?php
/*
Template Name: Inicio MPI Casos exito
*/
?>
<section id="inicio-exito" class="container-fluid fadeIn animated">
<div class="col-12">

  <h3 class="inicio-titulo col-12 text-center">Casos de Éxito</h3>

  <?php
  $args = array('page_id' => 6949 );
  $q = new WP_Query($args);
  while ($q->have_posts()): $q->the_post();

  echo the_content();

endwhile;

?>

</div>
</section>
