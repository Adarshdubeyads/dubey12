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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk19/3814733/www/insbsbiqhvwysg.c1.biz/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '3814733_wpressc11ede31' );

/** MySQL database username */
define( 'DB_USER', '3814733_wpressc11ede31' );

/** MySQL database password */
define( 'DB_PASSWORD', '7lZo9hLLtt944GlaZAYWSxYedDJ7RR8V' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb27.runhosting.com' );

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
define( 'AUTH_KEY',         '!!<ZF_P%DRSHJ<A5x1NFblK}s]M*_O!|RwgS(7>Tf4/!S^q^:v>Bv@{jv9zyPg`4' );
define( 'SECURE_AUTH_KEY',  '.Kj<tGB,/$H+=VhaN,K&C=Xv~>19PYuebA^~d3Zqo$S?;FQd(&RSfCGlS17@Bneu' );
define( 'LOGGED_IN_KEY',    'u<?wEq<``i-]a&dHPIG|;S4CW[mWjGl(fdoL8clIBk h~lE`_z!G*Z$X)E[0Q4Nd' );
define( 'NONCE_KEY',        ']brb;wG=LkNIWSpnT~)J G5xrQgDNB-C8*<>#u6:%(/VA1uO}yN=2)heY_Z? vPs' );
define( 'AUTH_SALT',        'P=z?N$H-Mzu)eD;vgHg&Q^N4bmSM`m-dFbM7iQLq#z&<k;o+$@1&uUSG,wAh;A.@' );
define( 'SECURE_AUTH_SALT', '.iu|hfb~dvYf+K|HVln,|t|EW`N0gw@XdYH*iw?fZG1O`Z*ijDz}jy;{,M[vc6kF' );
define( 'LOGGED_IN_SALT',   'ca=gy2xezL&2R[fHm*aJQ%zd2bCSyC~{=V~gY.3C!P uG~e8Tj>7aO>^J<,Zg9M7' );
define( 'NONCE_SALT',       '[>Js-y.94wE(3bfQ-sM(eJ9auK<!)N&%G&FCyjiu<.L5U>I~]t^iSE&AS6,WAzeC' );

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
