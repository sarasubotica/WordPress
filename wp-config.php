<?php
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
define( 'DB_NAME', 'sdobric_roman' );

/** Database username */
define( 'DB_USER', 'sdobric_roman' );

/** Database password */
define( 'DB_PASSWORD', 'wYN6GmS8{H@M' );

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
define( 'AUTH_KEY',         'kL1z_)gKujtp(be8.ffZ6QFU2O[,&Ej8i#yr(O|l]q5#EL{/wsAlbN7zqf>j9,L&' );
define( 'SECURE_AUTH_KEY',  '>4(e!UZ)<f*DZ<sCI}Hx,GSngmCU1Q)Hr<pdQC:FlPXTBJlP-ez4o7mc`Vm:h4A{' );
define( 'LOGGED_IN_KEY',    '^}xa,&5i1 f!O@_qssR_rb@@nv5A.0OA.{1bg1#MwfED(.5b|BBX7[v2(jY|YCXO' );
define( 'NONCE_KEY',        'n<mQMkm:jYiLyV,$K=1l(essHJ@9$<6+T|&rgXKMx)s)aKs60#4F,1Shb?bEjj|y' );
define( 'AUTH_SALT',        '@)5 %uh1*6 zK11t!l7Y;2hmm2#z -^L!bv.)GB$o9{vel$&(lpXsW%D:q3PmLs3' );
define( 'SECURE_AUTH_SALT', '(>|AF[1&_k]6wSiVi99Yi2kRb+L3ynf]=Z3A+)-9nlHrXI<No(I g=I6vLU:~{KI' );
define( 'LOGGED_IN_SALT',   '=oFg,+@HtnIJwYMsA:?RLJ7(G* 1(3zE}{[l>t[E2Cy *}.5$P*>`2b[$j<U!cG-' );
define( 'NONCE_SALT',       '~ZrE+kj9G}LM%!@ 2aUzu~UWG]LEUuCB#AM_P`O5ku<rO^X18qI<aqXLR&Jx:}l#' );

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
