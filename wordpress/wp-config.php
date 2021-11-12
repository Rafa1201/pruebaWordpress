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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',):gJfMgyVe`Dg&u,kWbLC]3rzaR+4q7[W1sOu.GFs=%:4.0a)_Rj[b`wmhnV}z}' );
define( 'SECURE_AUTH_KEY',  'M]lT #6k+9>_]l+Z?BV6mGEKx`msi^?d^Gx?a{aj0HMdMc;1l@+*PihiUzs@[$Ur' );
define( 'LOGGED_IN_KEY',    '_<Y<`yq@bg)U}LYflB>jo ~nBh$%TcweGn(fYB>`Gzwgh<k|LB4c [b@DP94<dJ1' );
define( 'NONCE_KEY',        ':HbQQk<^q3e1sSuW4f-l)u2aaBnVx_J[D>3p,>KM[O4<MQ7#B_ [ZP~m.`2:_+Q0' );
define( 'AUTH_SALT',        ',~.#!KtQDhkbqjV~I5XX<~r.{g?!6B7I(uWdQa;fiv7]YssR40NyA6wH{rR]n}P;' );
define( 'SECURE_AUTH_SALT', 'w^~_w>u!GHDsUCh:Q(wfFSxPx%?nf{2);NH{H]|Z;@75B@di+MISdg:X$Gxj[)# ' );
define( 'LOGGED_IN_SALT',   '6VrEpdohvUd|hN4Ys57YICa(;W`]I!sUYM4Y6Vo|WbURYw]PK,Q(h(cepUbTm<C-' );
define( 'NONCE_SALT',       'c1OCT%3Q0qGxV,%fR4@FF]9:nMh ,$-^nJ4?q_3<FvX8FvxNIJWv~,-D/88f=|p%' );

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
