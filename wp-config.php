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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'VG*II%v}{oycJg_%b}1SDV%*ON_o8:0+t9r4`t>RwyG<~o,?97:,,3,[B:%Hh<D:' );
define( 'SECURE_AUTH_KEY',   '**xz[8w {6NDV;T7$N$ Kvii%,+p1p_yh7`?kFO$D>t|.!HI3)`0&Km_~>;<(jF>' );
define( 'LOGGED_IN_KEY',     '(H{L#80_F/a@PZmdC= 0 nA(>pb&K^_q1MSMTt|.Z&|b^(7OTZ8aN|e}kKN V.?f' );
define( 'NONCE_KEY',         '&|$DKZIukt<lF!yCUH_{Sso%R.lhD>n)4m6tywEoBxBb_&P1=)FmYIF/`-ZWvO^C' );
define( 'AUTH_SALT',         'LIOc0_3@47]eB>NBw;N^dPd#l*K:v|F1eUiYF~/&nf][!KcWk26W].m$flNDFBom' );
define( 'SECURE_AUTH_SALT',  'EJ_(d.G*^%MHHKt?ZS-XC`:cynrP_ee=x ha.}5&=4o8VosWwA163CAu1a_hknnQ' );
define( 'LOGGED_IN_SALT',    'aE{9 /A1@4$)|JP*/![oPLwRYtg(=hvi8xHw]0RtnCc;_Tyr3j/UxO$W$-VCP9zS' );
define( 'NONCE_SALT',        'l_a.<1E#$s0t/(HCxodv%*&`v?;U<jVJNwFoY8?F?%!$^=c|%~jA97QETgnt1`n2' );
define( 'WP_CACHE_KEY_SALT', '&}A.eC<sg0d<jZ7ex15->pCA<z&B^{-u%V~[vo4kFGhW?5^MRvMd7k8/_BH5NY!s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
