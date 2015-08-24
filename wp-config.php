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
define('DB_NAME', 'a1163564_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'a1163564_cm');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Gayoxo210584');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'a02w0l_U^<A77O<muEoWX$uxW[L$-%flB{;M8@&sH%O **FFqMh43x.VM5bua)P2');
define('SECURE_AUTH_KEY', '}@Gl=I;N}x#qG!q2nr:AhaJ?;+Cx-P=-TXL8(!{c=^J[{=_o3eTQj<SVL!x:As.:');
define('LOGGED_IN_KEY', 'fYw)*H0}+qSN{Zl51s):1g:DS5zOu&nJyA=y?,%<U8t-8dz4r&{P+Ma)+Cz/,AKi');
define('NONCE_KEY', '^t,9g_-CnbTn`,%x{wQMz:Wk-kcp&&q3KiX#^3mReof5l>N<~y.koXJ$S>2wGY_}');
define('AUTH_SALT', '--/?Yc^G1|{[r=jMh~0YBd*|#QB7P|+Lk47|n:>Sy7ZmA0#h21W<g+ENj~<DSGi,');
define('SECURE_AUTH_SALT', 'wjXsa-*Y~$X2fdsv-2}XaBc&AXRk1|9QMU*y ^HuOXP[h-|N*(D){>g3<@O~~Of~');
define('LOGGED_IN_SALT', 'Sq591[<Ls8]P0_`Z#-W6</ule?ogY.<Ib#p+/%8M))Ii6`9,ES?[VG/!+Y&kn7[p');
define('NONCE_SALT', 'k0TiZ y]8&Wo[s9R0]gMb@p]==<Y`CB-, U1HZsjE,lKjo%R![Vd48Qk/*[gSp.o');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

