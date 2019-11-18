<?php

get_header();

?>

<section class="single-cpt container">

  <div class="single-team-img col-xs-12 col-md-4">
    <div class="col-12 imgLiquid imgLiquidNoFill">
      <img src="<?php echo get_field('mpi_team_foto_perfil'); ?>" alt="MPI Team">
    </div>
  </div>
  <div class="single-team-datos col-xs-12 col-md-8">

    <div class="single-team-descripcion col-12">
      <p class="col-12">
        <?php echo get_field('mpi_team_descripcion_corta'); ?>
      </p>
    </div>

    <div class="single-team-contacto col-12">

      <ul>
        <li>
          <a href="tel:<?php echo get_field('mpi_team_tel'); ?>">
            <i class="fa fa-phone">&nbsp;</i>  <?php echo get_field('mpi_team_tel'); ?>
          </a>
        </li>
        <li>
          <a href="tel:<?php echo get_field('mpi_team_cel'); ?>">
            <i class="fa fa-mobile">&nbsp;</i> <?php echo get_field('mpi_team_cel'); ?>
          </a>
        </li>
        <li>
          <a href="mailto:<?php echo get_field('mpi_team_email'); ?>">
            <i class="fa fa-envelope">&nbsp;</i> <?php echo get_field('mpi_team_email'); ?>
          </a>
        </li>
      </ul>

    </div>


  </div>


</section>

<?php


get_footer();
?>
