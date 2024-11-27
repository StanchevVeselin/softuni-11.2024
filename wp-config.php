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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'softuni' );

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
define( 'AUTH_KEY',         'f5{/P_~x|d_omoD}=26A[S91FY$O6dl8Ax.Me67}T8X*x5}B/)tm%@?0s<g;W|b0' );
define( 'SECURE_AUTH_KEY',  '|2,v13Ch}|@:V.O]AkE)=|olq ]<o5d4sB]*N=)VK`^`jcl&4=H==&/i{<5q0Sy3' );
define( 'LOGGED_IN_KEY',    'BpZKIU9Q7?ndhV=A(-5[hAh{?h[X<[08TQQUd+`m9*r;g_Ze:^azr?@vhsPW1q}z' );
define( 'NONCE_KEY',        '6`j#.O6|joD}q[=QJAG-^$6jKZ}#d*6h4GAfp[@fJLb-I-J(&|DvQJp1P7?]>^o#' );
define( 'AUTH_SALT',        'Q|> 7RqbTH hi0}/QdYGM$P40<jF4i`-ATjG=l<9AV=*$K$f_/QjNTPl#wl%KLp#' );
define( 'SECURE_AUTH_SALT', ';KR;)SLIKX%bLwb`;QZ`:uB4;xsv4G< ?T.v=WUCTjOx]6X..;O]N?d2]MbZYklt' );
define( 'LOGGED_IN_SALT',   '^Mz3?^xJwr(?8MW;(qJtbh2YbqBDFEb2+@K8bJkV-~spj w7paZYld@B9++)T3$M' );
define( 'NONCE_SALT',       'KEzjSeSq*ueQoPqY{udux@Rx2dzR^hDFk9B5ogX]_SV4ok>1qWK)}NY})mx2VR(q' );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG',       true );
define( 'SCRIPT_DEBUG',       true );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
