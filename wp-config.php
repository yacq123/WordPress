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
define( 'DB_NAME', 'misitioweb' );

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
define( 'AUTH_KEY',         '@}gXmQzeZeSJ3A?l(kUbd?QNiG@ 9scU~lVDB@y>|@,e0 (Cc> {Sp]+X@A}m[.p' );
define( 'SECURE_AUTH_KEY',  '|d[/&2XP&ojvX6IxV>u[U/h7h--+Sc`zlFivFL.V$SFL4NPBqLq>-~K&:Uu1DO3*' );
define( 'LOGGED_IN_KEY',    'CE5l.K&U/hi04]@$ph:If|KvXoaV?0b}mUDTySiZa)0L+92-Gc]Xelu6XLk|%vV`' );
define( 'NONCE_KEY',        'Iu~A+w%*%%/(/|;&vav!_/D,VuZ`CdNz_QZRp;c1`g%~y.0u9f*EK.gGMO^Npn!q' );
define( 'AUTH_SALT',        '$h(>S)|{?Ze#*6:Jl]:}>`{z7{msz/gRx^sP_z9R,G_TK []+[b2Gn&10I&Omyqy' );
define( 'SECURE_AUTH_SALT', 'IL>O0~hgv6%!=!0(gO+%nhdaMHqF`TQq@Xj.0%?x`oGEn#EFn*97f$Tv(-6M(0]_' );
define( 'LOGGED_IN_SALT',   ']v|CajgjXDi Fr+T2.=SyVWiUQLtx)p(/p8[`7&J+r$;Q}+s:NsyYBH$&HwJ8xw]' );
define( 'NONCE_SALT',       '6cg_|##%vz1T3&T}f5AC@)vH0 J6^R^r6Iz_YP i.M|Fab^O6=i:+)!lr*|zmP1C' );

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
