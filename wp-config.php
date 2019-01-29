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
define('AUTH_KEY',         'BpC(|jQ1R2kCl;nYR= =opqAq5YZTwf4 Y$`!uqcsIwFG^mn93p,!KjN-U;G@(A.');
define('SECURE_AUTH_KEY',  '^e;}P#/aBx$.lvEN6Lb]iS/L|`%&f={WYtq6NcU6;}kE[->IxHiL62~g6T=@]T[L');
define('LOGGED_IN_KEY',    'cWpmm>emtyPSSG!pUG5]oq]v!(d(~|ZO9!p:ltukg(%yM5 o#`XkzOX?n4 :lu<1');
define('NONCE_KEY',        '3p~e8M^Kt@*S$[M*2{v 8is1aPX&w`~e-ieP-=Q#Av_9@zc(<t6>eIn*Z8)D^xV)');
define('AUTH_SALT',        'Z;`.Tv=uwK}so~+/Mh5r$N5hNNnF<1${IiOY*y9`CVR)22mMYSr[&.bG4M@kp_)$');
define('SECURE_AUTH_SALT', '+iS|k5Zz3gLR;Wl*VB`!_wO$Xv>VN{-Wg8j`G+$/05=/b##Y@4Z;n78-Yf1G1=jl');
define('LOGGED_IN_SALT',   'gs:dUhoU)rZJ/wW@]S><=cPJ:)[SNK@Ze]k`QQ+_C9nDwU{pH,8T~9m<*a[#rEp)');
define('NONCE_SALT',       'P_s.g5:kh.`I13%iL8tu9.PK$/R<Ez_K9V25dJ%9WG /j?]_i*]#HVS(Ihu[w:?*');

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
