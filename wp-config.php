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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_practice' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dW9T$W5y7]}qY/)$:WZK[`)eg35#Q]Ogla2c|k0r#x@a}}@EuSv~s>C=8A0eYjU}' );
define( 'SECURE_AUTH_KEY',  'gl@..>RP!,$ e^>(1=6GlBv.=?:Y$ NL#N+bYc?gm5&bEL nhJls@>!gA?.rj,ff' );
define( 'LOGGED_IN_KEY',    '$;%fhGBQJduopLD>O6Dt}i7A[fXpD$?0`]-_zh4eJI(KwM9^NU,m+G^E,^P:YrK~' );
define( 'NONCE_KEY',        'nDvIJ#( jjeGc$}+~pz1_h-{voY2)rFVhG%]^ %9V9h:<?,L?,@Zc^j,6v6$#9C%' );
define( 'AUTH_SALT',        'I+~IsS1;Inr)2doa)Gs[lw>j TnNaIsj!K+Nxqvb`(L62K[$CpX:;8}SAco>ESk|' );
define( 'SECURE_AUTH_SALT', '}(m6uc=266gK<Hj(*uV3^/:ApS##vZXE1MQcm/bdLS&@T_grk 7kxqA4tG*[gR_k' );
define( 'LOGGED_IN_SALT',   'uQ|oC%#,G]oibCc2A|-x%z$TBFped`oNiQ(vr~^Gj}]4.1W3*4pa]XZ :]@xa#EE' );
define( 'NONCE_SALT',       'JA@z`UJ$}^gBkET5T%&INQ;Uz}o5 YstMM 2^n<svMEcF<mHps3{npR+Xwa;zjm+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
