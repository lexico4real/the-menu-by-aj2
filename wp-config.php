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
define( 'DB_NAME', 'the_menu_by_aj' );

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
define( 'AUTH_KEY',         'px@=z5p2@ d@;`1ZQ&uONc6LL@uMS:pEMW_>c&HfC2m!TF/~N#i4l(7Gcz-77bl ' );
define( 'SECURE_AUTH_KEY',  '?*ten)QR5@~)=]7Bl{a5&6:d!n%o<+~*10uRTO&O6D]6`8C76W0hDTSCv2$A4vTN' );
define( 'LOGGED_IN_KEY',    'ak66]CK_QO5R]4mimZx[0:YAm+5|QYGVCdA?2J`v1}@M`= 1k^,OVvn@)yuv)q[%' );
define( 'NONCE_KEY',        'flTj)C%Of4+ku2n}%V?Hls1fB|+5!NqcVyxmX{q d=IW0{[~Y%{$.7@s!v,13_8[' );
define( 'AUTH_SALT',        'wO@;k(gyWiM{O,t^3_`:L_K/b,wu)7z-#<JXn3~>wUT<vdt&qV+FGcfI)Gk&&P1H' );
define( 'SECURE_AUTH_SALT', '`oE!M<)Rki%`Q]L]@3WWqYFoyyogfD:jtA!|Yj/Ky-S*h 9/C]a=s7j5*-!f?,;(' );
define( 'LOGGED_IN_SALT',   'jt0H)i5gTW$X.9*^|FDU?`e&%B,v|IIn$rE*P:c;//KPUa=qY|:cC<?Y.Q8yQCuT' );
define( 'NONCE_SALT',       '|/I#)RiJ[fkkb5dD@<0:1LMF?&?4_U{~N6/(;%pMZ_[`IA2SdW;DUScu{m7:<OvW' );

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
