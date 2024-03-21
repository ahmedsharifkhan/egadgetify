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
define( 'DB_NAME', 'egadgetify' );

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
define( 'AUTH_KEY',         'URm7cDfeCK=bO.JS6#Hk_aPe%27TKa)TD-hC)/.J/GIJh&~)L1O2Qad3lx{]>#%~' );
define( 'SECURE_AUTH_KEY',  '1.6n,V2kSSvjzxrZ>&],G60S>>X/pL&uS!aO7|k3!#B@X/6ujh+WDL6*a]j[h*,u' );
define( 'LOGGED_IN_KEY',    'yp};/Vl=0vPQ`,F|#YM.OVJ4tRQb<H_h)OrIg#GHX`t}1G;aGLz0Grh#K/,BD`&4' );
define( 'NONCE_KEY',        'k0EF+TzyKY#o/X!Q+r,YpTZ_;Bnu1AnjD4=Oz77XBzV2}0MdNl;^B3.T@b`lihk}' );
define( 'AUTH_SALT',        'Bsz&gby NrQJ;*`odcJ}n]k*;15vH]YV&K^g[ijt+I[i]Mm5wv8eypf#{k./O88O' );
define( 'SECURE_AUTH_SALT', ' iV`.&vy)Ko&G$NodXBC<-kbJu0>,+e#JDh~mT5# Y%(nN8dMS>1ML5-CI@}6j5]' );
define( 'LOGGED_IN_SALT',   '4(E?R[avAFC/l=^8#Uo9>V|rM&hNO+RqX3vnT]fovv.*mVTiiqyH~%~aQHVD7-+N' );
define( 'NONCE_SALT',       'txn^rPs:~tL8tqk}GfEJ2Rr;r![NyM*6<0N@VQ4/Kin+RN|*1|(2~J!?kHaqS[(,' );

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
