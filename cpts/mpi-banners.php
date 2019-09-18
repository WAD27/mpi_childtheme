<?php
function mpi_banners() {
  $labels = array(
    'name'                => _x( 'MPI banners', 'Post Type General Name', 'mpi-theme' ),
    'singular_name'       => _x( 'Banner MPI', 'Post Type Singular Name', 'mpi-theme' ),
    'menu_name'           => __( 'MPI banners', 'mpi-theme' ),
    'parent_item_colon'   => __( 'Banners padre', 'mpi-theme' ),
    'all_items'           => __( 'Todos los Banners', 'mpi-theme' ),
    'view_item'           => __( 'Ver Banner', 'mpi-theme' ),
    'add_new_item'        => __( 'Agrega Banner MPI', 'mpi-theme' ),
    'add_new'             => __( 'Nuevo Banner MPI', 'mpi-theme' ),
    'edit_item'           => __( 'Edita Banner MPI', 'mpi-theme' ),
    'update_item'         => __( 'Actualiza Banner MPI', 'mpi-theme' ),
    'search_items'        => __( 'Busca Banner MPI', 'mpi-theme' ),
    'not_found'           => __( 'No existe', 'mpi-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'mpi-theme' ),
  );

  $args = array(
    'label'               => __( 'MPI banners', 'mpi-theme' ),
    'description'         => __( 'Banners del banners MPI', 'mpi-theme' ),
    'labels'              => $labels,//backend
    'supports'            => array( 'title'),
    'taxonomies'          => array( 'MPI banners' ),
    'menu_icon'           => 'dashicons-tagcloud',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => -1,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );

  // Registra
  register_post_type('mpi-banners',$args);

}
