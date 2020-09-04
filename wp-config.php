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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '4Zu1Y22X>!,D<TpGA35mDFeU1z4*%4yLJ*C(,(f]VzA%<Qis,Rz:FjWJ,]&Hfulm' );
define( 'SECURE_AUTH_KEY',  'GKZ@Nb=<cj*?xX|@_yabyNK/TvJUMbNz+]X:p!d`Hhq<MEmNg{,,a|F?H>HP2mP#' );
define( 'LOGGED_IN_KEY',    'yPBgfF+2z[/!{*L-[33Hz&[[;%D/.2(Ht1E4<u[6YV`0zqvx4W|Uz!SmXtVVuo7!' );
define( 'NONCE_KEY',        '+d6T8`0FA8KkA_]Z~K*:?b}2*>7PSkhb&Ln,Tf~FMu_^Sw-laEJ]pjR*&=rM_mI}' );
define( 'AUTH_SALT',        '<h[0P2&,xRX6FO5rcD9bz_X,C5%-isj_hpGRpq6anlU4L^tuLt3X}zf&iB)|*+4a' );
define( 'SECURE_AUTH_SALT', '@qhu8C0B)vK>=)p%#DyT!M0<fw^$Jo_!,nTFF:.S<98*>)fCw%P~H43w~GLsJ35Y' );
define( 'LOGGED_IN_SALT',   'rXx9#kZ^Qe|xegAf:_AsF<i,2YHgNZ$N^f2rfq:s:c#OD5{+hk~~F)HV.r>uxkOb' );
define( 'NONCE_SALT',       'fd];[}eAV7Z}#cX8)QIum`W]X(Z~t0<3U$w!E^uHObsYQX+EGCDm1T>xv<T7A|=f' );

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
