<?php
function cptui_register_my_cpts_contatos()
{

    /**
     * Post Type: Contatos.
     */

    $labels = [
        "name" => __("Contatos", "twentytwentyone"),
        "singular_name" => __("Contato", "twentytwentyone"),
        "menu_name" => __("Meus Contatos", "twentytwentyone"),
        "all_items" => __("Todos os Contatos", "twentytwentyone"),
        "add_new" => __("Novo Contato", "twentytwentyone"),
        "add_new_item" => __("Novo Contato", "twentytwentyone"),
        "edit_item" => __("Editar Contato", "twentytwentyone"),
        "new_item" => __("Novo Contato", "twentytwentyone"),
        "view_item" => __("Ver Contato", "twentytwentyone"),
        "view_items" => __("Ver Contatos", "twentytwentyone"),
    ];

    $args = [
        "label" => __("Contatos", "twentytwentyone"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "contatos", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-admin-users",
        "supports" => ["title"],
        "show_in_graphql" => false,
    ];

    register_post_type("contatos", $args);
}

add_action('init', 'cptui_register_my_cpts_contatos');
