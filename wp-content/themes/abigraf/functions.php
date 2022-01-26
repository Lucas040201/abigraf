<?php

/**
 * Theme functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @since 1.0.0
 */

if (in_array(session_status(), [PHP_SESSION_NONE, 1])) {
    session_start();
}

/**
 * Composer autoload
 */
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once(__DIR__ . '/vendor/autoload.php');
}

require_once(__DIR__ . '/inc/post-types.php');
#require_once(__DIR__ . '/inc/shortcodes/galleries.php');
#require_once(__DIR__ . '/inc/shortcodes/special-posts-videos.php');

/**
 * @info Security Tip
 * Remove version info from head and feeds
 */
add_filter('the_generator', 'wp_version_removal');

function wp_version_removal()
{
    return false;
}

/**
 * @info Security Tip
 * Disable oEmbed Discovery Links and wp-embed.min.js
 */
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

/**
 * Filter except length to 35 words.
 *
 * @param integer $length
 * @return integer
 */
function custom_excerpt_length($length)
{
    return 40;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/**
 * Add excerpt support for pages
 */
add_post_type_support('page', 'excerpt');

/**
 * Remove Admin Bar from front-end
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Disables block editor "Gutenberg"
 */
add_filter("use_block_editor_for_post_type", "use_gutenberg_editor");
function use_gutenberg_editor()
{
    return false;
}

/**
 * Add support to thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * @info this theme doesn't have custom thumbnails dimensions
 *
 * define the size of thumbnails
 * To enable featured images, the current theme must include
 * add_theme_support( 'post-thumbnails' ) and they will show the metabox 'featured image'
 */
add_image_size('company-size', 162, 81, false);
add_image_size('event-gallery', 490, 568, false);
/*add_image_size('slide-large', 1366, 400, true );
add_image_size('slide-extra-large', 2560, 749, true );*/


/**
 * Páginas Especiais
 */

if (function_exists('acf_add_options_page')) {

    /* @info disabled by unused*/
    acf_add_options_page(array(
        'page_title' => 'Opções Gerais',
        'menu_title' => 'Opções Gerais',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'icon_url'   => 'dashicons-admin-settings',
        'position'   => 2

    ));
    acf_add_options_page(array(
        'page_title' => 'Menus Seccionais',
        'menu_title' => 'Menus Seccionais',
        'menu_slug'  => 'menu-seccionais',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'icon_url'   => 'dashicons-admin-settings',
        'position'   => 3

    ));
}


/**
 * Registering Locations of Navigation Menus
 */

function navigation_menus()
{
    /* this function register a array of locations */
    register_nav_menus(
        array(
            'header-menu' => 'Menu Header',
        )
    );
}

add_action('init', 'navigation_menus');

/**
 * ACF Improvements
 * Order results by descendent date in relational fields
 *
 * @param array $args
 * @param array $field
 * @param integer $post_id
 * @return array
 */
function relational_fields_order($args, $field, $post_id)
{
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';
    return $args;
}
add_filter('acf/fields/relationship/query', 'relational_fields_order', 10, 3);

/**
 * ACF Improvements
 * Order results by descendent date in post object fields
 *
 * @param array $args
 * @param array $field
 * @param integer $post_id
 * @return array
 */
function post_objects_fields_order($args, $field, $post_id)
{
    $args['orderby'] = 'date';
    $args['order'] = 'DESC';
    return $args;
}
add_filter('acf/fields/post_object/query', 'post_objects_fields_order', 10, 3);

/**
 * Declaring the JS files for the site
 */

function scripts()
{
    wp_deregister_script("jquery");

    wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style('css-map', get_template_directory_uri() . '/assets/css/style.min.css.map');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css');

    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-mask', get_template_directory_uri() . '/assets/js/jquery.mask.min.js', array(), '1.0.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'scripts', 10); // priority 10


/**
 * Applying custom logo at WP login form
 */
function login_logo()
{
?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg");
            width: 260px;
            height: 55px;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'login_logo');

function login_logo_url()
{
    return home_url();
}

add_filter('login_headerurl', 'login_logo_url');

function login_logo_url_title()
{
    return 'IT Mídia';
}

add_filter('login_headertext', 'login_logo_url_title');



function formatedDate($date)
{
    $currentDate = date('d/n/Y', strtotime($date));
    $currentDate = explode('/', $currentDate);
    $day = $currentDate[0];
    $month = $currentDate[1];
    $year = $currentDate[2];

    switch ($month) {
        case '1':
            $month = 'Janeiro';
            break;
        case '2':
            $month = 'Fevereiro';
            break;
        case '3':
            $month = 'Março';
            break;
        case '4':
            $month = 'Abril';
            break;
        case '5':
            $month = 'Maio';
            break;
        case '6':
            $month = 'Junho';
            break;
        case '7':
            $month = 'Julho';
            break;
        case '8':
            $month = 'Agosto';
            break;
        case '9':
            $month = 'Setembro';
            break;
        case '10':
            $month = 'Outubro';
            break;
        case '11':
            $month = 'Novembro';
            break;
        case '12':
            $month = 'Dezembro';
            break;
    }
    
    return "$day de $month de $year";
}

// ______________________ Cadastro de associados ______________________


/* Ativar o acf no wordpress para exibir e receber dados*/
function formulario_cabecalho(){
	if(!is_admin()){
		acf_form_head();
	}
}

add_action('init', 'formulario_cabecalho');


/* Mostrar formulário no site*/

function formulario_cadastro(){

	acf_form(array(
		'id' => 'form-associado',
		'post_id' => 'associados',
		'field_groups' => array(450),
		'new_post' => array(
			'post_type' => 'associados',
			'post_status' => 'publish'
		),
		'submit_value' => 'Cadastrar'
	));

}

add_shortcode('associados', 'formulario_cadastro');

function salvar_formulario($post_id){

	if($post_id != 'associados'){
		return $post_id;
	}

	$empresa = $_POST['nomeempresa'];
	$cnpj_cpf = $_POST['cnpj'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$post = array(
		'post_status' => 'publish',
		'post_title' => $empresa . ' | ' . $cnpj_cpf,
		'post_type' => 'associados'
	);

    $cnpj_query = new WP_Query(array( 
        'posts_per_page' => 1, 
        'post_type' => 'associados',
        'meta_query'	=> array(
            'relation'		=> 'OR',
            array(
                'key'		=> 'cnpj_ou_cpf',
                'value'		=> $cnpj_cpf,
                'compare'	=> 'LIKE'
            )
        )
    ));

    // Checar se o cnpj existe
    if ($cnpj_query->have_posts()) {
        while($cnpj_query->have_posts()){
            $id = wp_insert_post($post);

            update_field('field_61ed5deafa307', $empresa, $id);
            update_field('field_61ed5df4fa308', $cnpj_cpf, $id);
            update_field('field_61ed5e70fa312', $nome, $id);
            update_field('field_61ed5e75fa313', $email, $id);
            update_field('field_61edd872d8025', $senha, $id);
        
            do_action("acf/save_post", $post_id);
        
        }
    }else {
        echo '<script>window.location.href = "google.com";</script>';
    }
}

add_filter('acf/pre_save_post', 'salvar_formulario');

function login_formulario() {
    $login_email = $_POST['email'];
    $login_password = $_POST['senha'];

    // Encontrar um post com os valores do acf

    $user_query = new WP_Query(array( 
        'posts_per_page' => 1, 
        'post_type' => 'associados',
        'meta_query'	=> array(
            'relation'		=> 'OR',
            array(
                'key'		=> 'email_do_contato',
                'value'		=> $login_email,
                'compare'	=> 'LIKE'
            )
        )
    ));

    // Checar se o usuário existe
    if ($user_query->have_posts()) {
        while($user_query->have_posts()){
            $user_query->the_post();
            $user = get_post();
            $password = get_post_meta($user->ID, 'senha', true);

            if ($login_password == $password) {
                echo 
                '<script>
                    window.location.href = "'. home_url() .'/dados-economicos/";
                    sessionStorage.setItem("logado", "logado");
                </script>';
            } else { 
                echo '<script>alert("Senha incorreta")</script>';
            }
        }
    }else {
        echo '<script>alert("E-mail não cadastrado")</script>';
    }

    wp_reset_postdata();
}

if(array_key_exists('logar',$_POST)){
    login_formulario();
}

// Esqueci a senha

function yourdomain_save_post() {
    $user_query = new WP_Query(array( 
        'posts_per_page' => 1, 
        'post_type' => 'associados',
    ));
    
    if ($user_query->have_posts()) {
        while($user_query->have_posts()){
            $user_query->the_post();
            $user = get_post();
            $password = get_post_meta($user->ID, 'senha', true);
        }
    }

	$toEmail = $_POST['esqueciemail'];
	$subject = 'Recuperação de senha';		
	$body    = 'Sua senha é: '. $password .'';
	$from    = 'contato@abigraf.com.br';
	
    
    
    wp_reset_postdata();
    wp_mail($toEmail, $subject, $body, $from);
}

if(array_key_exists('esqueciasenha',$_POST)){
    yourdomain_save_post();
}