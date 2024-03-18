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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'frank' );

/** Database password */
define( 'DB_PASSWORD', 'ILoveUH' );

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
define( 'AUTH_KEY',         '{PU[S/#;y?jXk-!6nsJ;hX)p{<|?cqdP))bDD}|&[3,m&.V:u@XHMbvIUE_m7{~T' );
define( 'SECURE_AUTH_KEY',  'RwU=R_oo@IJ5)ftu U5LR(@Mhws4TarK2f*/gCB_U[/(q7!Fys<{T!ZQIW7,3^_C' );
define( 'LOGGED_IN_KEY',    'Tao0`Xz# *#Gf!FPs0(?:,%UEFMs.+}J3GmEI&wj-TN>d{r3$k5CCo)*RU;h-j=4' );
define( 'NONCE_KEY',        'ag@abybhZkk!,x@44IRv#iO.7fg,rv13I8A/<M~DBDKg,3X8(ay0}}XMH$Ty*6 Q' );
define( 'AUTH_SALT',        'z$EP,T*7NS:[4gp,CjEa>;cQgopOt&o3g8cW#:zfEJroyE@IL(,HIL*:8(nFm[iR' );
define( 'SECURE_AUTH_SALT', '>~0}ck/M]Z0s$X2N;{3YV@w,A5! [aNuriUzL3pOOAMOp_:VcGC<b:D[{c@QEiL@' );
define( 'LOGGED_IN_SALT',   '#HwQrilyXKP.F3(,RuNQ1Sp&qAue~LZrL]8Y9DqJWxR<`qfPzCg~;6p2bu5G[#=3' );
define( 'NONCE_SALT',       ':EzG2as{`1=L(.w0!<|@4wD:?=M+Ga$V-M-|@zb(abaEvG`*z%AO}yzO4Z7Mc]@s' );

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
