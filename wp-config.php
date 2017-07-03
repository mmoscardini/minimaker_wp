<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'primary_minimaker_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N4iqoo!s$Yy|`%wGU-=RyHvCjZ.2V;^6A%Y9EuX@bq!Y)Xr(Py*@?K-jJ.UVl4|o');
define('SECURE_AUTH_KEY',  '[Kb!1g%j-FMR|b=VqjI&j85MYe++ 2rFPZ2{g5j=vLI 3gED2^caDL0+ORFm=BZ=');
define('LOGGED_IN_KEY',    'X gpLWCb7#8zNX1s?;g9WOSQr<bAYK*J+I,8j)h8pG-_]#hvtRBYRtc~bXey6~a4');
define('NONCE_KEY',        '=7I$2J1VULjuam7,N3,}:U`Su_XZHj=OlJueN&yn$&T;]5Xtlu D)[j2t>|~k d7');
define('AUTH_SALT',        'kQpmbatppY/zbPA>r;6%_+HTUaPGV)Mr?Ns.V,Z-&2LQ1caeh=Bq-7qYP ^Uf9IA');
define('SECURE_AUTH_SALT', 'rDtEkOpNfl>0l~klf 81s,jMc`D9rTw.dSJjp<bSi?F*<6aLveL47[,9>_2!3[3u');
define('LOGGED_IN_SALT',   '`zU.|BCq-.]DHi1.I(Pxxg|w/VGrTTYq^d>z!V?<hX>tA^*qV(_U|MCO8e-dswLH');
define('NONCE_SALT',       '9sJ}aOpnt*Ng1cbDYh!U#p3Oa<[)/gH!zpVqN8ef/e7{E4&^HaD#Rw #0#OsKn=,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
