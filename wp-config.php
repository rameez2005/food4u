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
define( 'DB_NAME', 'food4u' );

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
define( 'AUTH_KEY',         '<h_u}NyG.?B:#FQI56-wG+G&pcV{O&bs@[giGbxs]=kDsFv*YxQ7UmG}8%|g2kcN' );
define( 'SECURE_AUTH_KEY',  'i!gF+:/bOFLwr_d?3-E.y2Up4*bL-sewUh?WaYYjhB- 0C`H(;cmZ#|lA~z0a1TZ' );
define( 'LOGGED_IN_KEY',    ';ux_kZfsM2-L$)A=Hi9,`(ihp/7B4gP$MUpb)^r4I#~Y)LfO$ND.$~ 8N^!{a%XH' );
define( 'NONCE_KEY',        '`TQU.#[G?.`@8t#yRg43{w!Njv8saYY])hpcV8<d4iFuUQI!Ubm6QscSs(DMoX]<' );
define( 'AUTH_SALT',        '!Zq0/9O 8.C.d>U> RpAf9}0sZ}%M90&ApjS:MbQ6Xaaxe<~mrth/`]tG!}}EZez' );
define( 'SECURE_AUTH_SALT', 'H7/rv$T}NN#nWENrJN,sN$C=`e5zO,M `-#3O@+3~>`E>%%BEagSD: 5Rq]`hr|q' );
define( 'LOGGED_IN_SALT',   '{Q!M!QAKlnD4v=!6Z@?XwC`{!LMoN./)`U*x`LJ@M]QiDW=_#2L`cHE3e2$di*c;' );
define( 'NONCE_SALT',       '_y0B<6~fS*=-(M@9S3qC}!g.!_nTLp,wNNmdoy`h[8<7Ch%Zcwp[NFy*yAkS1i<V' );

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
