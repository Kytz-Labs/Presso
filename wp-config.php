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
define( 'DB_NAME', 'press_new' );

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
define( 'AUTH_KEY',         '::<QFKhVDgZARmF)9&SQ]A8pS#&qfR)`-R/[K+]CCM+*+<~md{rL$kv1o}+7T0jb' );
define( 'SECURE_AUTH_KEY',  '@}nbOoZsZrXSe=<y{Sj)Rh|z~1PP9D,.x0 %{+.Z@HWm.`_?(?&=%qMxE>&.P?XY' );
define( 'LOGGED_IN_KEY',    'N&uu28 nezJ+34)@LR}377P~x[ikp/O7dj)*Gi<K0$Nr0idNG|iS9yAVPk3Q*y)E' );
define( 'NONCE_KEY',        'uZ[`PzipIi*GX3IrypcJdGM}&7<Jw(,EqPXt?OF;/w#I2EY3q}H<p:B[/4s0nbdV' );
define( 'AUTH_SALT',        'x]Xr4COan//>X?IS9th^T*C<vB4(m9=B82y&={!}1Ppq|3;@R[j@5G_WznDdx3J{' );
define( 'SECURE_AUTH_SALT', '{V$mMFSoJnyZ*1[XxtiWQ{8X]e/~o~9#Yp<>7`REdH2/)f3cG]($8w{<Cz0EV+=p' );
define( 'LOGGED_IN_SALT',   'i3Y^/<=uT,F &!)~.}{G@X _PvXj0cLY#yhOXERel?+aom{;.P: -fdnMK,I08zh' );
define( 'NONCE_SALT',       'fY4}k@dY*Z~?l~5bSs;C{]S44GO!V9A:QC?glUe)1jUy^-[,gOV5~9]bX/2Mi6.m' );

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
