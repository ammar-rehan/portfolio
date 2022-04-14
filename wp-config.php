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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         '98?^? b)K7sSUP@gY$xg&MV60#([al0LZ^EPm4W(h/hTpJ{wdK[Sim6nHq2*1/4e' );
define( 'SECURE_AUTH_KEY',  'XT{G#VO-:ypB|WAT/60yq9w;Re;d^@b$N}HqiNHUK{N+s{:|j|T^vwnGijd2BN|8' );
define( 'LOGGED_IN_KEY',    '&k#XB98QWGhFxlBmA_O&TN6^j(pV-.P7ih&6/zm(&AG9~t(0AaA=};ON(tYO>vm$' );
define( 'NONCE_KEY',        '@JmO6mOzIshcXP>5%3YzBunFP#Xvp6j@K+<`_S;3w]/]G%x6BKOiq-p/tNlsGktC' );
define( 'AUTH_SALT',        '()n[rSXYk|cJwB1E>F$xf4)y$M)%:$D~lwa0h|`&l*[y0*k/Q.Lz502@T~MJl)$K' );
define( 'SECURE_AUTH_SALT', 'Lc;P%tk3nIdy%frXlY!%|KXaJ<cLJNA]akG-TC*5=3f_j-|T#;2y<e_g{9:k*Z>-' );
define( 'LOGGED_IN_SALT',   'jsy6OgvolE{inP)2sv7Qb/+UQK9Wtzb_xcU}(JAP8TM%?j<.-$e2W^4g}ZhR&{-8' );
define( 'NONCE_SALT',       '*@*i/-97FPcJ^&wi#iyoea?Nb5,5BFck7:/%CsVHcH-k{edPhXr~mZ%Fkh?CmC)B' );

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
