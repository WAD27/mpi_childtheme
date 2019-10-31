<?php

get_header();

$foto1 = get_field('mpi_galeria_foto_1');
$foto2 = get_field('mpi_galeria_foto_2');
$foto3 = get_field('mpi_galeria_foto_3');
$foto4 = get_field('mpi_galeria_foto_4');
$foto5 = get_field('mpi_galeria_foto_5');
$foto6 = get_field('mpi_galeria_foto_6');

?>

<section class="single-cpt container">
  <p class="single-descripcion col-12">
    <?php echo the_field('mpi_galeria_resena_corta'); ?>
  </p>

  <section id="slick-galeria-for" class="col-12">
    <?php if ($foto1): ?>
      <div class="galeria-for-img-wrap">
        <div class="galeria-for-img imgLiquid imgLiquidNoFill">
          <img src="<?php echo $foto1; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto2): ?>
      <div class="galeria-for-img-wrap">
        <div class="galeria-for-img imgLiquid imgLiquidNoFill">
          <img src="<?php echo $foto2; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto3): ?>
      <div class="galeria-for-img-wrap">
        <div class="galeria-for-img imgLiquid imgLiquidNoFill">
          <img src="<?php echo $foto3; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto4): ?>
      <div class="galeria-for-img-wrap">
        <div class="galeria-for-img imgLiquid imgLiquidNoFill">
          <img src="<?php echo $foto4; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto5): ?>
      <div class="galeria-for-img-wrap">
        <div class="galeria-for-img imgLiquid imgLiquidNoFill">
          <img src="<?php echo $foto5; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto6): ?>
      <div class="galeria-for-img-wrap">
        <div class="galeria-for-img imgLiquid imgLiquidNoFill">
          <img src="<?php echo $foto6; ?>" alt="Galería ">
        </div>
      </div>
    <?php endif; ?>
  </section>
  <!-- thumbnails -->
  <section id="slick-galeria-nav" class="col-12">
    <?php if ($foto1): ?>
      <div class="galeria-nav-img-wrap col-12">
        <div class="galeria-nav-img imgLiquid imgLiquidFill">
          <img src="<?php echo $foto1; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto2): ?>
      <div class="galeria-nav-img-wrap col-12">
        <div class="galeria-nav-img imgLiquid imgLiquidFill">
          <img src="<?php echo $foto2; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto3): ?>
      <div class="galeria-nav-img-wrap col-12">
        <div class="galeria-nav-img imgLiquid imgLiquidFill">
          <img src="<?php echo $foto3; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto4): ?>
      <div class="galeria-nav-img-wrap col-12">
        <div class="galeria-nav-img imgLiquid imgLiquidFill">
          <img src="<?php echo $foto4; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto5): ?>
      <div class="galeria-nav-img-wrap col-12">
        <div class="galeria-nav-img imgLiquid imgLiquidFill">
          <img src="<?php echo $foto5; ?>" alt="Galería Meeting Planners México">
        </div>
      </div>
    <?php endif; ?>
    <?php if ($foto6): ?>
      <div class="galeria-nav-img-wrap col-12">
        <div class="galeria-nav-img imgLiquid imgLiquidFill">
          <img src="<?php echo $foto6; ?>" alt="Galería ">
        </div>
      </div>
    <?php endif; ?>

  </section>

</section>

<?php

get_footer();
?>
