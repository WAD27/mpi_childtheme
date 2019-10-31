<?php
function mpi_team() {
  $labels = array(
    'name'                => _x( 'MPI Team', 'Post Type General Name', 'mpi-theme' ),
    'singular_name'       => _x( 'Miembro MPI', 'Post Type Singular Name', 'mpi-theme' ),
    'menu_name'           => __( 'MPI Team', 'mpi-theme' ),
    'parent_item_colon'   => __( 'Team padre', 'mpi-theme' ),
    'all_items'           => __( 'Todos los Miembros del MPI Team', 'mpi-theme' ),
    'view_item'           => __( 'Ver Miembro', 'mpi-theme' ),
    'add_new_item'        => __( 'Agrega Miembro MPI', 'mpi-theme' ),
    'add_new'             => __( 'Nuevo Miembro MPI', 'mpi-theme' ),
    'edit_item'           => __( 'Edita Miembro MPI', 'mpi-theme' ),
    'update_item'         => __( 'Actualiza Miembro MPI', 'mpi-theme' ),
    'search_items'        => __( 'Busca Miembro MPI', 'mpi-theme' ),
    'not_found'           => __( 'No existe', 'mpi-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'mpi-theme' ),
  );

  $args = array(
    'label'               => __( 'MPI Team', 'mpi-theme' ),
    'description'         => __( 'Miembros del Team MPI', 'mpi-theme' ),
    'labels'              => $labels,//backend
    'supports'            => array( 'title','thumbnail'),
    'taxonomies'          => array( 'MPI Team' ),
    'menu_icon'           => 'dashicons-groups',
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
  register_post_type('mpi-team',$args);

}
