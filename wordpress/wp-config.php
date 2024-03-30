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
define( 'DB_NAME', 'wpdata' );

/** Database username */
define( 'DB_USER', 'localuser' );

/** Database password */
define( 'DB_PASSWORD', 'zi(XbL8VjCDmU@vK' );

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
define( 'AUTH_KEY',         ';Wt#x{4F(Y?[8H%?h1H1:aXyVCbAd?zc1 ,_dsZm2wnE2m($sQrp,F}>F[OtKBt;' );
define( 'SECURE_AUTH_KEY',  '|J]zu?Z/h;1sEmUn)j%kTpj)`P8*[=+Fg?Y9r^xuq0rA^w4HY6VXL7I[3{}b[@0p' );
define( 'LOGGED_IN_KEY',    ':A$@IHzHb{{z1*$z3T4)4+NXh?${iJdaF(G@6JIy MgUk1o.kT$m_6r;?T[C$[cm' );
define( 'NONCE_KEY',        'bF^/,L]]jbLqO=w!7Ivh<Dc^flm7L<9VNGO|H:?U>8FJxC*%1=-VW?nyRq6z|&<6' );
define( 'AUTH_SALT',        '4P<ON%F[)PX{,N@qg#,Vilq<I8yvpzxE$20%.8ovSpq1o=d+)uNQc]P9hRsV:kby' );
define( 'SECURE_AUTH_SALT', '_i0e=#{CL 34X(]u=.Z{M2R^DiT~vMO](-v@<4gKr#<|&O[hVIs|:)xVqT&O NJ-' );
define( 'LOGGED_IN_SALT',   '`gu>;ceJn&k{EFH,$3ZP;4QU0J%gFxg{N:}s.:88;3Xuq>N>$L=6/Vf1`HJ#Y|]?' );
define( 'NONCE_SALT',       'C:ZzHx&b4M7quwAg,*q_n)oLYYecQ_kbV[hz6d06M$]&de7_&`e<g5k~U3n;GTg%' );

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
