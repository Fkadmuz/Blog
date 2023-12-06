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
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         'BMG>4ni;Na^y!e@3h`(IQ7hZ+z0s!Q9.mlB`(1+*.3GF6/C)M%V68;k`{w7L8041' );
define( 'SECURE_AUTH_KEY',  'r+:(bo/m];igMn:%LK7wa_cO2rI)zaEmo,,m^Vv<PXX,Z&t>wLf6,+F;S,?DDLZ1' );
define( 'LOGGED_IN_KEY',    'PY|(&LMh(9$6)1}{z%VN5}G>}e1?UDQJSb7MYm<ib8lLmR/WsHPnxmGqEO=c6r`P' );
define( 'NONCE_KEY',        'R]OGApp&t;laspf-r]G#Q1w6BNNC!2Qax]1KNZw==UD~B%dUMv~y><t;]*8u7{6$' );
define( 'AUTH_SALT',        '{Tc.+8nSvF@1tY)S+f irt g<$ gV1f8#KIjEqwAK`ZYn 9r&*$/pHW4o#zFdk1,' );
define( 'SECURE_AUTH_SALT', 'wXVE69{d@X^s)fu?RrxRvn{tAMc6dL]SG<(wYSEV!Undpq^J+=E]Y<l><EN$d?9-' );
define( 'LOGGED_IN_SALT',   'v=a+cO41[T<?Z[aYD?XvcFT+:ZQ-!S=:!$A!g=uvjpe.dFSVS}oXbjTZ^m.ih:p2' );
define( 'NONCE_SALT',       'zMv 2}mff-+32_pV^eCGG:k:!.^_X%fUH>)#QU9:^j}Cs4Du@X[OMBj#(I-|*Z{g' );

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
