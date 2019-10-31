<?php

get_header();

$foto1 = get_field('mpi_galeria_foto_1');
$foto2 = get_field('mpi_galeria_foto_2');
$foto3 = get_field('mpi_galeria_foto_3');
$foto4 = get_field('mpi_galeria_foto_4');
$foto5 = get_field('mpi_galeria_foto_5');
$foto6 = get_field('mpi_galeria_foto_6');

$fotos = array($foto1,$foto2,$foto3,$foto4,$foto5,$foto6);
?>

<section class="single-cpt container">
  <p class="single-descripcion col-12">
    <?php echo the_field('mpi_galeria_resena_corta'); ?>
  </p>

  <!-- thumbnails -->
  <section id="slick-galeria-nav" class="col-12">

    <?php
    for ($i=1; $i < count($fotos); $i++):
      if ($fotos[$i]):
        ?>
        <div class="galeria-nav-img-wrap col-12">
          <div class="galeria-nav-img imgLiquid imgLiquidFill">
            <img src="<?php echo $fotos[$i]; ?>" alt="Galería Meeting Planners México">
          </div>
        </div>
        <?php
      endif;
    endfor;
    ?>

  </section>
  <!-- visor -->
  <section id="slick-galeria-for" class="col-12">
    <?php
    for ($i=1; $i < count($fotos); $i++):
      if ($fotos[$i]):
        ?>
        <div class="galeria-for-img-wrap">
          <div class="galeria-for-img imgLiquid imgLiquidNoFill">
            <img src="<?php echo $fotos[$i]; ?>" alt="Galería Meeting Planners México">
          </div>
        </div>
        <?php
      endif;
    endfor;
    ?>
    </section>
  </section>

  <?php

  get_footer();
  ?>
