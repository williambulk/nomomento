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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'WP_MEMORY_LIMIT', '256M' );

define('DB_NAME', 'nomomento');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'ro~z$_=t:*BXbgLNF-=yF3ASSVN5LW+0-}NCJY9@4Al[USXMrkW]q{}MDKcp?73w');
define('SECURE_AUTH_KEY',  '|n)1O)Ukvgjz-:=S59:wWwA(18t(oBCM+)t~K=xN{wg4F#D@NpOa7#|R|?pOR+oB');
define('LOGGED_IN_KEY',    'h[!>*>:z]N4anItbPvf]A!Q~~+y-wHv`Q>{f+FqNyjb&^buI+^<Vp?O6-,%~pIKN');
define('NONCE_KEY',        'MJ](^{CjTMdXJ&G3%4O%LeJxq%c1)e=D]L_w`&0),{lE:YP2?  J{S;W1hUiyz:(');
define('AUTH_SALT',        'H8|.z~)S8x_}EDFO>y+EiwCG&Bjd$~cRe?|ht !u^xmLTcKlA^lC9~L@cud{VkH<');
define('SECURE_AUTH_SALT', '!+4G/Z00(:dXE:K(_MVTIX[8BXBG^seX@Ek/pX-/jnsO0bkUQu5(D4=%7_Ls)5XW');
define('LOGGED_IN_SALT',   'bpl> oy+?8/&[EDr`DkEbW5tznPy|ZilvfvC;0Q(;y+I!>-*A[A^k EZEI+gN,/s');
define('NONCE_SALT',       '@`s+I-IX5/)w[8p:R:h6ai Xm)}}5h8P-l9MsDPNC)vY)J;Q!I/s(fyr#uPFn(40');

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
