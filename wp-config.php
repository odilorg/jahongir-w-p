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
define( 'DB_NAME', 'jahongir-w-p' );

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
define( 'AUTH_KEY',         'GGw[rynYtIgXe1%}o)cP&]Y1q+3:URHbXGI,*^a+$- 7kU,DhujZ!H#;8H!p}t&O' );
define( 'SECURE_AUTH_KEY',  'IvPA.tWoBzI$7U,rx,`>0EN4ys1frW@c<0cf:@%S@uiQ0*r{]Z5S`]LB>`+b@b=o' );
define( 'LOGGED_IN_KEY',    'L#1GK&uq.? I77=]ud@*m&QVIAh&M4O$gr[{hi1IvXX9eMf2XEnMKu95#BM2!H2E' );
define( 'NONCE_KEY',        '/tXWDxl<|aWl1Ui#}v@;NBb/v^v!-UFH8Cc=H=sHj=2tL[J`w0R+]-c(Wy^@=9Mb' );
define( 'AUTH_SALT',        'WW>|w:%Onh=NfL&Ky  JtbJiI]7FoI=A4x3eZLwDBOzhgD32J=m7,)d-{R }i2~4' );
define( 'SECURE_AUTH_SALT', '^x[=v+^.1$9X}j}c.BH1lj5zasdTs|Q;;I$CtdR9HoP}c: Z6Z^dIj71FxnP:<bI' );
define( 'LOGGED_IN_SALT',   '5iXf*6sMHBqA!TwboCg*%0[7vFpw.+axO1%>%qakbq!o+lnBegq;zf7jUN)`M6r.' );
define( 'NONCE_SALT',       '::%N;/WZhG)/7pSm?l/&NC5@n.r[kNM-:Vw|P+}@_#|P=`h:cZd^w=YIFgNuv/GY' );

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
