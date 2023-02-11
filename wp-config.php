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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'w/Q>]OZP@rpBS9s_  w.fy!;!?NlEDnTYUK@)C#.;}#~-)gSf7oHI85]D4dC;14M' );
define( 'SECURE_AUTH_KEY',  'ZPb&E>!1i?>Tpe<}<zU-Sg(78nzY{/C4?35j_ o}MH{>0,S*nqx=42@ +hQRWg2f' );
define( 'LOGGED_IN_KEY',    'x6`)1;QW+42w;+5v^56(ar.{@D#Y;WDB#v&-+k|jB[oXUC8Uo >vdmEj<GYcF*}b' );
define( 'NONCE_KEY',        ',^b#d$vDd>WZloXzbGL=0 [A?)^BOc $oxNht>SjM62LyroTx!&N@c**xZ7F6h9[' );
define( 'AUTH_SALT',        'nv#O+5SFl;qC>bM[v4?][GfUlv4KrBZ~WSZ*+$pr=G>yyL_H+P!#V.uLH1B+DO+l' );
define( 'SECURE_AUTH_SALT', ';K@*z<]vY^Bj_qXEwVI`S/[7(OKdCD|Ob0[1b&2]2TDM?!g!CH}oWHC>rc1R|5MN' );
define( 'LOGGED_IN_SALT',   'XB_x/ug!7>2hL,R{_FP2@8=yi&96ker}<hH$Fb2;U})x%H2IvM[t:r~+rc`WX~Q@' );
define( 'NONCE_SALT',       '3%HfErbr[zTp()sre$L0P=vr2&Mf}2HE5BvjO;fk|V>b0{P>U(5Kdbw#]&FJ<xRi' );

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
