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
define( 'DB_NAME', 'wpusuario' );

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
define( 'AUTH_KEY',         'L*N7!7fDk[yup#?ou1Fl%gm&nehQM`~bVa0xG6[=x/SU^*ef:RT|eFD%S,UEo_UG' );
define( 'SECURE_AUTH_KEY',  '%7,2JKQJK,3Cz]q*z2xPod1!,@m)B&4^KjEG0Du.zb%TsG18=qy+IW~A5gnE@`R7' );
define( 'LOGGED_IN_KEY',    'CiIZmAlep:u DjkIT%aSobX${8<3`qo=KWNo ,#+kZ>;&6&$]3k4nt#m%If?UW)n' );
define( 'NONCE_KEY',        'pSoJ#!A>!srp$;=+>vZjU8KM+p|^06*q4YkW}YNtAqrcqUdR y)~42fEBeJG~Y[J' );
define( 'AUTH_SALT',        's*CJybqjIA_ee6iY(vw?3pV%HpM#o62tB)+8z&t*6I}>v:dZUR(e%*nz 6<Uw/0h' );
define( 'SECURE_AUTH_SALT', '3mLk-}s,3}/.I1vR5tG7PK|+$H1M#b0A8>RIm1{>iO.U3>x)#l(CVp]v$zAVs6>E' );
define( 'LOGGED_IN_SALT',   'IzSHu}R!5Z@qs0|IoR0Qleq;gG&5`z6`:9rKLlXgVX8s_:aTyB^No1Z}e)>4Sby6' );
define( 'NONCE_SALT',       'PUVhRbml=Kd,Cv#ZIe5E8uj Grz3B+Sm~|-+77Q~,e+%J{@/qV{kSR_*,ETVbQ?#' );

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
