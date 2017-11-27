<?php

function ajout_custom_type_init()
{
    $post_type = "contenu";

    $labels = array(
        'name'                  => 'Contenu',
        'singular_name'         => 'Contenu',
        'all_items'             => 'Tous les contenus',
        'add_new'               => 'Ajouter un contenu',
        'add_new_item'          => 'Ajouter un nouveau contenu',
        'edit_item'             => "Editer le contenu",
        'new_item'              => 'Nouveau contenu ',
        'view_item'             => "Voir le contenu",
        'search_items'          => 'Chercher un contenu',
        'not_found'             => 'RIP',
        'not_found_in_trash'    => 'RIP in Trash',
        'parent_item_colon'     => 'Contenu Parent:',
        'menu_name'             => 'Contenus',
    );

    $args = array(
        'labels'                => $labels,
        'hierarchical'          => false,
        'supports'              => array('title', 'thumbnail', 'editor', 'excerpt', 'revisions', 'editor'),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 9,
        'menu_icon'             => 'dashicons-welcome-write-blog',
        'show_in_nav_menus'     => true,
        'publicly_queryable'    => true,
        'exclude_from_search'   => false,
        'has_archive'           => false,
        'query_var'             => true,
        'can_export'            => true,
        'rewrite'               => array('slug' => $post_type)
    );

    register_post_type($post_type, $args);
    /* flush_rewrite_rules();*/

    $taxonomy = "Page";
    $object_type = array("contenu");
    $args = array(
        'label'         => __( 'Page' ),
        'rewrite'       => array( 'slug' => 'Page' ),
        'hierarchical'  => false,
    );

    register_taxonomy( $taxonomy, $object_type, $args );

    $taxonomy = "Type";
    $object_type = array("contenu");
    $args = array(
        'label'         => __( 'Type' ),
        'rewrite'       => array( 'slug' => 'Type' ),
        'hierarchical'  => true,
    );

    register_taxonomy( $taxonomy, $object_type, $args );

}

add_action('init', 'ajout_custom_type_init');