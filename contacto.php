<?php
/*
Template Name: Contacto MPI
*/
get_header();
?>
<section class="container">
  <div class="row">

    <div class="col-xs-12 col-md-8">

      <?php
      $args = array('page_id' => 7030);
      $q = new WP_Query($args);
      while ($q->have_posts()): $q->the_post();
      echo the_content();
    endwhile;
    ?>
  </div>
  <div class="col-xs-12 col-md-4">

    <?php get_template_part('partes/contacto-datos'); ?>

  </div>

</div>

</section>

<?php
get_footer();
