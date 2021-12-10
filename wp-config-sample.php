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
define( 'DB_NAME', 'wp-ks' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'docker' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'banana pijama' );

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
define( 'AUTH_KEY',         'f9HCAP{g3=Mn)EL^.|jD!E<q4&sqG8PAJ9gF9vffp4rWN``=8]#iPa&[DPO9/wRq' );
define( 'SECURE_AUTH_KEY',  'OZh.Y0Z+V/|vj^qvMe`&-r_3cM^Qy=H+|___W#4y:M2x;9?jW3aO8So^]S5AxOsu' );
define( 'LOGGED_IN_KEY',    '4nYWti1={,|*D1s^q7;mZrT!c@TLX$o3oQ7%0 nJ@/Bi$AgP:T]c9;Rys<IzQKuF' );
define( 'NONCE_KEY',        ':VjCX_9U7MSIjMVY4?|7^Oj/m_`^Q*kW j&91Y4x!>PlJl{< V>p=0eEj:hPN}FH' );
define( 'AUTH_SALT',        'MbH-@uS5Aj*5*9 s46#.`k;[WdDaCpKE<^vv>^Ho*)Kf@)#tMlaSHw;[CJeA$KuZ' );
define( 'SECURE_AUTH_SALT', ';Z4RSz~ZI9wca5!7T{y4~geq7tuwq_?wphL$.FN!r~roib+8>&d{RrbY{*];e3B]' );
define( 'LOGGED_IN_SALT',   'bsw9UML4JO%x=>MdjH%i,Z1klnn|]s4ip%W6 }Kp^Lr0*!K>;,@$iuct&~ie2GjB' );
define( 'NONCE_SALT',       '@d;hQ|][O(@jB*A5UWc_{ElyC/h>kDJ8Ks`.MxAgrK`M,r$N(Icx5{u62yy2>HQV' );
/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jul20_';

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