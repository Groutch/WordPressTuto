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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpcommerce' );

/** MySQL database username */
define( 'DB_USER', 'wpcommerce' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hh445AV7-E8-' );

/** MySQL hostname */
define( 'DB_HOST', 'den1.mysql5.gear.host' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'qKuwR~Li_#We2?AUZY5&s,b.p5{GByqUHyY@>r,u((_YZWcp65(RUNxX(Ki(dQ:}' );
define( 'SECURE_AUTH_KEY',   'La9aD3XIUQ)[SKUa:;.&WVi#XB|8?Bl~fLY:E{2YGps<_O?KY[iXAB|9c3 ~xjr1' );
define( 'LOGGED_IN_KEY',     '.M-6W7Mh8SOe#MV~]KT1nFvT@Z0CdEUc$9~!aSdO0>tJ{N6CS=19tD?c:,oTv@MB' );
define( 'NONCE_KEY',         '-hJ!;djhg6]Hc*$x(vQ29JkHB3x~qK);oVq1,ZE!&D<$+crd3A+D0`^J!hDzAs5V' );
define( 'AUTH_SALT',         '^73r]%d!K{431+A:ZEoZs`_,B PqhB9{/`k}7mIj4KV2=&bdu..%R=O53j0]#&.`' );
define( 'SECURE_AUTH_SALT',  'iiAHycZprI~@Jmi{{X>jC}#)qmF}=N3;;qPpK{+ySSXaxkr{,[:U5x80#>Qk/OS ' );
define( 'LOGGED_IN_SALT',    '(-?Ju){#Z*J8(7=+gU,HU>i`_E-6IlGLbo%8WVRj[CM+,4No2|2V[Lff5M=-Ycu7' );
define( 'NONCE_SALT',        '3~2&Tb%)-H~-S/3L|>g{l`*-&JG4sL+xRltv&%D*MtMV<Xkz?7.h1JYcHZv]yj K' );
define( 'WP_CACHE_KEY_SALT', '+rn=j@E,xa,f57d?8<LtvXeErEhNlGHIW>PdigU3mU ;HffTAj{8v$jq#UV9Xt7.' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
