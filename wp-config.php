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
define( 'DB_NAME', 'ari_website' );

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
define( 'AUTH_KEY',         'V 3~P/@j?7xRe(:JH?Z@3JM(}PQ[/,Xz^b=5*;~!or4s~KytktJv*GQB0v%d[[f6' );
define( 'SECURE_AUTH_KEY',  '><E/MhgU4JwuOjsY}f:?ZsOw_3)4-,h?N_p3M{[=[)<z^)OQkIR8Kv{!u1l@6yJB' );
define( 'LOGGED_IN_KEY',    '}G5?HvnAg xFW8#}qoVy.?.q{FYf-&Qy)^20Q8`L1/m|l1&k;P)N*z>BN-`Gu::&' );
define( 'NONCE_KEY',        '47nnN0#MDbW+_QYYL5%RoP;{k/~6q`X*g[f)nY3.Jom3jhlgc#:<%E#S3`&bt12-' );
define( 'AUTH_SALT',        '#_N0TY>#e#<We8jz86B`KV ;@9f5},I(|d*[5DeTbm)]PUcw+OtPlk98q>{6bklY' );
define( 'SECURE_AUTH_SALT', 'H:bs2GIC8`8hg&s#hVHJOL=@lBgv!McK)a%=/@vP%Q{8Hk??i]LJD _~v#}3iQA+' );
define( 'LOGGED_IN_SALT',   '@]rK+.iEEBl#Qu[|@*N~,^Ei#vD:.=Hjl3/tCO*Au4yh~#h~(?V,*AK.iO0gg8u)' );
define( 'NONCE_SALT',       'gpA;9mE>RGJLu~5` ]?:Zv?,=(StYSw<3bzpx8*1f^3Zr~#k{L<pX^H@)H1D&r2r' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
