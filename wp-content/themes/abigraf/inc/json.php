<?php

function registerRote()
{

    if(empty($_GET['cnpj'])) {
        return [
            'error' => 1,
            'message' => 'CPF e/ou CNPJ não encontrado'
        ];
    }

    $cpf = $_GET['cnpj'];

    $cnpj_query = new WP_Query(array( 
        'posts_per_page' => 1, 
        'post_type' => 'associados',
        'meta_query'	=> array(
            'relation'		=> 'OR',
            array(
                'key'		=> 'cnpj_ou_cpf',
                'value'		=> $cpf,
                'compare'	=> 'LIKE'
            )
        )
    ));

    if($cnpj_query->have_posts()){
        return [
            'error' => 0,
            'message' => 'CPF encontrado'
        ];
    } else {
        return [
            'error' => 1,
            'message' => 'CPF e/ou CNPJ não encontrado'
        ];
    }

}

add_action('rest_api_init', function () {
    register_rest_route('custom/v2', '/consulta', array(
        'methods'  => WP_REST_Server::READABLE,
        'callback' => 'registerRote',
    ));
});