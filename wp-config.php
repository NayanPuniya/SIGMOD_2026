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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3<Hle.^%T+x:r*6hu.>a4mC>g1YIJ|)iI9eomjilQZmk7NYg>cR`W_ZJa3O_E!V#' );
define( 'SECURE_AUTH_KEY',   'e$UXkg3+=AV.y1ug) 2[A;FBC<KzLzTx/8[aDZ_WoJj_P_,3Ap{-(HF1l3+18%hL' );
define( 'LOGGED_IN_KEY',     '&vT}$]3eKm%2^jzPst2i8/!~BeU~Qh6P?Kfn3X]`#I[FCd[&cj)Q;f8H9>l(:^ b' );
define( 'NONCE_KEY',         'Uiu~z^2Ho$@ip9hQ)fXL6wHx+1qgvU2VpnF#<6%T_O`-n2D<0,ersRKk_<1.KuqH' );
define( 'AUTH_SALT',         'i~SsMka$p0D)cd.nS:vaXMqr)@{ZxjSv>xiIED!BGp]ff$`^_Y`J7DWT=(9nS#$k' );
define( 'SECURE_AUTH_SALT',  '4o&-?b$s*Rb$K9a#69c4.5&1qt3RBdRh4{Ub {gnm~b* C pwpY-*BDA1+J(kR.9' );
define( 'LOGGED_IN_SALT',    'Z=ZpZML(K.)qZZn*LSP%@JRb]nb[MB}n57|cex5,Oj7q)BPDK%ZDV+EcH0s{77Az' );
define( 'NONCE_SALT',        'r~o3c7.]SGNIcek|}0-jdHP#hC8Xp,1&ftGEb3:g=:%fMFp#I(Sw*aHZ{g.J}<d;' );
define( 'WP_CACHE_KEY_SALT', '//sI`n3:98F#8_LIc5;XyWv<pzJ(3aNQjWInYtyF4yqg0)<j+u>WaWb9#wW};N3.' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
