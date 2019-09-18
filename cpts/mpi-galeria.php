<?php
function mpi_galeria() {
  $labels = array(
    'name'                => _x( 'MPI Galería', 'Post Type General Name', 'mpi-theme' ),
    'singular_name'       => _x( 'Galería MPI', 'Post Type Singular Name', 'mpi-theme' ),
    'menu_name'           => __( 'MPI Galería', 'mpi-theme' ),
    'parent_item_colon'   => __( 'Galería padre', 'mpi-theme' ),
    'all_items'           => __( 'Todas las Galerías de MPI Galería', 'mpi-theme' ),
    'view_item'           => __( 'Ver Galería', 'mpi-theme' ),
    'add_new_item'        => __( 'Agrega Galería MPI', 'mpi-theme' ),
    'add_new'             => __( 'Nueva Galería MPI', 'mpi-theme' ),
    'edit_item'           => __( 'Edita Galería MPI', 'mpi-theme' ),
    'update_item'         => __( 'Actualiza Galería MPI', 'mpi-theme' ),
    'search_items'        => __( 'Busca Galería MPI', 'mpi-theme' ),
    'not_found'           => __( 'No existe galería', 'mpi-theme' ),
    'not_found_in_trash'  => __( 'No existen galerias en la basura', 'mpi-theme' ),
  );

  $args = array(
    'label'               => __( 'MPI Galería', 'mpi-theme' ),
    'description'         => __( 'Galerías de MPI', 'mpi-theme' ),
    'labels'              => $labels,//backend
    'supports'            => array( 'title'),
    'taxonomies'          => array( 'MPI Galería' ),
    'menu_icon'           => 'dashicons-format-gallery',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => -2,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type('mpi-galeria',$args);

}
