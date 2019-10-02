<?php
/*
Template Name: Inicio MPI Grupo SYCSA
*/
?>

<section id="inicio-sycsa" class="container">
  <!-- <h3 class="inicio-titulo col-12 text-center">Grupo SYCSA</h3> -->
  <?php
  $args = array('post_type' => 'grupo_sycsa');
  $q = new WP_Query($args);
  if ($q->have_posts()):
    while ($q->have_posts()): $q->the_post();

    // se imprime en el ultimo post
    $texto = get_field('miembro_sycsa_texto');
    // var_dump($texto);
    if (!$texto):
      ?>
      <div class="inicio-sycsa-tarjeta col-xs-12 col-md-4">
        <a class="col-12" href="<?php echo the_field('miembro_sycsa_link'); ?>" target="_blank">
          <div class="img-miembro-sycsa col-12 imgLiquid imgLiquidNoFill">
            <img src="<?php echo get_field('miembro_sycsa_banner__logo');  ?>" alt="Grupo SYCSA">
          </div>
        </a>
      </div>
    <?php else: ?>
      <div class="inicio-sycsa-tarjeta col-xs-12 col-md-4">
        <div class="row h100">
          <div class="col-12 ha my-auto text-center">
            <h3><?php echo get_the_title(); ?></h3>
            <p class="col-12 text-center ">
              <?php
              echo get_field('miembro_sycsa_texto');
              ?>
            </p>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php
  endwhile;
else:
  echo "No hay Miembros que mostrar para SYCSA";
endif;

?>

</section>
