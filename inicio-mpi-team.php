<?php
/*
Template Name: inicio MPI Team
*/
?>
<section id="inicio-team" class="container-fluid">
  <h3 class="inicio-titulo col-12 text-center">Team MPI</h3>

  <div class="row">

    <div class="col-xs-12 col-md-8">

      <div id="inicio-slick-team" class="col-12">
        <?php
        $args = array('post_type' => 'mpi-team');
        $q = new WP_Query($args);
        if ($q->have_posts()):
          while ($q->have_posts()): $q->the_post();
          ?>

          <div class="incio-slick-team-slide col-12">

            <div class="inicio-team-tarjeta col-8">

              <div class="container-fluid">

                <?php
                echo the_field('mpi_team_nombre');
                echo the_field('mpi_team_puesto');
                echo the_field('mpi_team_foto_perfil');
                echo the_field('mpi_team_foto_header');
                echo the_field('mpi_team_twitter');
                echo the_field('mpi_team_facebook');

                ?>
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

  <div class="col-xs-12 col-md-4">

    <div class="row">
      <!-- contenido de la pag 'inicio-team' -->
      <div class="ha col-12 my-auto text-center">
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
