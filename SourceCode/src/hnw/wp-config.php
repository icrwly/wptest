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
define('DB_NAME', 'cfa-hnw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'Fn|0J>/gSkuV<k_z>AOkMbf4N6GSTvI5M!2c.n;~!Qc?G-fsn`gb>z3y^UGk ^y_');
define('SECURE_AUTH_KEY',  'K0wEjIrR# #Po@VEb(9AmaUg<Tw;x#a_0+(Sl6Xo|6w2esT~T=-xz^uWAtbv|Bl-');
define('LOGGED_IN_KEY',    'kGo7|ys}O?H_^ipx9CSsAV8&RTc[Ap:NxYey8X%dm.UI<#j-rf zwEPaCoP1?C@L');
define('NONCE_KEY',        '7]zt[yXhxRFZ,};SZ!%SW K_6+vnP~4]|bUSoQ=u|FYSW?B~N5>VwncUAhb_k-  ');
define('AUTH_SALT',        '{JvD4~?8nL[GSV6(N` LO*D#uJ&<n.5p9n`iy$#A~/{Qqn5JdgL-7?FR+9QVJa)S');
define('SECURE_AUTH_SALT', 'A[L%HJFjp~V^4w%Ep;]4C{6}jHL.s,wiL_a#!{Lh3zeTVLvSDW.hw](,p8Zi_vQ(');
define('LOGGED_IN_SALT',   '~`|*{cJxo_S@.XC6rdBsCh1OH(wH %cM}Jm3EbJ|Ui@@JQd1OkR|O,uyjN(H}d!^');
define('NONCE_SALT',       'SZ7%rxFkK?JlHozWJR`v,e=Q#xfi>66M.oiMNXI~[FY H^/zM:C}9m?+0L_S[so3');

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
