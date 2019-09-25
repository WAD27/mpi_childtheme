<?php
function grupo_sycsa() {
  $labels = array(
    'name'                => _x( 'MPI miembro SYCSA', 'Post Type General Name', 'mpi-theme' ),
    'singular_name'       => _x( 'Miembro SYCSA MPI', 'Post Type Singular Name', 'mpi-theme' ),
    'menu_name'           => __( 'Miembros SYCSA', 'mpi-theme' ),
    'parent_item_colon'   => __( 'Miembro SYCSA padre', 'mpi-theme' ),
    'all_items'           => __( 'Todos los Miembro SYCSA', 'mpi-theme' ),
    'view_item'           => __( 'Ver Miembro SYCSA', 'mpi-theme' ),
    'add_new_item'        => __( 'Agrega Miembro SYCSA MPI', 'mpi-theme' ),
    'add_new'             => __( 'Nuevo Miembro SYCSA MPI', 'mpi-theme' ),
    'edit_item'           => __( 'Edita Miembro SYCSA MPI', 'mpi-theme' ),
    'update_item'         => __( 'Actualiza Miembro SYCSA MPI', 'mpi-theme' ),
    'search_items'        => __( 'Busca Miembro SYCSA MPI', 'mpi-theme' ),
    'not_found'           => __( 'No existe', 'mpi-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'mpi-theme' ),
  );

  $args = array(
    'label'               => __( 'MPI miembro SYCSA', 'mpi-theme' ),
    'description'         => __( 'Banners Miembros SYCSA', 'mpi-theme' ),
    'labels'              => $labels,//backend
    'supports'            => array( 'title'),
    'taxonomies'          => array( 'MPI miembro SYCSA' ),
    'menu_icon'           => 'dashicons-format-image',
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
  register_post_type('grupo_sycsa',$args);

}
