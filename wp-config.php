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
define( 'DB_NAME', '4thassessment' );

/** Database username */
define( 'DB_USER', 'admin4' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'L0/bq]u%_ifLof`|L1rl=_=H~@f?BJF0s*|6wQFpi(>Ea P h!USZwf8)Jo1Y.T~' );
define( 'SECURE_AUTH_KEY',  '6BUL?76xdbk9c`+0m{U$m(kK9aH31[VNIdF9XiKzCxykqd6T&UAPm)x~1(_rN9EX' );
define( 'LOGGED_IN_KEY',    'C5bG;[>VkN{6NO5sZg;?Le R9>-Mds4YA;0ZgM(54^`onKy$a5q4_@%yV.ca=vUu' );
define( 'NONCE_KEY',        'l9&e$-#kahf?CL I>~ttAV5>+]m<*vI$+L[Y3$9[^x`x6xr)C-l&jhAz]k|?z}g3' );
define( 'AUTH_SALT',        '8|f|I+gnC6^u[~W0$8vss8 FLMjsL+ll0zC0P;]BMAq(6L)Wfn9S)xO35(~IhD|z' );
define( 'SECURE_AUTH_SALT', 'm17xga=B![)IA%qt15VC.dED;wtElluUjC8^/fRA9bPc!B-</2hp,$QF67Q],>jo' );
define( 'LOGGED_IN_SALT',   'sXl zr54*n#aFT?*#rF13g.$J606vlc|6R_H<~R1d,&iMx]+@h6.6b!}$>3n/-Lc' );
define( 'NONCE_SALT',       '79Fm+sROfI7z*Kp$aCp=(22]}R_W9[iw#k}tz>?S}8.XL;f8uj=Q=?DwbPwX`Opz' );

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
