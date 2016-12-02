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
define('DB_NAME', 'dbwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'e-komnob');

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
define('AUTH_KEY',         'n9%[llEUj.a_@nYlFM.q%KRMl[31:J_/v]zS2eEOw%o8={~^dnNv|*(EeSzMlSG*');
define('SECURE_AUTH_KEY',  'r;1ud/)!i@8@V6Eca^_}U|pE5_k|2)JfvV)(Ps?=,A2/:ATZPQN)h?t+&`ZuqCv!');
define('LOGGED_IN_KEY',    '9f$VLK{!AQ0@AZ&S?[fFOPr*Ohf6!-*l2e>YQrdH>7PB_i;wj{3t#`Qg6`wVFr/Q');
define('NONCE_KEY',        'kwM9ozN@P0`-wyo~&G~.Ieu^b_=:*HPM]V0.=@qP[f<K|V{+Fh~l9U<pRt>lTLVt');
define('AUTH_SALT',        'tkVgO$pNQ|fX@(T+7TAUfshFKL9f)hT`P6u6EjX;m&^ q?.>$MIn>@qevR=k$,c:');
define('SECURE_AUTH_SALT', '$MdG<A%vhqQc>&r~}N1|H_6z6$(ASC&]oE9Ip(e@rcuClo9JU~Ym{-{?G5EWA[Yn');
define('LOGGED_IN_SALT',   '8z{sKjLPJlN.=ygI6&]m[z*%6w9a9UeP2>[v!{}Zjw[s}pVrx>`v}qW>v%_L^p)w');
define('NONCE_SALT',       ' C)=~<isVGvQW*fdyLkXE];l&[T.L,9xTHjVdrd*q8gBd(hzV%/3d$W2/k>Pj}_L');

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
