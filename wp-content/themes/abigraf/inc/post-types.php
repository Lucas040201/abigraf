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
                'name'               => __('Apresenta????es'),
                'singular_name'      => __('Apresenta????es'),
                'menu_name'          => __('Apresenta????es'),
                'name_admin_bar'     => __('Apresenta????es'),
                'add_new'            => __('Nova apresenta????o'),
                'add_new_item'       => __('Nova apresenta????o'),
                'new_item'           => __('Nova apresenta????o'),
                'edit_item'          => __('Editar apresenta????o'),
                'view_item'          => __('Ver apresenta????o'),
                'all_items'          => __('Apresenta????es'),
                'search_items'       => __('Procurar por apresenta????es'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma apresenta????o encontrada.'),
                'not_found_in_trash' => __('Nenhuma apresenta????o encontrada na lixeira.')
			),
            'description' => __('Apresenta????es'),
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

        'boletins' => array(
            'labels' => array(
                'name'               => __('Boletins'),
                'singular_name'      => __('Boletins'),
                'menu_name'          => __('Boletins'),
                'name_admin_bar'     => __('Boletins'),
                'add_new'            => __('Novo boletim'),
                'add_new_item'       => __('Novo boletim'),
                'new_item'           => __('Novo boletim'),
                'edit_item'          => __('Editar boletim'),
                'view_item'          => __('Ver boletim'),
                'all_items'          => __('Boletins'),
                'search_items'       => __('Procurar por Boletins'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhumo boletim encontrada.'),
                'not_found_in_trash' => __('Nenhumo boletim encontrada na lixeira.')
			),
            'description' => __('Boletins'),
            'rest_base' =>'custom/Boletins',
            'has_archive' => 'biblioteca/Boletins',
            'supports'    => array('title'),
		),

        'convencoes' => array(
            'labels' => array(
                'name'               => __('Conve????es Coletivas'),
                'singular_name'      => __('Conve????es Coletivas'),
                'menu_name'          => __('Conve????es Coletivas'),
                'name_admin_bar'     => __('Conve????es Coletivas'),
                'add_new'            => __('Nova conven????o'),
                'add_new_item'       => __('Nova conven????o'),
                'new_item'           => __('Nova conven????o'),
                'edit_item'          => __('Editar conven????o'),
                'view_item'          => __('Ver conven????o'),
                'all_items'          => __('Conve????es Coletivas'),
                'search_items'       => __('Procurar por Conve????es Coletivas'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma conven????o encontrada.'),
                'not_found_in_trash' => __('Nenhuma conven????o encontrada na lixeira.')
			),
            'description' => __('Conve????es Coletivas'),
            'rest_base' =>'custom/apresentacoes',
            'has_archive' => 'biblioteca/convencoes',
            'supports'    => array('title'),
            // 'taxonomy'    => array(

            //     'apresentacoes_category' => array(

            //         'hierarchical'      => true,
            //         'labels'            => array(
            //             'name'              => __('Categorias'),
            //             'singular_name'     => __('Categoria'),
            //             'search_items'      => __('Procurar por categoria'),
            //             'all_items'         => __('Categorias'),
            //             'parent_item'       => __('Categoria Pai'),
            //             'parent_item_colon' => __('Categorias Pai:'),
            //             'edit_item'         => __('Editar Categoria'),
            //             'update_item'       => __('Atualizar Categoria'),
            //             'add_new_item'      => __('Nova Categoria'),
            //             'new_item_name'     => __('Nova Categoria'),
            //             'menu_name'         => __('Categorias'),
            //         ),

            //         'show_ui'           => true,
            //         'show_admin_column' => true,
            //         'query_var'         => true,
            //         'rewrite'           => array('slug' => 'apresentacoes_category'),
            //         'show_in_rest'      => true,
            //         'rest_base'         => 'apresentacoes_category'

            //     ),

            // ),
		),

        'em_acao' => array(
            'labels' => array(
                'name'               => __('Abigraf em A????o'),
                'singular_name'      => __('Abigraf em A????o'),
                'menu_name'          => __('Abigraf em A????o'),
                'name_admin_bar'     => __('Abigraf em A????o'),
                'add_new'            => __('Nova not??cia'),
                'add_new_item'       => __('Nova not??cia'),
                'new_item'           => __('Nova not??cia'),
                'edit_item'          => __('Editar not??cia'),
                'view_item'          => __('Ver not??cia'),
                'all_items'          => __('Not??cias'),
                'search_items'       => __('Procurar por not??cias'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma not??ca encontrada.'),
                'not_found_in_trash' => __('Nenhuma not??ca encontrada na lixeira.')
			),
            'description' => __('Noticias de Abigraf em A????o'),
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

        'anuario' => array(
            'labels' => array(
                'name'               => __('Anu??rio'),
                'singular_name'      => __('Anu??rio'),
                'menu_name'          => __('Anu??rio'),
                'name_admin_bar'     => __('Anu??rio'),
                'add_new'            => __('Nova anu??rio'),
                'add_new_item'       => __('Nova anu??rio'),
                'new_item'           => __('Nova anu??rio'),
                'edit_item'          => __('Editar anu??rio'),
                'view_item'          => __('Ver anu??rio'),
                'all_items'          => __('Anu??rios'),
                'search_items'       => __('Procurar por Anu??rios'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma anu??rio encontrada.'),
                'not_found_in_trash' => __('Nenhuma anu??rio encontrada na lixeira.')
			),
            'description' => __('Anu??rio'),
            'rest_base' =>'custom/anuario',
            'has_archive' => 'biblioteca/anuario',
            'supports'    => array('title'),
		),

        'atividades' => array(
            'labels' => array(
                'name'               => __('Relat??rio de Atividades'),
                'singular_name'      => __('Relat??rio de Atividades'),
                'menu_name'          => __('Relat??rio de Atividades'),
                'name_admin_bar'     => __('Relat??rio de Atividades'),
                'add_new'            => __('Novo relat??rio'),
                'add_new_item'       => __('Novo relat??rio'),
                'new_item'           => __('Novo relat??rio'),
                'edit_item'          => __('Editar relat??rio'),
                'view_item'          => __('Ver relat??rio'),
                'all_items'          => __('Relat??rios'),
                'search_items'       => __('Procurar por relat??rio'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma relat??rio encontrada.'),
                'not_found_in_trash' => __('Nenhuma relat??rio encontrada na lixeira.')
			),
            'description' => __('Relat??rio de Atividades'),
            'rest_base' =>'custom/relat??rio',
            'has_archive' => 'biblioteca/relat??rio',
            'supports'    => array('title'),
		),

        'associados' => array(
            'labels' => array(
                'name'               => __('Associados'),
                'singular_name'      => __('Associado'),
                'menu_name'          => __('Associados'),
                'name_admin_bar'     => __('Associados'),
                'add_new'            => __('Novo Associado'),
                'add_new_item'       => __('Novo Associado'),
                'new_item'           => __('Novo Associado'),
                'edit_item'          => __('Editar Associado'),
                'view_item'          => __('Ver Associado'),
                'all_items'          => __('Associados'),
                'search_items'       => __('Procurar por Associados'),
                'not_found'          => __('Nenhum Associado encontrado.'),
                'not_found_in_trash' => __('Nenhum Associado encontrado na lixeira.')
			),
            'description' => __('Associado'),
            'rest_base' =>'custom/associado',
            'has_archive' => 'biblioteca/associados',
            'supports'    => array('title'),
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

    $menu[5][0] = 'Not??cias';
    $submenu['edit.php'][5][0] = 'Not??cias';
    $submenu['edit.php'][10][0] = 'Adicionar Not??cia';

}

add_action( 'admin_menu', 'ks_change_post_label' );

function ks_change_post_object() {

	global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Not??cias';
    $labels->singular_name = 'Not??cias';
	$labels->menu_name = 'Not??cias';
	$labels->name_admin_bar = 'Not??cias';
    $labels->add_new = 'Nova Not??cia';
    $labels->add_new_item = 'Nova Not??cia';
    $labels->new_item = 'Nova Not??cia';
    $labels->edit_item = 'Editar Not??cia';
    $labels->view_item = 'Ver Not??cia';
    $labels->all_items = 'Not??cias';
	$labels->search_items = 'Procurar Not??cias';
	$labels->parent_item_colon = 'Not??cias pai:';
    $labels->not_found = 'Nenhuma Not??cia encontrada';
	$labels->not_found_in_trash = 'Nenhuma Not??cia encontrada na lixeira';

}

add_action( 'init', 'ks_change_post_object' );
