<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.6421376981613072');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.6421376981613072');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY','beQ!#=^J/G,[oNI$nZWY-tH7B8usiwd%oRWm0s(w');
define( 'SECURE_AUTH_KEY','@hBZSgm>ghJm@$<zLra6AiM03DEipr&4(CCfat7S');
define( 'LOGGED_IN_KEY','=c&0Vd?uJ]^>_xtDBBVgUI?f]d>ie]q1Hih(!r2g');
define( 'NONCE_KEY','^Wa#c67F5O9j#])*>R[_6hqG]=8?&0JDTTxF&?6U');
define( 'AUTH_SALT','o)GPrIhWA)JA9=v$B]S<OxtUiAR^_qE6uONJxamY');
define( 'SECURE_AUTH_SALT','Z9ea0OH&@pat.f7nor3D00>fEJ=RBZRv1Z#txO33');
define( 'LOGGED_IN_SALT','Mdhaf^f(Q=!7]F63+HmaD$u,ibUR>]KEwHMO@DlJ');
define( 'NONCE_SALT','WBJ(4*[FB[6kTMy9S1lWGN1p/Y7,k)%[M/(PwZwH');

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
 function wp_new_blog_notification(...$args){} 