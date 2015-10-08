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
define('DB_NAME', 'easyday');

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
define('AUTH_KEY',         '5_?1-W9.g)wZrK%cJj/5]IesM){GR)[v<hYSfq3y%xYiXeO3(o~8n4`o.eB$r0U3');
define('SECURE_AUTH_KEY',  'sD4TI+J.#?7-L-D%AunYBN-&T1ZWNM,&~iU`SdWv&IfmE&RZk6^dTAXrAEuY{<44');
define('LOGGED_IN_KEY',    '$-t]hfG6c%=lm;.T7l_J[oG;<SYtrog9L]aUOnm:l`fLNi3#:KNht7Rg=#vqGvHi');
define('NONCE_KEY',        'ewKH@W_K3x$K5w|dr7BM4[[hd&A1c&vj3OXs5..:pc%-m8BrNi2)cn[JD!&f*MZ$');
define('AUTH_SALT',        '$Eo4Q4o;udQtu7 {P[;$G-7w_$[ZeK{uuI?~LgBYn b12=<hsrBCo5?LUiiWQRV-');
define('SECURE_AUTH_SALT', 'yHN?-QXnxU[;&#x@Qy!`Hq|]-0 kAA(NmRZh@wyP&.!uJB+;chVGB,zmJ&`gT`}S');
define('LOGGED_IN_SALT',   '{=BfRG&}2+W,UpQ-!@>q=zC e2+skb4c1e3}i*]^-}pWpVCU3?bA/6)@(e+n1Bi`');
define('NONCE_SALT',       'kX7zZg@CKH{a}slZ:k>BlU#jX7U=!D#ZwlM@8kUsuy9m*:N6]x8)4gu_)=% |ASi');

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
