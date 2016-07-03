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
define('DB_NAME', 'elahandreah');

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
define('AUTH_KEY',         '$[QExcYH7j~h]jh_:/2A()n<I>T;B3+w.zMw+Mzgwb{&}l#1N)==`vhj@h6o[idH');
define('SECURE_AUTH_KEY',  '|YiSp@s#Yp`lhCI+Ctj:`wHex.wMFhVP+S~[#h|2v|DV`i.2eF#6*`8y8pP5cTnK');
define('LOGGED_IN_KEY',    '2-)=IayPTKlF3t&QX)}<aPxU~w/GHQo9pTDh6lZ>AX^0sOZ3;CZAG?FzFTB}i.iR');
define('NONCE_KEY',        'zP&&-K%tGHP~A|;[@,dHpBviYT{YZHGM,>Ima*5Q9Y:p7f4<R!c^TZ]|H@@j3=qg');
define('AUTH_SALT',        '}v[|8i9BZ}CD]r#8G8=F|ZlS@`RB`?bDrtgKLCa;(9YXpV1,shGwA#4(wm!/:SE ');
define('SECURE_AUTH_SALT', 'X<7V{j}tI0,:dcZ~bD-vD()R+%xNf/.nZ[U|kJEt~X,!2<6Sg},-58@uTpk56U=w');
define('LOGGED_IN_SALT',   'y*iHDv~u>+)OIjyy*gu9n=(m,4s6gBN_}|H*cj:?.7GS`6zK,YI%Q6A|l&.yPg?o');
define('NONCE_SALT',       '` EG+(-MnG0<7Vv-nMJ<Fn6Zn~Z5*xo8xC{FTrQ^JYZ(s%g$fD{g|5EE}l;OvQHR');

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
