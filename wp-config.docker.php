<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/**
 * Composer autoload
 */
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
	require_once (__DIR__ . '/vendor/autoload.php');
}

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_abigraf' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'docker' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'KDqQvEI1uE' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'database' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
/**#@-*/
define('AUTH_KEY',         'K|u =21FmO/~fZr@fPbPZ,5a3=G^&9v0>=~}HebzSU1YX#$O]+9M.d@?0tH|4@47');
define('SECURE_AUTH_KEY',  'NRB6zk(pZV$-fWPDj9_d4J0IXR=@Fr{/`rBJl#YUa U`s^-:Uqht0_r]mH3-jG9$');
define('LOGGED_IN_KEY',    ']I.+NkLRrNJmT^K4asZ.&( !@aGYsOR|/zL,<nb)z$F[s->0={|7.=tv+Kj%P Zk');
define('NONCE_KEY',        '`/D!};34{d8y?bYm>KH4Hq#[R!f(1P=s43j*lJ8)N`0S8/9 FEPJ%z#GLOvDeA6+');
define('AUTH_SALT',        '-D1N#~H)6ZDcV{>Pa+&:%HbR8g5)&Y{&)+b_-|M^6|eyRYqx/Q3vYGJ%^/G?/#&_');
define('SECURE_AUTH_SALT', 'bA_];_-v>aoql!%/WU|+]KXo#D9Yq_.p-+m4tr,5cyD==puD`EuYEIzm2uc8k8Hz');
define('LOGGED_IN_SALT',   '4qjUf8 Nit5ONh+=7ejoR>DEUhb[2UYv4k{^J|99xgtHM9^WCpQsY-(Lh)C35]HZ');
define('NONCE_SALT',       'f]-H|huB>L%W~vKM9s@gyoH6uI;(6QE=6*mL=8MxrL>0O%1P&>}NRXKSvr$ OGko');

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'dez10_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/var/log/wp-errors.log' );
define( 'WP_DEBUG_DISPLAY', true );

define('WP_HOME',       'http://localhost');
define('WP_SITEURL',    'http://localhost');

/**
 * Disable automatic updates and installations from production
 */
if (strpos(WP_HOME, 'localhost') === false) {
	define('automatic_updater_disabled', true );
	define('WP_AUTO_UPDATE_CORE', false );
	define('DISALLOW_FILE_MODS', true);
} else {
    define('FS_METHOD', 'direct');
}


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
