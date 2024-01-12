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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '*y&Z&VAY.}_V>5$z#{=,DwMA[q-AYGf.fG73[!k!fYRGYzB06a!$pfXsTZ$fZkto' );
define( 'SECURE_AUTH_KEY',  'v,76YU(E7U/:,|po25fxP`fRp=G1yV2u7)&cS< qO/rH@5!p=}`x9[zO.gMIuL]G' );
define( 'LOGGED_IN_KEY',    ')JJYDJGNAXzMoT6 46!@h[p9`_/bR?B0yih;*t!d>ESJ%!k$#,.4+ha9i*.hh;We' );
define( 'NONCE_KEY',        '2rA]e;cw&?#t<t>-SAVb_=)wz|:,Nl<_1d*`$$7S=v$h|kRzUG?uos[rfsE9r[!)' );
define( 'AUTH_SALT',        '-Nc2]6cq8~1{2jJ`F1nP>0|Z)>a/1a8#H&:wuZ|`QaeIiPlb:>fj%wam?+1]6,?u' );
define( 'SECURE_AUTH_SALT', 'dK!E$1^083,yll=]Sq2]4RUkJOk im2hSO4uSD1%{B3rV3T1mVbk]Lrg*q~fVDNb' );
define( 'LOGGED_IN_SALT',   'Rsv{VTa;3`H<J^aT-hq$[ i`v!Y%K{eC%Vh:w:. nD r>5ib&0^)kMx#/)}osdwl' );
define( 'NONCE_SALT',       '73M.C:22Rf:9t WO5s& o@Y64G:nzhy.SFwr4%Xek9#q8GAY=~3-9=J&J=Hg)J3R' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
