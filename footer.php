<?php
/*
Template Name: Inicio MPI Grupo SYCSA
*/
?>

<section id="mpi-socios-banners" class="container">
  <h3 class="inicio-titulo col-12 text-center">Socios Comerciales de MPI</h3>
  <?php
  $args = array('post_type' => 'mpi-banners');
  $q = new WP_Query($args);
  if ($q->have_posts()):
    while ($q->have_posts()): $q->the_post();

      ?>

      <div class="mpi-socios-banners-tarjeta col-xs-12 col-sm-6 col-md-4">
        <a class="col-12" href="<?php echo the_field('mpi_banner_link_url'); ?>" target="_blank">
          <div class="img-mpi-socios-banner col-12 imgLiquid imgLiquidNoFill">
            <img src="<?php echo get_field('mpi_banner_image_url');  ?>" alt="Socio Comercial de Meeting Planners México">
          </div>
        </a>
      </div>

    <?php
  endwhile;
else:
  echo "No hay Banners de Socios Comerciales para mostrar";
endif;

?>

</section>



<!-- <footer class="container-fluid"> -->

  <div class="row">

    <div class="copyright ha col-12 my-auto text-center">
      <p>
        <?php echo "Copyright MPI | " . date('Y'); ?>
      </p>
    </div>

  </div>

</footer>

<?php
wp_footer();
?>
