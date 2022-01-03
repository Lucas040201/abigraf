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

        'eventos' => array(

            'labels' => array(
                'name'               => __('Eventos'),
                'singular_name'      => __('Evento'),
                'menu_name'          => __('Eventos'),
                'name_admin_bar'     => __('Eventos'),
                'add_new'            => __('Novo Evento'),
                'add_new_item'       => __('Novo Evento'),
                'new_item'           => __('Novo Evento'),
                'edit_item'          => __('Editar Evento'),
                'view_item'          => __('Ver Evento'),
                'all_items'          => __('Eventos'),
                'search_items'       => __('Procurar por Eventos'),
                'parent_item_colon'  => __('Eventos pai:'),
                'not_found'          => __('Nenhum Evento encontrado.'),
                'not_found_in_trash' => __('Nenhum Evento encontrado na lixeira.')
			),
            'description' => __('Evento'),
            'rest_base' =>'custom/eventos',
            'has_archive' => 'biblioteca/eventos',
            'supports'    => array('title', 'editor', 'thumbnail'),
            'taxonomy'    => array(

                'eventos_category' => array(

                    'hierarchical'      => true,
                    'labels'            => array(
                        'name'              => __('Categorias'),
                        'singular_name'     => __('Categoria'),
                        'search_items'      => __('Procurar por categoria'),
                        'all_items'         => __('Categorias'),
                        'parent_item'       => __('Categoria Pai'),
                        'parent_item_colon' => __('Categorias Pai:'),
                        'edit_item'         => __('Editar Categoria'),
                        'update_item'       => __('Atualizar Categoria'),
                        'add_new_item'      => __('Nova Categoria'),
                        'new_item_name'     => __('Nova Categoria'),
                        'menu_name'         => __('Categorias'),
                    ),

                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
                    'rewrite'           => array('slug' => 'eventos_category'),
                    'show_in_rest'      => true,
                    'rest_base'         => 'eventos_category'

                ),

            ),
		),

        'tv_abigraf' => array(
            'labels' => array(
                'name'               => __('TV Abigraf'),
                'singular_name'      => __('TV Abigraf'),
                'menu_name'          => __('TV Abigraf'),
                'name_admin_bar'     => __('TV Abigraf'),
                'add_new'            => __('Novo Video'),
                'add_new_item'       => __('Novo Video'),
                'new_item'           => __('Novo Video'),
                'edit_item'          => __('Editar Video'),
                'view_item'          => __('Ver Video'),
                'all_items'          => __('Videos'),
                'search_items'       => __('Procurar por Videos'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhum Evento encontrado.'),
                'not_found_in_trash' => __('Nenhum Evento encontrado na lixeira.')
			),
            'description' => __('TV Abigraf'),
            'rest_base' =>'custom/videos',
            'has_archive' => 'biblioteca/videos',
            'supports'    => array('title'),

		),

        'apresentacoes' => array(
            'labels' => array(
                'name'               => __('Apresentações'),
                'singular_name'      => __('Apresentações'),
                'menu_name'          => __('Apresentações'),
                'name_admin_bar'     => __('Apresentações'),
                'add_new'            => __('Nova apresentação'),
                'add_new_item'       => __('Nova apresentação'),
                'new_item'           => __('Nova apresentação'),
                'edit_item'          => __('Editar apresentação'),
                'view_item'          => __('Ver apresentação'),
                'all_items'          => __('Apresentações'),
                'search_items'       => __('Procurar por apresentações'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma apresentação encontrada.'),
                'not_found_in_trash' => __('Nenhuma apresentação encontrada na lixeira.')
			),
            'description' => __('Apresentações'),
            'rest_base' =>'custom/apresentacoes',
            'has_archive' => 'biblioteca/apresentacoes',
            'supports'    => array('title'),
            'taxonomy'    => array(

                'apresentacoes_category' => array(

                    'hierarchical'      => true,
                    'labels'            => array(
                        'name'              => __('Categorias'),
                        'singular_name'     => __('Categoria'),
                        'search_items'      => __('Procurar por categoria'),
                        'all_items'         => __('Categorias'),
                        'parent_item'       => __('Categoria Pai'),
                        'parent_item_colon' => __('Categorias Pai:'),
                        'edit_item'         => __('Editar Categoria'),
                        'update_item'       => __('Atualizar Categoria'),
                        'add_new_item'      => __('Nova Categoria'),
                        'new_item_name'     => __('Nova Categoria'),
                        'menu_name'         => __('Categorias'),
                    ),

                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
                    'rewrite'           => array('slug' => 'apresentacoes_category'),
                    'show_in_rest'      => true,
                    'rest_base'         => 'apresentacoes_category'

                ),

            ),
		),

        'em_acao' => array(
            'labels' => array(
                'name'               => __('Abigraf em Ação'),
                'singular_name'      => __('Abigraf em Ação'),
                'menu_name'          => __('Abigraf em Ação'),
                'name_admin_bar'     => __('Abigraf em Ação'),
                'add_new'            => __('Nova notícia'),
                'add_new_item'       => __('Nova notícia'),
                'new_item'           => __('Nova notícia'),
                'edit_item'          => __('Editar notícia'),
                'view_item'          => __('Ver notícia'),
                'all_items'          => __('Notícias'),
                'search_items'       => __('Procurar por notícias'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma notíca encontrada.'),
                'not_found_in_trash' => __('Nenhuma notíca encontrada na lixeira.')
			),
            'description' => __('Noticias de Abigraf em Ação'),
            'rest_base' =>'custom/em_acao',
            'has_archive' => 'biblioteca/em_acao',
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
            'taxonomy'    => array(

                'em_acao_category' => array(

                    'hierarchical'      => true,
                    'labels'            => array(
                        'name'              => __('Categorias'),
                        'singular_name'     => __('Categoria'),
                        'search_items'      => __('Procurar por categoria'),
                        'all_items'         => __('Categorias'),
                        'parent_item'       => __('Categoria Pai'),
                        'parent_item_colon' => __('Categorias Pai:'),
                        'edit_item'         => __('Editar Categoria'),
                        'update_item'       => __('Atualizar Categoria'),
                        'add_new_item'      => __('Nova Categoria'),
                        'new_item_name'     => __('Nova Categoria'),
                        'menu_name'         => __('Categorias'),
                    ),

                    'show_ui'           => true,
                    'show_admin_column' => true,
                    'query_var'         => true,
                    'rewrite'           => array('slug' => 'em_acao_category'),
                    'show_in_rest'      => true,
                    'rest_base'         => 'em_acao_category'

                ),

            ),
		),

        'revistas' => array(
            'labels' => array(
                'name'               => __('Revistas'),
                'singular_name'      => __('Revistas'),
                'menu_name'          => __('Revistas'),
                'name_admin_bar'     => __('Revistas'),
                'add_new'            => __('Nova revista'),
                'add_new_item'       => __('Nova revista'),
                'new_item'           => __('Nova revista'),
                'edit_item'          => __('Editar revista'),
                'view_item'          => __('Ver revista'),
                'all_items'          => __('Revistas'),
                'search_items'       => __('Procurar por Revistas'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma revista encontrada.'),
                'not_found_in_trash' => __('Nenhuma revista encontrada na lixeira.')
			),
            'description' => __('Revistas'),
            'rest_base' =>'custom/revistas',
            'has_archive' => 'biblioteca/revistas',
            'supports'    => array('title'),
		),

        'login' => array(
            'labels' => array(
                'name'               => __('Login'),
                'singular_name'      => __('Login'),
                'menu_name'          => __('Login'),
                'name_admin_bar'     => __('Login'),
                'add_new'            => __('Novo Login'),
                'add_new_item'       => __('Novo Login'),
                'new_item'           => __('Novo Login'),
                'edit_item'          => __('Editar Login'),
                'view_item'          => __('Ver Login'),
                'all_items'          => __('Logins'),
                'search_items'       => __('Procurar por Logins'),
                'not_found'          => __('Nenhum Login encontrado.'),
                'not_found_in_trash' => __('Nenhum Login encontrado na lixeira.')
			),
            'description' => __('Login'),
            'rest_base' =>'custom/login',
            'has_archive' => 'biblioteca/logins',
            'supports'    => array('title', 'editor', 'excerpt'),
		),

		// 'podcast' => array(

        //     'labels' => array(
        //         'name'               => __('Podcasts'),
        //         'singular_name'      => __('Podcast'),
        //         'menu_name'          => __('Podcasts'),
        //         'name_admin_bar'     => __('Podcasts'),
        //         'add_new'            => __('Novo Post'),
        //         'add_new_item'       => __('Novo Post'),
        //         'new_item'           => __('Novo Post'),
        //         'edit_item'          => __('Editar Post'),
        //         'view_item'          => __('Ver Post'),
        //         'all_items'          => __('Posts'),
        //         'search_items'       => __('Procurar por Posts'),
        //         'parent_item_colon'  => __('Posts pai:'),
        //         'not_found'          => __('Nenhum Post encontrado.'),
        //         'not_found_in_trash' => __('Nenhum Post encontrado na lixeira.')
		// 	),
		// 	'menu_position' => 2,
        //     'menu_icon' => 'dashicons-megaphone',
        //     'description' => __('Podcasts'),
        //     'rest_base' =>'custom/podcasts',
        //     'has_archive' => 'biblioteca/podcasts',
        //     'rewrite'     => [
        //     	'slug' => 'podcasts/post',
        //     ],
        //     'supports'    => array('title', 'editor', 'thumbnail'),
        //     'taxonomy'    => array(

        //         'podcasts_categories' => array(

        //             'hierarchical'      => true,
        //             'labels'            => array(
        //                 'name'              => __('Categorias'),
        //                 'singular_name'     => __('Categoria'),
        //                 'search_items'      => __('Procurar por categoria' ),
        //                 'all_items'         => __('Categorias' ),
        //                 'parent_item'       => __('Categoria Pai' ),
        //                 'parent_item_colon' => __('Categorias Pai:' ),
        //                 'edit_item'         => __('Editar Categoria' ),
        //                 'update_item'       => __('Atualizar Categoria' ),
        //                 'add_new_item'      => __('Nova Categoria' ),
        //                 'new_item_name'     => __('Nova Categoria' ),
        //                 'menu_name'         => __('Categorias' ),
        //             ),

        //             'show_ui'           => true,
        //             'show_admin_column' => true,
        //             'query_var'         => true,
		// 			'rewrite'           => array('slug' => 'podcasts/categorias'),
		// 			'show_in_rest'      => true,
        //             'rest_base'         => 'podcasts_categories'

        //         ),

        //     ),

		// ),

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

/**
 * Change Native Posts labels
 */
function ks_change_post_label() {

    global $menu;
	global $submenu;

    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Notícias';
    $submenu['edit.php'][10][0] = 'Adicionar Notícia';

}

add_action( 'admin_menu', 'ks_change_post_label' );

function ks_change_post_object() {

	global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Notícias';
    $labels->singular_name = 'Notícias';
	$labels->menu_name = 'Notícias';
	$labels->name_admin_bar = 'Notícias';
    $labels->add_new = 'Nova Notícia';
    $labels->add_new_item = 'Nova Notícia';
    $labels->new_item = 'Nova Notícia';
    $labels->edit_item = 'Editar Notícia';
    $labels->view_item = 'Ver Notícia';
    $labels->all_items = 'Notícias';
	$labels->search_items = 'Procurar Notícias';
	$labels->parent_item_colon = 'Notícias pai:';
    $labels->not_found = 'Nenhuma Notícia encontrada';
	$labels->not_found_in_trash = 'Nenhuma Notícia encontrada na lixeira';

}

add_action( 'init', 'ks_change_post_object' );
