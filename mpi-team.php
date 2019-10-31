<?php
/*
Template Name: MPI Team Archivo
*/

get_header();
?>
<section class="container">

  <?php
  while (have_posts()):the_post();
  ?>
  <div class="container texto-archive">
    <!-- <h3 class="text-center"><?php //echo get_the_title(); ?></h3> -->
    <p class="col-12"><?php echo the_content(); ?></p>
  </div>
  <?php
endwhile;
?>


<?php
$args = array('post_type' => 'mpi-team' );
$q = new WP_Query($args);
if ($q->have_posts()):
  while ($q->have_posts()):
    $q->the_post();
    ?>
    <article class="tarjeta-team col-xs-12 col-sm-4">
      <div class="col-12 team-tarjeta-wrap">
        <a href="<?php echo get_the_permalink(); ?>" class="col-12 no-padding">

          <div class="col-12 team-tarjeta-header">
            <div class="wa tarjeta-header-fondo">
              <div class="wa col-12 tarjeta-foto imgLiquid imgLiquidFill">
                <img src="<?php echo the_field('mpi_team_foto_perfil'); ?>" alt="MPI Team">
              </div>
            </div>
          </div>

          <div class="col-12 tarjeta-datos">
            <div class="row">
              <div class="col-12">
                <h5 class="col-12 tarjeta-nombre text-center">
                  <?php
                  echo the_field('mpi_team_nombre');
                  ?>
                </h5>
              </div>
              <div class="col-12">
                <h6 class="col-12 tarjeta-puesto text-center">
                  <?php
                  echo the_field('mpi_team_puesto');
                  ?>
                </h6>
              </div>
            </div>
            <ul class="row tarjeta-redes">
              <li class="text-center justify-content-center align-item-center">
                <a href="<?php echo the_field('mpi_team_twitter'); ?>">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="text-center justify-content-center align-item-center">
                <a href="<?php echo the_field('mpi_team_facebook'); ?>">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>

        </a>

      </div>

      <?php
      // echo the_field('mpi_team_nombre');
      // echo the_field('mpi_team_puesto');
      // echo the_field('mpi_team_foto_perfil');
      // echo the_field('mpi_team_foto_header');
      // echo the_field('mpi_team_instagram');
      // echo the_field('mpi_team_twitter');
      // echo the_field('mpi_team_facebook');
      // echo the_field('mpi_team_email');
      // echo the_field('mpi_team_descripcion_corta');

      ?>

    </article>
    <?php
  endwhile;
endif;
?>


</section>


<?php
get_footer();
?>
