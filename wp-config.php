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
define( 'DB_NAME', 'alConsulting' );

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
define( 'AUTH_KEY',         'HO>a^z?.b[elig,XuhC]`X(W9F1$=efD7S%g(&K0a,X<kEi66A%-c*z qM#n.abU' );
define( 'SECURE_AUTH_KEY',  'leyD1-h=z^+_0gg..37x&4!xg2!~v!-e-)au:@RRDqD(Kr_~P,SAL_3yt71y*{JW' );
define( 'LOGGED_IN_KEY',    '_psq,v)!?Vv>7NJcy<!hs,5iA)AF5&G4hC2fXio]1v5>_v] By_PFTt<3~.pvxEQ' );
define( 'NONCE_KEY',        '7cRi;o?/XnO9:6v{ZzcB7sF5>nb!@mhhCJNX)S}H[rR<0/6 k^Z8HAK4twE4qU?$' );
define( 'AUTH_SALT',        'Nkh5tB~3kv&z`m+9eRdXzkVM]PPBMw`~DiQ{c-twMwjSod+XK*2t*eZ*9Tzl]xXH' );
define( 'SECURE_AUTH_SALT', 'm;(MvR`$r+]j7V/apJx*2&$<=xS% B@Y{xtFQ$(Wvsr(/An[kIr89V9bE`5p@t)}' );
define( 'LOGGED_IN_SALT',   'jk^u@y>JZXbA/m*jgMsQ$c?]oLFXnxO%&MT=&L5{h9Y{)M6i6f`E)i3PUztD/df!' );
define( 'NONCE_SALT',       'O977lU^xMx14xx<EPs62hMT4mdEQ5PzIYR}o+$O>68V[_pMBBWQf)M5qbVmf1Vlp' );

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
