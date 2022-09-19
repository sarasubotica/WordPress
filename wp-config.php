<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sdobric_portfolio' );

/** Database username */
define( 'DB_USER', 'sdobric_portfolio' );

/** Database password */
define( 'DB_PASSWORD', '],m[_s0Z&+W}' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rev/.T&PB^Bdv[x0I[cTpF ow]b>65IZ~SR+s:kLL4 J~h}$tS@J<0Z]0~s@|g;z' );
define( 'SECURE_AUTH_KEY',  'zd`|Ny[pqNM5Kowx3flVyyKffF![+@IIyzL_W]OdoX_,vzvk]qg5:&*/(#&R:$LL' );
define( 'LOGGED_IN_KEY',    '6*<*tsRR0v{*gDo1~erEQ3GMD*ZJj2 MsiK=U~k/duD3px.xPTM+w@egx]x1Kt@S' );
define( 'NONCE_KEY',        '5*nX8foPmV#=:GVX.FeB_6ubW6cr5J{;K0s,1T<,Lb$T]B]Fb{`w8G`p<-$?4zw-' );
define( 'AUTH_SALT',        '1D31,J6s_Ih(P[*ch):m!/ffD^-v)YDi9b{JnsG9,gta~[ExsAyRNCQ% dVs &ui' );
define( 'SECURE_AUTH_SALT', 'hSb`IE}6;yy:%yBxD8[j>-I[4$rMhT$1iM,V/!OOHU{*sefw~P;zapN6o6}Dp<U*' );
define( 'LOGGED_IN_SALT',   '9,-J7G zq-4/@JKZ3fG[?N6NQ3nJfG0:mjECUaL*(_~Q9Jjpc_F9U2YSz0o2(Sh&' );
define( 'NONCE_SALT',       '5=x@I}SX?2H3}+1;;7%f&*m%7d.0KJCM6x||,`Y|I.u5z)`5;kMI4MP%ci7*8qFy' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
