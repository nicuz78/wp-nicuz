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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'c15841_abogado' );

/** MySQL database username */
define( 'DB_USER', 'c15841_abogado' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hitmonchan78##' );

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
define( 'AUTH_KEY',         'AO{]h};+Y#M^:0S5;Su,)SxwL&lcTl#y4I]w,0>F-`Ikb!Zk!Yx(^40F ?QbL)6b' );
define( 'SECURE_AUTH_KEY',  'Vj2w5$.G<5A687O2V)F4BO4|OJ$*I>%R{,ekA>MSV,k40AlBQxzJ`h&?<ozT;5x*' );
define( 'LOGGED_IN_KEY',    ':.x9j`j]>r4,f[@K<M.Ns9!5G(,UkL /V45},$>,cXZ5E2aT_<h~i3RiL);0HFKu' );
define( 'NONCE_KEY',        'SZ]//lY#T8/CDY#9y3^x-d?z-_$^L2;!M7 9Wpk&#KZKsA[8Kh;4|B:BQe RM~@c' );
define( 'AUTH_SALT',        ']c u+b,GT%PV##5hllG3o(T#SDPh)k=5-sc%8b B+D0}vJXzDI{%~]xe/=.aB|xg' );
define( 'SECURE_AUTH_SALT', 'aMF1UL{{|{Ydb2z|vAH?)QD&ej4/!DT~TsXOUW$h[gQSY;20xTL!jI+7jwt@]Y,R' );
define( 'LOGGED_IN_SALT',   '`#<jA:{cOfMU@A=J<h+X%wHkaW.J{TFhHy$UMQ6}^!$yXFBDo?H:n8Ir?e9.;;N%' );
define( 'NONCE_SALT',       'Qezm_MI7SZ;|v`&uNW,TIex9WEs P{]u6(Qc% a*nntr+3@aNnf=k+VY~F<RxPPb' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
