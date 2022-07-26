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
define( 'DB_NAME', 'aliki' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         've^*u{k:7x,l1,e4V7$0gKc&6+v!dNf~wS@=7]giH%$@9aM/]MD# pas0v1/:=o4' );
define( 'SECURE_AUTH_KEY',  '-&qs:o{8:en9E/[7`CR%hA/C.han4*krdEuNd!~]$*qEyF(cM)&lfr:EX1//b8P6' );
define( 'LOGGED_IN_KEY',    'y{G`Pq?m}w~5Ha#9eA!w];.dcd_u}-sSinF,^aAKU,4^@>Z7}RRCh.aiiMrwi:__' );
define( 'NONCE_KEY',        '*>=r&LMyxg.+;tFn*fJ{u,>&t_iA{[K-0;JCTP4( Rzo//]*01$83l+:c1>7o`+N' );
define( 'AUTH_SALT',        '1|5B-KA6d]1P7QHXAN(2-4)fT<n-9(e.RK NE_SSmdG@0K=Y/O:+bgs2a9rm7,q8' );
define( 'SECURE_AUTH_SALT', 'F]NxZzJ*i(D:v~h&j%}9d$97 98V9EDa]cJG>xkL8>)-!h|0=+d%c/53&>C-8Yn)' );
define( 'LOGGED_IN_SALT',   'ULK~u`LH+Y~qX]yW~+A!)`PVcDRrkuoumDtjt<!gy(B0J)K&*2%(LMwXPaSA=eCQ' );
define( 'NONCE_SALT',       'B2eB<=Ps[l#D1A&Xzr$fqN-;||XxAsn%he>&b^JHE!I1FI1L3D;&wO>x lz<LlQ|' );

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
