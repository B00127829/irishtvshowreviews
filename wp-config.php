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
define( 'DB_NAME', 'wp_data_cdm_6' );

/** MySQL database username */
define( 'DB_USER', 'aoibhec123' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aoibhec' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ']231H5ca^` B|FY-p;xi)Hxl+H0q7!ku$A6~DiP-:]qb-aHwXx)d.pLa;e.4teVS' );
define( 'SECURE_AUTH_KEY',  'PCc.mOpTA@&g?!>t+`jwn{Pr=YI`2wXO>t4C*9(M}qcy8@mGf=l%r:RUn]<O])c@' );
define( 'LOGGED_IN_KEY',    ']Q^3Z$?mxG&7v}ft=-7TpF{A}9`(k<zz-;)*bfC~Ue-FwzJD?Yyb.,>m1gz(kuV3' );
define( 'NONCE_KEY',        'g{!>7pMo{TN23cgOm|e pDp6(]u>vp&J_vjm:%c<cAx7I~UAZ%Tx$F4p=CPzq0K ' );
define( 'AUTH_SALT',        'aM)gYGhJ0DycO>/-2eV#vydCIOX$2#XSQNtLO(7n4bhDTN|V]HMz7!Z-=`Crxqkn' );
define( 'SECURE_AUTH_SALT', 'frPE=G@G{SS>I>M0.a=c@{,(qmWaVPud<pnDw=Xv9[)v4z., @_6n&HB#k<qoZ8z' );
define( 'LOGGED_IN_SALT',   '6.8Y*,D3u(Y^#*=n8)K40`w47$+$DI}tNP*?qKF@$r79XXoSWXXV rh+%N-T2v9x' );
define( 'NONCE_SALT',       '_;G1)RwkR5WPb)9$NIdC5-B,7PYYE0l]8%(tM_b}p|HlY1n~Qb[>ybI+nYqS*9?A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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
