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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_HOME','http://localhost:7002'); 
define('WP_SITEURL','http://localhost:7002');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BE#u:[W 4k+^,{G%@DI4!j3T~gx^W-P(($2H$th%4s.{jwMBkT+m~}Vz[jY/sh:1' );
define( 'SECURE_AUTH_KEY',  'eK!!PgB~F}1XW~QHzj:C9IY{GX#=;cY{`:]yOJ(T^|8|p>~&,n/J5#(*B@9![}hC' );
define( 'LOGGED_IN_KEY',    'vpwExAaaXJcjM-7g3U|%,|>=E2/Y.K;WDq3VLC%tDQCguBt>mf6MnZL{_Gqf=0oY' );
define( 'NONCE_KEY',        'ts6tYdZxS=jY`5ZT9vz]]IpcnQ;SN:#_~hu>{[Ye)}~qy,<)1N9-Irj88|yX]?`+' );
define( 'AUTH_SALT',        'gz[}+ekUqBEjJxqZy)lab|hn>S-2KZNw{~@;mHQh>XtEoluT#j{x5/`9Smjj qf(' );
define( 'SECURE_AUTH_SALT', 'wfqg jE@SL8?r*Gi^ EySvn~b<j#pNCc{(V&!XA3bup!Lb[?L-l[TibeA*m(tE6X' );
define( 'LOGGED_IN_SALT',   '>k%}Wc5mK3hdb;[f1=iALuN4MU0/hRrRU>6+t_r(C5I#f)at[UVCuTcwr~:FRJGX' );
define( 'NONCE_SALT',       'oU(PgWO-VL+?XBiMil#{# /yg0ntxANk6^/t 1?a.?LIG]-o@[Yev5%fj 8pH$bs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
