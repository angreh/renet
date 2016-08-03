<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'renet');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '12345678');

/** nome do host do MySQL */
define('DB_HOST', '169.57.135.46');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i@1gAW0mK/cxpSY5^rd?4QM:%OB8qka52(v?CXLSO(b7 Xa|Um~S^nwK]:+hi!*^');
define('SECURE_AUTH_KEY',  '{4mtPQQBS(Ng2O+;i;V!T|B:62=/]ahW-#y5!.D{P)a uN8!xW=&3?S&13ZxZcVK');
define('LOGGED_IN_KEY',    'E3UJCVXv+E;nf4RC$[38kr%>?D)N[Hq#/V2,l/YwbU~sYu;INP[<zlo0efSLG%u:');
define('NONCE_KEY',        'drUEroEN{5-V&|YJ]A$}bP`s<Ak_&BE, 3U`?Eb7L#~~7[Zaj.PN3QMlfM$cC]?J');
define('AUTH_SALT',        'IUz?n>|}NT^1m.!;~d8|/@7(iD6=B%omT=?-C~=;=kXE<!05D7b0*4)@rR2=mqfg');
define('SECURE_AUTH_SALT', 'BFsLMgYXi;`0=jX*WBD(02WTd6co:6o)s:Al9kmXb/U,GQ$AFbinhQbFffW4W<1c');
define('LOGGED_IN_SALT',   'x=B35+%PS&J`ywt45]{FtJz+`MO}rmC4cBFX%A!)F@2m!.6.F{[@,x}s@4%kfI2*');
define('NONCE_SALT',       'bjPb;yc7I{fNg4sqfQd&Ey1BOVHWPhhNl%[qmqzEP)PC{&U) 2!ym/7( x35X8>b');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
