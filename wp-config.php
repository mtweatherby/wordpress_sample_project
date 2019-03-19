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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_sample_project_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'n%*6Zxa9_b:iI1fOr<zWLz T~X;^4*9^?L**xi(hK,W`HPBx;$KF:xx4O& FI2tT' );
define( 'SECURE_AUTH_KEY',  'x*HG!eB~!wp-,82sVhE:TyN@XHJT-;B`l/wr!jG!`/<bKnJW8N1Ywk/Z+|Xr;+F9' );
define( 'LOGGED_IN_KEY',    'l:3uwK1CZB!!+Fw}OQ:z1 TsQD_{kehqT[Uc!Y9^G)$;X#Dl.lr!Bh#_M.dZQ}_d' );
define( 'NONCE_KEY',        ';?t`+u)I@*U1ym=N>Q.va oahe-a8Qvfg&nUVLAwWm50P9G?e<T[iukGp73VZEc0' );
define( 'AUTH_SALT',        '<VP(L`U*hN3Cr`rkj>yJ8GCS9&n|*r[4WCDjJrYqB4LXJ`#.JxNraz=YH]PD0I}F' );
define( 'SECURE_AUTH_SALT', 'ni<!hPs).`v)Gn&IzgNFN50NOAzLx/g{xR -A?mk7 :8Z Z@U~UCapU.>h+/54>F' );
define( 'LOGGED_IN_SALT',   ',E[K-lYmi?3b3ubf%kBeYU;/bPHe}>TGQr8,1@/peH]uUMK^XIn{ dv[W+IdO6<}' );
define( 'NONCE_SALT',       'a.}v8|*/0ApvN@^cqE_MRUzBl-Z{Rgw&ImZ{P;em{wO0X$uWd_h+A/52/q7tFi[X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
