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
define('DB_NAME', 'novaWp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KBZ%qP3?Y@^Vl#5n*Iq(V1>oM[&:n#Bc:%lfTred2Uo(VL9I<vM5Y&^Ew~$V4a#(');
define('SECURE_AUTH_KEY',  'zK.B#A>)?Hs~CtcaXErmB,5s!X3VJzVC(czs(T|X|R~c9P)zD{#i3Nxad5Amh_l^');
define('LOGGED_IN_KEY',    '/Hy`(a 7eg*2ZE{BpNkO k$?B7[h35F%/pC)Y~p.?m]5k}o)c9#UW7WPyQ, `W1t');
define('NONCE_KEY',        '|z_G8!P_x;. iQ7I}4x`^teNPH_2,D/I(<:/KAlC=Ignv!^nWQ H&sRoy(!!^^<{');
define('AUTH_SALT',        'tNAIK!J_BO,9oLhF.@R11Q--;2={W`~fM;HJRlRxYPBvX7*8OgSsbS$G^v[sxccr');
define('SECURE_AUTH_SALT', 'eW1qF`n?wwbp?HQVb+(zs^I#*KoUdo(k5>n^vBMtO-devZh5(]bIZu3B%e@nY]5q');
define('LOGGED_IN_SALT',   'Y(wCvroO3h~7MSyA k#!E_y9Y+(ph{p6S]I>$AQx5J]zH?M)X 7[x3*;y:+,Y^$D');
define('NONCE_SALT',       'w2| 5qH>oA}/Sdv(3OZ5,P++/!ay[*LtGp<@Ag^/%|mK$g] 4GT&y*K1/rD|H5d2');

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
