<?php
/*
Template Name: inicio MPI Team
*/
?>
<section id="inicio-team" class="container-fluid fadeIn animated">
  <h3 class="inicio-titulo col-12 text-center">Team MPI</h3>

  <div class="row">

    <div class="contenedor-slider col-xs-12 col-md-8">

      <div id="inicio-slick-team" class="col-12">
        <?php
        $args = array('post_type' => 'mpi-team');
        $q = new WP_Query($args);
        if ($q->have_posts()):
          while ($q->have_posts()): $q->the_post();
          ?>

          <div class="incio-slick-team-slide col-12">

            <div class="inicio-team-tarjeta col-8">

              <div class="contenedor-tarjeta container-fluid">

                <div class="col-12 team-tarjeta-wrap">

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

                </div>
              </div>
            </div>
          </div>

          <?php
        endwhile;
      else:
        echo "No hay Miembros que mostrar para MPI";
      endif;

      ?>
    </div>

  </div>

  <div id="inicio-team-texto" class="col-xs-12 col-md-4">

    <div class="row">
      <!-- contenido de la pag 'inicio-team' -->
      <div class="contenedor-slider ha col-12 my-auto text-center">
        <?php
        $args = array('page_id' => 6947);
        $q = new WP_Query($args);
        while ($q->have_posts()): $q->the_post();
        echo the_content();
      endwhile;
      ?>
    </div>

  </div>

</div>
</div>

</section>
