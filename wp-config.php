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
define( 'DB_NAME', 'sdobric_trpkovic' );

/** Database username */
define( 'DB_USER', 'sdobric_pekaraTrpkovic' );

/** Database password */
define( 'DB_PASSWORD', 'T1JIz;3[{a],' );

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
define( 'AUTH_KEY',         'PdDJW?4|eo>9+z^a|Ds;`S#kDM/c*MMKRQ5y!0TERasTc:Y$Cmn~kbu*s$=3:9Yo' );
define( 'SECURE_AUTH_KEY',  'UIB[J=Dq6{lUtPJCDP*{Dq5ys4qD~1m;_Z*zxt*0V?5=A>#x1(jk#[Hsgda?{{L3' );
define( 'LOGGED_IN_KEY',    'z{@ffh5]5GCeGnw.j%tMN>S~jnF(8)tT}>_QuV10q-fDo>v%/ht_r*]MGc9GJ)sB' );
define( 'NONCE_KEY',        'R&QW57)9>[:!+T{A;tQIpqDdIyam&TDshC90@iS,J?1iGH/6lB?HqL1E&>~$PFb$' );
define( 'AUTH_SALT',        '!X4X#r+)=Q_<#qeFa$i~E3(~g6g6J<~bw+`Z q?EuF/U-1Z6-:@utQ2M{die,w/?' );
define( 'SECURE_AUTH_SALT', 'ohK`Xg%:;3fQ72skS,QhC^,ph^*2?Otbbs_~d2.TA87n+3s>U#h}^dW3/)I#m~mD' );
define( 'LOGGED_IN_SALT',   '%X%sD1qFQ$sWpN2#4#;@IyvlK/XOHb#[&Z5hwbyt,DD~,5H>1u2vI[.(xc>8yvcc' );
define( 'NONCE_SALT',       'pA?L3cXF|MS&*c&-g,Aqi%`R^?wbHw>Bc=iUDr[/? [l3H_9q}e:;xF=aW$ i<n6' );

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
