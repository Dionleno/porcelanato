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
define( 'DB_NAME', 'porcelanato' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'b$Fr@_L#=yzXDhVTWcG!5<ydD;M[kL/)h^B<rfY5Q;Pv>{NcQwts.IdDn)STKum4' );
define( 'SECURE_AUTH_KEY',  '+w:wB_quIf5<Vg<1k9UAb>sp99V_fMM]$T@`5/w:MbbqJv7uM~LSH*Y[@f3#|V)*' );
define( 'LOGGED_IN_KEY',    '}XNd^_+|no0Tc[Rr;$#Vzt0V_TokAN#L|pL;FKuJ,GK*h)v >>UHxVW6|m;|~%y{' );
define( 'NONCE_KEY',        '@G}0>`*Fy=<|>%y$xgZbG8TCIVI.u:oB+,Piw(sS^{PzT8<8S(kN$ac*;pnN@/Q0' );
define( 'AUTH_SALT',        '|x@Uofv#0: G4$.?5@,ldb*k*lOEF vtph!~&BC:ge=t`wx8iIR@#1^N)wIYmC_K' );
define( 'SECURE_AUTH_SALT', ',uM1^rx0YE4&{QN_,&l Fu4d)a@8%4Pwg<<SZW4gsBD(X6.N^FZ9$W#Mut{^ZS=[' );
define( 'LOGGED_IN_SALT',   '[W_Xzi#C$5Jz7!$%63AnwT|aD&;Z/0%lUZS6=RyM{2sLB.&rc[~@bn3+o[!N55~K' );
define( 'NONCE_SALT',       '{;Xli&VyLLVT!(U6QcYZP,z8}q8G3n`haG`?5*M$!_w>-@|khDYG~)ZO@X){JN:=' );

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
