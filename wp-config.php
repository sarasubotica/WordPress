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
define( 'DB_NAME', 'sdobric_projekat' );

/** Database username */
define( 'DB_USER', 'sdobric_projekat' );

/** Database password */
define( 'DB_PASSWORD', '^K(yaVmawF,1' );

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
define( 'AUTH_KEY',         'iK${1/vYCYgut8z#LO$TYo(3hpNJPQed+@()(5AYqKH 23xk!k^.?0sRp`ziF}k(' );
define( 'SECURE_AUTH_KEY',  '{2O#WA+1pj/sS:_nVMOfkuN!R(182?ps=4ziXt]:%:cFW=fWar{bZ]Ao]AAu)]m)' );
define( 'LOGGED_IN_KEY',    'k)jx%kbCmu<H0}def!n5~pB+VQeN7zvEC$!Rs @6 <Ml-{7}&JeTh+fsBr!1.z8s' );
define( 'NONCE_KEY',        ':|x`zpXC=3Q32gorbsY%},82C-~M+7rX*GP]b-vyRli_,|Z)tNaJ$U!A6+PX7KUu' );
define( 'AUTH_SALT',        'uK09f?el=iM1UrGU0hD?P~=7hS^,qPicub4w+H{{e[628J`rcu.JRC +D^M#A,Wp' );
define( 'SECURE_AUTH_SALT', '8rGY&(tfuo/~e~z`8 ;  JozmXN/AxOsZ|V(pgQ<<h__p1[(-([lrh<1bb2=>OUY' );
define( 'LOGGED_IN_SALT',   ';.Wh =va5(/Wn7{$X`a>xo{2}_=>/=:07t_24>y*X: C**l-E&Uv6r?^EXn-@5qi' );
define( 'NONCE_SALT',       'gENeRU9fY*xtCVFr[xV%mQw<1ZcxhFMcR-XB?l1+.N#`3jhUPmv5sqU0Y!ercpK2' );

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
