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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mw>K8>G+zb-(f3e.G:$2I=Wr`rJ<IM!c,=1n~*0=Zu:ywI{{+1!Zu*5Iz-]7[[Lb' );
define( 'SECURE_AUTH_KEY',  '$bdjn8aX)R!}qCz~Z?:$xsY&IAnF]$ } }$~wtlAZ<OTIFQZI5b*Y:=3kTbxd,u(' );
define( 'LOGGED_IN_KEY',    'dU[Tz}[,XY/.gs+0O)xz8O62%jC<1Eao%=SW<v@dp<)fFzrGtKYZ<MLvLhA~>jwy' );
define( 'NONCE_KEY',        'U7NHZ)2$9fnNOp[1gMHU+`:zTQ*jexLuK&SCaY:%+XhRC^ju:5DMQynI5z?F*MPM' );
define( 'AUTH_SALT',        '_l<3fkq&5|yV(^X]tr9I<`HJ|HJZ9RHkH|eKYXMpy4^8Y]7)pM@G5{FET/34(y:p' );
define( 'SECURE_AUTH_SALT', 'j(v2TUjnn~^as><j0rA&4#!^*{vgOv_*R0sa9MDJRDy:pe4=Y5__UdBTUXzU.B~#' );
define( 'LOGGED_IN_SALT',   'jt~BeYPgEI+a`go_w#EGUy+ a;0`, zhN2%Kf!(qF):7R0&^mx]uXgPT:yXULU2t' );
define( 'NONCE_SALT',       '$n+d_=Hq*72~$+ZDi1&9==MgF(RN?8T~fnsS6$dYCXy^3&,&5Rb?jT99jA!P(.3A' );

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
