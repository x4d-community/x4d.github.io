<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'x4d-friends_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '46~=F(/Jy(l9nmX_pwm[E[Tj<mF]we1A3AjsI*|p8aK$p#KN]tXyU,ZFPjx~8Z-U' );
define( 'SECURE_AUTH_KEY',  ']l> $:yFj=V<?vCwn@/Y8N;qQ{p.a70-69%=f#;4HLN^AldDbUB Hy^G_~|J/2,r' );
define( 'LOGGED_IN_KEY',    'V._x^KXU~[({1?Pg+m8<C8v{vOPr Y>>+-}BbUovLNq~O;ic<4hq=Vv<a4yZ%KrS' );
define( 'NONCE_KEY',        'c+5DvYG~FD%Fr:;Ny4r^Rh.)s3^*Spa^$5bvwT~) 8E|H!-eSVC6qKG8^>Eobi.A' );
define( 'AUTH_SALT',        '7=#D>Vhf e;2}x:&,9lAa[:i H@o-l?QL~1.#K@{,K)g?j;Vxdbiw!|[Gz$47$X@' );
define( 'SECURE_AUTH_SALT', 'b^?KGggB(hvWlOY+:7@g%3sZWv7!m3@F<a`r 2P^yy5!QSW*J#1@JwLC^935[9w%' );
define( 'LOGGED_IN_SALT',   'W?Q@=ld[0JOLGqk /!;{y[<q*8(z#HCjMkqvCxCZer<Jwh<S$6?9#]6#j;rA2&rr' );
define( 'NONCE_SALT',       '6-?9.hxX=rcW_5)ADyba{kN{13VIX^y{M1ouc.ZI7WW.u.k<3wbF<`41*jzh}vN8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_x4d';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
