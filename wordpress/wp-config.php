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
define('DB_NAME', 'cleaning');

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
define('AUTH_KEY',         '2?4+Sw-xGAblms(;]Sd4wL[_Uo1/ &OgBqzTR;?%~wpRGuj`3HPt!kqU8GK9:p8T');
define('SECURE_AUTH_KEY',  ';Gav+NpWL;D0-mqCU]Z(GP.%ELO*7o_**{# gI:(jQ7|cNL%p4?*w?Ep?|N~R~C0');
define('LOGGED_IN_KEY',    'e|i?WWlw><go[&-DUubP7~c)x_P(A2-r{l$ZyP!SGFoF}-&;8kmi)-m5Si&}-+kd');
define('NONCE_KEY',        '#r6YZ;g1iSl;Qd?-I+I 5<0u`oM|f@dmv[a+%[qm0DWP5|x1Ld.gmjb>k]hHgPW!');
define('AUTH_SALT',        '?rB4]k*XVt6-mwiT%We{{l<n8S=jn1qu|pL7-;ite6>mB*0<2-4Lf0C_=h89cu].');
define('SECURE_AUTH_SALT', '66 =3!8o+NuqCPHi|#8&JI:L]^|*#lh.g[7laOe(RAs>M`waI,E].vdQ+>- nkkE');
define('LOGGED_IN_SALT',   '>?G6+uS?JNUC8NfCPW@ 0D;HylJm%}7,5k;{ ?z `1?YSMo}YI_>1IeGrdouq/ 0');
define('NONCE_SALT',       'w7l8nDHxC`ZiY99fjXWPsM^8!V/]xb;{h(,W&e.Gpuq|U|-Q;r<M[.EYOv*2IHTZ');

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
