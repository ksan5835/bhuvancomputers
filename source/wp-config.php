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
define('DB_NAME', 'bhuvancomputers');

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
define('AUTH_KEY',         'vaog@y<@+K#x3@d h@DWIt-@@z$`p}5wGeZa$;~3IwY`cUL)NFY-_$)hi)8 R$wn');
define('SECURE_AUTH_KEY',  '7>}LeV3/AG<i(NvN59gvk6--q(m#y232_v.7A~h,;,$.nK8LeR-!plZekQ!]IL@6');
define('LOGGED_IN_KEY',    '$NmH]YEf!D%$[P1HOZ1p>-cC^X0)lSMdD}lHgn;:01mS@Ad?L8l>VRZ%31kX/}dF');
define('NONCE_KEY',        'bX^f5dmClBDV9Rje`mA`aI/k])YvG?g%,nE~tLnjc9l0dHyzsmCAGLg=2L`+Av95');
define('AUTH_SALT',        '39<pRLO&DKpI.><q!MY$elL5NI2q,`HB;GiW8p4O0q`94_PzaXK@+0dx(.%Q{@.0');
define('SECURE_AUTH_SALT', 'GVhX$7V30 ut%vxknnzYd<g8YwBBKD~#Uvi^VQc:*(+0_a%!|l$C[2;.nOJuXi#M');
define('LOGGED_IN_SALT',   '4[O5qbHsRJ2WLrDs!&pn<(`_QvKH$S14=_K1=2B-8w@qhEs>M@Fu]FQ<s%/C)W:H');
define('NONCE_SALT',       '-~,<H{G:mFf+]=.KEv)21b3W+1AxP4>V1 1HKE<Ky wCzO;SrPZ0[!3zrgcv.BJ5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bs_';

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
