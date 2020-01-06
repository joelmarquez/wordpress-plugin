<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'plugins' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', '127.0.0.1' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'OA+/Tx5qT?E+0sA8S6~BfQ)lQH/Z=h?@_>QZUOgY_D##}b~!5(i/%puNZ{*6Q!&n' );
define( 'SECURE_AUTH_KEY', 'M%kIw*85`7>[je&M?iDVQI(p9Khh0$3P:%4agO`><,S_nA} %M_5J< ^-#_*5Ajz' );
define( 'LOGGED_IN_KEY', ']]xns?yu~TiERRvKY p.%/DN93C0& gN6+^mwj~0XZ-yY2%gDBdi:S)u;)+!95JC' );
define( 'NONCE_KEY', 'S]LP6llJ9MCnK-3<C,yn{T=@fzmCtc&l{|$?]Bn8mVTF}r4Oo`K1zwuE1g1i1Qea' );
define( 'AUTH_SALT', '&pde:9@qeCEkWen!Gco;g{vu6v6o/O>Q,8(sD{JCNj+g98E# {~F uvO&F%p<gbd' );
define( 'SECURE_AUTH_SALT', 'cn,Ooozu8(ZSuIXGsty]5XmU;z~c8:Kt_QCBKiXxUp*V`P`ZL@&X+F`*g?)BRe7A' );
define( 'LOGGED_IN_SALT', 'FgmonCe(glkR`x1EB6Ay?`Cxu~dWWQ=<bePuq;hD6Y<}X:gX7FXwi&ZR4_K7zfI|' );
define( 'NONCE_SALT', 'qT)pCifgEq3qzZ!cqk}M`-lNOE<:9]Q/.~XjDp4It4NMU:[Mwnhs#M)h~Q$= EUG' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'plugin_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

