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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'XMZxmz00');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'A9x?Om!L0kraKFSD-9+ISVyqi:hpE|Kx5{}Mce_j+OV#Q%A_aQPYQ+i~Yb1}:p6 ');
define('SECURE_AUTH_KEY',  'G2xu1P.]vfv`O[dF|(A<5=gRuqxutlH#P~,palG8c|y2%w^G[L&Izg.]SUt9Jhei');
define('LOGGED_IN_KEY',    ':~^A&h.t@|97S+>O:Y5M$Dz|(:X+03KT{>T{n_xM<?.kZeB7=-wFQ=c+m*Ln,[JE');
define('NONCE_KEY',        '&|<YJL>OCK~eeid-[e,UpZk1LuXyR%XqVbru:6)JBE%6$C6,yl @3tqLDw32h&|;');
define('AUTH_SALT',        'g^WVB_$LmK1}k,Y@2UCoM)=,#i+I)`D9H1FH3mG:1-rsew?f!.!pB$-_ktnS#O21');
define('SECURE_AUTH_SALT', '6/Tj@J<6YD&zbOv>Pi.l~;/@(gWBLv,a4u)5L4f({au_,<Vm6(:Xx]~3=}v+9k.E');
define('LOGGED_IN_SALT',   '_F8=Q|28$?&l$Wo&7CFf!nvaJ)5/C$aa*!x$giT^yT:{Ib2tfs23=F|=LNZUM=Wm');
define('NONCE_SALT',       '3<l?+(@h/zn`V|+-7l]ns&:-O;kG:`6-oO!raC9zL A-t-~,e]4@ak7rCd9[9NC%');

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
