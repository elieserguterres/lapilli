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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lapilli' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'leadinbox' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'res@2003' );

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
define( 'AUTH_KEY',         'vS!oGc^.:ae&#LF4([Rr8vr,o(5S3ZcAVUZ*Y*YC3E:W=BZc1xr]+8BK=s0~64xN' );
define( 'SECURE_AUTH_KEY',  'bc{cbU4,c 3F}AHct}g #%,?P)!1PvtTo[R6}l>^>&oon42xV.ja</S7uG.MB7hJ' );
define( 'LOGGED_IN_KEY',    'H-?}$5@|ShGi}_BYomW9le}CQnm)^#b?4a)>u*w6Aq*vli5g=Ox,O<(h;e&.#Qs%' );
define( 'NONCE_KEY',        'J+(k|sXDo#(ko@`ID_X<CiVF;I}kh{8!M*aWJ=r<`_7gzL@:f=SfYzb{bm bo7-V' );
define( 'AUTH_SALT',        '[.X9qF(G4<)aS9^qubL@.K}dgE~BTdCfJej/4`A|(g(z9uNmj^1Y{+XH4fnD-^>P' );
define( 'SECURE_AUTH_SALT', ')+[%?I9>=?@$zV~hjN=xUycB=4St]1=FUhPL+0wYU2|En]YMhhT-Hg{w*PD!FSNO' );
define( 'LOGGED_IN_SALT',   'ciplU|n/t[lW|A?P`%Y8fer*047dM.h.C|WEdX1S}SziTZKH>2tQ+H%55fLf%7|6' );
define( 'NONCE_SALT',       '{FJa4MpO`T)0V-S[4X!1_C|Ndm[b3SMsK*{[HT5f})r(Q*{?]q`f@&k{|3h)1tVU' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
