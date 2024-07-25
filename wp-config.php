<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ktdllab' );

/** Database username */
define( 'DB_USER', 'ktdllab' );

/** Database password */
define( 'DB_PASSWORD', 'Buuchinh@82334' );

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
define( 'AUTH_KEY',         '(N8l$sH=WBx!}ZU0RAbeZm%)}h+-y.UXrG(KaUaz-QV46?A>t-RMa!%=f:6SiW:h' );
define( 'SECURE_AUTH_KEY',  'h|CYt?v3,fGQ.z=ZTY& gS,mE^ht1UDJZ]>;)iNiOi@Oj>^!Z73^*1?W${t#VS4!' );
define( 'LOGGED_IN_KEY',    'UwXo][WN8Yk~lw-Sg@=223o0t9Ug>>Btn9`5eQli-[G7I%Lfg}Ro*ENkK))e92kb' );
define( 'NONCE_KEY',        'uICN7*Fa56,0dX=l}]f?upg!]No2{bvKWfWq=2C2h[?g;{SajFoY/%KO)C6~[I[2' );
define( 'AUTH_SALT',        '+8Z7q9U[AX~3muA]s?)iH.S[[S|O{/mhMV p)M|hi2G(kr8688v(7T_ZdeY_%$~0' );
define( 'SECURE_AUTH_SALT', 'O4iwPic4(UVV,6wDB8Pp].^YLRHeBhV0RJ*lU6IoHqVs5#_Wuy6K&TAE:><9[o%d' );
define( 'LOGGED_IN_SALT',   'ln-065L3>&Q!cs^Y7ijE5~H4x!Hsd &,DkPPSyw{ekhIEv_D+>R?BGN;,bPfTzB.' );
define( 'NONCE_SALT',       'd|Es$$[sL-H|=A ^|ww,S2vuk}vSm(6hdTn[*1H^Y)uA+y[3Jx%b[7[jk>f>>J^#' );

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
