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
define( 'DB_NAME', 'alurapress' );

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
define( 'AUTH_KEY',         'e-I,c$ .{dk,HGy&}|yq[IsRcI_^R?6<m/IETP*l3OZKNdo7j:tlD20k|Bhm30c?' );
define( 'SECURE_AUTH_KEY',  'EPLlxMYT/(Q<+(cf5.vCmAMm!,Z-<;uhc1d.+0=;QD{14 }X&Cp{-1OzbpTX:@GV' );
define( 'LOGGED_IN_KEY',    'y8-y3;_oZrg1uufM><_D<`7#<;7f7bo9aqX8c7pYY#%9+E-BZd,!GCeZ&b{zfj>,' );
define( 'NONCE_KEY',        '{`w}tGLx^t,+d`G33w}!1%_UHe?v5jE9.L_`~hg+O]N@i4NB?HHqw<+Y~w_mxdK)' );
define( 'AUTH_SALT',        '|G4:>6LWF-%OK|SWWz.ft61Pr5Le.S:K/}3OF8z-0~.];lE8Y@yeF%cAhhS%kZfP' );
define( 'SECURE_AUTH_SALT', 'Cd3O?Uid6-x~-jN, /nGt=?~%/fu~2)%Z1|h{la1tlY_=VU|~&Z+6#N{;9&XQZqO' );
define( 'LOGGED_IN_SALT',   'M_0nWQ,8PP/X%0MvJD;i_w6Hq,qq%0_n1([tv6+.H%DM!0_So8xb5|rjO2MtaHT3' );
define( 'NONCE_SALT',       ';8kg4(]_FQv6#:OpOQPq(F&`MT!4hOh|vE?AaJCBIRrT-fYG./,Lb`wA0~Xnh{HP' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ap_';

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
