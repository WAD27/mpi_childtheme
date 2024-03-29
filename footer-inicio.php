
<section id="footer-contacto" class="container">

  <h3 class="inicio-titulo col-12 text-center">Contáctanos</h3>

  <div class="row">

    <div class="inicio-contacto-texto col-xs-12 col-md-6 col-lg-8">
      <div class="row h100">
        <div class="col-12 ha my-auto">
          <p class="col-12 text-left">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, stunt in culpa qui officia laborum.
          </p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-4">

      <?php get_template_part('partes/contacto-datos'); ?>

      <div class="col-12 justify-content-center">
        <a class="btn-mpi col-12" href="<?php echo get_page_link(7030) ?>">Escríbenos directamente</a>
      </div>
    </div>

  </div>

</section>

<footer class="container">

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
