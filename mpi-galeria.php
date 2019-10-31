<?php
/*
Template Name: MPI Galería Archivo
*/
get_header();
?>

<section class="container texto-archive">
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
$args = array('post_type' => 'mpi-galeria');
$q = new WP_Query($args);
if ($q->have_posts()):
  while ($q->have_posts()):
    $q->the_post();
    ?>
    <article class="tarjeta-galeria col-xs-12 col-sm-2 col-md-4">

      <a href="<?php echo get_the_permalink(); ?>" class="col-12">

        <div class="tarjeta-galeria-img col-12 imgLiquid imgLiquidFill">
          <img src="<?php echo the_field('mpi_galeria_foto_1');?>" alt="MPI Galería">
        </div>
        <p class="tarjeta-galeria-fecha col-12 text-right">
          <small>
            <?php echo the_field('mpi_galeria_fecha'); ?>
          </small>
        </p>
        <h3 class="tarjeta-galeria-titulo col-12 text-center">
          <?php echo the_field('mpi_galeria_lugar'); ?>
        </h3>
        <!-- <div class="tarjeta-galeria-descripcion col-12">
          <p>
            <?php
            // $descripcion = the_field('mpi_galeria_resena_corta');
             // echo get_excerpt(the_field('mpi_galeria_resena_corta'));
             ?>
          </p>
        </div> -->
        <p class="col-12 text-center"> Visita la galería</p>
      </a>

    </article>

    <?php
  endwhile;
endif;
?>

</section>

<?php get_footer();
