<?php
/**
 * Declare all used post types
 */
function ks_register_post_types(){

    $def_posttype_args = array(

        'labels'             => array(),
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => '',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title', 'thumbnail', 'editor', 'author', 'excerpt', 'page-attributes' ),
        'show_in_rest'		 => true

    );

    $def_taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => array(),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => '',
        'show_in_rest'		 => true,
        'show_in_quick_edit' => true,
    );

    $posttypes = array(
        'videos' => array(

            'labels' => array(
                'name'               => __('Videos'),
                'singular_name'      => __('Video'),
                'menu_name'          => __('Videos'),
                'name_admin_bar'     => __('Videos'),
                'add_new'            => __('Novo Video'),
                'add_new_item'       => __('Novo Video'),
                'new_item'           => __('Novo Video'),
                'edit_item'          => __('Editar Video'),
                'view_item'          => __('Ver Video'),
                'all_items'          => __('Videos'),
                'search_items'       => __('Procurar por Videos'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhum Video encontrado.'),
                'not_found_in_trash' => __('Nenhum Video encontrado na lixeira.')
            ),
            'menu_icon' => 'dashicons-format-video',
            'description' => __('Videos'),
            'rest_base' =>'custom/videos',
            'has_archive' => '/videos',
            'rewrite'     => [
                'slug' => 'videos',
            ],
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest' => false,  // @info inherited from old version
        ),
        'procedimentos' => array(

            'labels' => array(
                'name'               => __('Procedimentos'),
                'singular_name'      => __('Procedimento'),
                'menu_name'          => __('Procedimentos'),
                'name_admin_bar'     => __('Procedimentos'),
                'add_new'            => __('Novo Procedimento'),
                'add_new_item'       => __('Novo Procedimento'),
                'new_item'           => __('Novo Procedimento'),
                'edit_item'          => __('Editar Procedimento'),
                'view_item'          => __('Ver Procedimento'),
                'all_items'          => __('Procedimentos'),
                'search_items'       => __('Procurar por Procedimentos'),
                'parent_item_colon'  => __('Procedimentos pai:'),
                'not_found'          => __('Nenhum Procedimento encontrado.'),
                'not_found_in_trash' => __('Nenhum Procedimento encontrado na lixeira.')
            ),
            'menu_icon' => 'dashicons-clipboard',
            'description' => __('Procedimentos'),
            'rest_base' =>'custom/procedimentos',
            'has_archive' => '/procedimentos',
            'rewrite'     => [
                'slug' => 'procedimentos',
            ],
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest' => false,  // @info inherited from old version
        ),
    );

    foreach ($posttypes as $posttype => $options) {

        $args = array_merge($def_posttype_args, $options);

        if(isset($args['taxonomy'])){

            $taxonomies = $args['taxonomy'];

            foreach($taxonomies as $taxonomy => $taxonomy_args){

                $taxonomy_args = array_merge($def_taxonomy_args, $taxonomy_args);

                register_taxonomy($taxonomy, array($posttype), $taxonomy_args);

            }

            unset($args['taxonomy']);

        }

        register_post_type($posttype, $args);

    }

}

add_action('init', 'ks_register_post_types', 10 );


