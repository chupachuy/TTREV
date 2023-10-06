<?php

//// IMAGES 

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( 'full' );


// Register Custom Post Type PROPIEDADES
function propiedades() {

    $labels = array(
        'name'                  => _x( 'Propiedades', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Propiedad', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Propiedades', 'text_domain' ),
        'name_admin_bar'        => __( 'Propiedades', 'text_domain' ),
        'archives'              => __( 'Archivo de Propiedades', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todas las propiedades', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Agregar Propiedad', 'text_domain' ),
        'new_item'              => __( 'Nueva Propiedad', 'text_domain' ),
        'edit_item'             => __( 'Editar Propiedad', 'text_domain' ),
        'update_item'           => __( 'Actualizar Propiedad', 'text_domain' ),
        'view_item'             => __( 'Ver Propiedad', 'text_domain' ),
        'view_items'            => __( 'Ver Propiedades', 'text_domain' ),
        'search_items'          => __( 'buscar Propiedades', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Lista de propiedades', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Propiedad', 'text_domain' ),
        'description'           => __( 'Galeria de Propiedades', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-home',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'propiedad', $args );

}
add_action( 'init', 'propiedades', 0 );

// Register Custom Post Type SLIDER
function sliders() {

    $labels = array(
        'name'                  => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Sliders', 'text_domain' ),
        'name_admin_bar'        => __( 'Sliders', 'text_domain' ),
        'archives'              => __( 'Archivo de Sliders', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'Todas las sliders', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Agregar Slider', 'text_domain' ),
        'new_item'              => __( 'Nuevo Slider', 'text_domain' ),
        'edit_item'             => __( 'Editar Slider', 'text_domain' ),
        'update_item'           => __( 'Actualizar Slider', 'text_domain' ),
        'view_item'             => __( 'Ver Slider', 'text_domain' ),
        'view_items'            => __( 'Ver Sliders', 'text_domain' ),
        'search_items'          => __( 'buscar Sliders', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Lista de sliders', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Slider', 'text_domain' ),
        'description'           => __( 'Galeria de Sliders', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'slider', $args );

}
add_action( 'init', 'sliders', 0 );
