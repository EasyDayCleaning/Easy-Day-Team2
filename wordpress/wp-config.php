<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'birinnovators');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'k|`4X[~c$~F%GhN.E/CODQ`|G9$Z7(u3<B6945lV?t[7[]|S)Il#P_#?3?-M1dPL');
define('SECURE_AUTH_KEY',  ':z>/@ t|?EMmjo*Z;UXQc#-_:So2t]F9Kd`un{nZp9Fyh(E_;;J=wVFdaWG EV4K');
define('LOGGED_IN_KEY',    '<e)@r)3^J+h5.VW+p4WdewIbt-[LWJ^AoGR>4-||;%T)G0|,uRa4g3ls)|1ex[Yd');
define('NONCE_KEY',        '3.83+=;-5a!DN`xikcny.Sj@2fZ;c:ywZp>;sOYC_^Qt:anz+6/hl*^ rOX6u!%n');
define('AUTH_SALT',        '3A+M%ApT=0!@u49r^3cyr6zxSZ*IRC|R9_X;W5UQ%#u._6MKwPz7KE{xeh^>@/6>');
define('SECURE_AUTH_SALT', 'HY!*&]yK?,}]n+_Pz$}TNw-+*(.:UZb{-LOo+0};?e)#qs/VA:A80-]BzyEzJC{+');
define('LOGGED_IN_SALT',   '5v2xKY:|K37Y`5[Y_|~Q^.W`/tN-|AltmubH9NoG{T,y9_5,<lB|%5T[&lv>kQo8');
define('NONCE_SALT',       'E-Nb_+B01KWfL6KD`^H-dCUbw`#OF{-`CU5pGr&zZ]b$<`0M6oscH:GKl~ZeSZ%1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
