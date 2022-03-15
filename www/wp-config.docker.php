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
define( 'DB_NAME', 'wp_w5' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'docker' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'fWuBuC1qrC' );

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
define('AUTH_KEY',         '`[lrS<=5w`I4g3ClG-@FZ.|*v=PC!M+!-0nZB/PH{L[9Md/qO`7Y]&<{%4GuHviF');
define('SECURE_AUTH_KEY',  'l| @)RxM$r-:-GjXi9sPkK$x6%&dIvA`-Je#E(LvBNT|ON#ndp>Mr6N[<G|-?Eg|');
define('LOGGED_IN_KEY',    '~^$|(Mh6Z$#3?jWXJOUu*>.lp%@_~h<_Lo}B%K+,>_hpe1_<3x]*BLU1]>Dm+JB[');
define('NONCE_KEY',        'MA<l%H?L!$eK6?TIt0c>K+5%ZQLam8mKDhjxC|N1n&|ZXFT+p`LZ~-&4#wpkD*a|');
define('AUTH_SALT',        '-+35p5I%~L-BIez^a1;{_+IcV8NGO.|,jw1-|qT%eZ^$CJtlOjwS&GR`/a+BT7,T');
define('SECURE_AUTH_SALT', 'eok!-+;C*cl)2LnA!T02@bB[+UiLBuRNA7jjpC5<@_ gipR#T)*.3J]1>-GcJEwj');
define('LOGGED_IN_SALT',   'F!DWd2{Sd}sF<nB39p+-Oj~s?}g5JO>0|ug;S%Sm)xLu1<.0IlbgJ:-+OQ{CG4YM');
define('NONCE_SALT',       '~05gI*ETcR3 }r7p(w|VFQtp5p=aan&4JlcI@MV*P4mhQ{=]],wW^USq|mhUIQH+');

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'w5_';

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
