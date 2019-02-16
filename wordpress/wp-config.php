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
define('DB_NAME', 'wp-admin');

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
define('AUTH_KEY',         'p?h]_w_s-}H&YKv0RD?l.(k#LWQwV%fs wx|:st2jI,}ueF&#E,]3Q>t?|)D7$G?');
define('SECURE_AUTH_KEY',  'rMRwKfMB~y6Rjn{8=fUy#>wnF& !}mE$FA~^ucx|uTVY7?HtP;$x9+LHQL>cV,Bz');
define('LOGGED_IN_KEY',    '4))q6e9{9 &>dY)P4/%Mw`rQ08w2Y06bgV6KI}E<|~+2arn?$t=7fhh>FwUsuCS9');
define('NONCE_KEY',        '5@IDs{Z{7VP,b_f?dhY,4O(Mge@#D:WmvP,qcq2!Kw5sFH`Xa`x5W#6T@00JhQMY');
define('AUTH_SALT',        'SvzVi ~:rZ~u4Y4;!a^jACViU1CAP|I)7jPfu4rEjA|f!95qSkzs}U/bsy}zAJo|');
define('SECURE_AUTH_SALT', 'Pz?;:oJVFT6i+t]Vyd178T5oAn[%wf=#WJ]lt/0H~yh);~Ohx6wPc;xw^`7_2?H;');
define('LOGGED_IN_SALT',   '{Lt/l8%1/6r%C.g)kdyF?UtB%cImZ1$6:O)]&Y&Oo5`NvED^fc-1#xsm9S9`e4Nv');
define('NONCE_SALT',       'T8px2/qC#nt@iMdZu:78Fk@h P^U9croZ`lp^XF_ca&RHDFPmMruw4}?=x^`<LNe');

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
