<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'opusdesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-6&LO~0(@tFY97S5fgJHi[]poWSIm/O!MG_NYJMKuJ+n:k0Mu6d7w1(y0r*PYJ}G');
define('SECURE_AUTH_KEY',  'R`o0ntq7m041W*&y*}(&/`|@;T%u88Hf`IJ(Q6OP8EQIq|;5dR?IoHYT`8&uWb-(');
define('LOGGED_IN_KEY',    '2LD]!URg(*-9k,,-x-2#B%6;Z(m+XNg)<jsh+xS+X|%pv6Tgc#W3Z<cqa/]J3<@,');
define('NONCE_KEY',        'iyLN}|5Y-~-z?~K.?Nxmp3EqD&9gM;+IM3(kx>z~k:t@m8D#dkC,|r;I8M!t-4rI');
define('AUTH_SALT',        '~N*2@Cp/g[qps/k)):.Y&k-723^Bo%Q>dEuN=+exG.M@-6ykDW^ZBs>/ON+[^EjV');
define('SECURE_AUTH_SALT', '0(`KI~.+--?:+j*v%-Jf`Gy<u*V!Rq/W!g ]N=+}3=Tpuz7@SWi;A/y^.UY_/IZW');
define('LOGGED_IN_SALT',   '|q<RGw%+Yy>Yiyu4gSp.}{!FjBj2+ae8iOU_Ql!TD^4N!}bbg/<i&bo0)IY@_TZn');
define('NONCE_SALT',       'lrCZ|Leaqu;+!*CuXrSK2*>[Pb6<L+I_^pUchOJ~#Rdbkn!XF3+vnJcubq2bT$F%');

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
