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
define( 'DB_NAME', 'citytechcomputers' );

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
define( 'AUTH_KEY',         '?Az<hfPs=-KxS;<I&ML9+E!C6T5n?*Ox22pGr[U}!evrG-qd#5GjeK*0&0Y5kpyk' );
define( 'SECURE_AUTH_KEY',  '9/1ToX/FRdk9@]xQ*eXG~!1INF2LTQ7J&2W+X!tH`|_g2dU5B//:!za|P$J+IkF&' );
define( 'LOGGED_IN_KEY',    'aoS<Udfwd6fWWr2d)fzJdTGhdpNzN(!{{H>~B2.ACX;/d2|POA4?>:2kVH&7fg&k' );
define( 'NONCE_KEY',        'x!Iv~{?Voao0_,#a2f}?3jKySIH? 513]:]N|Axrc*7j&}%*XpB#w0C-IW.DI`&Q' );
define( 'AUTH_SALT',        'daH-yP,Yu%({~npTD$HvCu[mo%+)!G[kvdXKxZoez|EQ[DPI]UScOxsM8f/v5AY|' );
define( 'SECURE_AUTH_SALT', 'v*Z+e]K*zj4h>&;=l>Tg?B]N9JjSPd%QEHqrO~ @OTMvNhPyak<Ky^%B ~BeF1sj' );
define( 'LOGGED_IN_SALT',   'E<2k~:0byJM#i#/VXg!]T}:<kA52bI9.B{37:Ljg=K,*d42ONY@i9fazF~T7?tR`' );
define( 'NONCE_SALT',       '25.F7#0n=N ]#Hm:3p*{PU,o/6@v eB|6%a+`Ato4,qT~|BABcp)b=`~kHQV{gP+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
