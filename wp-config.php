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
define( 'DB_NAME', 'boasstore' );

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
define( 'AUTH_KEY',         'jtnga(zL<T+{U [b>gD=Y@@vB@>Tf4[te&Y]Z9g&4.?Z[`xQE]f[-a!h13K-ijU(' );
define( 'SECURE_AUTH_KEY',  '6PiT0M5;,_p@mt^otRc_0DnJbBD85(AvMy{zZ]]WFK6jUcoCR2ur@8kEN7 !wGba' );
define( 'LOGGED_IN_KEY',    '<8:>eA{hp2`G;c`n8G8uAo8{.*XAH6Rl}y!b9P#YKrwVzt7pnPXNTtd@FJMc5)vu' );
define( 'NONCE_KEY',        'rp:DZkQLQmY<^xbuE-HFSdQOJoNs/K#DI8WR60$<w8kd3;8J)J+sNX?)/fBfnk,m' );
define( 'AUTH_SALT',        'EgQch3f4p[GveroFm;mqj$q[h/RUrY*%NODJ<KgOV8oG$/bj:=~pN%tA2(- va8k' );
define( 'SECURE_AUTH_SALT', 'X8]wJSTHS&@G`EP^jdN%|vp-ob^]c3h?k[>Bssp}r(sa#cAgUH8r;U>j#/K>Ne(Q' );
define( 'LOGGED_IN_SALT',   '0:nd7Rf~G>HG3}^2HowY4Tf1j29!zVhxqO *6w<@]^>+:2^%xT7Cq4yw`kX}z#]|' );
define( 'NONCE_SALT',       'R*>R#D#&xWZhdL+3|V,tHvJmA;bbMjU?Ma_K}``1,6fDuzH_wSGE#QcPny0ueh_5' );

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
